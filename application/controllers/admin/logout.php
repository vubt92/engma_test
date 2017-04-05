<?php
Class Logout extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->session->sess_destroy();
        redirect(admin_url('home'));
    }
}