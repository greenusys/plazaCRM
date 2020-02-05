<?php
    class Test extends CI_Controller{
        public function index(){
            $this->load->view('layout/header');
            $this->load->view('pages/userDetails');
            $this->load->view("layout/footer");
        }
    }

?>