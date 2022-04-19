  <style type="text/css">
   
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
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>student_requirements" style="color:#fff;">Requirements</a>
            </li>
            <li class="nav-item ">
             <a class="nav-link waves-effect" href="<?php echo base_url(); ?>profile" style="color:#fff;">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect"  href="<?php echo base_url(); ?>notification" style="color:#fff;">Notifications <i style="color: orangered;" id="notif_new"></i> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records" style="color:#fff;">My Records</a>
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
    <!-- Navbar -->


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

            <!--Card content-->
            <div class="card-body">
              <!-- <p><?php //echo $id; ?>STUDENTS REQUIREMENTS</p> -->

              <!-- <?php //foreach ($dir as $key => $value): ?> -->
  
             <!--  <?php //endforeach ?> -->

              <!-- <canvas id="myChart"></canvas> -->
              <table class="table table-hover">
                <!-- Table head -->
                <thead class="red lighten-4">
                  <tr>
                    <th>STUDENT REQUIREMENTS</th>
                    <th></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <th scope="row"> 

                      <form enctype="multipart/form-data" method="POST" id="FormReg">

                      <label for="reg" >

                        <a role="button"  class="btn btn-danger waves-effect waves-light" id="rege" type="file" style="width:210px;">REGISTRATION FORM
                        </a>   

                          <input  type="file" name="reg" id="reg" onchange="document.getElementById('rege').text = $('input[type=file]').val().replace(/.*(\/|\\)/, '');"  onclick="removeattrib()" style="display: none;" >
    
                      </label>
                        <button type="submit" class="btn btn-danger btn-sm" id="btn_save" hidden="" >save</button>
                        <a role="button" class="btn btn-danger btn-sm" id="cancel" onclick="cancel()" hidden="" style="width:90px;">cancel</a> 
                      </form> 
                    </th>
                    <td>
                      <a role="button" class="btn btn-danger waves-effect waves-light" id="creden"  data-toggle="modal" 
                          data-target="#modalL_credentials" onclick="credential()" style="width:210px;">SCHOOL CREDENTIALS
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"> 
                      <label for="clearance"> 
                        <a role="button"  class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#modalL_brgy_clearance" onclick="brgy_clearance()" style="width:210px;">BARANGAY CLEARANCE
                          <!-- <input type="file" name="clearance" id="clearance" style="display: none;"> -->
                        </a>  
                      </label> 
                     </th>
                    <td>
                      <label for="pix">
                        <a role="button"  class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#modalL_picture" onclick="upload_pix()" style="width:210px;">UPLOAD PICTURE
                        <!-- <input type="file" name="pix" id="pix" style="display: none;"> -->
                      </a>
                      </label>
                    </td>
                  </tr>
                  <tr>
                     <th scope="row"> 
                      <label for="birth">
                        <a role="button"  class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#modalL_birth" onclick="birth_cert()" style="width:210px;">BIRTH CERTIFICATE
                        <!-- <input type="file" name="birth" id="birth" style="display: none;"> -->
                        </a>
                      </label>   
                     </th>
                    <td> 
                      <label for="ncae">
                        <a role="button"  class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#modalL_ncae" 
                        onclick="ncae()" style="width:210px;">NCAE 
                        <!-- <input type="file" name="ncae" id="ncae" style="display: none;"> -->
                        </a>
                      </label>
                    </td>
                  </tr>
                </tbody>
                <!-- Table body -->
              </table>
              <?php echo $app_id;?>

                <?php $user_name = $this->session->userdata('name'); $dir_ncae = directory_map(FCPATH.'requirements/'.$user_name.'/NCAE',1); ?>

                <?php if(empty($dir_ncae) || empty($app_id)){?>

                  <br/>
                    <p>In case you had not taken the NCAE or does not have a copy of your NCAE result or Certificate of Rating, you must take the online examination.</p>
                  <br/>

                  <a role="button" href="<?php echo base_url(); ?>exam" class="btn" id="exam" style="width:210px; background-color:#2ce0e0; color:#fff; border-radius:30px;">Take the Exam
                  </a>

                  <?php }else{?>

                    <br/>
                      <!-- <p>In case you had not taken the NCAE or does not have a copy of your NCAE result or Certificate of Rating, you must take the online examination.</p> -->
                    <br/>

                    <a role="button" href="<?php echo base_url(); ?>exam" class="btn" id="exam" style="width:210px; background-color:#2ce0e0; color:#fff; border-radius:30px;" hidden>Take the Exam
                    </a>

                <?php }?>
              
                </p>
            </div>

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

              <!-- Table  -->
              <table style="width:100%">
                <!-- Table head -->
                <thead class="grey lighten-4">
                  <tr>
                    <th style="padding:5px; padding-bottom:0px;"> <h6><b>TESDA Requirements:</b></h6></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <th scope="row">1. Barangay Clearance</th>
                  </tr>
                  <tr>
                    <th scope="row">2. Birth Certificate</th>
                  </tr>
                  <tr>
                    <th scope="row">3. Pictures in white background, with collar tie</th>
                  </tr>
                  <tr>
                    <td scope="row"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1x1(4pcs.)</th>
                  </tr>
                  <tr>
                    <td scope="row"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2x2(4pcs.)</th>
                  </tr>
                  <tr>
                    <td scope="row"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Passport size(5pcs.)</th>
                  </tr>
                  <tr>
                    <th scope="row">4. School Credentials</th>
                  </tr>
                  <tr>
                    <td scope="row"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Form 137</th>
                  </tr>
                  <tr>
                    <td scope="row"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Diploma/Transcript of Records</th>
                  </tr>
                  <tr>
                    <th scope="row">5. NCAE Result (if available)</th>
                  </tr>
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table  -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn" style="">

        <!--Grid column-->
        <div class="col-lg-12 col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <!-- <div class="card-header">Line chart</div> -->

            <!--Card content-->
        <!--     <div class="card-body">

              <a role="button" href="<?php //echo base_url(); ?>form" class="btn btn-danger waves-effect waves-light" style="width:210px;">Enroll Now  
                         
              </a>Register and train under one of our accredited programs and join our growing community of skilled graduates.
              <br/>
            </div> -->

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Modal: brgy clearance / Register Form -->
        <div class="modal fade" id="modalL_credentials" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form enctype="multipart/form-data" method="POST" id="FormCred">
              <div class="modal-body">
                ... <input type="file" name="credential" id="credential">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-sm">submit</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">cancel</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--Modal: brgy clearance / Register Form -->

        <!--Modal: brgy clearance / Register Form -->
        <div class="modal fade" id="modalL_brgy_clearance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form enctype="multipart/form-data" method="POST" id="FormBrgy">
              <div class="modal-body">
                ... <input type="file" name="filename" id="filename">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-sm">submit</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">cancel</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--Modal: brgy clearance / Register Form -->

        <!--Modal: picture / upload picture-->
        <div class="modal fade" id="modalL_picture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form enctype="multipart/form-data" method="POST" id="FormPix">
              <div class="modal-body">
                ... <input type="file" name="picture" id="picture">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-sm">submit</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">cancel</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--Modal: picture / upload picture-->

        <!--Modal: birth certificate / upload certificate-->
        <div class="modal fade" id="modalL_birth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form enctype="multipart/form-data" method="POST" id="FormBirthCert">
              <div class="modal-body">
                ... <input type="file" name="birth_cert" id="birth_cert">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-sm">submit</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">cancel</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--Modal: birth certificate / upload certificate-->

        <!--Modal: NCAE / upload NCAE-->
        <div class="modal fade" id="modalL_ncae" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form enctype="multipart/form-data" method="POST" id="FormNcae">
              <div class="modal-body">
                ... <input type="file" name="ncae" id="ncae">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-sm">submit</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">cancel</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--Modal: NCAE / upload NCAE -->

    </div>
  </main>
  <!--Main layout-->
  
  <script src="<?php echo base_url();?>assets/lib/jquery.min.js"></script>
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

