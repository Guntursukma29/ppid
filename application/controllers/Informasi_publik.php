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

    public function berkala (){
        $data ['title'] = 'Informasi Berkala';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/informasi_publik/berkala', );
        $this->load->view('frontend/footer');
    }
    public function sertamerta (){
        $data ['title'] = 'Informasi Serta Merta';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/informasi_publik/sertamerta', );
        $this->load->view('frontend/footer');
    }
    public function setiap_saat (){
        $data ['title'] = 'Informasi Setiap Saat';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/informasi_publik/setiap_saat', );
        $this->load->view('frontend/footer');
    }
    public function dikecualikan (){
        $data ['title'] = 'Informasi Yang Dikecualikan';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/informasi_publik/dikecualikan', );
        $this->load->view('frontend/footer');
    }
}