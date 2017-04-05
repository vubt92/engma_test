<?php
Class Upload extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $data['error'] = '';
        $this->load->view('admin/test', array('error' => ' ' ));
    }

    function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 900;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if($this->upload->do_upload("img")){
            echo 'Upload Ok';
            $check = $this->upload->data();
            echo "<pre>";
            print_r($check);
            echo "</pre>";
        }else{
            $data['errors'] = $this->upload->display_errors();
            $this->load->view("admin/form_upload", $data);
        }
    }
}
?>