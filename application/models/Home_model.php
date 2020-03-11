<?php

class Home_model extends CI_Model{


    public function getAll(){
        $query = $this->db->get('genres');
        return $query->result_array();
    }

    function save($data){
        $this->db->insert('genres',$data);
        return $this->db->insert_id();
    }
}