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
	public function updateData($data,$condition)
	{
		$this->db->where($condition);
		if($this->db->update('tbl_leave_application',$data)){
			return true;
		}else{
			return false;
		}
	}
	public function fetchLeaveDetails()
	{
	    return $this->db->query("select tbl_leave_application.*,tbl_users.*,tbl_leave_category.*,tbl_account_details.*,tbl_leave_application.user_id as users,tbl_leave_application.leave_category_id as leavecatid from tbl_leave_application join tbl_users on tbl_users.user_id=tbl_leave_application.user_id  join  tbl_account_details on tbl_account_details.user_id= tbl_users.user_id join tbl_leave_category on tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id")->result();
	}
	public function fetchUserForApplyLeave()
	{
	    return $this->db->get('tbl_users')->result();
	    
	}
	public function fetchLeaveCategoryData()
	{
	    return $this->db->get('tbl_leave_category')->result();
	    
	}
	public function fetchMyLeaveDetails($formyleave)
	{
	    return $this->db->query("select tbl_leave_application.*,tbl_users.*,tbl_leave_category.*,tbl_account_details.*,tbl_leave_application.user_id as users,tbl_leave_application.leave_category_id as leavecatid from tbl_leave_application join tbl_users on tbl_users.user_id=tbl_leave_application.user_id  join  tbl_account_details on tbl_account_details.user_id= tbl_users.user_id join tbl_leave_category on tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id where tbl_leave_application.user_id=$formyleave")->result();
	}
	public function fetchleaveDataByIdToModal($leave_id)
    {
     return $this->db->query("select tbl_leave_application.*,tbl_users.*,tbl_leave_category.*,tbl_account_details.*,tbl_leave_application.user_id as users,tbl_leave_application.leave_category_id as leavecatid from tbl_leave_application join tbl_users on tbl_users.user_id=tbl_leave_application.user_id  join  tbl_account_details on tbl_account_details.user_id= tbl_users.user_id join tbl_leave_category on tbl_leave_category.leave_category_id=tbl_leave_application.leave_category_id where tbl_leave_application.leave_application_id='$leave_id'")->result(); 
    }
   public function DeletePendingLeave($data)
	{
		$this->db->where($data);
		 $results=$this->db->delete('tbl_leave_application');
		 if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}
	public function DeleteMyLeave($data)
	{
		$this->db->where($data);
		 $results=$this->db->delete('tbl_leave_application');
		 if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}
	public function DeleteAllLeave($data)
	{
		$this->db->where($data);
		 $results=$this->db->delete('tbl_leave_application');
		 if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}

	public function addYearlyLeaveData($data,$dept)
	{
			$this->db->where('department_id',$dept);
		$re=$this->db->get('tbl_leave_yearly')->result();
		if(count($re)==0)
		{
			$results=$this->db->insert('tbl_leave_yearly',$data);
			if($results)
			{
				return 1;
			}
			else
			{
				return 0;
			}

		}
		else
		{
			return 2;
	    }
	}
	public function addleaveCategoryData($data)
	{
	  
		if($this->db->insert('tbl_leave_category',$data))
		{
			return 1;
			
		}else{
			return 0;
		}
	}
	public function addLeavePolicyData($data)
	{
	  
		if($this->db->insert('tbl_leave_policy',$data))
		{
			return 1;
			
		}else{
			return 0;
		}
	}
	
	
	public function fetchDepartmentforLeave()
	{
	    return $this->db->get('tbl_departments')->result();
	    
	}
	public function fetchtotalLeaveById($dept_id)
	{
		$this->db->where('department_id',$dept_id);
	    return $this->db->get('tbl_leave_yearly')->result();
	    
	}
	public function fetchDesignationforLeaveById($dept_id)
	{
		$this->db->where('departments_id',$dept_id);
	    return $this->db->get('tbl_designations')->result();
	    
	}
	public function fetchLeaveYearlyData()
	{
		$this->db->select('*')
         ->from('tbl_leave_yearly')
         ->join('tbl_departments', 'tbl_departments.departments_id = tbl_leave_yearly.department_id');
		return $this->db->get()->result();
	    // return $this->db->get('tbl_leave_yearly')->result();
	    
	}
	public function changeleavestatusByid($leave_id,$data)
	{
		$this->db->where('leave_application_id',$leave_id);
		 $results=$this->db->update('tbl_leave_application',$data);
		
			if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}
	public function rejectleavestatusByid($leave_id,$data)
	{
		$this->db->where('leave_application_id',$leave_id);
		 $results=$this->db->update('tbl_leave_application',$data);
		
			if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}

	public function Deleteyearlyleave($data)
	{
		$this->db->where($data);
		 $results=$this->db->delete('tbl_leave_yearly');
		 if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}
	public function EditYearlyleave($id)
	{
		$this->db->select('*')
         ->from('tbl_leave_yearly')
         ->join('tbl_departments', 'tbl_departments.departments_id = tbl_leave_yearly.department_id')
         ->where('tbl_leave_yearly.year_leaveid',$id);
		return $this->db->get()->result();
	    // return $this->db->get('tbl_leave_yearly')->result();
	    
	}
	public function UpdateYearlyLeaveData($data,$leaveyearid)
	{
		$this->db->where('year_leaveid',$leaveyearid);
		 $results=$this->db->update('tbl_leave_yearly',$data);
		
			if($results)
			{
				return 1;
			}
	
			else
			{
				return 0;
		    }
	}
	public function checkAvailableleave($dept_id)
 	{
        $this->db->select('lpolicy_days')->from('tbl_leave_policy');
		$this->db->where('lpolicy_department_id',$dept_id);
		$query= $this->db->get();
		$days_array = array();
		foreach ($query->result_array() as $row)
		{
		  $days_array[] = intval($row['lpolicy_days']); //can it be float also?
		}
		return $total = array_sum($days_array);
		 
	}
}

?>