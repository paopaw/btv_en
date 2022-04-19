
<!DOCTYPE html>
<style type="text/css">
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
 font-weight:600;
 color:#9d1d1d;
}

h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6,#page-title{color:#9d1d1d}

.modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}

</style>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BTV ONLINE ENROLLMENT</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="assets_1/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_1/css/nifty.min.css" rel="stylesheet">
    <link href="assets_1/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="assets_1/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="assets_1/plugins/pace/pace.min.js"></script>
    <link href="assets_1/css/demo/nifty-demo.min.css" rel="stylesheet">
    <link href="assets_1/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
</head>
<body>
    <div id="container" class="cls-container">
        <div id="bg-overlay"  class="bg-img" style="background-image: url(<?php echo base_url().'mdbassets/img/site_back.png'; ?>);"></div>
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    <div class="mar-ver pad-btm">
                        <h1 class="h2" style="color:red;">BTV ACCOUNT</h1>
                        <p>SIGN UP FORM <i class="ti ti-hand-point-down"></i></p>
                    </div>
                    <form enctype="multipart/form-data" method="POST" id="signupform">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" onkeypress="return /[a-z ]/i.test(event.key)" autofocus required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name" onkeypress="return /[a-z ]/i.test(event.key)" autofocus required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User Name" id="username" name="username" onkeypress="return /[a-z ]/i.test(event.key)" autofocus required>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" id="email" name="email" autofocus required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control " placeholder="Password" id="password" name="password" maxlength="12" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" name="confirm_password" maxlength="12" required>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" onclick="showpassword()"> Show Password
                        </div>

                        <div class="form-group" id="div_terms" hidden>
                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" data-toggle="modal" data-target="#centralModalLGInfoDemo" id="terms" >Privacy Notice & Consent
                             </button>
                        </div>

                        <div class="form-group">
                            <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                        </div>

                        <div class="form-group"  id="btn_sig_nup" hidden>
                            <button class="btn btn-danger btn-lg btn-block" type="submit" id="btn_signup">Sign Up</button>
                        </div>

                        <div class="progress progress-striped progress-xl active" hidden><div style="width: 0%;" class="progress-bar progress-bar-danger" id="progress_one"></div></div>
                        <span id="msg_log"></span>
                    </form>
                </div>
            </div>
        </div>

              <!-- Central Modal Large Info-->
              <div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading lead" style="text-align:center; color: red;">Data Privacy Notice</p>

                    <!--   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button> -->
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                       
                        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>

                        <p  id="modalTerms"> TERMS

                            <p style="text-align:left;">Effective: ________________ </p>
                        
                            <p style="text-align:left;">__________________________________.  collectively known as <b><u>Alturas Group of Companies (AGC)</u></b>, its respective subsidiaries, affiliates, associated companies, and jointly controlled entities are committed to protecting your personal data. We ensure that all systems and activities involving the collection and processing of your personal data are performed in accordance with the Data Privacy Act of 2012 (‘the Act’), its Implementing Rules and Regulations (‘IRR’), and other relevant policies, including issuances from the National Privacy Commission.
                            </p>
                        
                            <p style="text-align:left;"><b><u>l. Scope</u></b></p>

                            <p style="text-align:left;">This Privacy Notice <b><u>(“Notice”)</u></b> applies to individuals who interact with ALTURUSH services as customers, vendors/suppliers, partners (riders/drivers and merchant partners), contractors and service provider 
                            <b><u>(“You”)</u></b>.</p>
                       
                            <p style="text-align:left;"><b><u>ll. Service Description</u></b></p>

                            <p style="text-align:left;"><b><u>Alturas Group of Companies (AGC)</u></b> is primarily engaged in variety of services including wholesale and retail of general merchandise with mall operation, supermarket, cinemas and food chains, agriculture, hatchery, manufacturing, and resort operations.</p>

                            <p style="text-align:left;"><b><u>We collect your personal data from various channels including:</u></b></p>

                            <p style="text-align:left; color: red;"><b><u>DISTRIBUTION websites.</u></b> Consumer-directed websites operated by or for ALTURUSH, including sites that We operate under our own domains/URLs and mini-sites that We run on third party social networks such as Facebook <b><u>(“Websites”).</u></b></p>

                            <p style="text-align:left;"><b><u>DISTRIBUTION mobile sites/apps.</u></b> Consumer-directed mobile sites or applications operated by or for DISTRIBUTION, such as smartphone apps.</p>

                            <p style="text-align:left;"><b><u>E-mail, text and other electronic messages.</u></b> Interactions with electronic communications between you and DISTRIBUTION..</p>

                            <p style="text-align:left;"><b><u>Offline registration forms.</u></b> Printed or digital registration and similar forms that We collect via, for example, postal mail, in-store demos, contests, sampling activities, and other promotions, or events..</p>

                            <p style="text-align:left;"><b><u>Advertising interactions.</u></b>Interactions with our advertisements (e.g., if you interact with on one of our ads on a third party website, we may receive information about that interaction).</p>

                            <p style="text-align:left;"><b><u>Data from other sources.</u></b>Third party social such as Facebook and Google, market research (if feedback not provided on an anonymous basis), third-party data aggregators, DISTRIBUTION promotional partners, public sources and data received when we acquire other companies.</p>

                            <p style="text-align:left;"><b><u>lll. Personal Data Collected</u></b></p>

                            <p style="text-align:left;">We collect and process your personal in accordance with the Data Privacy Act of 2012 and with the specific purposes outlined in this Notice. Depending on how you interact with DISTRIBUTION, these data may include:</p>

                            <p style="text-align:left;">Personal Data:</p>
                              <ul >
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">a. Name</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">b. Birthday</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">c. Address</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">d. Contact Details including Mobile and Home Phone Numbers</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">e. Store name</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">f. DTI Certificate Number</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">g. Barangay Clearance</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;color: red;">h. Email Address</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none; color: red;">i. Senior Citizen/PWD ID</li>
                              </ul>
                            <p style="text-align:left; color: red;">Sensitive Personal Data:</p>
                              <ul>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;color: red;">a. Age</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none; color: red;">b. Health Condition</li>
                              </ul>
                            <p style="text-align:left;">
                                We may also collect aggregated information such as details of traffic data, computer or mobile device details, operating system, and browser type. This information does not identify any individual but is used for statistical purposes and improvement of our website.
                            </p>  
                            <p style="text-align:left;"><b><u>IV. Purposes of Personal Data Collected</u></b></p>

                            <p style="text-align:left;">We collect your personal data from various channels both online and offline for the following purposes:</p>
                              <ul>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none; ">1. To process and ship your orders;</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">2. To inform you of our goods and services;</li>
                                <li style="text-indent: 10px; text-align:left; list-style-type:none;">3.    To respond to your inquiries sent through different channels such as our websites, mobile app, email, and social media accounts.</li>
                              </ul>
                            <p style="text-align:left;"><b><u>V. Third-Party Sharing</u></b></p>
                              <p style="text-align:left;">
                               We will only share your personal data when required by applicable laws and/or in response legal proceedings.
                               If we need to disclose your personal data to our partners and affiliates, we will ensure that they are contractually bound by Data sharing Agreements (DSA) and/or Outsourcing Agreements.
                            </p> 
                            <p style="text-align:left;"><b><u>VI. Security of Your Personal Data</u></b></p>
                             <p style="text-align:left;">
                              We take reasonable, legal, and adequate organizational, physical, and technical measures to keep your personal data confidential and secure.
                            </p>
                            <p style="text-align:left;"><b><u>People who can access your Personal Data. </u></b></p>
                             <p style="text-align:left;">
                             Your personal data will be processed by our authorized staff or agents, on a need-to-know basis, depending on the specific purposes for which your personal have been collected.
                            </p>
                            <p style="text-align:left;"><b><u>Measures taken in operating environments.  </u></b></p>
                                <p style="text-align:left;">
                                 We store your Personal Data in operating environments that use reasonable security measures to prevent unauthorized access. We follow reasonable standards to protect Personal Data.
                                </p>
                            <p style="text-align:left;"><b><u>Vll. Retention </u></b></p>
                                <p style="text-align:left;">
                                We retrain your personal data for a minimum of (enter years), or if necessary, to satisfy its declared purposes. Also, we may retain certain information for regulatory compliance or as required by applicable laws.
                                </p>
                            <p style="text-align:left;"><b><u>Vll. Your rights </u></b></p>  
                                <p style="text-align:left;">
                                In accordance with the Act, we allow to exercise the following rights:
                                </p>  

                        </p>

                      </div>
                       <div class="modal-footer" style="text-align: center;">
                        <input type="checkbox" id="agree" name="agree"> I Agree The Terms and Conditions
                        
                    </div>  
                    </div>
                    
                     

                    <!--Footer-->
                    <div class="modal-footer">
                      <!-- <a role="button" class="btn btn-info" id="btn_accept" data-dismiss="modal" disabled>Get it now -->
                       <button class="btn btn-danger btn-sm " type="submit" id="btn_accept" data-dismiss="modal" disabled>ACCEPT</button>
                      <!-- </a> -->
                      <a role="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No,
                        thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
            <!-- Central Modal Large Info-->

        <!--===================================================-->
    </div>

    <script src="assets_1/js/jquery.min.js"></script>
    <script src="assets_1/js/bootstrap.min.js"></script>
    <script src="assets_1/js/nifty.min.js"></script>
    <script src="assets_1/js/demo/bg-images.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/lib/sweetalert.min.js"></script>

    <script type="text/javascript">  

    $('#btn_accept').on('click', function(){   
        $("#btn_sig_nup").show();
        $("#terms").hide();

    }); 

    $('#agree').change(function () {
        if ($(this).is(":checked")) {
            $('#btn_accept').attr("disabled", false);    
        } else {
            $('#btn_accept').attr("disabled", true);
        }
    }); 

    function showpassword() {
      var pass = document.getElementById("password");
      var cpass = document.getElementById("confirm_password");

      if (pass.type === "password") {
        pass.type = "text";
      } else {
        pass.type = "password";
      }

      if (cpass.type === "password") {
        cpass.type = "text";
      } else {
        cpass.type = "password";
      }
    }

    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();

        if(password != confirmPassword){
            $("#divCheckPasswordMatch").html("Passwords do not match!");
            $(".registrationFormAlert").attr("style","color:red");
            $("#div_terms").hide();
            //$("#btn_signup").hide();
        }else{
            $("#divCheckPasswordMatch").html("Passwords match.");
            $(".registrationFormAlert").attr("style","color:green");
            $("#div_terms").show();
            $("#terms").show();
        }
        
        if(confirmPassword == '' ){
            $("#divCheckPasswordMatch").html("");
            $("#div_terms").hide();
            
            $("#terms").hide();
        }
    }
    $(document).ready(function (){
       $("#confirm_password").keyup(checkPasswordMatch); 
    });

    $('input[type=password]').keyup(function() {
        var pswd = $(this).val();
        var regex = /[^\w\s]/gi;

        if(pswd.length < 8 ) {
            $("#divCheckPasswordMatch").html("input atleast 8 character to 12 maximum");
            $(".registrationFormAlert").attr("style","color:red");
            $("#div_terms").hide();
        }else if(pswd.length = 8){
            $("#divCheckPasswordMatch").html("password is strong");
            $(".registrationFormAlert").attr("style","color:red");
            $("#div_terms").hide();
        }
        if(pswd.search(/\d/) == -1){
            $("#divCheckPasswordMatch").html("input atleast 1 number");
            $(".registrationFormAlert").attr("style","color:red");
            $("#div_terms").hide();
        }
        
        if(regex.test(pswd) == false) {
            //alert('Your search string contains illegal characters.');
            $("#divCheckPasswordMatch").html("input atleast 1 special character");
            $(".registrationFormAlert").attr("style","color:red");
            $("#div_terms").hide();
        }
        
        if(pswd == ''){
            $("#divCheckPasswordMatch").html("");
        }
    });

    $('form#signupform').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url:'sign_up_form/validate_sign_up',
            method:'POST',
            data:formData,
            dataType:'json',
            success:function(data){
                 if (data=='success') {
                    swal({
                        title:"Registered successfully",
                        icon:"success"
                    }).then(function() {
                        window.location = '<?php echo base_url(); ?>/login';
                    });
                }else{
                      swal({
                        title:"User"+" "+data+"..!",
                        icon: "warning"
                    });
                }

                // if(msg.trim() == 'invalid'){
                //     $('#msg_log').html('user name, email or password exist, please try different user name and password.');
                //     $('#msg_log').css({
                //         'color': 'red',
                //         'font-family': 'adobe hebrew'
                //     });  
                //     $('#username').css({ 'border-color': 'red' });
                //     $('#username').unbind('focus').bind('focus', function() {
                //         $(this).removeAttr('style');
                //         $('#msg_log').removeAttr('style');
                //         $('#msg_log').html('');
                //     });
                //     $('#password').css({ 'border-color': 'red' });
                //     $('#password').unbind('focus').bind('focus', function(){
                //         $(this).removeAttr('style');
                //         $('#msg_log').removeAttr('style');
                //         $('#msg_log').html('');
                //     });
                // }else{
                //     $('#btn_login').hide();
                //     $('.progress').show();
                //     let fill = 0;
                //     $('#password').removeAttr('style');
                //     $('#username').removeAttr('style');
                //     $('#msg_log').html('');
                //     window.setInterval(function(){
                //         fill += 10;
                //         if(fill === 100){
                //             clearInterval();
                //             document.getElementById("progress_one").style.width = fill + "%";
                //             $('#progress_one').html(fill+'%');
                //             setTimeout('window.location.href = "'+msg+'";', 2000);
                            
                //             //alert(base_url(msg));
                //         }
                //         else{
                //             if(fill <= 100){
                //                 document.getElementById("progress_one").style.width = fill + "%";
                //                 $('#progress_one').html(fill+'%');
                //             }
                //         }
                //     }, 450);
                // }
            },
            async: false,
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>

</body>
</html>