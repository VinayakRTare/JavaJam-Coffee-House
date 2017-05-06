<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MenuController extends CI_Controller{
        

        public function index(){
            $this->load->helper('url');
            
            //$this->load->model('MusicModel');
            
            //$data['result'] = $this->MusicModel->getData();
            $this->load->view('Menu');
        }
}
?>