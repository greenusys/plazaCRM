<?php
    class AttendanceModel extends CI_Model{
        public function fetchEmployee(){
            $this->db->join('tbl_user_role','tbl_user_role.user_role_id=tbl_users.role_id');
            $this->db->join('tbl_designations','tbl_designations.designations_id=tbl_user_role.designations_id');
            return $this->db->get('tbl_users')->result();
        }
    }
?>