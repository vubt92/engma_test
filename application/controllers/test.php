<?php
require_once('common.php');

class Test extends Common {
	private $common_val;

	public function __construct(){
		parent::__construct();
		
		$this->common_val = $this->setCommonVal("Services");
// 				$this->output->enable_profiler(TRUE);	//for debug

	}
	//insert new record to table
	public function count_up(){
		$data['common_val'] = $this->common_val;
		$this->load->library('user_agent');
		$this->load->model('test_model');
		
		$result = $this->test_model->count_up($this->input->ip_address(), $this->agent->agent_string());
		
		echo $result;
	}
	
	//
	public function show_all_count_up(){
		$data['common_val'] = $this->common_val;
		$this->load->model('test_model');
		
		$result = $this->test_model->show_all_count_up();
		
		$table = '<table border="1">';
		
		foreach($result as $v){
			$tr = '<tr><td>'.$v['id'].'</td><td>'.$v['created_date'].'</td><td>'.$v['ip'].'</td><td>'.$v['user_agent'].'</td></tr>';
			$table .= $tr;
		}
		
		$table .= '</table>';
		echo $table;
	}
	
	//
	public function erase(){
		$data['common_val'] = $this->common_val;
		$this->load->model('test_model');
		$result = $this->test_model->erase();
	}
	//	
	public function testRequestFromiOS(){
		$json = file_get_contents('php://input');
		$obj = json_decode($json);
	
		$username = trim($this->input->post('username'));
	
		echo ($this->responseJsonData($username));
	}
	//
	public function testRequestFromiOS2(){
		$json = stripslashes(file_get_contents('php://input'));
		try{
			$obj = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true );
		}catch(Exception $e){
			$obj = $e->getMessage();
		}
		echo ($this->responseJsonData(array('username'=>$obj['username'])));
	}
	
	//show page to send push
	public function testPush(){
		$data['common_val'] = $this->common_val;
	
		$this->load->view('templates/testPush', $data);
	}
	//call push function
	public function sendPush(){
		$server_key = trim($this->input->post('server_key'));
		$target = trim($this->input->post('token'));
		$content = trim($this->input->post('content'));
		$phone_type = trim($this->input->post('phone_type'));
		$badge = trim($this->input->post('badge'));
		$sound = trim($this->input->post('sound'));
		$category = trim($this->input->post('category'));
	
		$data = $notification = null;
		//collect data package to send
		if ($phone_type == 'android'){
			$data = array(
					'click_action'=> $category,
					'body'=> $content,
					'badge'=> $badge,
					'sound'=> $sound
					//add extra data here
			);
		} else if ($phone_type == 'ios'){
			//add extra $data here
			$notification = array(
					'click_action'=> $category,
					'body'=> $content,
					'badge'=> $badge,
					'sound'=> $sound
			);
		}
	
		$result = $this->sendPushNotificationFirebase($server_key, $target, $data, $notification);
		echo ($this->responseJsonData($result));
	}
}