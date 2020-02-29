<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    public $my_id;
    public $timeZone;

	function __construct(){
		parent::__construct();
		$this->load->model('global_model');
        // $auto_loaded_vars = array(
        //     'unread_notifications' => count($this->db->where(array('to_user_id' => $this->session->userdata('user_id'), 'read' => 0))->get('tbl_notifications')->result()),
        //     'd_currency' => $this->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row()->symbol,
        // );
        if(!$this->session->userdata('logged_user')){
        	$this->session->set_flashdata('msg','Invalid Username Or Password');
			redirect('Login');
        }
        $this->getTimeZone();   
        date_default_timezone_set($this->timeZone);
		$session=$this->session->userdata('logged_user');
		$my_Id=$session[0]->user_id;
        $auto_loaded_vars = array(
            'unread_notifications' => count($this->db->where(array('to_user_id' => $my_Id, 'read' => 0))->get('tbl_notifications')->result())
        );
        $this->load->vars($auto_loaded_vars);
        $session=$this->session->userdata('logged_user');
        $this->my_id=$session[0]->user_id;
	}
	public function checkFunction(){
		echo 'working Fine';
	}
    public function getTimeZone(){
        $res=$this->db->get('installer')->result_array();
        $this->timeZone=$res[0]['timezone'];
        // print_r($res);
    }

}


?>