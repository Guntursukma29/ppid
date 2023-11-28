<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_publik extends CI_Controller 
{
    
   

    public function index()
    {
        $data ['title'] = 'Informasi Publik';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/informasi_publik', );
        $this->load->view('frontend/footer');
    }
}