<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulasi extends CI_Controller 
{
    
   

    public function index()
    {
        $data ['title'] = 'Regulasi';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/regulasi', );
        $this->load->view('frontend/footer');
    }
}