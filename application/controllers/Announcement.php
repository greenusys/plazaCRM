<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('AnnouncementModel','Anna');
	}
	public function index()
	{
		$data['Announcement']=$this->getAllAnnouncements();
		$this->load->view('layout/header');
		$this->load->view("pages/announcements",$data);
		$this->load->view("layout/footer");
	}
	public function addAnnouncement(){
		$user_id=2;
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