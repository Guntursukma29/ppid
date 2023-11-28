<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model{
    public function get_data($table)
    {
        
        return $this->db->get($table);
    }
    public function getdata_by_id($table,$id){
        return $this->db->get($table,$id);  
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);  
    }
    public function update_data($data, $table){
        $this->db->where('no', $data['no']);
        $this->db->update($table, $data);
    }

    public function delete ($data, $table)
    {
        $this->db->where('no', $data['no']);
        $this->db->delete($table);
    }
}