///////////////modal///////////////

    function credential(){
      $('#credential').val('');
      $('.modal-title').html('<b style="text-align: center;">SCHOOL CREDENTIALS</b>');
    }

    function brgy_clearance(){
      $('form').attr('id','')
      $('form').attr('id','FormBrgy')
      $('#filename').val('');
      $('.modal-title').html('<b style="text-align: center;">BARANGAY CLEARANCE</b>');
    }
    function upload_pix(){
      $('#picture').val('');
      $('.modal-title').html('<b style="text-align: center;">UPLOAD PICTURE</b>');
    }
    function birth_cert(){
      $('#birth_cert').val('');
      $('.modal-title').html('<b style="text-align: center;">BIRTH CERTIFICATE</b>');
    }
    function ncae(){
      $('#ncae').val('');
      $('.modal-title').html('<b style="text-align: center;">NCAE</b>');
    }

///////////////modal///////////////    

    function removeattrib(){
      $('#btn_save').removeAttr('hidden');
      $('#cancel').removeAttr('hidden');
    }

    function cancel(){
      $('#rege').text('REGISTRATION FORM');
      $('#btn_save').attr('hidden','');
      $('#cancel').attr('hidden','');
    }

    function removehidencred(){
      $('#btn_cred_save').removeAttr('hidden');
      $('#cred_cancel').removeAttr('hidden');
    }

    function cance_cred(){
      $('#creden').text('SCHOOL CREDENTIALS');
       $('#btn_cred_save').attr('hidden','');
      $('#cred_cancel').attr('hidden','');
    }

