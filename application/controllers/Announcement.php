<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('AnnouncementModel','Anna');
		$this->load->model('User_model');
		$this->load->model('Notification_model');
	}
	public function index()
	{
		$data['Announcement']=$this->getAllAnnouncements();
		$this->load->view('layout/header');
		$this->load->view("pages/announcements",$data);
		$this->load->view("layout/footer");
	}
	public function addAnnouncement(){
		$date=date('Y-m-d H:i:s');
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		if($this->input->post('published')=='on'){
			$published=1;
		}else{
			$published=0;
		}
		if($this->input->post('shareWith')=='on'){
			$shareWith=1;
		}else{
			$shareWith=0;
		}
		 $data=array(	"title"=>$this->input->post('title'),
		 				"description"=>$this->input->post('description'),
		 				"user_id"=>$user_id,
		 				"created_date"=>date('Y-m-d h:i:s'),
		 				"status"=>$published,
		 				"view_status"=>2,
		 				"start_date"=>$this->input->post('start_date'),
		 				"end_date"=>$this->input->post('end_date'),
		 				"all_client"=>$shareWith,
		 				"attachment"=>'null',
					);
		 $stats=$this->Anna->addNewAnnouncement($data);
		 switch ($stats) {
		 	case 0:
		 		die(json_encode(array('code' => 0,'msg'=>"Failed To Post Announcement.")));
		 		break;
		 	case 1:
		 		$fetch_users=$this->User_model->fetch_all_employees();
		 		foreach ($fetch_users as $users) {
		 			$emp_id=$users['user_id'];
		 			$new_data=array('date'=>$date,
		 							'description'=>'announcement',
		 							'from_user_id'=>$user_id,
		 							'to_user_id'=>$emp_id,
		 							'link'=>'Announcement',
		 							'value'=>$title);
		 			$notify=$this->Notification_model->insert_notification($new_data);
		 		}
		 		die(json_encode(array('code' => 1,'msg'=>"Announcement Posted Successfully.")));
		 		break;
		 	case 2:
		 		die(json_encode(array('code' => 0, 'msg'=>"Announcement Already Exists.")));
		 		break;
		 	
		 	default:
		 		die(json_encode(array('code' => 0, 'msg'=>"Server Not Found.")));
		 		break;
		 }
	}
	public function getAllAnnouncements(){
		return $this->Anna->getAnnounce();
	}

}
?>