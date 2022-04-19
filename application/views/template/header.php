<?php 
date_default_timezone_set("Asia/Manila");
// $idn = $this->session->userdata('nn_user_id');
// if($idn == "")
// {
//    header('location:'.base_url());
// }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>

        <!-- JQUERY & BOOTSTRAP -->
        <script src="<?php echo base_url();?>assets/lib/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />

        <!-- DATEPICKER -->
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" />

        <!-- CUSTOM -->
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom/custom.css" />
      
        <!--DATATABLE-->
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatable/datatables.min.js"></script>
    		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatable/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatable/datatables.min.css" />
		<!--DATATABLE-->

    <script type="text/javascript">
    function startTime()
        {
            var d=new Date();
            var h=d.getHours();
            var m=d.getMinutes();
            // var s=d.getSeconds();
            var ampm = h >= 12 ? 'PM' : 'AM';
            h = h % 12;
            h = h ? h : 12;
            m = m < 10 ? '0'+m : m;
            // s = s < 10 ? '0'+s : s;
            document.getElementById("clock").innerHTML=h+":"+m+" "+ampm;
            setTimeout('startTime()',1000);
        }
    </script>

    </head>
    <body onload="startTime()">

    <div class="container-fluid" style="width:95%; padding-bottom:15px;">