/////////////////////// upload forms /////////////////////////////////

    $('form#FormCred').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      //console.log(formData);
        $.ajax({
          url:"<?php echo site_url("register/req_credentials") ?>",
          method:'POST',
          data:formData,
          success:function(msg){
            if(msg.trim() == 'success'){
              alert('file success fully uploaded', 'Profile Picture is successfully saved.');
              $('#btn_save').attr('hidden','');
              $('#cancel').attr('hidden','');
              $('#rege').text('REGISTRATION FORM');
             //$("#mainnav-profile").load(location.href + " #mainnav-profile");
            }else{
              alert('file not supported or exist');
               //$('#picz').css({ 'border-color': 'red' });
            }
          },
           async: false,
           cache: false,
           contentType: false,
           processData: false
        });
    });

    $('form#FormReg').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      //console.log(formData);
        $.ajax({
          url:"<?php echo site_url("register/req_registration") ?>",
          method:'POST',
          data:formData,
          success:function(msg){
            if(msg.trim() == 'success'){
              alert('file success fully uploaded', 'registration is successfully saved.');
              $('#btn_save').attr('hidden','');
              $('#cancel').attr('hidden','');
              $('#rege').text('REGISTRATION FORM');
             //$("#mainnav-profile").load(location.href + " #mainnav-profile");
            }else{
              alert('file not supported or exist');
               //$('#picz').css({ 'border-color': 'red' });
            }
          },
           async: false,
           cache: false,
           contentType: false,
           processData: false
        });
    });


    $('form#FormBrgy').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      //console.log(formData);
        $.ajax({
          url:"<?php echo site_url("register/req_brg_clearance") ?>",
          method:'POST',
          data:formData,
          success:function(msg){
            if(msg.trim() == 'success'){
              alert('file success fully uploaded', 'barangay clearance  is successfully saved.');
            
            }else{
              alert('file not supported or exist');
               //$('#picz').css({ 'border-color': 'red' });
            }
          },
           async: false,
           cache: false,
           contentType: false,
           processData: false
        });
    });

    $('form#FormPix').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
        $.ajax({
          url:"<?php echo site_url("register/req_upload_picture") ?>",
          method:'POST',
          data:formData,
          success:function(msg){
            if(msg.trim() == 'success'){
              alert('file success fully uploaded', 'picture  is successfully saved.');
            
            }else{
              alert('file not supported or exist');
               //$('#picz').css({ 'border-color': 'red' });
            }
          },
           async: false,
           cache: false,
           contentType: false,
           processData: false
        });
    });

    $('form#FormBirthCert').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
        $.ajax({
          url:"<?php echo site_url("register/req_birth_cert") ?>",
          method:'POST',
          data:formData,
          success:function(msg){
            if(msg.trim() == 'success'){
              alert('file success fully uploaded', 'birth is successfully saved.');
            
            }else{
              alert('file not supported or exist');
               //$('#picz').css({ 'border-color': 'red' });
            }
          },
           async: false,
           cache: false,
           contentType: false,
           processData: false
        });
    });

    $('form#FormNcae').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
        $.ajax({
          url:"<?php echo site_url("register/req_ncae") ?>",
          method:'POST',
          data:formData,
          success:function(msg){
            if(msg == 'success'){
              $('#modalL_ncae').modal('hide');
              $('#exam').hide();
              alert('file success fully uploaded', 'Ncae is successfully saved.');
              //location.reload();
            }else{
              alert('file not supported or exist');
               //$('#picz').css({ 'border-color': 'red' });
            }
          },
           async: false,
           cache: false,
           contentType: false,
           processData: false
        });
    });  


/////////////////////// upload forms /////////////////////////////////

    // function file_name(){

    //   document.getElementById('rege').text = $('input[type=file]').val().replace(/.*(\/|\\)/, '');
    //   //$('#reg').prev('<input type="file" name="reg" id="reg" onchange="file_name()" onclick="removeattrib()" style="display: none;">');
    // }


    // document.querySelector("#reg").onchange = function(){
    //   document.querySelector("#rege").textContent = this.files[0].name;
    // }

   </script>

