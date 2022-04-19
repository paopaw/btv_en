<?php

class Enrollment_Model extends CI_Model
{
	public function __construct(){
        parent::__construct();
		$this->load->database();
	}

    public function get_user_login($uname,$pword){
        $result = $this->db->where(array('username' => $uname, 'password' => $pword))->select("id")->get("front_user");
        $result = $result->row();
        if(isset($result)) return $result->id;
        return 0;  
    }

    public function update_data($table, $ins_update, $ins){
        $result = $this->db->where($ins)->update($table, $ins_update);
        
        $this->db->trans_complete();
        if ($this->db->trans_status() === true){

            return 'success';
        }else{
            return 'error'; 
        }
    }

    public function reset_pass($table, $data, $newpass){

        $match_pass = $this->db->select('tbl_users.password')->where($newpass)->get('tbl_users');

        if($match_pass->num_rows() == 0){

            $result = $this->db->where($data)->update($table, $newpass);
    
            $this->db->trans_complete();
            if($this->db->trans_status() === true){
                return 'success';
            }else{
                return 'error';
            }
        }else{
            return 'exist';
        }
    }

    public function get_notif_numrows($table, $data){
        $result = $this->db->get_where($table, $data);
        return $result->num_rows();
    }

    public function notification_remove($table, $notif_id_stud_id){
        $this->db->where($notif_id_stud_id)->delete($table);
        $this->db->trans_complete();
        if($this->db->trans_status()==TRUE)
        {
            return "success";
        }else{

            return "error";
        }
    }

    public function read_msg($msg_read, $uid){
        $res = $this->db->where($uid)->update('notification', $msg_read);
        $this->db->trans_complete();
        if($this->db->trans_status() == true){
            return 'read';
        }else{
            return 'error';
        }
    }

    public function enroll_sub($data, $student_id, $id){
      
       $get_id = $this->db->select('applicant_profile.student_id')            
                               ->where(array('student_id' => $student_id))
                               ->get('applicant_profile');

        if($get_id->num_rows() == 0){
            
            $this->db->insert('applicant_profile', $data);

            $this->db->trans_complete();

            if($this->db->trans_status() == true){
                return 'inserted';
            }else{
                return 'error';
            }
        }else{
            $result = $this->db->where($id)->update('applicant_profile', $data);

            $this->db->trans_complete();

            if($this->db->trans_status() == true){
               return 'updated';
            }else{
                return 'error';
            }  
        }   
    }

    public function get_user_data($table,$data){
        $result = $this->db->get_where($table,$data);
        return $result->row();
    }
    public function get_exam($table,$user_id,$user_data){
        $result =$this->db->get_where($table,$user_data);
        return $result->result_array();

    }

    public function insert_new_student($table,$data,$tbl_user,$data_2, $tbl_user_2){

        $result = $this->db->where($data_2)->get($table);
        $result_2 = $this->db->where($tbl_user_2)->get('tbl_users');

        if($result->num_rows() == 0 && $result_2->num_rows() == 0){

            $this->db->insert($table, $data);
            $this->db->insert('tbl_users', $tbl_user);

            return 'success';
        }else{
            return 'exist';
        }
    }

    public function get_region(){
        return $this->db->select("regDesc, regCode")->get("refregion");
    }

    public function get_province($regCode){
        $result = $this->db->where(array('regCode' => $regCode))
                           ->select("provDesc, provCode")
                           ->get("refprovince");
        return $result->result();
    }

    public function get_citymun($provCode){
        $result = $this->db->where(array('provCode' => $provCode))
                           ->select("citymunDesc, citymunCode")
                           ->get("refcitymun");
        return $result->result();
    }

    public function get_brgy($citymunCode){
        $result = $this->db->where(array('citymunCode' => $citymunCode))
                       ->select("brgyDesc, brgyCode")
                       ->get("refbrgy");
        return $result->result();
    }

    public function answer($data, $student_id, $id, $item_no){
        $match_itemno = $this->db->select('exam_answd_sheets.item_no')->where(array('item_no' => $item_no))->get('exam_answd_sheets');
        
        if($match_itemno->num_rows() == 0){

            $this->db->insert('exam_answd_sheets', $data);

            $this->db->trans_complete();

            if($this->db->trans_status() == true){

                return 'inserted';
            }else{
                return 'erro';    
            }
        }
    }

