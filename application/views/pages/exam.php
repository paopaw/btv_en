
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


              <div style="color: #2ce0e0; font-family: 'Montserrat', sans-serif; font-size:40px;" align="center">
                TESDA Online Examination
              </div>

              <div style="text-align:justify;" align="center">
              
                <p>In substitution to the required copy of the NCAE Certificate of Rating you are required to take this online examination provided by the Technical Education and Skills Development Authority.</p> 
                <p>The exam has three sets with a total of 160 items, each in multiple choices. After answering the last item of the first set, your exam page will continue to the first item of the second set then same with the last set.</p>

                <p style="padding-left:100px;"> > Training Numeracy Test - 55 items</p>
                <p style="padding-left:100px;"> > Training Literacy Test - 60 items</p>
                <p style="padding-left:100px;"> > Occupational Literacy Test - 45 items</p>

                <p>Simply select or click on the corresponding letter of choice in answering each question. Please prepare a pen and paper for the numeracy test before taking the test and use of calculator is discouraged. You will be given 45 seconds for each item. Be sure to have a stable internet connection before proceeding to avoid losing your progress.</p>

                
                <center>
                 <a role="button" href="<?php echo base_url(); ?>exam_prop" class="btn" style="width:210px; background-color:#2ce0e0; color:#fff; border-radius:30px; font-size: 20px;">Start Exam
                </a>
                </center>
              </div>

              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="display:none;">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="..." alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>...</h5>
                      <p>...</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


              <div id="car01" class="carousel slide" data-ride="carousel" data-wrap="false" data-interval="false" data-keyboard="true" style="display:none;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="col-md-2 col-xs-2"></div>
                    <div class="col-md-8 col-xs-8">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h4>Titolo domanda UNO</h4>
                        </div>
                        <div class="panel-body">
                          <p>Questa è il testo della la domanda UNO</p>
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Risposta uno — Io prenderei questa
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Questa è la risposta due;
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled=""> E volendo anche la tre
                            </label>
                          </div>

                        </div>
                        <!-- /panel-body -->
                        <div class="panel-footer">
                          <p>Domanda 1 di 3 — utilizza i pulsanti di navigazione</p>
                        </div>
                        <!-- panel footer -->
                      </div>
                      <!-- /panel-primary -->
                    </div>
                    <!-- /col-md-8 -->
                  </div>
                  <!-- /item active -->
                  <div class="item">
                    <div class="col-md-2 col-xs-2"></div>
                    <div class="col-md-8 col-xs-8">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h4>Titolo domanda DUE</h4>
                        </div>
                        <div class="panel-body">
                          <h1> Non c'è niente da vedere qui, circolare!</h1>
                        </div>
                        <div class="panel-footer">
                          <p>Domanda 2 di 3 — utilizza i pulsanti di navigazione</p>
                        </div>
                        <!-- panel footer -->
                      </div>
                      <!-- /panel-primary -->
                    </div>
                    <!-- /col-md-8 -->
                  </div>
                  <!-- /item -->
                  <div class="item">
                    <div class="col-md-2 col-xs-2"></div>
                    <div class="col-md-8 col-xs-8">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h4>Titolo domanda TRE</h4>
                        </div>
                        <div class="panel-body">
                          <h1> Non c'è niente da vedere qui, circolare!</h1>
                        </div>
                        <div class="panel-footer">
                          <p>Domanda 3 di 3 — utilizza i pulsanti di navigazione</p>
                        </div>
                        <!-- panel footer -->
                      </div>
                      <!-- /panel-primary -->
                    </div>
                    <!-- /col-md-8 -->
                  </div>
                  <!-- /item -->
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#car01" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#car01" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
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

   <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn" style="display:none">



   

  </footer>