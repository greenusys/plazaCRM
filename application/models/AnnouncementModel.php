<?php
	class AnnouncementModel extends CI_Model{
		public function addNewAnnouncement($data){
			$this->db->where('title',$data['title']);
			$this->db->where('description',$data['description']);
			$this->db->where('user_id',$data['user_id']);
			if(count($this->db->get('tbl_announcements')->result())==0){
				if($this->db->insert('tbl_announcements',$data)){
					return 1;
				}else{
					return 0;
				}
			}else{
				return 2;
			}
		}
		public function getAnnounce(){
			$this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_announcements.user_id');
			return $this->db->get('tbl_announcements')->result();
		}
	
	}

?>