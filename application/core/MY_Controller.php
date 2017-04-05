<?php
Class MY_Controller extends CI_Controller
{
    public $data = array();
    function __construct()
    {
        parent::__construct();
        $controller = $this->uri->segment(1); //Lấy controller từ uri dòng số 1
        switch ($controller)
        {
            case 'admin':{
                $this->load->model('user_model');
                $id_user = $this->session->userdata('id');
                $admin = $this->user_model->get_info($id_user);
                $this->load->helper('admin');
                $this->load->helper('constant');
                $this->check_login();
            }
        }
    }

    private function check_login()
    {
        $controller = $this->uri->segment('2');
        $controller = strtolower($controller);
        $login = $this->session->userdata('login');
        if(!$login && $controller != 'login')
        {
            redirect(admin_url('login'));
        }
        if($login && $controller == 'login')
        {
            redirect(admin_url('domain'));
        }
    }
}
