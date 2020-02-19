<?php
    class Bugs_model extends MY_Model{

    	public function add_bug($data){
    		$this->db->insert('tbl_bug', $data);
       		return true;
    	}

    }
?>