<?php 
//author: Sang 2015
require_once('constant.php');
//parent class of all classes in this project
//provide extra requests that not belong to any specific class

class Common extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('public');
		$this->load->library('session');
	}
	
	protected function setCommonVal($title){
		$data['title'] = $title;
// 		echo base_url();
		$data['base_url'] = base_url();
		return $data;
	}
	//
	protected function sendMail_wrapper($from, $from_title, $to, $cc, $bcc, $subject, $message, $attach, $reply_to = null){
// 		date_default_timezone_set('UTC');
		$this->load->library('email');
		
		$this->email->from($from, $from_title);
		$this->email->to($to);
		if (isset($cc) && $cc != '')
			$this->email->cc($cc);
		if (isset($bcc) && $bcc != '')
			$this->email->bcc($bcc);
		if (isset($reply_to))
			$this->email->reply_to($reply_to, 'Reply To');
		else
			$this->email->reply_to(INFO_MAIL, 'Admin');
		
		$this->email->subject($subject);
		
		//html format + hidden fake timestamp (make each email unique, prevent spam)
		$message = '<html><head></head><body>'.$message.'<br/><br/><div style="display:none;">'.date('Y-m-d H:i:s').rand(0,10000).'</div></body></html>';
		$this->email->message($message);
		
		if (isset($attach) && $attach != '')
			$this->email->attach($attach);
		
		$this->email->send();
// 						echo $this->email->print_debugger();
	}
	//=================
	/**
	 * convert array to JSON format
	 * @param unknown $array
	 */
	protected function responseJsonData($array){
		$this->output->set_header('Content-Type: application/json; charset=utf-8');
		return json_encode($array);
	}
	/**
	 * send Push notification wrapper
	 */
	protected function sendPushNotificationFirebase($server_key, $target, $data, $notification){
		//FCM api URL
		$url = 'https://fcm.googleapis.com/fcm/send';
		//api_key available in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
		$fields = array(	//package to send from Firebase
				'priority'=> 'high',
				'delay_while_idle'=> true
		);
		if (isset($data)){
			$fields['data'] = $data;
		}
		if (isset($notification)){		//iOS case
			$fields['notification'] = $notification;
		}
		//send to which device(s)
		if(is_array($target)){
			$fields['registration_ids'] = $target;
		}else{		//single device
			$fields['to'] = $target;
		}
		//header with content_type api key
		$headers = array(
				'Content-Type:application/json',
				'Authorization:key='.$server_key
		);
			
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		$result = curl_exec($ch);
		if ($result === FALSE) {
			die('FCM Send Error: ' . curl_error($ch));
		}
		curl_close($ch);
		return $result;
	}
}
?>