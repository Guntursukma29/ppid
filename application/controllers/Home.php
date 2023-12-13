<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct() {

        parent::__construct();
        $this->load->model('artikel_model');
    }
   

    public function index()
    {
        $data['artikel'] = $this->artikel_model->get_data('tbl_artikel');
        $data ['title'] = 'Home';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/home', $data);
        $this->load->view('frontend/footer');
    }
    public function detail($id){
        $data['artikel'] = $this->artikel_model->getArtikelById($id);
        $data ['title'] = 'Home';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/detail_artikel', $data);
        $this->load->view('frontend/footer');
    }
}