<?php
    class Test extends MY_Controller{
		public function __construct(){
		parent::__construct();
		$this->load->model('Tasks_Model');
		$this->load->model('Notification_model');
		$this->load->model('User_model');
		}

        public function index(){
            $this->load->view('layout/header');
            $this->load->view('pages/userDetails');
            $this->load->view("layout/footer");
        }

        public function update_notification(){
			$session=$this->session->userdata('logged_user');
			$user_id=$session[0]->user_id;
			$result=$this->Notification_model->update_notification($user_id);
			if ($result) {
				echo "1";
			}
			else{
				echo "0";
			}
        }
    }

?>