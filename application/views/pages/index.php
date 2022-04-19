
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
            <li class="nav-item active">
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
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">
              <p><?php echo $id; ?>Bohol Tech Voc. Inc. is a Technical Vocational Institution that offers TESDA accredited programs:</p>
              <!-- <canvas id="myChart"></canvas> -->
              <table class="table table-hover">
                <!-- Table head -->
                <thead class="red lighten-4">
                  <tr>
                    <th>Courses</th>
                    <th>Training Period</th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
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
                <!-- Table body -->
              </table>
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
        <div class="col-lg-8 col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <!-- <div class="card-header">Line chart</div> -->

            <!--Card content-->
            <div class="card-body">

              <!-- <canvas id="lineChart"></canvas> -->
              <canvas id="myChart" style="width:100%;max-width:600px"> </canvas> 
              </br>
              
              <a role="button" href="<?php echo base_url(); ?>form" class="btn btn-danger waves-effect waves-light" style="width:210px;">Enroll Now             
              </a>
              
              <p>Register and train under one of our accredited programs and join our growing community of skilled graduates.</p>
              <br/>
              <!--   <a role="button" class="btn btn-warning waves-effect" style="width:210px;">Take an Assessment</a>
              If you had taken a training course before and want to undertake the assessment to complete your certifcation. -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!--Card-->
          <div class="card" style="height:400px;">

            <!--Card content-->
            <div class="card-body">

              <!-- Table  -->
              <table >
                <!-- Table head -->
                <thead class="grey lighten-4">
                  <tr>
                    <th style="padding:5px; padding-bottom:0px;"> <h6><b>Enrollment Status:</b></h6></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <th scope="row"><h7 style="color: red; ">Pending</h7> - <u>Registration submitted but has not been reviewed by the scholl admin</u></th>
                  </tr>
                  <tr>
                    <th scope="row"><h7 style="color: red;">Received</h7> - <u>Registration received and reviewed by school admin but enrollment is not yet confirmed</u></th>
                  </tr>
                  <tr>
                    <th scope="row"><h7 style="color: red;">Wait List</h7> - <u>Waiting for available scholarship, waiting for approval to be officially registered</u></th>
                  </tr>
                  <tr>
                    <th scope="row"><h7 style="color: red;">Registered</h7> - <u>Approved registration but requirement must be submitted in order to be officially enrolled</u></th>
                  </tr>
                  <tr>
                    <th scope="row"><h7 style="color: red;">Scholar Enrolled</h7> - <u>Approved registration with full scholarship availment and submitted complete requirements</u></th>
                  </tr>
                  <tr>
                    <th scope="row"><h7 style="color: red;">Regular Enrolled</h7> - <u>Officially enrolled but did not avail any scholarship</u></th>
                  </tr>
                   <tr>
                    <th scope="row"><h7 style="color: red;">Declined</h7> - <u>Enrollees who canceled their registration</u></th>
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

    </div>
  </main>
  <!--Main layout-->

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

   </script>

