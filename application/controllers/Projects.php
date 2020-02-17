<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Projects_Model');
		$this->load->model('Client_Model');
		$this->load->model('User_model');
		$this->load->model('Notification_model');
		}

	public function index()
	{
		//echo 'Projects';
		$data['clients']=$this->Client_Model->getClients();
		$data['users']=$this->User_model->fetch_user();
		$data['settings']=$this->Projects_Model->fetch_settings();
		$projects=$this->Projects_Model->fetch_projects();
		foreach ($projects as $pr) {
			$perm=$pr['permission'];
			$user=array();
			if($perm=="all"){
				$user[]="Everyone";
			}
			else{
			$new=json_decode($perm);
			foreach($new as $key => $value){
				$user[]=$this->User_model->fetch_user_by_id($key);
			 }
			}
			$project_data[]=array_merge($pr,$user);
		}
		$data['project']=$project_data;
		$this->load->view('layout/header');
		$this->load->view("pages/projects",$data);
		$this->load->view("layout/footer");
	}

	public function create_project(){
		$date=date('Y-m-d H:i:s');
		unset($_POST['everyone']);
		unset($_POST['vehicle2']);
		unset($_POST['vehicle1']);
		unset($_POST['editor1']);
		$permission=$_POST['permission'];
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		 $result = $this->Projects_Model->create_project($_POST);
		 if($result == TRUE){
		 	if ($permission=="all") {
		 		$fetch_users=$this->User_model->fetch_all_employees_admin();
		 		foreach ($fetch_users as $users) {
		 			$emp_id=$users->user_id;
		 			$new_data=array('date'=>$date,
		 							'description'=>'Project',
		 							'from_user_id'=>$user_id,
		 							'to_user_id'=>$emp_id,
		 							'link'=>'Projects',
		 							'value'=>$_POST['project_name']);
		 			$notify=$this->Notification_model->insert_notification($new_data);
		 		}
		 	}
		 	else{
		 		$new=json_decode($permission);
				foreach($new as $key => $value){
					$new_data=array('date'=>$date,
		 							'description'=>'Project',
		 							'from_user_id'=>$user_id,
		 							'to_user_id'=>$key,
		 							'link'=>'Projects',
		 							'value'=>$_POST['project_name']);
		 			$notify=$this->Notification_model->insert_notification($new_data);
				 }
		 	}
		 	die(json_encode(array('status' =>'1','msg'=>'Project Created Successfully')));
		 }
		 else{
		 	die(json_encode(array('status' =>'0','msg'=>'Project With Same Name Already Exists')));
		 }
	}

	public function upload_project(){
 
      $data = array();

      // Count total files
      $countfiles = count($_FILES['files']['name']);
 
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
 
        if(!empty($_FILES['files']['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          // Set preference
          $config['upload_path'] = 'uploads/project_uploads/'; 
          $config['allowed_types'] = '*';
          //$config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $_FILES['files']['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
 
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // Initialize array
            $uploaded_files[] = $filename;
          }
          // else{
          // 	$error = array('error' => $this->upload->display_errors());
          // 	print_r($error);
          // }
        }
 
      }
        $file_list=implode(',',$uploaded_files);
        $project_id=$_POST['project_id'];
        $fetch_project=$this->Projects_Model->fetch_project($project_id);
        if ($fetch_project[0]['uploads']==NULL) {
        	$result=$this->Projects_Model->upload_project($project_id,$file_list);
        	if ($result) {
        		die(json_encode(array('status'=>'1','msg'=>'Uploaded Successfully')));
        	}
        	else{
        		die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
        	}
        }
        else{
        	$old_uploads=$fetch_project[0]['uploads'];
        	$xplode=explode(',',$old_uploads);
        	$fnal_files=array_merge($uploaded_files,$xplode);
        	$final_files=implode(',',$fnal_files);
    		$result=$this->Projects_Model->upload_project($project_id,$final_files);
        	if ($result) {
        		die(json_encode(array('status'=>'1','msg'=>'Uploaded Successfully')));
        	}
        	else{
        		die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
        	}
        }
	}

	public function fetch_all_projects(){
		$projects=$this->Projects_Model->fetch_projects();
		die(json_encode(array('status' =>'1' ,"data"=>$projects )));
	}

	public function fetch_project(){
		$project_id=$_POST['project_id'];
		$result=$this->Projects_Model->fetch_project($project_id);
		if($result){
			die(json_encode(array('status' =>'1' ,'data'=>$result )));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'no data ')));
		}
	}

	public function update_project(){
		$result=$this->Projects_Model->update_project($_POST);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Updated')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function delete_project(){
		$id=$_POST['project_id'];
		$result=$this->Projects_Model->delete_project($id);
		if($result == TRUE){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Deleted')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function downloader(){
		$project_id= $this->uri->segment(3);
		$result=$this->Projects_Model->fetch_project($project_id);
		$files=$result[0]['uploads'];
		$main_files=explode(",",$files);
		// foreach ($main_files as $filer) {
		// 	$path="./uploads/project_uploads/".$filer;
		// 	$this->file_download($path);
		// }
		$zip = new ZipArchive();
		$zip_name = "uploads/project_uploads/".time().".zip"; // Zip name
		$zip->open($zip_name,  ZipArchive::CREATE);
		foreach ($main_files as $file) {
		  $path = "./uploads/project_uploads/".$file;
		  if(file_exists($path)){
		  $zip->addFromString(basename($path),  file_get_contents($path));  
		  }
		  else{
		   echo"file does not exist";
		  }
		}
		$zip->close();
		$this->file_download($zip_name);
	}

	public function file_download($file_name)
    {
        
        $this->load->helper('download');
        force_download($file_name, NULL);
       //  $data = file_get_contents($file_name);
       // // $name = 'My_new_name.pdf'; // custom file name for your download

       //  //force_download($name, $data);
       //  force_download($file_name, NULL); //will get the file name for you
	}

}
?>