<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct() {

        parent::__construct();
        $this->load->model('admin_model');
    }
   

    public function index()
    {
        $data['artikel'] = $this->admin_model->get_data('tbl_artikel')->result();
        $data ['title'] = 'Home';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/home', $data);
        $this->load->view('frontend/footer');
    }
}