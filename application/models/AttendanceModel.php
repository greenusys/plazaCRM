<?php
    class AttendanceModel extends CI_Model{
        public function fetchEmployee(){
            $this->db->join('tbl_user_role','tbl_user_role.user_role_id=tbl_users.role_id');
            $this->db->join('tbl_designations','tbl_designations.designations_id=tbl_user_role.designations_id');
            return $this->db->get('tbl_users')->result();
        }
        public function getLastAttendanceId(){
            $this->db->limit(1);
            $this->db->order_by('attendance_id','Desc');
            return $this->db->get('tbl_attendance')->result_array();
        }
        public function markMyAttendance($data,$id,$attArray){
        //  print_r($attArray);
            $conditionArr=array("user_id"=>$id,"date_in"=>date('Y-m-d'));
            $this->db->where($conditionArr);
            if(count($res=$this->db->get('tbl_attendance')->result())==0){
                if($this->db->insert('tbl_attendance',$attArray)){
                    $insert_id = $this->db->insert_id();
                    return $insert_id;
                }else{
                    return false;
                }
            }else{
                // echo 'Already Hai';
                $this->db->where('user_id',$id);
                if($this->db->update('tbl_attendance',$attArray)){
                   return $res[0]->attendance_id;
                }else{
                    return false;
                }
            }
        }
        public function getClock($st){
            $this->db->where('attendance_id',$st);
            if(count($res=$this->db->get('tbl_clock')->result())>0){
               return $res;
            }else{
               return false;
            }
        }
    }
?>