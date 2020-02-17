<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	function __construct(){
		parent::__construct();
		$this->load->model('global_model');
        // $auto_loaded_vars = array(
        //     'unread_notifications' => count($this->db->where(array('to_user_id' => $this->session->userdata('user_id'), 'read' => 0))->get('tbl_notifications')->result()),
        //     'd_currency' => $this->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row()->symbol,
        // );
		$session=$this->session->userdata('logged_user');
		$my_Id=$session[0]->user_id;
        $auto_loaded_vars = array(
            'unread_notifications' => count($this->db->where(array('to_user_id' => $my_Id, 'read' => 0))->get('tbl_notifications')->result())
        );
        $this->load->vars($auto_loaded_vars);
	}
	public function checkFunction(){
		echo 'working Fine';
	}
}


?>