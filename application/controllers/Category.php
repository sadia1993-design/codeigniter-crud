<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('category');
        $this->load->view('footer');
    }
}