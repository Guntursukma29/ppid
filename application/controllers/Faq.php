<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller 
{
    
   

    public function index()
    {
        $data ['title'] = 'Faq';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/faq', );
        $this->load->view('frontend/footer');
    }
}