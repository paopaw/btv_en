
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
		                <h1 class="h2" style="color:red;">BTV STUDENT ENROLLMENT</h1>
		                <p>Please provide the needed requirements to reset password <i class="ti ti-hand-point-down"></i></p>
		            </div>
		            <form enctype="multipart/form-data" method="POST" id="fileUploadForm">

		                <div class="form-group" id="new_pword" >
		                    <input type="password" class="form-control" placeholder="Create New Password" id="new_pass" name="new_pass" maxlength="12">
		                </div>
		                <div class="form-group" id="confirm_new_pword" >
		                    <input type="password" class="form-control" placeholder="Confirm New Password" id="confirm_new_pass" name="confirm_new_pass" maxlength="12">
		                </div>
		                
		                <span id="msg_log"></span>

		                <div class="form-group">
                            <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                        </div>

		                <p><div id="forgot_password" hidden><a href="#"><u style="color:red;"><i>forget password</i></u></a></div></p>

		                <div class="form-group" id="show_pswd" >
                            <input type="checkbox" onclick="showpassword()"> Show Password
                        </div>

		                <button class="btn btn-danger btn-sm " type="submit" id="btn_submit">submit</button>

		                <p style="text-align:center;" id="or"> or </p>

		                <div class="progress progress-striped progress-xl active" hidden><div style="width: 0%;" class="progress-bar progress-bar-danger" id="progress_one"></div></div>
		                
		            </form>
		            	<div id="create_account" >
		                  <button class="btn btn-danger btn-sm " onclick="sign_up_form();">Sign Up</button>
		            	</div>
		        </div>       
		    </div>
		</div>
		<!--===================================================-->
    </div>
    <script src="assets_1/js/jquery.min.js"></script>
    <script src="assets_1/js/bootstrap.min.js"></script>
    <script src="assets_1/js/nifty.min.js"></script>
    <script src="assets_1/js/demo/bg-images.js"></script>

    <script type="text/javascript">

    function sign_up_form(){
    	window.location.href = 'sign_up';
    }

    function showpassword() {
      var x = document.getElementById("new_pass");
      var cp = document.getElementById("confirm_new_pass");

      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }

      if (cp.type === "password") {
        cp.type = "text";
      } else {
        cp.type = "password";
      }
    }


     function checkPasswordMatch() {
        var password = $("#new_pass").val();
        var confirmPassword = $("#confirm_new_pass").val();

        if(password != confirmPassword){
            $("#divCheckPasswordMatch").html("Passwords do not match!");
            $(".registrationFormAlert").attr("style","color:red");
            $("#btn_submit").attr("disabled", true);
            //$("#div_terms").hide();
            //$("#btn_signup").hide();
        }else{
            $("#divCheckPasswordMatch").html("Passwords match.");
            $(".registrationFormAlert").attr("style","color:green");
            $("#div_terms").show();
            $("#btn_submit").attr("disabled", false);
            //$("#terms").show();
        }
        
        if(confirmPassword == '' ){
            $("#divCheckPasswordMatch").html("");
            $("#div_terms").hide();
            
            //$("#terms").hide();
        }
    }
    $(document).ready(function (){
       $("#confirm_new_pass").keyup(checkPasswordMatch); 
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


	$('#btn_submit').on('click', function(){
		var username = $('#username').val();
		var email = $('#email').val();
		var new_pword = $('#new_pass').val();
		var confirm_pword = $('#confirm_new_pass').val();

		console.log(username);
		console.log(email);
		console.log(new_pword);
		console.log(confirm_pword);

		$.ajax({
			url:'log/change_password',
			method:'POST',
			data:{
				  username:username,
				  email:email,
				  new_pword:new_pword,
				  confirm_pword:confirm_pword
			},
			//dataType:'json',
			success:function(msg){
				console.log(msg);

			},
		});
	});


</script>

</body>
</html>