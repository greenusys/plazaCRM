<?php
class Client_Model extends MY_Model{
	public $_table_name;
	public $_order_by;
	public function create_client($data){
		$checker=array('email'=>$data['email']);
		$this->db->where($checker);
		$check = $this->db->get("tbl_client")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("tbl_client",$data)){ 		
		 		return true;
		 	}else{
		 		return false;
		 	}
		}else{
			return false;
		} 
	}
	public function get_client_contacts($client_id)
    {

        $this->db->select('tbl_account_details.*', FALSE);
        $this->db->select('tbl_users.*', FALSE);
        $this->db->from('tbl_account_details');
        $this->db->join('tbl_users', 'tbl_users.user_id = tbl_account_details.user_id', 'left');
        $this->db->where('tbl_account_details.company', $client_id);
        if (!empty($_POST["length"]) && $_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function get_client_project($client_id){
    	$checker=array('client_id'=>$client_id);
		$this->db->where($checker);
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
    }
	public function fetch_client($id){
		$checker=array('client_id'=>$id);
		$this->db->where($checker);
		$check = $this->db->get("tbl_client")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function fetch_projects_by_client_id($id){
		$checker=array('client_id'=>$id);
		$this->db->where($checker);
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function getClients(){
		$this->db->select('client_id, name');
		$this->db->order_by('client_id', 'Desc');
		$check = $this->db->get("tbl_client")->result();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function getAllClient(){
		$this->db->order_by('tbl_client.client_id', 'Desc');
		// $this->db->join('tbl_customer_group','tbl_customer_group.customer_group_id=tbl_client.customer_group_id','full');
		$this->db->join('tbl_project','tbl_project.client_id=tbl_client.client_id');
		$check = $this->db->get("tbl_client")->result();
		
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function update_client($data){
			$id=$data['id'];
			unset($data['id']);
			$this->db->where('id', $id);
    		if($this->db->update('client_',$data)){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function delete_client($data){
			$this->db->where('id', $data);
			if($this->db->delete('client_')){
				return TRUE;
			}
			else{
				return FALSE;
			}
	}
	public function getClientDetails(){
		$this->db->order_by('tbl_client.client_id', 'Desc');
		// $this->db->join('tbl_customer_group','tbl_customer_group.customer_group_id=tbl_client.customer_group_id','full');
	
		$check = $this->db->get("tbl_client")->result();
		
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}
	public function CheckPermission($designation_id)
    {
        $this->db->where('designations_id',$designation_id);
        return $this->db->get('tbl_designations')->result();
    }

}

?>