<style type="text/css"> 
  .tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
    cursor: pointer;
  }
  
  .tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
  
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
  }
  
  .tooltip.active .tooltiptext {
    visibility: visible;
  }
</style>


  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar" style="padding-left:20px; background-color: #b41c11;">
      <div class="container-fluid" style="background-color: #b41c11;">

        <!-- Brand -->
        <!-- <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank"> -->
        <!-- <div class="logo-wrapper" style="margin-right:10px;">
        
        </div> -->
          
        <h3 align="left" style="margin-bottom:0px; padding-bottom:0px; ">
          <img src="<?php echo base_url(); ?>/mdbassets/img/btv_logo_sm.png" class="img-fluid" alt="" style="height:60px;">
          <strong style="height:60px; color:#fff;">Online Enrollment</strong>
        </h3>
        <!-- </a> -->

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:30px;">
          
          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>" style="color:#fff;">Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>form" style="color:#fff;">Register</a>
            </li>
            <li class="nav-item">
                <?php foreach ($student_datas as $key => $value): ?>
                <?php if($value['status']=='Pending'){ ?>
                
                  <a class="nav-link waves-effect " href="javascript:void(0)" disabled style="color:#fff;" title="Registration submitted but has not been reviewed by the school admin" >Requirements <i style="color: orangered;">pending</i></a>

                  <?php }elseif($value['status']=='Received'){?>

                      <a class="nav-link waves-effect" href="javascript:void(0)" disabled style="color:#fff;" title="registration is received and reviewed by school admin but enrollment is not yet confirmed" >Requirements<i style="color: orangered;"> received</i></a>

                  <?php }elseif($value['status']=='Wait List'){?> 

                       <a class="nav-link waves-effect" href="javascript:void(0)" disabled style="color:#fff;" title="Waiting for available scholarship, waiting for approval to be officially registered" >Requirements<i style="color: orangered;"> wait list</i></a>
                  
                  <?php }elseif($value['status']==''){?>

                      <a class="nav-link waves-effect" href="javascript:void(0)" disabled style="color:#fff;" title="Register first and wait for the approval for you to be able to upload your requirements" >Requirements<i style="color: orangered;"> register first</i></a>


                  <?php }else{?>

                      <a class="nav-link waves-effect" href="<?php echo base_url(); ?>student_requirements" disabled style="color:#fff;" title="avialable you can now upload your requirements" >Requirements<i style="color: orangered;"> upload</i></a>
                  <?php }?>
                  
               <?php endforeach?>
            </li>
            <li class="nav-item">
             <a class="nav-link waves-effect" href="<?php echo base_url(); ?>profile" style="color:#fff;">Account</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link waves-effect"  href="<?php echo base_url(); ?>notification" style="color:#fff;">Notifications <i style="color: orangered;" id="notif_new"></i> </a>
            </li>

            <li class="nav-item active">
            <?php foreach ($student_datas as $key => $value): ?>
            <?php if($value['status']=='Pending'){?>

              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records"  style="color:#fff;" title="Registration submitted but has not been reviewed by the school admin">My Records<i style="color: orangered;"> pending</i></a>

            <?php }elseif($value['status']=='Received'){?>

               <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records"  style="color:#fff;" title="registration is received and reviewed by school admin but enrollment is not yet confirmed">My Records<i style="color: orangered;"> received</i></a>

            <?php }elseif($value['status']=='Wait List') {?>

              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records"  style="color:#fff;" title="Waiting for available scholarship, waiting for approval to be officially registered">My Records<i style="color: orangered;"> wait list</i></a>

            <?php }elseif($value['status']=='Scholarship Enrolled'){?>

              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records"  style="color:#fff;" title="Approved registration with full scholarship availment and submitted complete requirements">My Records<i style="color: orangered;"> scholarship</i></a>

            <?php }elseif($value['status']=='Regular Enrolled'){?>

              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records"  style="color:#fff;" title="Officially enrolled but did not avail any scholarship">My Records<i style="color: orangered;"> regular</i></a>

            <?php }elseif($value['status']=='Declined'){?>

               <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records"  style="color:#fff;" title="Enrollees who cancelled their registration">My Records<i style="color: orangered;"> declined</i></a>

            <?php }else{?>
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records"  style="color:#fff;">My Records</a>

            <?php }?>
             <?php endforeach?>
            </li>
          </ul>
         
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect" target="_blank">
                <i >WELCOME</i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a  class=" nav-link waves-effect " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <i ><?php echo $this->session->userdata('name'); ?>&nbsp[ <?php echo $this->session->userdata('usertype'); ?> ]</i>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#" onclick="logout()" data-color="red">LOG OUT</a>
                </div>
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5" style="padding-left:0px;">
    <div class="container-fluid mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn" style="">

        <!--Grid column-->
        <div class="col-lg-12 col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <!-- <div class="card-header">Line chart</div> -->

            <!--Card content-->
            <div class="card-body">
              <div class='table-responsive'>
              <table class="table table-striped table-bordered "  id="tbl_student_records" style="width: 100%;" >
                <thead>
                  
                    <th >DATE OF APPLICATION</th>
                    <th >COURSE</th>
                    <th >ENROLLMENT STATUS</th>
                    <th >DATE ENROLLED</th>
                    <th >REQUIREMENTS</th>
                    <th >STUDENT DATA</th>
                 
                </thead>
                <tbody>
                  <!-- <?php //foreach($student_datas as $key => $value):?>
                  <tr>
                    <td><?php //echo $value['entry_date'];?> </td>
                    <td><?php //echo $value['course'];?> </td>
                    <td><?php //echo $value['status'];?> </td>
                    <td><? //echo $value['date_enrolled'];?> </td>
                    <td></td>
                  </tr>
                <?php// endforeach ?> -->
                </tbody>
              </table>
              </div>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
  </main>
   <!--Main layout-->

  <!-- MODAL REQUIERMENTS-->
  <div class="modal fade" id="view_requirements" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">REQUIREMENTS</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <!-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->
           <table class="table table-striped table-bordered "  id="tbl_student_requirements" style="width: 100%;" >
                <thead>
                    <th >FILE NAME</th>
                    <th >BRGY. CLEARANCE</th>
                    <th >PICTURE</th>
                    <th >SCHOOL CREDENTIALS</th>
                    <th >BIRTH CERTIFICATE</th>
                    <th >ACTION</th>
                </thead>
                <tbody>
            
                </tbody>
              </table>
          </div>
          <img src="" class="img-fluid">           
        </div>
        <!--Footer-->
