<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MusicController extends CI_Controller{
        

        public function index(){
            $this->load->helper('url');
            
            $this->load->model('MusicModel');
            
            $data['result'] = $this->MusicModel->getData();
            $this->load->view('Music',$data);
        }
            public function loadArtist($artistName){
              $data['artist'] = $artistName;
//            $data['method'] = "artist.getinfo";
//            $data['api_key'] = "9e21930a3c4140ba142c8885de8bdb98";
//            $data['format'] = "json";
//            $this->load->library('proxy',$data);
//            
            $this->load->view('artistdetails',$data);
        }
}


?>