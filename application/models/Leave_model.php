<?php
class Leave_Model extends CI_Model
{
	public function getAllDetails($condition=""){
		if($condition!=""){
			$this->db->where($condition);	
		}
		return $this->db->get('tbl_leave_application')->result();
	}
	public function addLeaveData($data)
	{
	       // print_r($data);
	  
		if($this->db->insert('tbl_leave_application',$data))
		{
			return 1;
			
		}else{
			return 0;
		}
	}
	public function updateData($data,$condition){
		$this->db->where($condition);
		if($this->db->update('tbl_leave_application',$data)){
			return true;
		}else{
			return false;
		}
	}
	public function fetchLeaveDetails()
	{
	    return $this->db->query("select tbl_leave_application.*,tbl_users.*,tbl_account_details.*,tbl_leave_category.*,tbl_leave_application.user_id as users,tbl_leave_application.leave_category_id as leavecatid from tbl_leave_application join tbl_users on tbl_users.user_id=tbl_leave_application.user_id  join  tbl_account_details on tbl_account_details.user_id= tbl_users.user_id join tbl_leave_category on tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id")->result();
	}
	public function fetchUserForApplyLeave()
	{
	    return $this->db->get('tbl_users')->result();
	    
	}
	public function fetchLeaveCategoryData()
	{
	    return $this->db->get('tbl_leave_category')->result();
	    
	}
}

?>