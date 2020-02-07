<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
<<<<<<< HEAD
=======
	public function addUser(){
		print_r($_POST);	
	}
>>>>>>> 8675d011c2d6e052f3dfe907a13be37b67621a9f
}