    public function insert_score($table,$user_id,$match_id,$data){
        $match_user = $this->db->select('appl_exams_file.app_id')->where($match_id)->get('appl_exams_file');

        if($match_user->num_rows() == 0){

            $this->db->insert($table, $data);

            $this->db->trans_complete();
            if($this->db->trans_status() == true){
                return 'success';
            }else{
                return 'error';
            }
        }
    }

    public function get_answer($table,$data){
        $result = $this->db->get_where($table,$data);
        return $result->row();
    }

    public function get_answer_sheet(){
        $user_id = $this->session->userdata('user_id');
        $id = array('app_id' => $user_id);
        $result = $this->db->get_where('exam_answd_sheets', $id);
        return $result->row();
    }

    public function student_data(){
        $id = $this->session->userdata('user_id');
        $student_data = $this->db->select('applicant_profile.app_id,
                                           applicant_profile.entry_date,
                                           applicant_profile.student_id,
                                           applicant_profile.first_name,
                                           applicant_profile.mid_name,
                                           applicant_profile.last_name,
                                           applicant_profile.address,
                                           applicant_profile.contactno,
                                           applicant_profile.birthdate,
                                           applicant_profile.sex,
                                           applicant_profile.course,
                                           applicant_profile.status,
                                           applicant_profile.date_enrolled,
                                           tbl_users.user_id,
                                           tbl_users.profile_pic,
                                           tbl_users.name,
                                           tbl_users.email,
                                           tbl_users.reg_form,
                                           tbl_users.brgy_clearance,
                                           tbl_users.valid_picture,
                                           tbl_users.school_credential,
                                           tbl_users.birth_cert,
                                           tbl_users.ncae,
                                         ')

                                 ->join('tbl_users',' applicant_profile.student_id = tbl_users.user_id')
                                 ->where(array('applicant_profile.student_id' => $id))
                                 ->order_by('applicant_profile.app_id', 'DESC')
                                 ->get('applicant_profile');
        return $student_data->result_array();
    }

    public function get_notification(){
        $id = $this->session->userdata('user_id');
        $notif_data = $this->db->select('notification.notif_id,
                                         notification.student_id,
                                         notification.admin_id,
                                         notification.date,
                                         notification.message,
                                         notification.availability,
                                         notification.status,
                                       ')
                                    ->where(array('notification.student_id' => $id))
                                    ->get('notification');
        return $notif_data->result_array();
    }

    public function doc_requirements(){
        $id = $this->session->userdata('user_id');
        $doc = $this->db->select('reg_form, brgy_clearance, valid_picture, school_credentials, birth_cert, ncae')
                        ->where(array('student_id' => $id))
                        ->get('tbl_users');
        return $doc->result_array();                
    }

    public function get_student_id($id){
             $student_id = $this->db->select('applicant_profile.student_id')           
                               ->where($id)
                               ->get('applicant_profile');
        return $student_id->result_array();
    }

    public function exam_tnt(){
        $result = $this->db->select("test_no, question, answer, illustration, subquestion, let_a, let_b, let_c, let_d, illus_width, category")
                           ->get("exam_qstions");
        return $result;
    }

    public function exam_tlt(){
        $result = $this->db->where(array('category' => 'TLT'))
                           ->select("test_no, question, answer, illustration, subquestion, let_a, let_b, let_c, let_d, illus_width")
                           ->get("exam_qstions");
        return $result;
    }

    public function exam_olt(){
        $result = $this->db->where(array('category' => 'OLT'))
                           ->select("test_no, question, answer, illustration, subquestion, let_a, let_b, let_c, let_d, illus_width")
                           ->get("exam_qstions");
        return $result;
    }

    public function get_student_data(){

        $result = $this->db->select("tbl_users.user_id,
                                     tbl_users.user_id,
                                     
                                    ")
                                ->order_by('reg_instructor.reg_id')
                                ->get('reg_instructor');
        return $result->result_array();
    }

    public function getnumrows($table, $data){
        $result = $this->db->get_where($table, $data);
        return $result->num_rows();
    }

}

?>