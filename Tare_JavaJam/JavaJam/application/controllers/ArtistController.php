<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class ArtistController extends CI_Controller{
        

        public function index(){
            $this->load->helper('url');
            $artistName = $this->input->get('artistName');
            echo $artistName;
            //$this->load->model('MusicModel');
            
            //$data['result'] = $this->MusicModel->getData();
            $this->load->view('artistdetails');
        }
}

?>
