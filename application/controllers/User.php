<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel','Login');
		$this->load->model('Job_circular_model');
		$this->load->model('User_model');
	}

	public function index()
	{
        $data['countries']=$this->db->get('countries')->result();
		$this->load->view('pages/auth-register',$data);
	}

	public function new_user(){
		$full_name=$_POST['full_name'];
		$employment_id=$_POST['Employment_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$mobile=$_POST['mobile'];
		$skype_id=$_POST['skype_id'];
		$direction=$_POST['direction'];
		$designations_id=$_POST['designations_id'];
		$check_data=$this->User_model->check_user($username,$email);
		if($check_data){
			die(json_encode(array('status'=>'0','msg'=>'no data')));
		}
		else{
			$data=array('username'=>$username,
						'full_name'=>$full_name,
						'password'=>$password,
						'email'=>$email,
						'role_id'=>'3',
						'activated'=>'1');
			$insert=$this->User_model->insert_user($data);
			$user_id=$insert;
	        $config['upload_path'] = './uploads/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = 2000;
	        $config['max_width'] = 1500;
	        $config['max_height'] = 1500;

	        $this->load->library('upload', $config);

	        if (!$this->upload->do_upload('profilephoto')) {
	            $error = array('error' => $this->upload->display_errors());
	            die(json_encode(array('status'=>'0','msg'=>$error)));
	        } else {
	        	$upload_data = $this->upload->data(); 
				$file_name = "uploads/".$upload_data['file_name'];
				$new_data=array('user_id'=>$user_id,
								'fullname'=>$full_name,
								'employment_id'=>$employment_id,
								'company'=>'0',
								'phone'=>$phone,
								'mobile'=>$mobile,
								'skype'=>$skype_id,
								'designations_id'=>$designations_id,
								'avatar'=>$file_name,
								'direction'=>$direction);
				$final=$this->User_model->insert_account($new_data);
				if($final){
					die(json_encode(array('status'=>'1','msg'=>'success')));
				}
				else{
					die(json_encode(array('status'=>'0','msg'=>'failed')));
				}
	        }
		}
	}

	 public function delete_user($id = null)
    {
     	$cwhere = array('user_id' => $id);
        $this->User_model->_table_name = 'tbl_private_chat';
        $this->User_model->delete_multiple($cwhere);

        $this->User_model->_table_name = 'tbl_private_chat_users';
        $this->User_model->delete_multiple($cwhere);

        $this->User_model->_table_name = 'tbl_private_chat_messages';
        $this->User_model->delete_multiple($cwhere);

        $this->User_model->_table_name = 'tbl_activities';
        $this->User_model->delete_multiple(array('user' => $id));

        $this->User_model->_table_name = 'tbl_inbox';
        $this->User_model->delete_multiple(array('user_id' => $id));

        $this->User_model->_table_name = 'tbl_sent';
        $this->User_model->delete_multiple(array('user_id' => $id));

        $this->User_model->_table_name = 'tbl_draft';
        $this->User_model->delete_multiple(array('user_id' => $id));

        $this->User_model->_table_name = 'tbl_users';
        $this->User_model->delete_multiple(array('user_id' => $id));

        $this->User_model->_table_name = 'tbl_account_details';
        $this->User_model->delete_multiple(array('user_id' => $id));
        redirect('User/user_list');
}

	public function user_list($action=NULL,$id=NULL)
	{

        $user_id = $id;

        if ($action == 'edit_user' && $id != my_id()) {
            $data['active'] = 2;
            $can_edit = $this->User_model->can_action('tbl_users', 'edit', array('user_id' => $id));
            $edited = can_action('24', 'edited');
            if (!empty($can_edit) || !empty($edited)) {
                $data['login_info'] = $this->db->where('user_id', $user_id)->get('tbl_users')->row();
            }
        } else {
            $data['active'] = 1;
        }

        $data['title'] = 'User List';

        $this->User_model->_table_name = 'tbl_client'; //table name
        $this->User_model->_order_by = 'client_id';
        $data['all_client_info'] = $this->User_model->get();

        // get all language
        $data['languages'] = $this->db->where('active', 1)->order_by('name', 'ASC')->get('tbl_languages')->result();

        $data['permission_user'] = $this->User_model->all_permission_user('24');

        $data['all_user_info'] = $this->User_model->get_permission('tbl_users');

        $data['all_designation_info'] = $this->User_model->all_designation();


		$data['countries']=$this->db->get('tbl_countries')->result();
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
	 	foreach ($data['all_dept_info'] as $v_dept_info) {
            $data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
        }
        $data['all_users']=$this->User_model->fetch_all_users();
		$this->load->view('layout/header');
		$this->load->view("pages/user_list",$data);
		$this->load->view("layout/footer");
	}

	public function userProfile(){
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		 $data['user_info']=$this->User_model->fetch_user_data($user_id);
		$this->load->view('layout/header');
		$this->load->view("pages/update_profile",$data);
		$this->load->view("layout/footer");
	}
	public function addTodoList(){
		$this->load->view('layout/header');
		$this->load->view("pages/todo_list");
		$this->load->view("layout/footer");
	}
	public function userDetails(){
		
		$this->load->view('layout/header');
		$this->load->view("pages/userDetails");
		$this->load->view("layout/footer");
	}

	public function updateUserInfo(){
		if($_FILES["file"]['name'] !=""){
			$image = rand(0000,9999).'-'.$_FILES["file"]['name'];
			$config['upload_path']          = './uploads/profile_pic/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        $config['file_name'] = $image;
	            $this->load->library('upload', $config);

	        if (!$this->upload->do_upload('file')) {
	           
	        	$this->session->set_flashdata('msg','Error In Uploading Image');
	           // $this->load->view('files/upload_form', $error);
	        	$this->userProfile();
	        } else {
	        	$rss = $this->upload->data();
	        	$_POST['avatar']=$rss['file_name'];
		 		if($this->User_model->update_user_data($_POST)){
		    		$this->session->set_flashdata('msg','Successfully Updated');
		    		$this->userProfile();
		    	}else{
		    		$this->session->set_flashdata('msg','Server Error, Please Try Again');
		    		$this->userProfile();
		    	}
	        }
	    }else{
	    	
	    	if($this->User_model->update_user_data($_POST)){
	    		$this->session->set_flashdata('msg','Successfully Updated');
	    		$this->userProfile();
	    	}else{
	    		$this->session->set_flashdata('msg','Server Error, Please Try Again');
	    		$this->userProfile();
	    	}
	    }

	}

	public function updateEmail(){
		//print_r($_POST);
		if($this->User_model->update_user_email($_POST)){
			$this->session->set_flashdata('msg','Successfully Updated');
	    		$this->userProfile();
		}else{
			$this->session->set_flashdata('msg','Server Error, Please Try Again');
	    		$this->userProfile();
		}
	}

	public function updatePassword(){
	//print_r($_POST);
	//die();
		if($this->User_model->update_user_password($_POST)){
			die(json_encode(array('error'=>0,'msg'=>'Successfully Updated')));
		}else{
			die(json_encode(array('error'=>1,'msg'=>'Password Doesn\'t Matched')));
		}
	}
	function generateReport(){
		$this->load->view('layout/header');
		$this->load->view("pages/generate_report");
		$this->load->view("layout/footer");
	}

	function addReport(){
//		print_r($_POST);
//print_r($_FILES);
		if($_FILES["myfile"]['name'] !=""){
			 $cpt = count($_FILES['myfile']['name']);
		    for($i=0; $i<$cpt; $i++)
		    {   
		    	$ext = pathinfo($_FILES['myfile']['name'][$i], PATHINFO_EXTENSION);        
		        $_FILES['file']['name']=  "report-".date("Y-m-d-H-i-s").$i.".".$ext;
		        $_FILES['file']['type']= $_FILES['myfile']['type'][$i];
		        $_FILES['file']['tmp_name']= $_FILES['myfile']['tmp_name'][$i];
		        $_FILES['file']['error']= $_FILES['myfile']['error'][$i];
		        $_FILES['file']['size']= $_FILES['myfile']['size'][$i];    
		         $uploadPath = 'uploads/report_images/';
	                $config['upload_path'] = $uploadPath;
	                $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $this->load->library('upload',$config); 
		        $this->upload->initialize($config);
		        $this->upload->do_upload('file');
		        $dataInfo[] = $this->upload->data();
		        $images[]=$_FILES['file']['name'];

		    }	
		      $pics=implode(",",$images);
	          $_POST['rpt_images']=$pics;
	         	if($this->User_model->add_user_reports($_POST)){
					$this->session->set_flashdata('msg','Added Successfully ssaa' );
			    		redirect(base_url('User/generateReport'));
				}else{
					$this->session->set_flashdata('msg','Server Error, Please Try Again');
			    	redirect(base_url('User/generateReport'));
				}

		}else{
			if($this->User_model->add_user_reports($_POST)){
					$this->session->set_flashdata('msg','Added Successfully 88uj7u');
			    		redirect(base_url('User/generateReport'));
			}else{
				$this->session->set_flashdata('msg','Server Error, Please Try Again');
		    	redirect(base_url('User/generateReport'));
			}	
		}
	}

	function reportList(){
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		 $data['reports_list']=$this->User_model->fetch_report_list($user_id);
		$this->load->view('layout/header');
		$this->load->view("pages/view_reports",$data);
		$this->load->view("layout/footer");
	}	

	function fetchReport(){
		//print_r($_POST);
		$res = $this->User_model->fetch_report_data($_POST);
		if($res != false){
			die(json_encode(array("error"=>0,"data"=>$res)));
		}else{
			die(json_encode(array("error"=>1,"data"=>$res)));
		}

	}
	function TaskReport(){
		$this->load->view('layout/header');
		$this->load->view("pages/TaskReport");
		$this->load->view("layout/footer");
	}
	// function TaskReport(){
	// 	$this->load->view('layout/header');
	// 	$this->load->view("pages/taskreport");
	// 	$this->load->view("layout/footer");
	// }
	function ProjectReport(){
		$this->load->view('layout/header');
		$this->load->view("pages/projectreport");
		$this->load->view("layout/footer");
	}
	public function getUserByDetails(){
		$this->db->where('tbl_users.user_id',$this->input->post('user_id'));
		$this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_users.user_id');
		die(json_encode($this->db->get('tbl_users')->result()));
	}
	
}
?>