<!--         <div class="modal-footer">
          <a role="button" class="btn btn-info">Get it now
            <i class="far fa-gem ml-1"></i>
          </a>
          <a role="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No,
            thanks</a>
        </div> -->
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- MODAL REQUIERMENTS-->

    <!-- MODAL REGISTRATION-->
  <div class="modal fade" id="view_registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">STUDENTS DETAILS</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">

              <div class="row">
              <div class="col-sm-6">

                <div class="form-group">
                <label class="col-sm-6 " > FIRST NAME: <span style="color:red;">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" id="first_name" name="first_name" autocomplete="off" onkeypress="return nameOnly(event)" placeholder="ENTER FIRST NAME" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-6 " > LAST NAME: <span style="color:red;">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" id="last_name" name="last_name" autocomplete="off" onkeypress="return nameOnly(event)" placeholder="ENTER LAST NAME" class="form-control" required>
                  </div>
                  </div>

                <div class="form-group">
                <label class="col-sm-6 " > MIDDLE NAME: <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="text" id="middle_name" name="middle_name" autocomplete="off" onkeypress="return nameOnly(event)" placeholder="ENTER MIDDLE NAME" class="form-control" required>
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-6 " > ADDRESS: <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="text" id="address" name="address" autocomplete="off" onkeypress="return nameOnly(event)" placeholder="ENTER ADDRESS" class="form-control" required>
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-6 " > CONTACT NO: <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="text" id="contact_no" name="contact_no" autocomplete="off" onkeypress="return nameOnly(event)" placeholder="ENTER NO" class="form-control" required>
                </div>
                </div>

            </div>

              <div class="col-md-6 b_div">

                <div class="form-group">
                <label class="col-sm-6 " > COURSE: <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="text" id="course" name="course" autocomplete="off" onkeypress="return nameOnly(event)" placeholder="ENTER COURSE" class="form-control" required>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label" >SCHOLARSHIP <span style="color:red;">*</span></label>
                  <div class="col-sm-9">
                  <select id="genders" name="genders" class="form-control" >
                    <option value="" >Select SCHOLARSHIP</option>
                       <option value="dswd">DSWD</option>
                       <option value="tesda">TESDA</option>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-8 control-label" >ENROLLMENT STATUS <span style="color:red;">*</span></label>
                  <div class="col-sm-9">
                    <select id="status" name="status" class="form-control" >
                      <option id="select_status" value="" >Select STATUS</option>
                        <option id="pending" value="Pending">Pending</option>
                        <option id="received" value="Received">Received</option>
                        <option id="waitlist" value="Wait List">Wait List</option>
                        <option id="register" value="Register">Register</option>
                        <option id="scholarship" value="Scholarship Enrolled">Scholarship Enrolled</option>
                        <option id="regular" value="Regular Enrolled">Regular Enrolled</option>
                    </select>
                  </div>
                 </div>

                <div class="form-group">
                <label class="col-sm-6 " > AGE: <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="text" id="age" name="age" autocomplete="off" onkeypress="return nameOnly(event)" placeholder="ENTER AGE" class="form-control" required>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-7 control-label">GENDER: <span style="color:red;">*</span></label>
                  <div class="col-sm-9">
                    <select id="genders" name="genders" class="form-control" >
                      <option value="" >Select Gender</option>
                      <option value="male">MALE</option>
                      <option value="female">FEMALE</option>
                    </select>
                  </div>
                </div>

            </div>
        </div>
        <!--Footer-->
        <div class="modal-footer">
          <a role="button" class="btn btn-danger">Submit
            <!-- <i class="far fa-gem ml-1"></i> -->
          </a>
          <a role="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cancel</a>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  </div>
  <!-- MODAL REGISTRATION-->

  <!--Modal Form Login with Avatar Demo-->
   <div class="modal fade" id="Modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
     <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
       <!--Content-->
       <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:grey; text-align:right; margin-right: 5px;"
        title="close"> x </button>
         <!--Header-->
       <!--   <div class="modal-header">
           <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" class="rounded-circle img-responsive"
             alt="Avatar photo">
         </div> -->
         <!--Body-->
         <div class="modal-body text-center mb-1">
           <h5 class="mt-1 mb-2">Are you sure you want to delete the file</h5>
           <div class="md-form ml-0 mr-0">
            <input type="text" id="path" name="path" hidden>
             <input  type="text" id="form1" class="form-control ml-0">
             <label for="form1" class="ml-0"></label>
           </div>
           <div class="text-center mt-4">
             <button class="btn btn-danger" id="delete" data-dismiss="modal">delete
               <!-- <i class="fas fa-sign-in-alt ml-1"></i> -->
             </button>

           </div>
         </div>
       </div>
       <!--/.Content-->
     </div>
   </div>
   <!--Modal Form Login with Avatar Demo-->

  <!-- <script src="<?php //echo base_url();?>assets/lib/jquery.min.js"></script> -->

  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/jquery-3.4.1.min.js"></script>
  
 <!--  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/jquery.gdocsviewer.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/jquery.gdocsviewer.min.js"></script> -->

  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables-select.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>mdbassets/js/addons/datatables-select.min.js"></script>
    
  <script type="text/javascript">
    function logout(){
      $.ajax({
        url:'logout/validate_logout',
      
        dataType:'json',
        success:function(msg){
          setTimeout('window.location.href = "'+msg+'";', 2000);
        }
      });
    }

    tbl_student_records = $('#tbl_student_records').DataTable({
        autoWidth: false,
        destroy:true,
        'ajax':'<?php echo base_url('register/student_records')?>'
    });

    function btn_view(){
      $('#view_requirements').modal('show');
      $('#tbl_student_requirements').DataTable({
        autoWidth: false,
        destroy:true,
        'ajax':'<?php echo base_url('register/requirements')?>'
      });
    }

    function btn_view_details(first_name, last_name, mid_name, address, contactno, course, status, birthdate){
      $('#view_registration').modal('show');
      $('#first_name').val(first_name);
      $('#last_name').val(last_name);
      $('#middle_name').val(mid_name);
      $('#address').val(address);
      $('#contact_no').val(contactno);
      $('#course').val(course);

      dob = new Date(birthdate);
      var today = new Date();
      var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
      $('#age').val(age);

      $('#status').find(":selected").text(status);
      $('#status option[value="' + status + '"]').remove();

      //window.location.href = '';
    }

    function delete_file(path,fname){
      $('#Modal_delete').modal('show');
      $('#path').val(path);
      $('#form1').val(fname);
    }

    $('#delete').on('click', function(){
      var path = $('#path').val();
      $('#view_requirements').modal('hide');
      console.log(path);
      $.ajax({
        url:'register/delete_file',
        method:'POST',
        data:{path:path
        },success:function(data){
          console.log(data);
        }
      });
    });

  </script>

