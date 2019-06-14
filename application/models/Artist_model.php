<?php

class Artist_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getArtistInfoByID($id){

        $this->db->where('id',$id);
        $result = $this->db->get('artists');
        if($result->num_rows() > 0){
            return $result->row();
        }
        return false;
    }
}