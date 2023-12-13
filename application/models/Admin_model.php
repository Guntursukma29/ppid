<?php 
defined('BASEPATH') OR exit('No direct script access aalowed');

class Admin_model extends CI_Model{

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
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
    }

    public function delete ($data, $table)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete($table);
    }
    // public function selectArtikel($id){
    //     $this->db->where('id', $id);
    //     $data = $this->db->get('tbl_artikel');
    //     $dataarray = $data->result_array();
    //     return $dataarray;
    // }
    public function selectArtikel($id){
        $query = $this->db->get_where('tbl_artikel', array('id' => $id));
        return $query->row_array();
    }
}

?>