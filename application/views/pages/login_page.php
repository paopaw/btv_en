
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
		                <p>Login to your account <i class="ti ti-hand-point-down"></i></p>
		            </div>
		            <form enctype="multipart/form-data" method="POST" id="fileUploadForm">
		                <div class="form-group">
		                    <input type="text" class="form-control" placeholder="Username" id="username" name="username" autofocus >
		                </div>
		                <div class="form-group">
		                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" >
		                </div>

		                <div class="form-group">
                            <input type="checkbox" onclick="showpassword()"> Show Password
                        </div>

		                <p><div id="forgot_password" hidden><a href="#" onclick="forget_pass();"><u style="color:red;"><i>forget password</i></u></a></div></p>

                        <div class="form-group">
		                	<span id="msg_log"></span>
		            	</div>
		                <button class="btn btn-danger btn-sm " type="submit" id="btn_login">Login</button>

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
    function forget_pass(){
    	window.location.href = 'forget_pass';
    }

     function showpassword() {
      var x = document.getElementById("password");

      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }

	$('form#fileUploadForm').submit(function(e) {
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
			url:'login/validate_login',
			method:'POST',
			data:formData,
			dataType:'json',
			success:function(msg){
				if(msg.trim() == 'invalid'){
					$('#msg_log').html('Invalid, username and/or password...');
					$('#msg_log').css({
						'color': 'red',
						'font-family': 'adobe hebrew'
					});  
					$('#username').css({ 'border-color': 'red' });
					$('#username').unbind('focus').bind('focus', function() {
						$(this).removeAttr('style');
						$('#msg_log').removeAttr('style');
						$('#msg_log').html('');
					});
					$('#password').css({ 'border-color': 'red' });
					$('#password').unbind('focus').bind('focus', function(){
						$(this).removeAttr('style');
						$('#msg_log').removeAttr('style');
						$('#msg_log').html('');
					});
					$('#forgot_password').show();

					//	$('#btn_login').hide();

				}else{
					$('#btn_login').hide();
					$('#create_account').hide();
					$('#or').hide();
					$('.progress').show();
					let fill = 0;
					$('#password').removeAttr('style');
					$('#username').removeAttr('style');
					$('#msg_log').html('');
					window.setInterval(function(){
						fill += 10;
						if(fill === 100){
							clearInterval();
							document.getElementById("progress_one").style.width = fill + "%";
							$('#progress_one').html(fill+'%');
							setTimeout('window.location.href = "'+msg+'";', 2000);
							
							//alert(base_url(msg));
						}
						else{
							if(fill <= 100){
								document.getElementById("progress_one").style.width = fill + "%";
								$('#progress_one').html(fill+'%');
							}
						}
					}, 450);
				}
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