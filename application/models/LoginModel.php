<?php
	class LoginModel extends CI_Model{
		public function verifyThisUser($data){
			// $data['pass_code'];
			$this->db->where('user_name_',$data['user_name_']);
			if(count($result=$this->db->get('admin_')->result())>0){
				print_r($result);
				if($result['password_']==$data['password_']){
					return true;
				}
				
			}else{
				return false;
			}	
		}
	}
?>