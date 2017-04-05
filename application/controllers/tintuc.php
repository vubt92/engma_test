<?php
require_once('common.php');

class TinTuc extends Common {
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

    public function index(){
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


    public function newsDetail($id){
        $data['common_val'] = $this->common_val;
        $current_lang = $this->session->userdata(LANG_KEY);
        $this->lang->load('news', $current_lang);
        $data[LANG_KEY] = $current_lang;

        $data['extra_css_file'] = 'new_css';
        $data['first_extra_js_file'] = 'new_js_1';
        $data['second_extra_js_file'] = 'new_js_2';
        $data['mn_news_active'] = STR_ACTIVE;
        $data['news_id'] = $id;

        $this->load->view(PG_HEADER, $data);
        $this->load->view('templates/tintuc/newsDetail', $data);
        $this->load->view(PG_FOOTER, $data);
    }


}