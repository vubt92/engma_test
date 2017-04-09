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

    function add()
    {
        $this->load->library('form_validation');
        $this->load->model('category_model');
        $ctg = $this->category_model->get_list();
        $data = array();
        $data['temp'] = 'admin/news';
        $data['ctg'] = $ctg;

        if($this->input->post())
        {
            $this->form_validation->set_rules('title',"Tiêu đề bài viết",'required');
            $this->form_validation->set_rules('content',"Nội dung bài viết",'required');
            //$this->form_validation->set_rules('img',"Ảnh tiêu đề",'required');

            if($this->form_validation->run())
            {
                $title = $this->input->post('title');
                $content = $this->input->post('content');

                $news_data = array(
                    'title'=>$title,'content'=>$content
                );
                $this->news_model->insert($news_data);
            }
        }
        $this->load->view('admin/news/add',$data);
    }
}
?>