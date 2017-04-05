<?php

Class Ctg extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

    function index()
    {
        $this->load->view('admin/news/ctg');
    }
}
?>
