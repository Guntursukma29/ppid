<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('visimisi_model');
    }
    
    public function index()
    {
        $data['visimisi'] = $this->visimisi_model->get_data('tbl_visimisi')->result();
        
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Visi Misi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('visimisi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah (){
        $data['title'] = 'Visi Misi';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('visimisi/tambah_visimisi');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE){
            $this->tambah();
        }else{
        $visi = $this->input->post('visi', true);
        $misi = $this->input->post('misi', true);

        $data = array(
            'visi'=> $visi,
            'misi'=> $misi,
        );
        $this->visimisi_model->insert_data($data, 'tbl_visimisi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data telah Ditambahkan
            </div>');
            redirect('visimisi');


        }
    }

    public function edit ($id){
        $this->_rules();

        if ($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $data = array(
                'no' => $id,
                'visi'=> $this->input->post('visi'),
                'misi'=> $this->input->post('misi'),
                
            );
            $this->visimisi_model->edit_data($data, 'tbl_visimisi') ;
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                 Data berhasil diubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('visimisi');
        }
       
    }

    public function delete ($id){
        $where = array('no' => $id);
        $this->visimisi_model->delete($where, 'tbl_visimisi');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
         Data berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('visimisi');

    }

    public function _rules()
    {
        $this->form_validation->set_rules('visi', 'visi', 'required', array(
           'required' => '%s harus diisi' 
        ));
        $this->form_validation->set_rules('misi', 'misi', 'required', array(
            'required' => '%s harus diisi' 
       ));
    }
}