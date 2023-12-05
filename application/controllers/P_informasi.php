<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_informasi extends CI_Controller 
{

    public function __construct() {

        parent::__construct();
        $this->load->model('informasi_model');
    }
    public function index() 
    {
        $data['informasi'] = $this->informasi_model->get_data('tbl_informasi')->result();
        
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Permohonan Informasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('p_informasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Permohonan Informasi';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('p_informasi/tambah');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {   

        
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah();
        }else{
            $Deskripsi = $this->input->post('Deskripsi', true);
            $Gambar = $_FILES['Gambar']['name'];

// print_r($Gambar);
// exit();
            if (!empty($Gambar)){
                $config['upload_path']  = './gambar';
                $config['allowed_types'] = 'jpg|png|gif';
                $config [ 'ukuran_maks' ] = '100' ;
                $config [ 'max_width' ] = '1024' ;
                $config [ 'max_height' ] = '768' ;
                $config ['file_name'] = $Gambar;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if(!$this->upload->do_upload('Gambar')){
                    $Gambar = $this->upload->data('file_name');

                    $data['success_msg'] = 'File has been uploaded successfully.';
                }
                else{
                    $data['error_msg'] = $this->upload->display_errors();
                }
            }

            
            
            $data = array (
                'Deskripsi' => $Deskripsi,
                'Gambar' => $Gambar,    
            );
   
            $this->informasi_model->insert_data($data, 'tbl_informasi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data telah ditambahkan!
            </div>');
            redirect('p_informasi');
        }

                
    }
    public function edit($no)
    {
        
        // $this->_rules();
        if(!($_POST)){
        // if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
        //     $row = $this->admin_model->getdata_by_id('tbl_artikel', $id)->row();
            $Deskripsi = $this->input->post('Deskripsi', true);
            $Gambar = $_FILES['gambar']['name'];

            

            if (!empty($Gambar)){
                $config['upload_path']  = './gambar/';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = 3056;
                $config [ 'max_width' ] = 1024 ;
                $config [ 'max_height' ] = 768 ;
                $config [ 'overwrite' ] = false ;
                $config ['file_name'] = $Gambar;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                unlink('./gambar/'. $this->input->post('gambar_lama'));
                
                if(!$this->upload->do_upload('gambar')){
                    $gbr = $this->upload->data('file_name');
                    
                    
                    $data['success_msg'] = 'File has been uploaded successfully.';
                }
                else{
                    // 
                    $data['error_msg'] = $this->upload->display_errors();
                }
                $gbr = $this->upload->data('file_name');
                
            }else{
                $gbr = $this->input->post('gambar_lama');
            }

            
            
            $data = array (
                'no'=> $no,
                'Deskripsi' => $Deskripsi,
                'gambar' => $gbr,    
            );  
            
            $this->informasi_model->update_data($data,'tbl_informasi');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diUbah</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('p_informasi');
        }
    // }
        
    }
    

    
       
    public function _rules()
    {
        $this->form_validation->set_rules('Gambar', 'Gambar', 'callback_validate_image'
        );
        $this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s harus diisi' 
        ));
    }

    public function delete($id){
        $where = array('no' => $id);
        $this->informasi_model->delete($where, 'tbl_informasi');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('p_informasi');
    }
    public function validate_image()
    {
        $check = TRUE;
        if ((!isset($_FILES['Gambar'])) || $_FILES['Gambar']['size'] == 0) {
            $this->form_validation->set_message('validate_image', 'The {field} field is required');
            $check = FALSE;
        } else if (isset($_FILES['Gambar']) && $_FILES['Gambar']['size'] != 0) {
            $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
            $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
            $extension = pathinfo($_FILES["Gambar"]["name"], PATHINFO_EXTENSION);
            $detectedType = exif_imagetype($_FILES['Gambar']['tmp_name']);
            $type = $_FILES['Gambar']['type'];
            if (!in_array($detectedType, $allowedTypes)) {
                $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
                $check = FALSE;
            }
            if (filesize($_FILES['Gambar']['tmp_name']) > 2097152) {
                $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 2MB!');
                $check = FALSE;
            }
            if (!in_array($extension, $allowedExts)) {
                $this->form_validation->set_message('validate_image', "Invalid file extension {$extension}");
                $check = FALSE;
            }
        }
        return $check;
    }
}