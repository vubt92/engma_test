<?php
require_once('common.php');

class Services extends Common {
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
		$this->common_val = $this->setCommonVal("Services");
		// 		$this->output->enable_profiler(TRUE);	//for debug

	}
	
	public function showProject1(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('services', $current_lang);
		$data[LANG_KEY] = $current_lang;
		
		$this->load->view('templates/cube-portfolio/project1', $data);
	}
	public function showProject2(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('services', $current_lang);
		$data[LANG_KEY] = $current_lang;
	
		$this->load->view('templates/cube-portfolio/project2', $data);
	}
	public function showProject3(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('services', $current_lang);
		$data[LANG_KEY] = $current_lang;
	
		$this->load->view('templates/cube-portfolio/project3', $data);
	}
	public function showProject4(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('services', $current_lang);
		$data[LANG_KEY] = $current_lang;
	
		$this->load->view('templates/cube-portfolio/project4', $data);
	}
	public function showProject5(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('services', $current_lang);
		$data[LANG_KEY] = $current_lang;
	
		$this->load->view('templates/cube-portfolio/project5', $data);
	}
	public function showProject6(){
		$data['common_val'] = $this->common_val;
		$current_lang = $this->session->userdata(LANG_KEY);
		$this->lang->load('services', $current_lang);
		$data[LANG_KEY] = $current_lang;
	
		$this->load->view('templates/cube-portfolio/project6', $data);
	}
	
}