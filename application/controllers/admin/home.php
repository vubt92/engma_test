<?php

Class Home extends MY_Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->data['temp'] = 'admin/body';
        $this->load->view('admin/main', $this->data);
    }
}
