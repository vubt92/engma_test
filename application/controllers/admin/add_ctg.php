<?php

Class Add_ctg extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

    function index()
    {
        $this->load->library('form_validation','database');
        $this->load->helper('form');
        $data = array();
        $data['temp'] = 'admin/add_ctg';

        if($this->input->post())
        {
            $this->form_validation->set_rules('title', 'Tên danh mục', 'required');

            if($this->form_validation->run())
            {
                $name_ctg = $this->input->post('title');
                $input = array('namect' => $name_ctg);
                $this->category_model->insert($input);
                $this->session->set_flashdata('mess', 'Thêm danh mục thành công');
                redirect(admin_url('add_ctg'));
            }
        }
        $this->load->view('admin/news/add_ctg' , $data);
    }
}
?>
