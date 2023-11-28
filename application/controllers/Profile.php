<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
    public function __construct() {

        parent::__construct();
        $this->load->model('visimisi_model');
    }
   

    public function index()
    {
        $data ['title'] = 'Profile LLDIKTI V';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/profile/index', );
        $this->load->view('frontend/footer');
    }
    public function p_ppid()
    {
        $data ['title'] = 'Profile PPID LLDIKTI V';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/profile/p_ppid', );
        $this->load->view('frontend/footer');
    }
    public function fungsi_ppid()
    {
        $data ['title'] = 'Fungsi PPID';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/profile/fungsi_ppid', );
        $this->load->view('frontend/footer');
    }
    public function struktur()
    {
        $data ['title'] = 'Struktur PPID';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/profile/struktur_organisasi' );
        $this->load->view('frontend/footer');
    }
    public function p_visimisi()
    {
        $data['visimisi'] = $this->visimisi_model->get_data('tbl_visimisi')->result();
        $data ['title'] = 'Visi Misi PPID LLDIKTI V';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/profile/p_visimisi', $data );
        $this->load->view('frontend/footer');
    }
}