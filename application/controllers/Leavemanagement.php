<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leavemanagement extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Leave_Model','leave');
	}
	public function index()
	{
		
		$this->load->view('layout/header');
		$this->load->view("pages/leave_management");
		$this->load->view("layout/footer");
	}
	public function addleavecategory()
	{
		$leave_category=$this->input->post('leave_category');
		$leave_quota=$this->input->post('leave_quota');
		$data = array(
        	'leave_category'=>$leave_category,
        	'leave_quota'=>$leave_quota
        );
      	$tablename='tbl_leave_category';
        $result=$this->leave->addData($tablename,$data);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Leave Category added Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}
	}
	public function getleavecat()
	{
		
		
		$tablename='tbl_leave_category';
		if(count($data=$this->leave->getAllDetails($tablename))>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
	public function getleavecatbyid()
	{
		
		$condition=array("leave_category_id"=>$this->input->post('cat_id'));
		$tablename='tbl_leave_category';
		if(count($data=$this->leave->getAllDetails($tablename,$condition))>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
	public function addleaveapplication()
	{
		$user_id=$this->input->post('user_id');
		$album_title=$this->input->post('alb_title');
		$leave_category_id=$this->input->post('leave_category_id');
		$reason=$this->input->post('reason');
		$leave_type=$this->input->post('leave_type');
		$hours=$this->input->post('hours');
		$leave_start_date=$this->input->post('leave_start_date');
		$leave_end_date=$this->input->post('leave_end_date');
		$application_status=$this->input->post('application_status');
		$application_date=date('d-m-Y H:i:s');
		$attachment=$this->input->post('attachment');
		$comments=$this->input->post('comments');
		$approve_by=$this->input->post('approve_by');
		$data = array();
		// If file upload form submitted
			if(!empty($_FILES['file']['name'])){
			    $filesCount = count($_FILES['file']['name']);
		        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		        $_FILES['file']['name']     = "file-".date("Y-m-d-H-i-s").".".$ext;
		        $_FILES['file']['type']     = $_FILES['file']['type'];
		        $_FILES['file']['tmp_name'] = $_FILES['file']['tmp_name'];
		        $_FILES['file']['error']     = $_FILES['file']['error'];
		        $_FILES['file']['size']     = $_FILES['file']['size'];
		                // File upload configuration
	            $uploadPath = 'assets/uploads/leave/';
	            $config['upload_path'] = $uploadPath;
	 
	            // Load and initialize upload library
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	            
	            // Upload file to server
	            if($this->upload->do_upload('file')){
	                // Uploaded file data
	                $fileData = $this->upload->data();
	                $uploadData['file_name'] = $fileData['file_name'];
	                $uploadData['uploaded_on'] = date("Y-m-d H:i:s");
	            }  
	            $attachfiles=$_FILES['file']['name'];		    
			    // $videos=implode(",",$images);
			    if(!empty($uploadData)){
			        // Insert files data into the database
				$uploadDate=date("Y-m-d H:i:s");
				$data = array(
	        	'user_id'=>$user_id,
	        	'leave_category_id'=>$leave_category_id,
	        	'reason'=>$reason,
	        	'leave_type'=>$leave_type,
	        	'hours'=>$hours,
	        	'leave_start_date'=>$leave_start_date,
	        	'leave_end_date'=>$leave_end_date,
	        	'application_status'=>$application_status,
	        	'view_status'=>$view_status,
	        	'application_date'=>$application_date,
	        	'attachment'=>$attachment,
	        	'comments'=>$comments,
	        	'approve_by'=>$approve_by
	        );
			$tablename='tbl_leave_application';
	        $result=$this->leave->addData($tablename,$data);
			if($result){
				die(json_encode(array('status' =>'1' ,'msg'=>'Leave applied Successfully')));
			}
			else{
				die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
			}
			}
		}
	}
	public function getleaveapp()
	{
	
		$tablename='tbl_leave_application';
		if(count($data=$this->leave->getAllDetails($tablename))>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
		public function getleaveappbyid()
	{
		$condition=array("leave_application_id"=>$this->input->post('leave_application_id'));
		$tablename='tbl_leave_application';
		if(count($data=$this->leave->getAllDetails($tablename,$condition))>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
}
?>