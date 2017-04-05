<?php
require_once('common.php');

class Home extends Common {
	private $common_val;

	public function __construct(){
		parent::__construct();
		
		//process languages
		$support_langs = array(LANG_VN, LANG_EN);	//languages supported in our website
		$para_lang = trim($this->input->get(LANG_KEY));		//get from URL
		
		if (!empty($para_lang) && in_array($para_lang, $support_langs)){
			$current_lang = $para_lang;
		} else {	//get from session, if any
			$current_lang = $this->session->userdata(LANG_KEY);
			if(empty($current_lang) || !in_array($current_lang, $support_langs)){
				$current_lang = LANG_EN;		//default language
			}
		}
			
		$this->session->set_userdata(LANG_KEY, $current_lang);
		$this->lang->load('common', $current_lang);
		//end process languages
		
		//setup common values with title
		$this->common_val = $this->setCommonVal("ENGMA Engineering Services Trading Company Limited");
		// 		$this->output->enable_profiler(TRUE);	//for debug

	}
	
	public function showHome(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('home', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$data['extra_css_file'] = 'home_css';
		$data['first_extra_js_file'] = 'home_js_1';
		$data['second_extra_js_file'] = 'home_js_2';
		$data['mn_home_active'] = STR_ACTIVE;
		
		$this->load->view(PG_HEADER, $data);
		$this->load->view('templates/home', $data);
		$this->load->view(PG_FOOTER, $data);
	}
	
	public function showAboutUs(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('aboutus', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$data['extra_css_file'] = 'about_css';
		$data['first_extra_js_file'] = 'about_js_1';
		$data['second_extra_js_file'] = 'about_js_2';
		$data['mn_about_us_active'] = STR_ACTIVE;
	
		$this->load->view(PG_HEADER, $data);
		$this->load->view('templates/about_us', $data);
		$this->load->view(PG_FOOTER, $data);
	}
	
	public function showServices(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('services', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$data['extra_css_file'] = 'service_css';
		$data['first_extra_js_file'] = 'service_js_1';
		//$data['second_extra_js_file'] = 'service_js_2';	//must put out of <head> because of cube-portfolio lib
		$data['mn_services_active'] = STR_ACTIVE;
	
		$this->load->view(PG_HEADER, $data);
		$this->load->view('templates/services', $data);
		$this->load->view(PG_FOOTER, $data);
	}
	
	public function showClients(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('clients', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$data['extra_css_file'] = 'client_css';
		$data['second_extra_js_file'] = 'client_js_2';
		$data['mn_clients_active'] = STR_ACTIVE;
	
		$this->load->view(PG_HEADER, $data);
		$this->load->view('templates/clients', $data);
		$this->load->view(PG_FOOTER, $data);
	}
	
	public function showNews(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('news', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$data['extra_css_file'] = 'new_css';
		$data['first_extra_js_file'] = 'new_js_1';
		$data['second_extra_js_file'] = 'new_js_2';
		$data['mn_news_active'] = STR_ACTIVE;
	
		$this->load->view(PG_HEADER, $data);
		$this->load->view('templates/news', $data);
		$this->load->view(PG_FOOTER, $data);
	}
	
	public function showRecruitment(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('recruitment', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$data['extra_css_file'] = 'recruit_css';
		$data['second_extra_js_file'] = 'recruit_js_2';
		$data['mn_recruit_active'] = STR_ACTIVE;
	
		$this->load->view(PG_HEADER, $data);
		$this->load->view('templates/recruitment', $data);
		$this->load->view(PG_FOOTER, $data);
	}
	
	public function showContact(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('contact', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$data['extra_css_file'] = 'contact_css';
		$data['first_extra_js_file'] = 'contact_js_1';
		$data['second_extra_js_file'] = 'contact_js_2';
		$data['mn_contact_active'] = STR_ACTIVE;
	
		$this->load->view(PG_HEADER, $data);
		$this->load->view('templates/contact', $data);
		$this->load->view(PG_FOOTER, $data);
	}
	
	public function sendContactEmail(){
		$name = trim($this->input->post('name'));
		$email = trim($this->input->post('email'));
		$message = trim($this->input->post('message'));
		
		if (isset($name) && isset($email) && isset($message)){
			sendMail_wrapper($email, TITLE_USER_MAIL, INFO_MAIL,
					STR_EMPTY, STR_EMPTY, SUBJECT_USER_MAIL,
					$message, STR_EMPTY, STR_EMPTY);
			echo ($this->responseJsonData(SUCCESS));
		}
		
	}
	
}