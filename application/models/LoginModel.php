<?php
	class LoginModel extends CI_Model{
		public function verifyThisUser($data){
			// $data['pass_code'];
			$this->db->where('user_name_',$data['user_name_']);
			if(count($result=$this->db->get('user_')->result())>0){
				// print_r($result);
				if($result[0]->password_==$data['password_']){
					return $result;
				}
				
			}else{
				return false;
			}	
		}
	}
?>