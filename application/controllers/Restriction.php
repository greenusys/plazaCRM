<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restriction extends MY_Controller { 

	function __construct(){
		parent::__construct();
		$this->load->model('Global_Model');
        $this->load->model('User_model');
	}
   public function ip_rest(){
        $this->load->view('layout/header');
        $this->load->view('pages/ip_restriction');
        $this->load->view('layout/footer');
   }
	

}
?>