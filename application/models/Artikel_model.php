<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

    public function get_data($table)
    {
        
        return $this->db->get($table)->result();
    }

    public function getArtikelById($id) {
        
        $query = $this->db->get_where('tbl_artikel', array('id' => $id));
        return $query->row_array();
    }
}
?>
