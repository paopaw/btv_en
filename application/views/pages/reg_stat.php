
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
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>" style="color:#fff;">Introduction
                
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>form" style="color:#fff;">Register</a>
              <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#"
                target="_blank" style="color:#fff;">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#"
                target="_blank" style="color:#fff;">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="<?php echo base_url(); ?>my_records" style="color:#fff;">My Records</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/boholtechvocinc/about/" class="nav-link waves-effect" target="_blank" style="color:#fff">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>MDB GitHub
              </a>
            </li> -->
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- #c31c2c -->
    <!-- Sidebar -->
    <!-- <div class="sidebar-fixed position-fixed" style="padding:0px;">
        
      <div class="logo-wrapper" align="center" style="height:190px; background-color:#9a242f;">
        <img src="img/btv_logo.png" class="img-fluid" alt="" style="height:180px;">
      </div>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="../ci_clean" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Register</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>My Profile</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Notifications <span class="badge badge-primary badge-pill pull-right">1</span></a>

        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Records</a>
      </div>

    </div> -->
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5" style="padding-left:0px;">
    <div class="container-fluid mt-5">

      

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-1 mb-4">
        </div>
        <div class="col-md-10 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <!-- <canvas id="myChart"></canvas> -->
              <!-- <table class="table table-hover">
                <thead class="red lighten-4">
                  <tr>
                    <th>Courses</th>
                    <th>Training Period</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Cookery NC II (Preparing Cold and Hot Meals [Full Qualification])</th>
                    <td>43 days</td>
                  </tr>
                  <tr>
                    <th scope="row">Foods and Beverages Services NC II</th>
                    <td>45 days</td>
                  </tr>
                  <tr>
                    <th scope="row">Bartending NC II</th>
                    <td>55 days</td>
                  </tr>
                </tbody>
              </table> -->


              <div class="wizard-v7-content">
              <div class="wizard-form">
              <div class="wizard-heading"> Enrollment Progress</div>
                    <form class="form-register" action="#" method="post">
                      <div id="form-total" style="margin-top:-30px;">
                        <!-- SECTION 1 -->
                          <h2>
                            <p class="step-icon"><span>1</span></p>
                            <div class="step-text">
                              <span class="step-inner-1" align="right">
                              <img src="<?php echo base_url(); ?>/mdbassets/img/checkk.png" style="height:20px;"> 
                              Submitted the Registration Form</span>
                              <span class="step-inner-2" style="float:right;">You already submitted your filled registration form</span>
                            </div>
                          </h2>
                          <section>
                              <div class="inner" style="width:80%; float:right;">
                                <div class="wizard-header">
                                  <h3 class="heading">Upload Required Documents</h3>
                                </div>
                       

                <table class="table table-hover">
    

                <!-- Table body -->
                <tbody>
                  <tr>
                    <th scope="row"> 

               <!--        <form enctype="multipart/form-data" method="POST" id="FormReg">

                      <label for="reg" >

                        <a role="button"  class="btn btn-danger waves-effect waves-light" id="rege" type="file" style="width:210px;">REGISTRATION FORM
                        </a>   

                          <input  type="file" name="reg" id="reg" onchange="document.getElementById('rege').text = $('input[type=file]').val().replace(/.*(\/|\\)/, '');"  onclick="removeattrib()" style="display: none;" >
    
                      </label>
                        <button type="submit" class="btn btn-danger btn-sm" id="btn_save" hidden="" >save</button>
                        <a role="button" class="btn btn-danger btn-sm" id="cancel" onclick="cancel()" hidden="" style="width:90px;">cancel</a> 
                      </form>  -->

                       <a role="button" class="btn btn-danger waves-effect waves-light" id="creden"  data-toggle="modal" 
                          data-target="#modalL_credentials" onclick="credential()" style="width:210px;">SCHOOL CREDENTIALS
                      </a>
                    </th>
                   <!--  <td>
                      <a role="button" class="btn btn-danger waves-effect waves-light" id="creden"  data-toggle="modal" 
                          data-target="#modalL_credentials" onclick="credential()" style="width:210px;">SCHOOL CREDENTIALS
                      </a>
                    </td> -->
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


                             <!--    <form class="sm-form">
                                  <label class="form-label" for="customFile">Birth Certificate</label>
                                  <input type="file" class="form-control" id="customFile" />
                                  <label class="form-label" for="customFile">Barangay Clearance</label>
                                  <input type="file" class="form-control" id="customFile" />
                                  <label class="form-label" for="customFile">School Credentials (Form 127 / Transcript of Records)</label>
                                  <input type="file" class="form-control" id="customFile" />
                                  <label class="form-label" for="customFile">NCAE Certificate of Rating</label>
                                  <input type="file" class="form-control" id="customFile" />
                                </form> -->
                                 <br/>
                                <p>In case you had not taken the NCAE or does not have a copy of your NCAE result or Certificate of Rating, you must take the online examination.
                                <br/>
                                <a role="button" href="<?php echo base_url(); ?>exam" class="btn" style="width:210px; background-color:#2ce0e0; color:#fff; border-radius:30px;">Take the Exam
                                </a>
                                </p>


                              </div>
                          </section>
                    <!-- SECTION 2 -->
                          <h2>
                            <p class="step-icon"><span>2</span></p>
                            <div class="step-text">
                              <span class="step-inner-1" align="right">Upload Requirements</span>
                              <span class="step-inner-2">Please upload copies of your documents</span>
                            </div>
                          </h2>
                          <section>
                              <div class="inner">
                                <div class="wizard-header">
                          <h3 class="heading">Billing Setup</h3>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="card_name">Card Holder Name</label>
                            <input type="text" name="card_name" id="card_name" placeholder="Taylor Fuller" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="card_number">Card Number</label>
                            <input type="text" name="card_number" id="card_number" placeholder="4224-3228-6160-5079" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="cvc">CVC</label>
                            <input type="password" name="cvc" id="cvc" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="expiration">Expiration(MM/YYYY)</label>
                            <input type="text" name="expiration" id="expiration" placeholder="MM/YYYY" class="form-control" required>
                          </div>
                        </div>
                      </div>
                          </section>
                          <!-- SECTION 3 -->
                          <!-- <h2>
                            <p class="step-icon"><span>3</span></p>
                            <div class="step-text">
                              <span class="step-inner-1" align="right">Online Examinations</span>
                              <span class="step-inner-2">Take examinations if you have no NCAE Certificate of Rating</span>
                            </div>
                          </h2>
                          <section>
                              <div class="inner">
                                <div class="wizard-header">
                                  <h3 class="heading">Agreement</h3>
                                </div>
                                <div class="form-row">
                                          <div class="form-holder form-holder-2">
                                            <div class="content-inner">
                                              <p>Massa placerat duis ultricies lacus sed turpis tin Elementum sagittis vitae et leo duis ut diam quam nulla. Viverra mauris in aliquam sem fringilla ut. Id leo in vitae turpis massa sed elementum tempus. Aliquet enim tortor at auctor urna nunc id cursus. Nulla aliquet enim tortor at auctor .Consquat nisl vel pretium lectus quam id leo.</p>
                                              <div class="form-checkbox">
                                        <label class="container">
                                          <p>I read agreement and i have not any objection.</p>
                                            <input type="checkbox" name="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                      </div>
                                            </div>
                                          </div>
                                        </div>
                              </div>
                          </section> -->
                      </div>
                    </form>
              </div>
            </div>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <div class="col-md-1 mb-4">
        </div>
        <!--Grid column-->


      </div>
      <!--Grid row-->


       


    </div>
  </main>
  <!--Main layout-->

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
              alert('file success fully uploaded');
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
              alert('file success fully uploaded');
              $('#btn_save').attr('hidden','');
              $('#cancel').attr('hidden','');
              $('#rege').text('REGISTRATION FORM');
              alert('file success fully uploaded');
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
              alert('file success fully uploaded');
            
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
              alert('file success fully uploaded');
            
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
              alert('file success fully uploaded');
            
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
            if(msg.trim() == 'success'){
              alert('file success fully uploaded');
            
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

</script>