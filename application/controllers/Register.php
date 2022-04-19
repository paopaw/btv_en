<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
  }
    public function index()
    {
    if(!file_exists(APPPATH.'views/pages/index.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{
        $data["id"] = $this->enrollment_model->get_user_login('test', 'test');
        $data["title"] = "BTV Inc Online Enrollment";

        $result = array();
        $course_enrolled = array();

        $student_data = $this->enrollment_model->student_data();
        foreach($student_data as $key => $value){
          $result[] = [
                        'entry_date' => $value['entry_date'],
                        'course' => $value['course'],
                        'status' => $value['status'],
                        'date_enrolled' => $value['date_enrolled']
                      ];
        }
        $data['student_datas'] = $result;

        $fb_nc2 = array('course' => 'Foods and Beverages Services NC II');
        $fb_nc2_data = $this->enrollment_model->getnumrows('applicant_profile', $fb_nc2);

        $cookery = array('course' => 'Cookery NC II');
        $cookery_data = $this->enrollment_model->getnumrows('applicant_profile', $cookery);

        $bartending = array('course' => 'Bartending NC II');
        $bartending_data = $this->enrollment_model->getnumrows('applicant_profile', $bartending);

        $course_enrolled[] = ['food_beverage' => $fb_nc2_data,
                              'cookery' => $cookery_data,
                              'bartending' => $bartending_data
                             ];

        $data['course_enrolled'] = $course_enrolled;                     
      
        $this->load->view("mdbtemp/header");
        $this->load->view("pages/index", $data);
        $this->load->view("mdbtemp/footer");
      }
    }

    public function get_course(){
      $course_enrolled = array();

      $fb_nc2 = array('course' => 'Foods and Beverages Services NC II');
      $fb_nc2_data = $this->enrollment_model->getnumrows('applicant_profile', $fb_nc2);

      $cookery = array('course' => 'Cookery NC II');
      $cookery_data = $this->enrollment_model->getnumrows('applicant_profile', $cookery);

      $bartending = array('course' => 'Bartending NC II');
      $bartending_data = $this->enrollment_model->getnumrows('applicant_profile', $bartending);
      
      $course_enrolled[] = ['food_beverage' => $fb_nc2_data,
                            'cookery' => $cookery_data,
                            'bartending' => $bartending_data
                           ];                 
      echo json_encode($course_enrolled);
    }

    public function profile(){
      if(!file_exists(APPPATH.'views/pages/profile.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{
        $data["title"] = "BTV Inc Online Enrollment";
        $data['profile_data'] = $this->enrollment_model->student_data();
        $result = array();
        $student_data = $this->enrollment_model->student_data();
        foreach($student_data as $key => $value){
          $result[] = [
                        'entry_date' => $value['entry_date'],
                        'course' => $value['course'],
                        'status' => $value['status'],
                        'date_enrolled' => $value['date_enrolled']
                      ];
        }
        $data['student_datas'] = $result;
        $this->load->view("mdbtemp/header");
        $this->load->view("pages/profile", $data);
        $this->load->view("mdbtemp/footer");
      }
    }

    public function student_requirements(){
      if(!file_exists(APPPATH.'views/pages/student_requirements.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{
        $this->load->helper('directory');
        $result = $this->enrollment_model->get_answer_sheet();
      
        $data["app_id"] = $result->app_id;
        $data["title"] = "BTV Inc Online Enrollment";
        $this->load->view("mdbtemp/header");
        $this->load->view("pages/student_requirements", $data);
        $this->load->view("mdbtemp/footer");
      } 
    }

    public function notification(){
      if(!file_exists(APPPATH.'views/pages/notification.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{
        $result = array();
        $notif_stat = array();
        $student_data = $this->enrollment_model->student_data();
        foreach($student_data as $key => $value){
          $result[] = [
                        'entry_date' => $value['entry_date'],
                        'course' => $value['course'],
                        'status' => $value['status'],
                        'date_enrolled' => $value['date_enrolled']
                      ];
        }
        $data['student_datas'] = $result;

        $notif_data = $this->enrollment_model->get_notification();
        foreach($notif_data as $key => $value){
          $notif_stat[] = [
                            'notif_status' => $value['status']
                          ];
        }
        $data['stat_notif'] = $notif_stat;
      
        $this->load->view('mdbtemp/header',$data);
        $this->load->view('pages/notification.php',$data);
        $this->load->view('mdbtemp/footer',$data);
      }
    }

    public function my_records(){
      if(!file_exists(APPPATH.'views/pages/my_records.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{
        $result = array();
        $student_data = $this->enrollment_model->student_data();
        foreach($student_data as $key => $value){
          $result[] = [
                        'entry_date' => $value['entry_date'],
                        'course' => $value['course'],
                        'status' => $value['status'],
                        'date_enrolled' => $value['date_enrolled']
                      ];
        }
        $data['student_datas'] = $result;

        $this->load->view('mdbtemp/header',$data);
        $this->load->view('pages/my_records.php',$data);
        $this->load->view('mdbtemp/footer',$data);
      }
    }

    public function sign_up(){
      $this->load->view("pages/sign_up_form.php");
    }

    public function forget_pass(){
      $this->load->view("pages/forget_pass.php");
    }

    public function login(){
      $this->load->view("pages/login_page.php");
    }

    public function create_new_pass(){
      $this->load->view("pages/create_new_pass.php");
    }

    public function viewerjs(){
      //FCPATH.'ViewerJS';
      $this->load->view("viewer_js/index.html");
    }

    public function validate_logout(){
      $user_data = array('user_id', 'profile_pic', 'logged_in','usertype','name');
      $this->session->unset_userdata($user_data);
      echo json_encode('login');
    }

    public function validate_login(){
      $username = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('username')))));
      $password = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('password')))));
      $ins = array('username' => $username, 'password' =>md5($password));
      $data = $this->enrollment_model->get_user_data('tbl_users', $ins);
      if($data != NULL){
        $user_data = array(
                            'user_id'     => $data->user_id,
                            'name'        => $data->name,
                            'last_name'   => $data->last_name,
                            'email'       => $data->email,
                            'profile_pic' => $data->profile_pic,
                            'usertype'    => $data->usertype,
                            'logged_in'   => true
                          );

        $this->session->set_userdata($user_data);
        echo json_encode('index.php');
      }else{
        echo json_encode('invalid');
      }
    }

    public function forget_password(){
      $username = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('username')))));
      $email = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('email')))));
      $ins = array('username' => $username, 'email' => $email);
      $data = $this->enrollment_model->get_user_data('tbl_users', $ins);
      if($data != NULL){
        echo json_encode('reset_pass');
      }else{
        echo json_encode('invalid');
      }
    }

    public function change_password(){
      $username = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('username')))));
      $email = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('email')))));
      $new_pword = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('new_pword')))));
      $confirm_pword = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('confirm_pword')))));

      //var_dump($username); var_dump($email); var_dump($new_pword); var_dump($confirm_pword); 

      $data = array('username' => $username, 'email' => $email );
      $newpass = array('password' => md5($confirm_pword));
      $result = $this->enrollment_model->reset_pass('tbl_users', $data, $newpass );

      if($result == 'success'){
        echo json_encode('success');
      }else{
        echo json_encode($result);
      }

    }

    public function validate_sign_up(){
      $first_name  = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('first_name')))));
      $last_name = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('last_name')))));
      $username = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('username')))));
      $email     = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('email')))));
      $password  = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('confirm_password')))));

      $ins = array('first_name'=>$first_name, 'last_name'=>$last_name, 'user_name'=>$username, 'email'=>$email, 'password'=>md5($password));
      $ins_2 = array('first_name'=>$first_name, 'last_name'=>$last_name, 'user_name'=>$username, 'email'=>$email);

      $tbl_user = array('name'=>$first_name, 'last_name'=>$last_name, 'username'=>$username, 'email'=>$email, 'password'=>md5($password));
      $tbl_user_2 = array('name'=>$first_name, 'last_name'=>$last_name, 'username'=>$username, 'email'=>$email);

      $result = $this->enrollment_model->insert_new_student('tbl_student_account', $ins, $tbl_user, $ins_2, $tbl_user_2);

       if($result == 'success'){

      //   $user_data = array(
      //     'user_id' => $data->user_id,
      //     'name' => $data->name,
      //     'profile_pic' => $data->profile_pic,
      //     'usertype' => $data->usertype,
      //     'logged_in' => true
      //   );
      //   $this->session->set_userdata($user_data);

        //echo 'success';
         echo json_encode('success');

      }else{
        //echo $result;
        echo json_encode($result);
      }

    }

    public function profile_pic(){
      //$this->session->unset_userdata('profile_pic');
      //$id = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('user_id2'))))); 
      $config['upload_path']=  FCPATH."assets_1/profile/";
      $config['allowed_types']='gif|jpg|png|jpeg';
      $config['max_size']='5048000';
      $config['max_width']='5000';
      $config['max_height']='5000';

      $id = $this->session->userdata('user_id');

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('picz'))
      {
        $error= $this->upload->display_errors();
        echo $error;  
      }else{

        $data=array('upload_data'=> $this->upload->data());
        $image = $_FILES['picz']['name'];
        
        //var_dump($id);
        
        $ins = array(
          'profile_pic' => "assets_1/profile/".$image,
        );
        $ins_id = array('user_id' => $id);
        $res = $this->enrollment_model->update_data('tbl_users', $ins, $ins_id);
        if($res == 'success'){

          echo $res;
        }else{
          echo 'Oops, something went wrong...';
        }
      }
    }

    public function req_registration(){
   
      $user_name = $this->session->userdata('name');

      $toCreate = array(
        'requirements/'.$user_name.'/registration_form/',
        'requirements/'.$user_name.'/brgy_clearance/',
        'requirements/'.$user_name.'/birth_cert/',
        'requirements/'.$user_name.'/picture/',
        'requirements/'.$user_name.'/NCAE/',
        'requirements/'.$user_name.'/school_credentials/'
      );
      
      $permissions = 0777;
      
      foreach ($toCreate as $dir) {
        if(!is_dir($dir)){
          mkdir($dir, $permissions, TRUE);
        }
      }

      $config['upload_path']=  FCPATH."requirements/$user_name/registration_form/";
      $config['allowed_types']='docx|doc|pdf|txt|xls|xlsx|ppt|pptx|ods|odt|rar|zip';
      $config['max_size']='5048000';
      $config['max_width']='5000';
      $config['max_height']='5000';

      $id = $this->session->userdata('user_id');

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('reg'))
      {
        $error= $this->upload->display_errors();
        echo $error;  
      }else{

        $data=array('upload_data'=> $this->upload->data());
        $registration = $_FILES['reg']['name'];

        $reg = str_replace(" ", "_", $registration);
        
        $ins_update = array(
          'reg_form' => "requirements/$user_name/registration_form/".$reg,
        );
        $ins_id = array('user_id' => $id);
        $res = $this->enrollment_model->update_data('tbl_users', $ins_update, $ins_id);
        if($res == 'success'){

          echo $res;
        }else{
          echo 'Oops, something went wrong...';
        }
      }
    }

    public function req_credentials(){
   
      $user_name = $this->session->userdata('name');

      $toCreate = array(
        'requirements/'.$user_name.'/registration_form/',
        'requirements/'.$user_name.'/brgy_clearance/',
        'requirements/'.$user_name.'/birth_cert/',
        'requirements/'.$user_name.'/picture/',
        'requirements/'.$user_name.'/NCAE/',
        'requirements/'.$user_name.'/school_credentials/'
      );
      
      $permissions = 0777;
      
      foreach ($toCreate as $dir) {
        if(!is_dir($dir)){
          mkdir($dir, $permissions, TRUE);
        }
      }

      $config['upload_path']=  FCPATH."requirements/$user_name/school_credentials/";
      $config['allowed_types']='docx|doc|pdf|txt|xls|xlsx|ppt|pptx|ods|odt|rar|zip';
      $config['max_size']='5048000';
      $config['max_width']='5000';
      $config['max_height']='5000';

      $id = $this->session->userdata('user_id');

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('credential'))
      {
        $error= $this->upload->display_errors();
        echo $error;  
      }else{

        $data=array('upload_data'=> $this->upload->data());
        $credentials = $_FILES['credential']['name'];

        $cred_ = str_replace(" ", "_", $credentials);
        
        $ins_update = array(
          'school_credential' => "requirements/$user_name/school_credentials/".$cred_,
        );
        $ins_id = array('user_id' => $id);
        $res = $this->enrollment_model->update_data('tbl_users', $ins_update, $ins_id);
        if($res == 'success'){

          echo $res;
        }else{
          echo 'Oops, something went wrong...';
        }
      }
    }

    public function req_brg_clearance(){

      $user_name = $this->session->userdata('name');

      $toCreate = array(
        'requirements/'.$user_name.'/registration_form/',
        'requirements/'.$user_name.'/brgy_clearance/',
        'requirements/'.$user_name.'/birth_cert/',
        'requirements/'.$user_name.'/picture/',
        'requirements/'.$user_name.'/NCAE/',
        'requirements/'.$user_name.'/school_credentials/'
      );
      
      $permissions = 0777;
      
      foreach ($toCreate as $dir) {
        if(!is_dir($dir)){
          mkdir($dir, $permissions, TRUE);
        }
      }

      $config['upload_path']=  FCPATH."requirements/$user_name/brgy_clearance/";
      $config['allowed_types']='docx|doc|pdf|txt|xls|xlsx|ppt|pptx|ods|odt|rar|zip';
      $config['max_size']='5048000';
      $config['max_width']='5000';
      $config['max_height']='5000';

      $id = $this->session->userdata('user_id');

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('filename'))
      {
        $error= $this->upload->display_errors();
        echo $error;  
      }else{
        $data=array('upload_data'=> $this->upload->data());
        $brgy_clearance = $_FILES['filename']['name'];

        $brgy_clearance_ = str_replace(" ", "_", $brgy_clearance);
        
        $ins_update = array(
          'brgy_clearance' => "requirements/$user_name/brgy_clearance/".$brgy_clearance_,
        );
        $ins_id = array('user_id' => $id);
        $res = $this->enrollment_model->update_data('tbl_users', $ins_update, $ins_id);
        if($res == 'success'){

          echo $res;
        }else{
          echo 'Oops, something went wrong...';
        }
      }
    }

    public function req_upload_picture(){

      $user_name = $this->session->userdata('name');

      $toCreate = array(
        'requirements/'.$user_name.'/registration_form/',
        'requirements/'.$user_name.'/brgy_clearance/',
        'requirements/'.$user_name.'/birth_cert/',
        'requirements/'.$user_name.'/picture/',
        'requirements/'.$user_name.'/NCAE/',
        'requirements/'.$user_name.'/school_credentials/'
      );
      
      $permissions = 0777;
      
      foreach ($toCreate as $dir) {
        if(!is_dir($dir)){
          mkdir($dir, $permissions, TRUE);
        }
      }

      $config['upload_path']=  FCPATH."requirements/$user_name/picture/";
      $config['allowed_types']='docx|doc|pdf|txt|xls|xlsx|ppt|pptx|ods|odt|rar|zip|gif|jpg|png|jpeg';
      $config['max_size']='5048000';
      $config['max_width']='5000';
      $config['max_height']='5000';

      $id = $this->session->userdata('user_id');

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('picture'))
      {
        $error= $this->upload->display_errors();
        echo $error;  
      }else{
        $data=array('upload_data'=> $this->upload->data());
        $picture = $_FILES['picture']['name'];

        $pix_ = str_replace(" ", "_", $picture);
        
        $ins_update = array(
          'valid_picture' => "requirements/$user_name/picture/".$pix_,
        );
        $ins_id = array('user_id' => $id);
        $res = $this->enrollment_model->update_data('tbl_users', $ins_update, $ins_id);
        if($res == 'success'){

          echo $res;
        }else{
          echo 'Oops, something went wrong...';
        }
      }
    }

    public function req_birth_cert(){

      $user_name = $this->session->userdata('name');

      $toCreate = array(
        'requirements/'.$user_name.'/registration_form/',
        'requirements/'.$user_name.'/brgy_clearance/',
        'requirements/'.$user_name.'/birth_cert/',
        'requirements/'.$user_name.'/picture/',
        'requirements/'.$user_name.'/NCAE/',
        'requirements/'.$user_name.'/school_credentials/'
      );
      
      $permissions = 0777;
      
      foreach ($toCreate as $dir) {
        if(!is_dir($dir)){
          mkdir($dir, $permissions, TRUE);
        }
      }

      $config['upload_path']=  FCPATH."requirements/$user_name/birth_cert/";
      $config['allowed_types']='docx|doc|pdf|txt|xls|xlsx|ppt|pptx|ods|odt|rar|zip|gif|jpg|png|jpeg';
      $config['max_size']='5048000';
      $config['max_width']='5000';
      $config['max_height']='5000';

      $id = $this->session->userdata('user_id');

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('birth_cert'))
      {
        $error= $this->upload->display_errors();
        echo $error;  
      }else{
        
        $data=array('upload_data'=> $this->upload->data());
        $birth = $_FILES['birth_cert']['name'];

        $birth_ = str_replace(" ", "_", $birth);
        
        $ins_update = array(
          'birth_cert' => "requirements/$user_name/birth_cert/".$birth_,
        );
        $ins_id = array('user_id' => $id);
        $res = $this->enrollment_model->update_data('tbl_users', $ins_update, $ins_id);
        if($res == 'success'){
          echo $res;
        }else{
          echo 'Oops, something went wrong...';
        }
      }
    }

    public function req_ncae(){

      $user_name = $this->session->userdata('name');

      $toCreate = array(
        'requirements/'.$user_name.'/registration_form/',
        'requirements/'.$user_name.'/brgy_clearance/',
        'requirements/'.$user_name.'/birth_cert/',
        'requirements/'.$user_name.'/picture/',
        'requirements/'.$user_name.'/NCAE/',
        'requirements/'.$user_name.'/school_credentials/'
      );
      
      $permissions = 0777;
      
      foreach ($toCreate as $dir) {
        if(!is_dir($dir)){
          mkdir($dir, $permissions, TRUE);
        }
      }

      $config['upload_path']=  FCPATH."requirements/$user_name/NCAE/";
      $config['allowed_types']='docx|doc|pdf|txt|xls|xlsx|ppt|pptx|ods|odt|rar|zip|gif|jpg|png|jpeg';
      $config['max_size']='5048000';
      $config['max_width']='5000';
      $config['max_height']='5000';

      $id = $this->session->userdata('user_id');

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('ncae'))
      {
        $error= $this->upload->display_errors();
        echo $error;  
      }else{
        $data=array('upload_data'=> $this->upload->data());
        $ncae = $_FILES['ncae']['name'];

        $ncae_ = str_replace(" ", "_", $ncae);
        
        $ins_update = array(
          'ncae' => "requirements/$user_name/NCAE/".$ncae_,
        );
        $ins_id = array('user_id' => $id);

        $res = $this->enrollment_model->update_data('tbl_users', $ins_update, $ins_id);
        if($res == 'success'){
          echo 'success';
        }else{
          echo $res;
        }
      }
    }

    public function student_records(){
      $result = array('data' => []);
      $data = $this->enrollment_model->student_data();
      //var_dump($data);
      foreach($data as $key => $value){
        // if($value['status'] == '-'){
        //   $status = '<td style="color:red;">pending</td>';
        // }else{
        //   $status = $value['status'];
        // }
        if($value['date_enrolled'] == '-'){
          $date_enrolled = '';
        }else{
          $date_enrolled = $value['date_enrolled'];
        }

        //$btn_birth = '<a href="'.$value['brgy_clearance'].'" id="yes_btn"  class="btn btn-danger waves-effect waves-light" download >DL</i></a>';
        $btn_view_requirements = '<button class="btn btn-danger waves-effect waves-light" onclick="btn_view()">requirements</button>';
        $btn_student_data  = '<button class="btn btn-danger wave-effect waves-light" onclick="btn_view_details(\''.$value['first_name'].'\',
                                                                                                               \''.$value['last_name'].'\',
                                                                                                               \''.$value['mid_name'].'\',
                                                                                                               \''.$value['address'].'\',
                                                                                                               \''.$value['contactno'].'\',
                                                                                                               \''.$value['course'].'\',
                                                                                                               \''.$value['status'].'\',
                                                                                                               \''.$value['birthdate'].'\',
                                                                                                              )">student details</button>';

        $result['data'][] = [
                              $value['entry_date'],
                              $value['course'],
                              $value['status'],
                              $date_enrolled,
                              //$btn_birth,
                              $btn_view_requirements,
                              $btn_student_data
                            ];
      }
      echo json_encode($result);
    }

    public function notif_no(){
      $notif_stats_no = array();

      $notif_new = array('status' => 'new');
      $notif_new_no = $this->enrollment_model->get_notif_numrows('notification', $notif_new);

      // $notif_read = array('status' => 'read');
      // $notif_read_no = $this->enrollment_model->get_notif_numrows('notification', $notif_read);

      $notif_stats_no[] = ['new' => $notif_new_no];

      echo json_encode($notif_stats_no);                 
    }

    public function get_notif(){
       $data = $this->enrollment_model->get_notification();

       foreach($data as $key => $value){
        if($value['status'] == 'new'){

          $status = '<a href="#" style="color:red;" onclick="mark_as_read(\''.$value['message'].'\',\''.$value['notif_id'].'\',\''.$value['availability'].'\')">new</a>';
          $message = '<a href="#" onclick="mark_as_read(\''.$value['message'].'\',\''.$value['notif_id'].'\',\''.$value['availability'].'\')"><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap; color:red">'.$value['message'].'</span></a>';

        }else{

          $status = '<div style="color:black;">'.$value['status'].'</div>';
          $message = '<a href="#" onclick="mark_as_read(\''.$value['message'].'\',\''.$value['notif_id'].'\',\''.$value['availability'].'\')"><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap; color:black;">'.$value['message'].'</span></a>';
        }

        // $notif_remove = '<a href="#" style="color:blue;" onclick="notif_remove(\''.$value['notif_id'].'\',\''.$value['student_id'].'\')">remove</a>';

        $notif_remove = '<button class="btn btn-danger waves-effect waves-light btn-sm" onclick="notif_remove(\''.$value['notif_id'].'\',\''.$value['student_id'].'\')">remove</button>';
        $read = '<button class"btn btn-danger wave-effect waves-light" id="read" onclick="mark_as_read()"></button?';

          $result['data'][] = [ $value['date'], 
                                $message, 
                                $status,
                                $notif_remove 
                              ];
       }
       echo json_encode($result);
    }

    public function mark_msg_read(){
      $read = $this->input->post('mark_read');
      $notif_id = $this->input->post('notif_id');
      $student_id = $this->session->userdata('user_id');

      $msg_read = array('status' => $read);
      $uid = array('student_id' => $student_id, 'notif_id' => $notif_id);
      $result = $this->enrollment_model->read_msg($msg_read, $uid);
      if($result == 'read'){
        echo 'read';
      }
    }

    public function remove_notif(){
      $notif_id  = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('notif_id')))));
      $stud_id  = $this->security->xss_clean(trim(addslashes(htmlspecialchars($this->input->post('stud_id')))));

      var_dump($notif_id); var_dump($stud_id);

      $notif_id_stud_id = array('notif_id' => $notif_id, 'student_id' => $stud_id);
      
      $result = $this->enrollment_model->notification_remove('notification', $notif_id_stud_id);
      if($result == 'success'){
          echo 'success';
      }else{
        echo 'error';
      }
    }

    public function requirements(){
      $this->load->helper('directory');
      $user_name = $this->session->userdata('name');
      $result = array('data' => []);
      $btn_birth_dir = array();
      $data = $this->enrollment_model->student_data();

      $dir_birth = directory_map(FCPATH.'requirements/'.$user_name.'/birth_cert',1);
      
      foreach($dir_birth as $key => $fname){

        $path = $_SERVER['DOCUMENT_ROOT']."/btv_en/requirements/".$user_name."/birth_cert/".$fname;

        $btn_birth_dir[] = '<p><a class="btn btn-danger btn-sm waves-effect waves-light" href="'.base_url().'requirements/'.$user_name.'/birth_cert/'.$fname.'" id="dl_btn"  download >dowload</a></p>';

        $btn_delete[] = '<p><button class="btn btn-danger btn-sm wave-effect waves-light" onclick="delete_file(\''.$path.'\',\''.$fname.'\')">delete</button></p>'; 
      }

      foreach($data as $key => $value){
        // if($value['status'] == '-'){
        //   $status = 'pending';
        // }else{
        //   $status = '';
        // }
        if($value['date_enrolled'] == '-'){
          $date_enrolled = 'on process';
        }else{
          $date_enrolled = '';
        }

        $btn_birth = '<a href="'.$value['brgy_clearance'].'" id="yes_btn"  class="btn btn-danger btn-sm waves-effect waves-light" download >DL</a>';
        //$btn_view = '<button class="btn btn-danger waves-effect waves-light" onclick="btn_view()">view</button>';
        $btn_reg  = '<button class="btn btn-danger btn-sm wave-effect waves-light" onclick="btn_view_reg()">ncae</button>';

        $result['data'][] = [
                              $value['entry_date'],
                              $value['course'],
                              $value['status'],
                              //$date_enrolled,
                              $btn_birth,
                              $btn_birth_dir,
                              $btn_delete
                            ];
        
      }
      echo json_encode($result);
    }

    public function delete_file(){
      $dir = $this->input->post('path');
      var_dump($dir);
      unlink($dir);
    }

    public function get_requirements(){
       $result = array('data' => []);
       $data = $this->enrollment_model->doc_requirements();
       foreach($data as $key => $value){

        $btn_reg = '<button class="btn btn-danger wave-effect waves-light" onclick="btn_view_reg()"></button>';

       //  $result['data'][] = [
       //                       $value['reg_form'], 
       //                       $value['brgy_clearance'],
       //                       $value['valid_picture'],
       //                       $value['school_credentials'],
       //                       $value['birth_cert'],
       //                       $value['ncae'] 
       //                      ];                           
        }
       // echo json_encode($result);
    }

    public function form(){
      if(!file_exists(APPPATH.'views/pages/form.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{
        $reg = $this->enrollment_model->get_region();
        foreach($reg->result() as $r) {
          $d[] = $r->regDesc."|".$r->regCode;
        }

        $data["reg"] = implode("||", $d);
        $data["title"] = "Form";
        $this->load->view("pages/form", $data);
      } 
    }

    public function reg_stat()
    {
      if(!file_exists(APPPATH.'views/pages/reg_stat.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{ 
        $data["id"] = $this->enrollment_model->get_user_login('test', 'test');
        $data["title"] = "BTV Inc Online Enrollment";
        $data['student_status'] = $this->enrollment_model->student_data();
        $this->load->view("mdbtemp/header");
        $this->load->view("pages/reg_stat", $data);
        $this->load->view("mdbtemp/footer");
      }
    }

    public function exam()
    {
      if(!file_exists(APPPATH.'views/pages/exam.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{  
        $data["id"] = $this->enrollment_model->get_user_login('test', 'test');
        $data["title"] = "BTV Inc Online Enrollment";
        $this->load->view("mdbtemp/header");
        $this->load->view("pages/exam", $data);
        $this->load->view("mdbtemp/footer");
      }
    }

    public function exam_prop()
    {
      if(!file_exists(APPPATH.'views/pages/exam_prop.php'))
      {
        show_404();
      }
      if(!isset($_SESSION['logged_in'])){
            redirect('login');
      }else{  
        $result = $this->enrollment_model->exam_tnt();
        // $result2 = $this->enrollment_model->exam_tlt();
        // $result3 = $this->enrollment_model->exam_olt();
        $row = [];

        foreach ($result->result() as $v) {
          $v0 = $v1 = $v2 = $v3 = $v4 = $v5  = $v6 = $v7 = $v8 = $v9 = $v10 = "";

          $v->test_no       != "" ? $v0 = $v->test_no       : $v0 = " ";
          $v->question      != "" ? $v1 = $v->question      : $v1 = " ";
          $v->answer        != "" ? $v2 = $v->answer        : $v2 = " ";
          $v->illustration  != "" ? $v3 = $v->illustration  : $v3 = " ";
          $v->subquestion   != "" ? $v4 = $v->subquestion   : $v4 = " ";
          $v->let_a         != "" ? $v5 = $v->let_a         : $v5 = " ";
          $v->let_b         != "" ? $v6 = $v->let_b         : $v6 = " ";
          $v->let_c         != "" ? $v7 = $v->let_c         : $v7 = " ";
          $v->let_d         != "" ? $v8 = $v->let_d         : $v8 = " ";
          $v->illus_width   != "" ? $v9 = $v->illus_width   : $v9 = " ";
          $v->category      != "" ? $v10 = $v->category     : $v10 = " ";

          $row[] = $v0."|".$v1."|".$v2."|".$v3."|".$v4."|".$v5."|".$v6."|".$v7."|".$v8."|".$v9."|".$v10;
        }

        // foreach ($result2->result() as $v) {
        //   $v0 = $v1 = $v2 = $v3 = $v4 = $v5 = $v6 = $v7 = $v8 = $v9 = "";
  
        //   $v->test_no      != "" ? $v0 = $v->test_no      : $v0 = " ";
        //   $v->question     != "" ? $v1 = $v->question     : $v1 = " ";
        //   $v->answer       != "" ? $v2 = $v->answer       : $v2 = " ";
        //   $v->illustration != "" ? $v3 = $v->illustration : $v3 = " ";
        //   $v->subquestion  != "" ? $v4 = $v->subquestion  : $v4 = " ";
        //   $v->let_a        != "" ? $v5 = $v->let_a        : $v5 = " ";
        //   $v->let_b        != "" ? $v6 = $v->let_b        : $v6 = " ";
        //   $v->let_c        != "" ? $v7 = $v->let_c        : $v7 = " ";
        //   $v->let_d        != "" ? $v8 = $v->let_d        : $v8 = " ";
        //   $v->illus_width  != "" ? $v9 = $v->illus_width  : $v9 = " ";
  
        //   $row[] = $v0."|".$v1."|".$v2."|".$v3."|".$v4."|".$v5."|".$v6."|".$v7."|".$v8."|".$v9;
        // }
  
        // foreach ($result3->result() as $v) {
        //   $v0 = $v1 = $v2 = $v3 = $v4 = $v5 = $v6 = $v7 = $v8 = $v9 = "";
  
        //   $v->test_no      != "" ? $v0 = $v->test_no      : $v0 = " ";
        //   $v->question     != "" ? $v1 = $v->question     : $v1 = " ";
        //   $v->answer       != "" ? $v2 = $v->answer       : $v2 = " ";
        //   $v->illustration != "" ? $v3 = $v->illustration : $v3 = " ";
        //   $v->subquestion  != "" ? $v4 = $v->subquestion  : $v4 = " ";
        //   $v->let_a        != "" ? $v5 = $v->let_a        : $v5 = " ";
        //   $v->let_b        != "" ? $v6 = $v->let_b        : $v6 = " ";
        //   $v->let_c        != "" ? $v7 = $v->let_c        : $v7 = " ";
        //   $v->let_d        != "" ? $v8 = $v->let_d        : $v8 = " ";
        //   $v->illus_width  != "" ? $v9 = $v->illus_width  : $v9 = " ";
  
        //   $row[] = $v0."|".$v1."|".$v2."|".$v3."|".$v4."|".$v5."|".$v6."|".$v7."|".$v8."|".$v9;
        // }

        $rows = implode("||", $row);
        $data['sets'] = $rows;

        $data["id"] = $this->enrollment_model->get_user_login('test', 'test');
        $data["title"] = "BTV Inc Online Enrollment";
        $data["user_id"] = $this->session->userdata('user_id');
        $this->load->view("mdbtemp/header");
        $this->load->view("pages/exam_prop", $data);
        $this->load->view("mdbtemp/footer");
      }
    }

    public function insert_answer(){
      $this->load->helper('url');
      
      $student_id = $this->session->userdata('user_id');
      $id = array('student_id' => $student_id);

      $val = http_build_query($this->input->get());
      $choice = explode('=', $val);
      $category = explode('&', $choice[1]);
      $choosed = explode('&', $choice[2]);

      //var_dump($category[0]);
      //var_dump($choosed[0]);
      //var_dump($choice[3]);
      
      $ans_data = array('q_id' => $choice[3],'category' => $category[0]);
      $ans = $this->enrollment_model->get_answer('exam_qstions',$ans_data);

      // var_dump($ans->q_id);
      // var_dump($ans->category);
      // var_dump($ans->answer);

      $score = 0;
      if($choice[3] == $ans->q_id && $category[0] == $ans->category && $choosed[0] == $ans->answer){
          $score = 1;
      }else{
          $score = 0;
      }

      $data = array('app_id' => $student_id, 'type' => $category[0], 'choice' => $choosed[0], 'item_no' => $choice[3], 'answer' => $score);
      $result = $this->enrollment_model->answer($data, $student_id, $id, $choice[3]);

      if($result == 'inserted'){
          echo 'success';
        }else{
          echo 'error..';
        }
    }

    public function match_answer(){
      $user_id = $this->input->post('user_id');
      $u_id = array('app_id' => $user_id);

      $exam_answer_tnt = 0;
      $exam_answer_tlt = 0;
      $exam_answer_olt = 0;
      $total_score     = 0;

      $result = $this->enrollment_model->get_exam('exam_answd_sheets', $user_id, $u_id);

      foreach($result as $key => $value){

        if($value['type'] == 'TNT'){

          $exam_answer_tnt += intval($value['answer']);
        }
        if($value['type'] == 'TLT'){

          $exam_answer_tlt += intval($value['answer']);
        }
        if($value['type'] == 'OLT'){

          $exam_answer_olt += intval($value['answer']);
        }
      }

      $total_score = $exam_answer_tnt + $exam_answer_tlt + $exam_answer_olt;
      $date_today = date('Y-m-d');

      // var_dump($exam_answer_tnt);
      // var_dump($exam_answer_tlt);
      // var_dump($exam_answer_olt);

      $match_id = array('app_id'=> $user_id);

      $data = array('app_id' => $user_id, 
                    'date_taken' => $date_today, 
                    'tnt_score' => $exam_answer_tnt,
                    'tlt_score' => $exam_answer_tlt,
                    'olt_score' => $exam_answer_olt,
                    'total_score' => $total_score
                   );

      $res = $this->enrollment_model->insert_score('appl_exams_file', $user_id, $match_id, $data);

      if($res == 'success'){
        echo 'success';

      }
    }

    public function province() {
      $regCode = $_POST['regCode'];
      $result = $this->enrollment_model->get_province($regCode);
      $output = [];
      $i = 0;
      foreach ($result as $value) {
        $output[$i]['provDesc'] = $value->provDesc;
        $output[$i]['provCode'] = $value->provCode;
        $i++;
      }
      echo json_encode($output);
    }

    public function citymun() {
      $provCode = $_POST['provCode'];
      $result = $this->enrollment_model->get_citymun($provCode);
      $output = [];
      $i = 0;
      foreach ($result as $value) {
        $output[$i]['citymunDesc'] = $value->citymunDesc;
        $output[$i]['citymunCode'] = $value->citymunCode;
        $i++;
      }
      echo json_encode($output);
    }

    public function brgy() {
      $citymunCode = $_POST['citymunCode'];
      $result = $this->enrollment_model->get_brgy($citymunCode);
      $output = [];
      $i = 0;
      foreach ($result as $value) {
        $output[$i]['brgyDesc'] = $value->brgyDesc;
        $output[$i]['brgyCode'] = $value->brgyCode;
        $i++;
      }
      echo json_encode($output);
    }

    public function enroll_client(){
        $date_now = date('Y-m-d');
        $numst = '';
        $numst = $_POST['num_street'];
        if($numst != ''){
                $numst = $numst.', ';
            }
        $brgy = $_POST['brgy'];
        $brgyval = explode('|', $brgy);
        $brgy = $brgyval[1];
        
        $cityMun = $_POST['citymun'];
        $cityMunval = explode('|', $cityMun);
        $cityMun = $cityMunval[1];

        $prov = $_POST['prov'];
        $provval = explode('|', $prov);
        $prov = $provval[1];

        $region = $_POST['region'];
        $regionval = explode('|', $region);
        $region = $regionval[1];

        $completeAdd = $numst . $brgy . ', ' . $cityMun . ', ' . $prov;

        $bCityMun = explode("|",$_POST['birth_cityMun']);
        $bProv = explode("|", $_POST['birth_prov']);
        $bRegion = explode("|", $_POST['birth_region']);
        $birthPlace = $bCityMun[1].', '.$bProv[1].', '.$bRegion[1];

        $student_id = $this->session->userdata('user_id');
        $id = array('student_id' => $student_id);

        $data = array(
          'uli_no'=>'-',
          'student_id'=> $student_id,
          'entry_date'=>$date_now,
          'first_name'=>$_POST['firstname'],
          'last_name'=>$_POST['lastname'],
          'mid_name'=>$_POST['midname'],
          'ext_name'=>$_POST['name_ext'],
          'address'=>$completeAdd,
          'region'=>$region,
          'district'=>$_POST['district'],
          'email_fb'=>$_POST['email_fb'],
          'contactno'=>$_POST['contactno'],
          'nationality'=>$_POST['nationlty'],
          'sex' => $_POST['sex'],
          'civil_stat'=>$_POST['cstatus'],
          'emp_stat'=>$_POST['empstatus'],
          'birthdate'=>$_POST['birthdate'],
          'birthplace'=>$birthPlace,
          'educ_attaind'=>$_POST['edattain'],
          'guardian_name'=>$_POST['parentGuardian'],
          'guardian_address'=>$_POST['parent_add'],
          'classification'=>$_POST['clclass'],
          'course' => $_POST['course'],
          'date_enrolled' => '-',
          'disability'=>'-',
          'disab_cause'=>'-',
          'picture'=>'-',
          'status'=>'Pending',
          'remarks'=>'-'
        );
        $result = $this->enrollment_model->enroll_sub($data, $student_id, $id);
        if ($result == 'inserted') {
          echo 'created';
        }else{
          echo $result;
        }
        // if($result == 'updated'){
        //   echo 'updated';
        // }else{
        //   echo $result;
        // } 
    }

    // public function dashboard(){
      
    // }
}