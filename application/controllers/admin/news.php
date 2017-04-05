<?php

Class News extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
    }

    function index()
    {
        $input = array();
        $data['list'] = $this->news_model->get_list($input);
        $data['temp'] = 'admin/news' ;
        $this->load->view('admin/news/index',$data);
    }
}
?>