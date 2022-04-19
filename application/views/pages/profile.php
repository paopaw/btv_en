
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
            <li class="nav-item">
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>" style="color:#fff;">Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class=>
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
            <li class="nav-item active">
             <a class="nav-link waves-effect" href="<?php echo base_url(); ?>profile" style="color:#fff;">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect"  href="<?php echo base_url(); ?>notification" style="color:#fff;">Notifications <i style="color: orangered;" id="notif_new"></i> </a>
            </li>
            <li class="nav-item">
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

          <!--   <li class="nav-item">
              <a href="#" class="nav-link waves-effect" onclick="logout()" style="color:#fff">
                <i class="fa fa-menu">LOG OUT</i>
              </a>
              
            </li> -->

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
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <form>
            <!--Card content-->
            <div class="card-body">
              <div class="form-group">
                 <h4 style="font-weight: bold; text-decoration: underline; text-align: center;" >Student Information</h4>
              </div>
              <div class="col-sm-16">
                <div class="col-sm-6"  style="width:800px; margin:0 auto;">
                  
                  <div class="form-group">
                  
                    <label class="control-label">STUDENT NO.</label>
                    <input type="text" class="form-control  form-control-sm" id="rcard_num" value="<?php foreach($profile_data as $key => $data){echo $data['app_id'];}?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label">FIRST NAME</label>
                    <input type="text" class="form-control typeahead form-control-sm"  id="first_name" value="<?php foreach($profile_data as $key => $data){ echo $data['first_name'];} ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label">MIDDLE NAME</label>
                    <input type="text" class="form-control form-control-sm" id="mid_name" value="<?php foreach($profile_data as $key => $data){ echo $data['mid_name'];}?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label">LAST NAME</label>
                    <input type="text" class="form-control form-control-sm" id="last_name" value="<?php foreach($profile_data as $key => $data){ echo $data['last_name'];}?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label">ADDRESS</label>
                    <input type="text" class="form-control form-control-sm" id="address" value="<?php foreach($profile_data as $key => $data){ echo $data['address'];}?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label" disabled>CONTACT NO.</label>
                    <input type="text" class="form-control form-control-sm" id="contact_no" value="<?php foreach($profile_data as $key => $data){ echo $data['contactno'];}?>" >
                  </div>
                  <div class="form-group">
                      <label class="control-label">No. of Slots (per batch) </label>
                      <input type="text" class="form-control form-control-sm" id="email" value="" >
                  </div>
                 
                </div>
              </div>
            </div>
            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!--Card-->
          <div class="card" style="height:318px;">

            <!--Card content-->
            <div class="card-body">
               
            <div id="mainnav-profile" class="mainnav-profile">
               
              <form enctype="multipart/form-data" method="POST" id="fileUploadForm">   

                <label for="picz" data-toggle="tooltip" data-placement="left" title="Upload New Profile Photo" id="photo_up">

                <!-- <?php // foreach($profile_data as $key => $data):?> -->

                <img id="output" src="<?php foreach($profile_data as $key => $data){
                                              if($data['profile_pic'] !=""){
                                                 echo base_url().$data['profile_pic'];
                                              }else{
                                                  echo base_url().'assets_1/profile/1.png';
                                              } 
                                            }
                                      ?>" class="rounded" style="width: 350px; height: 260px; cursor: pointer;">
                
                 <!-- <?php //endforeach?> -->   

                      <!--   <i class="fas fa-camera" style="color:red; cursor: pointer;" id="upload_photo" > -->
                        <input type="file" id="picz" name="picz" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" onclick="removeattrib()" style="display: none;" />
                        <!-- </i> -->
                   
                       <button type="submit" class="btn btn-danger btn-sm" id="btn_save" hidden="" >save</button> 
                      </label>
                   </form>
               </div>

             </div>
             
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
  <script src="<?php echo base_url();?>assets/lib/jquery.min.js"></script>

  <script type="text/javascript">

    $('form#fileUploadForm').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      //console.log(formData);
        $.ajax({
          url:"<?php echo site_url("register/profile_pic") ?>",
          method:'POST',
          data:formData,
          success:function(msg){
            if(msg.trim() == 'success'){
              alert('Profile Picture is successfully saved you need to logout and login again to apply the changes');
             //$("#mainnav-profile").load(location.href + " #mainnav-profile");
             //location.reload();
            }else{
              alert('info! somethin went wrong');
               //$('#picz').css({ 'border-color': 'red' });
            }
          },
           async: false,
           cache: false,
           contentType: false,
           processData: false
        });
    });
  
    function removeattrib(){
      $('#btn_save').removeAttr('hidden');
      //$('#upload_photo').hide();
    }

    function logout(){
      $.ajax({
        url:'logout/validate_logout',
      
        dataType:'json',
        success:function(msg){
          setTimeout('window.location.href = "'+msg+'";', 2000);
        }
      });
    }

   </script>

