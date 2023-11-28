<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_layanan extends CI_Controller 
{
    public function index ()
    {
        $data ['title'] = 'Permohonan informasi';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/standarlayanan/p_informasi',$data );
        $this->load->view('frontend/footer');
    }
    public function keberatan ()
    {
        $data ['title'] = 'Permohonan Keberatan';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/standarlayanan/p_keberatan', $data );
        $this->load->view('frontend/footer');
    }
    public function sengketa ()
    {
        $data ['title'] = 'Permohonan Sengketa';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/standarlayanan/p_sengketa', $data );
        $this->load->view('frontend/footer');
    }
    
}