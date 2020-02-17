<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of department_model
 *
 * @author NaYeM
 */
class Department_Model extends MY_Model
{

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function get_add_department_by_id($department_id)
    {
        $this->db->select('tbl_departments.deptname', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->from('tbl_departments');
        $this->db->join('tbl_designations', 'tbl_departments.departments_id = tbl_designations.departments_id', 'left');
        $this->db->where('tbl_departments.departments_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_user_roll_by_id($designations_id) {
        $this->db->select('tbl_user_role.*', false);
        $this->db->select('tbl_menu.*', false);
        $this->db->from('tbl_user_role');
        $this->db->join('tbl_menu', 'tbl_user_role.menu_id = tbl_menu.menu_id', 'left');
        $this->db->where('tbl_user_role.designations_id', $designations_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function getAllDeppartments(){
        // $this->db->join('tbl_designations', 'tbl_departments.departments_id = tbl_designations.departments_id', 'left');
        // $All_details=array();
        // $deatils=array();
        $dpt= $this->db->get('tbl_departments')->result();
        // foreach ($dpt as $dDe) {
        //     $departments[]=$dDe;
        //     // print_r($dDe);
        //     if(count($data=$this->getDesignations($dDe->departments_id))>0){
        //         foreach ($data as $d) {
        //             $deatils[]=$d;
        //         }
        //     }
        // }
        // array_push($All_details,array("Departments"=>$departments,"Designation"=>$deatils));
        // print_r($All_details);
        return $dpt;

    }
    public function getDesignations($dpt_id){
        $this->db->where('departments_id',$dpt_id);
        return $this->db->get('tbl_designations')->result();
    }
    public function updateDeptName($name, $id){
        $this->db->where('departments_id',$id);
        $toupdate=array("deptname"=>$name);
        // psrint_r($toupdate);
        if($this->db->update('tbl_departments', $toupdate)){
            return true;
        }else{
            return false;
        }
    }
    public function createDepartment($newDep,$newDesig){
        $condition=array("deptname"=>$newDep);
        $this->db->where($condition);
        if(count($this->db->get('tbl_departments')->result())==0){
            if($this->db->insert('tbl_departments',$condition)){
                $this->db->order_by('departments_id','desc');
                $this->db->limit(1);
                $lst_entry=$this->db->get('tbl_departments')->row();
                $dat=array("departments_id"=>$lst_entry->departments_id,"designations"=>$newDesig,"permission"=>"");
                if($this->db->insert('tbl_designations',$dat)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function createDesignation($dep_id,$newDesig){
        
        $dat=array("departments_id"=>$dep_id,"designations"=>$newDesig);
        $this->db->where($dat);
        if(count($this->db->get('tbl_designations')->result())==0){
            if($this->db->insert('tbl_designations',$dat)){
                return true;
            }else{
                return false;
            }  
        }else{
            return false;
        }
         
    }
    public function deleteDepartment($depId){
        $this->db->where('departments_id',$depId);
        if($this->db->delete('tbl_departments')){
            return true;
        }else{
            return false;
        }
    }
     public function deleteDesignation($desID){
        $this->db->where('designations_id',$desID);
        if($this->db->delete('tbl_designations')){
            return true;
        }else{
            return false;
        }
    }


}
