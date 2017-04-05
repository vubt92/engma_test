<?php
Class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post())
        {
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('login', 'Đăng nhập','callback_check_login');
            if ($this->form_validation->run()) {
                $this->session->set_userdata('login', true);
                redirect(admin_url('home'));
            }
        }
        $this->data['title']= 'Login | Engma';
        $this->load->view('admin/login/index', $this->data);
    }

    function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);

        $this->load->model('User_model');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        if ($this->User_model->check_exists($where))
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Tên đăng nhập hoặc mật khẩu không đúng');
        return false;
    }
}
?>
