<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MusicModel extends CI_Model{
    
    public function getData(){
        $this->db->select('name, genre, monthYear');
        $this->db->from('musician');
        $this->db->join('performance', 'musianid=musicianid');

        $query = $this->db->get();
        
        return $query->result();
    }
    
}
?>