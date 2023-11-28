<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    public function __construct() {

        parent::__construct();
        $this->load->model('admin_model');
    }
    public function index() 
    {
        $data['artikel'] = $this->admin_model->get_data('tbl_artikel')->result();
        
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Informasi Terbaru';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Informasi Terbaru';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah_artikel');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {   

        
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah();
        }else{
            $Judul = $this->input->post('Judul', true);
            $Waktu = $this->input->post('Waktu', true);
            $Pengarang = $this->input->post('Pengarang', true);
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
                'Judul' => $Judul,
                'Waktu' => $Waktu,
                'Pengarang' => $Pengarang,
                'Deskripsi' => $Deskripsi,
                'Gambar' => $Gambar,    
            );
   
            $this->admin_model->insert_data($data, 'tbl_artikel');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data telah ditambahkan!
            </div>');
            redirect('admin');
        }

        
        // $this->_rules();

        // if($this->form_validation->run() == FALSE){
        //     $this->tambah();
        // }else
        // {
        //     $data = [
        //         'Judul' => $this->input->post('Judul'),
        //         'Waktu' => $this->input->post('Waktu'),
        //         'Pengarang' => $this->input->post('Pengarang'),
        //         'Deskripsi' => $this->input->post('Deskripsi'),
        //         'Gambar' => $_FILES['Gambar']['name']

                
        //     ];
            

        //     $this->admin_model->insert_data($data, 'tbl_artikel');
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <strong>Holy guacamole!</strong> Data berhasil ditambahkan
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //       <span aria-hidden="true">&times;</span>
        //     </button>
        //     </div>');

        //     redirect('admin');
        

                // $config['upload_path']          = './gambar/';
                // $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 10000;
                // $config['max_width']            = 10000;
                // $config['max_height']           = 10000;

                // $this->load->library('upload', $config);

                // if ( ! $this->upload->do_upload('userfile'))
                // {
                //     echo "gagal tambah";
                // }
                // else
                // {
                //     $Gambar = $this->upload->data();
                //     $Gambar = $Gambar['file_name'];
                //     $Judul = $this->input->post('Judul', TRUE);
                //     $Waktu = $this->input->post('Waktu', TRUE);
                //     $Pengarang = $this->input->post('Pengarang', TRUE);
                //     $Deskripsi = $this->input->post('Deskripsi', TRUE);

                //     $data = array (
                //         'Judul' => $Judul,
                //         'Waktu' => $Waktu,
                //         'Pengarang' => $Pengarang,
                //         'Deskripsi' => $Deskripsi,
                //         'Gambar' => $Gambar,
                //     );
                //     $this->db->insert('tbl_artikel', $data);
                //     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                //     <strong>Holy guacamole!</strong> Data berhasil ditambahkan
                //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //     <span aria-hidden="true">&times;</span>
                //     </button>
                //     </div>');
                //     redirect('admin');
                // }
                
                }
    public function edit($id)
    {
        
        // $this->_rules();
        if(!($_POST)){
        // if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
        //     $row = $this->admin_model->getdata_by_id('tbl_artikel', $id)->row();
        

            $Judul = $this->input->post('Judul', true);
            $Waktu = $this->input->post('Waktu', true);
            $Pengarang = $this->input->post('Pengarang', true);
            $Deskripsi = $this->input->post('Deskripsi', true);
            $Gambar = $_FILES['Gambar']['name'];

            

            if (!empty($Gambar)){
                $config['upload_path']  = './gambar';
                $config['allowed_types'] = 'jpg|png|gif';
                // $config [ 'ukuran_maks' ] = '100' ;
                $config [ 'max_width' ] = '1024' ;
                $config [ 'max_height' ] = '768' ;
                $config [ 'overwrite' ] = false ;
                $config ['file_name'] = $Gambar;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                unlink('./gambar/'. $this->input->post('gambar_lama'));
                
                if(!$this->upload->do_upload('Gambar')){
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
                'id'=> $id,
                'Judul' => $Judul,
                'Waktu' => $Waktu,
                'Pengarang' => $Pengarang,
                'Deskripsi' => $Deskripsi,
                'Gambar' => $gbr,    
            );  
            
            $this->admin_model->update_data($data,'tbl_artikel');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diUbah</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin');
        }
    // }
        
    }
    

    
       
    public function _rules()
    {
        $this->form_validation->set_rules('Judul', 'Judul', 'required', array(
           'required' => '%s harus diisi' 
        ));
        $this->form_validation->set_rules('Waktu', 'Waktu', 'required', array(
            'required' => '%s harus diisi' 
        ));
        $this->form_validation->set_rules('Pengarang', 'Pengarang', 'required', array(
            'required' => '%s harus diisi' 
        ));
        $this->form_validation->set_rules('Gambar', 'Gambar', 'callback_validate_image'
        );
        $this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s harus diisi' 
        ));
    }

    public function delete($id){
        $where = array('id' => $id);
        $this->admin_model->delete($where, 'tbl_artikel');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('admin');
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