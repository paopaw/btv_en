<?php
$test_rows = explode("||", $sets);
// var_dump($tnt_rows);
?>
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar" style="display:none; padding-left:20px; background-color: #b41c11;">
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
              <a class="nav-link waves-effect" href="#" target="_blank" style="color:#fff;">My Records</a>
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
  <main class="" style="padding:0px; margin:0px;">
    <div class="" style="padding:0px; margin:0px;">

      <!--Grid row-->
      <div class="row wow fadeIn" style="padding:0px; margin:0px;">

        <!--Grid column-->
        <div class="col-md-1 mb-4" style="padding:0px; margin:0px;">
        </div>
        <div class="col-md-10 mb-4" style="padding:0px; margin:0px;">

          <!--Card-->
          <div class="" style="width:100%;  background-color:#fff; /*background-color:#e5eaef;*/">

            <!--Card content-->
            <div class="card-body">

              <div style="color: #2ce0e0; font-family: 'Montserrat', sans-serif; font-size:35px;" align="center" id="testname">
                Training Numeracy Test
              </div>

              <br><br>

              <div style="text-align:justify;" align="center">
              
              </div>

              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner">
                  <?php
                    $x = 1;
                    foreach ($test_rows as $row):
                      $r = explode("|", $row) ?>
                      <div class="carousel-item <?php if($x==1) echo 'active'; ?>" value="<?php echo $x ?>">
                            <div align="left" style="padding-left: 10%;"><p><?php echo "<b>(".$r[0].") </b>".$r[1]; ?></p></div>
                            <div class="qq">
                              <input type="hidden" class="q_no" value="<?php echo $r[0] ?>">
                              <input type="hidden" class="x_no" value="<?php echo $x ?>">
                            </div>
                            <!-- <div class="catgry"> -->
                            <input type="hidden" class="category" id="category" value="<?php echo $r[10] ?>">
                            <!-- </div> -->
                            <?php
                              if($r[3] != "-"){
                                $w = "";
                                if($r[9] == "sq") $w = "32%";
                                if($r[9] == "sq_sm") $w = "30%";
                                if($r[9] == "sq_lg") $w = "35%";
                                if($r[9] == "rec") $w = "40%";
                                if($r[9] == "rec_long") $w = "60%";
                                ?>
                                <div align="center"><img src="<?php echo base_url().'/exams/tnt-exam/'.$r[3].'.jpg'; ?>" style="width:<?php echo $w; ?>;"></div>
                                <?php
                              }
                            ?>
                            
                            <div align="left" id="sub" style="padding-left: 10%"><p><?php echo $r[4]; ?></p></div>
                              <div style="padding-left:25%;">
                                <div class="form-check">

                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="cho1<?php echo '-'.$x;?>"
                                      value="A"
                                    />
                                    <label class="form-check-label" for="flexRadioDefault1" id="choice_a"> A. &nbsp;&nbsp; <?php echo $r[5]; ?></label>
                                  </div>

                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="cho2<?php echo '-'.$x;?>"
                                      value = "B"
                                    />
                                    <label class="form-check-label" for="flexRadioDefault2" id="choice_b"> B. &nbsp;&nbsp; <?php echo $r[6]; ?></label>
                                  </div>

                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="cho3<?php echo '-'.$x;?>"
                                      value = "C"
                                    />
                                    <label class="form-check-label" for="flexRadioDefault3" id="choice_c"> C. &nbsp;&nbsp; <?php echo $r[7]; ?></label>
                                  </div>
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="cho4<?php echo '-'.$x;?>"
                                      value = "D"
                                    />
                                    <label class="form-check-label" for="flexRadioDefault4" id="choice_d"> D. &nbsp;&nbsp; <?php echo $r[8]; ?></label>
                                  </div>
                              </div>
                      </div>
                <?php 
                  $x++;
                  endforeach;
                ?>
                  
                </div>

                <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a> -->

                <a style="padding-top:30%"class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" disabled>

                  <!-- <span style="background-color: #2ce0e0; padding: 5px;"  aria-hidden="true">Submit</span> -->

                  <button type="btn btn-sm button" style="background-color: #2ce0e0; padding: 5px;">submit</button>
                  <span class="sr-only">Next</span>
                  
                </a>
              </div>
               <button type="btn btn-sm button" id="finish" style="background-color: #2ce0e0; padding: 5px;" 
                            data-toggle="modal" data-target="#modalLoginAvatarDemo" hidden >
                          finish
                  </button>

            </div>
            <br><br>
            <div class="progress" style="border-radius: 0px; height:5px;">
                  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only"></span>
                  </div>
              </div>
              <div class="cd"></div>
          </div>
          <!--/.Card-->

        </div>
        <div class="col-md-1 mb-4" style="padding:0px; margin:0px;">
        </div>
        <!--Grid column-->


      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Modal Form Login with Avatar Demo-->
    <div class="modal fade" id="modalLoginAvatarDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
      <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                  <!--Content-->
        <div class="modal-content">

                    <!--Header-->
        <!--   <div class="modal-header">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" class="rounded-circle img-responsive"
                        alt="Avatar photo">
          </div> -->
                    <!--Body-->
          <div class="modal-body text-center mb-1">

            <h5 class="mt-1 mb-2">EXAM</h5>

            <!-- <div class="md-form ml-0 mr-0">
              <input type="text" id="form1" class="form-control ml-0">
              <label for="form1" class="ml-0">FINISH</label>
            </div>
 -->
            <div class="text-center mt-4">
              <button class="btn btn-cyan" value="<?php echo $user_id;?>" onclick="value_id(this.value)" data-dismiss="modal">Done
                <i class="fas fa-sign-in-alt ml-1"></i>
              </button>
            </div>
          </div>

        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal Form Login with Avatar Demo-->

