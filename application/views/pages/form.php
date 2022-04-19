<?php
$region = explode("||", $reg);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>

        <script src="<?php echo base_url();?>assets/lib/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom/login_css.css" />

        <!--DATATABLE-->
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatable/datatables.min.js"></script>
    		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatable/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatable/datatables.min.css" />

        <!-- DATEPICKER -->
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" />
	
        <script>
        $(document).ready(function(){
            $('.check').click(function() {
                $('.check').not(this).prop('checked', false);
            });

            $('.check2').click(function() {
                $('.check2').not(this).prop('checked', false);
            });

            $('.check3').click(function() {
                $('.check3').not(this).prop('checked', false);
            });
        });

        function clearForm(){
            $('#lastname').val('');
            $('#firstname').val('');
            $('#midname').val('');
            $('#name_ext').val('');
            $('#num_street').val('');
            $('#brgy').val('');
            $('#district').val('');
            $('#city_town').val('');
            $('#prov').val('');
            $('#region').val('');
            $('#email_fb').val('');
            $('#contactno').val('');
            $('#nationlty').val('');
            $('#sex').val('');
            $('#cstatus').val('');
            $('#empstatus').val('');
            $('#birthdate').val('');
            $('#birth_cityMun').val('');
            $('#birth_prov').val('');
            $('#birth_region').val('');
            $('#edattain').val('');
            $('#parentGuardian').val('');
            $('#parent_add').val('');
            $('#clclass').val('');
            $('#course').val('');
        }
        </script>
    </head>
    <body>

    <div align="right"><a href="<?php echo base_url();?>" style="color:grey; font-size:18px;"><input type="submit" name="" value="Close" style="border:none;"></a></div>
    <div class="container" style="padding:20px">
    <form class="" id="reg1_enform">
    
        <table class="table-bordered bordered" style="width:100%; background-color: white;"  align="center">
            <tr>
                <td align="center">
                    <img id="tesda_logo" src="<?php echo base_url();?>assets/images/tesda.png" />
                </td>
                <td align="center">
                    <label style="">Technical Education and Skills Development Authority</label><br>
                    <p>Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</p>
                </td>
                <td align="center">
                    <label style="font-size:12px"><b><i>MIS 03-01</i></b></label><br/>
                    <label style="font-size:10px"><i>(ver. 2020)</i></label>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center" style="padding-top:10px;">
                    <label style="font-size:27px">Registration Form</label>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center" style="padding-top:10px;">
                    <label style="font-size:22px">LEARNERS PROFILE FORM</label>
                </td>
            </tr>

            <tr>
                <td colspan="3" style="padding:5px; background-color:#dad8d8"><label>Learner/Manpower Profile</label></td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="left" style="padding-left:20px;"><label>Name <span style="color:red;">*</span></label></div>
                        <div class="col-sm-9" align="center">

                            <input type="text" id="lastname" name="lastname" placeholder="Last Name" style="width:26%" onkeypress="return /[a-z ]/i.test(event.key)" oninput="this.value=this.value.toUpperCase();" value="<?php echo $this->session->userdata('last_name');?>" disabled required>

                            <input type="text" id="firstname" name="firstname" placeholder="First Name" onkeypress="return /[a-z ]/i.test(event.key)" oninput="this.value=this.value.toUpperCase();" style="width:26%;" value="<?php echo $this->session->userdata('name');?>" disabled required>

                            <input type="text" id="midname" name="midname" placeholder="Middle Name" onkeypress="return /[a-z ]/i.test(event.key)"  style="width:26%; text-transform: capitalize; " disabled required>

                            <input type="text" id="name_ext" name="name_ext" placeholder="Extension(Jr./ Sr./ III...)" style="width:18%; text-transform: capitalize;" disabled>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                <br/>
                    <div class="row" style="padding:5px">
                        <div class="col-sm-3" align="left" style="padding-left:20px;"><label>Complete Permanent Mailing Address<span style="color: red;">*</span></label></div>
                        <div class="col-sm-9" align="center">
                            <input type="text" id="num_street" name="num_street" placeholder="Number, Street" style="width:48%; text-transform: capitalize;" onkeypress="return /[a-z ]/i.test(event.key)"  required>
                            <input type="text" id="district" name="district" placeholder="District" value="" style="width:48%;" readonly>
                        </div>
                    </div>  
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="center"></div>
                        <div class="col-sm-9" align="center" style="padding-left:30px;">
                            <select class="form-control" id="region" name="region" style="width:48%; float:left;" required>
                                <option value="">Select Region</option>
                                <?php foreach($region as $rg): 
                                $r = explode("|", $rg) ?>
                                <option value="<?php echo $r[1]."|".$r[0]; ?>"> <?php echo $r[0]; ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <select class="form-control" id="prov" name="prov" style="width:48%; float:left;">
                                <option>Select Province</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="center"></div>
                        <div class="col-sm-9" align="center" style="padding-left:30px;">
                            <select class="form-control" id="citymun" name="citymun" style="width:48%; float:left;" required>
                                <option value="">Select City/Municipality</option>
                            </select>
                            <select class="form-control" id="brgy" name="brgy" style="width:48%; float:left;" required>
                                <option value="">Select Barangay</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="left">
                            <label style="margin-left:5px;">Email Address/Facebook Account<span style="color: red;" >*</span><span style="color: red;" ></span></label>
                        </div>
                        <div class="col-sm-9" align="left" style="padding-left:30px;">
                            <input type="text" id="email_add" name="email_add" placeholder="" value="<?php echo $this->session->userdata('email');?>" style="width:40%" disabled required>
                            <div id="em_err" style="color: red"></div>
                        </div>
                    </div>
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="left">
                            <label style="margin-left:5px; width">Contact Number<span style="color: red;">*</span></label>
                        </div>
                        <div class="col-sm-9" align="left" style="padding-left:30px;">
                            <input type="text" id="contactno" name="contactno" maxlength="11" onkeypress="return /[0-9 ]/i.test(event.key)" style="width:40%" >
                            <div id="cn_err" style="color: red"></div>
                        </div>
                    </div>
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="left">
                            <label style="margin-left:5px; width">Nationality<span style="color: red;">*</span></label>
                        </div>
                        <div class="col-sm-9" align="left" style="padding-left:30px;">
                            <input type="text" id="nationlty" name="nationlty" placeholder="" onkeypress="return /[a-z ]/i.test(event.key)" style="width:40%; text-transform: capitalize;" required>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3" style="padding:5px; background-color:#dad8d8"><label>Personal Information<span style="color: red;">*</span></label></td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-4" align="center">
                            <label for="sex">Sex<span style="color: red;">*</span></label>
                            <select class="form-control" id="sex" name="sex" required>
                              <option value="">Please select</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-4" align="center">
                            <label for="civilstatus">Civil Status<span style="color: red;">*</span></label>
                            <select class="form-control" id="cstatus" name="cstatus" required>
                              <option value="">Please select</option>
                              <option value="Single">Single</option>
                              <option value="Married">Married</option>
                              <option value="Widow">Widow/er</option>
                              <option value="Separated">Separated</option>
                              <option value="Solo Parent">Solo Parent</option>
                            </select>
                        </div>
                        <div class="col-sm-4" align="center">
                            <label for="empstatus">Employment Status(before the training)<span style="color: red;">*</span></label>
                            <select class="form-control" id="empstatus" name="empstatus" required>
                              <option value="">Please select</option>
                              <option value="Employed">Employed</option>
                              <option value="Unemployed">Unemployed</option>
                            </select>
                        </div>
                    </div>
                    <br/>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <div class="row" style="padding:5px;">
                        <!-- <div class="col-sm-3" align="left" style="padding-left:20px;"><label>Birthdate</label></div>
                        <div class="col-sm-9" align="center">
                            <input type="text" name="month" placeholder="Month" style="width:24%">
                            <input type="text" name="day" placeholder="Day" style="width:24%;">
                            <input type="text" name="year" placeholder="Year" style="width:24%;">
                            <input type="text" name="age" placeholder="Age" style="width:24%;">
                        </div> -->

                        <div class="col-sm-3" align="left" style="padding-left:20px;">
                            <label for="date_field" class="control-label">Birthdate<span style="color: red;">*</span></label>
                        </div>
                        <div class="col-sm-9" align="left" style="padding-left:30px;">
                            <div class="input-group date form_date" data-date="" data-date-format="MM dd, yyyy" data-link-field="birthdate" data-link-format="yyyy-mm-dd" style="width:48.5%">
                                <input class="form-control" size="16" type="text" name="date_front" id="date_front" value="" readonly required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                            
                        <input type="hidden" name="birthdate" id="birthdate" value=""/>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="left" style="padding-left:20px;"><label>Birthplace<span style="color: red;">*</span></label></div>
                        <div class="col-sm-9" align="left">
                            
                            <!-- <input type="text" id="birth_cityMun" name="birth_cityMun" placeholder="City/Municpality" style="width:32%" required> -->
                            <!-- <input type="text" id="birth_prov" name="birth_prov" placeholder="Province" style="width:32%;" required>
                            <input type="text" id="birth_region" name="birth_region" placeholder="Region" style="width:32%;" required> -->

                            <select class="form-control" id="birth_region" name="birth_region" style="width:48%; float:left;" required>
                                <option value="">Select Region</option>
                                <?php foreach($region as $rg): 
                                $r = explode("|", $rg) ?>
                                <option value="<?php echo $r[1]."|".$r[0]; ?>" > <?php echo $r[0]; ?> </option>
                                <?php endforeach; ?>
                            </select>
                            
                            <select class="form-control" id="birth_prov" name="birth_prov" style="width:48%; float:left;">
                                <option>Select Province</option>
                            </select>

                        </div>
                    </div>
                        <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="left"></div>
                        <div class="col-sm-9" align="left" >
                            <select class="form-control" id="birth_cityMun" name="birth_cityMun" style="width:48%; float:left;" required>
                                <option value="">Select City/Municipality</option>
                            </select>
                            <select class="form-control" id="birth_brgy" name="birth_brgy" style="width:48%; float:left;" required>
                                <option value="">Select Barangay</option>
                            </select>
                        </div>
                        </div>
                    
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding:5px;">
                    <label style="padding-left:5px;">Educational Attainment Before the Training (Trainee)<span style="color: red;">*</span></label>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" style="padding-bottom:5px;">
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="nograde"> No Grade Completed
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="preschool"> Pre-School (Nursery/Kinder/Prep)
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="hschool_ungrad"> High School Undergraduate
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="hschool_grad"> High School Graduate
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="elem_ungrad"> Elementary Undergraduate
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="postSecon_ungrad"> Post Secondary Undergraduate
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="coll_ungrad"> College Undergraduate
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="coll_grad"> College Graduate or Higher
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="elem_grad"> Elementary Graduate
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="postSecon_grad"> Post Secondary Graduate
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="juniorH_grad"> Junior High Graduate
                        </div>
                        <div class="col-sm-3" align="left" id="educ_choice">
                            <input type="checkbox" name="educ" class="check" value="seniorH_grad"> Senior High Graduate
                        </div>
                    </div>
                    <div class="row" id="educ">
                        <div class="col-sm-12" align="left" id="educ_choice">
                            <select class="form-control" id="edattain" name="edattain" required>
                              <option value="">Please select</option>
                              <option value="No Grade Completed">No Grade Completed</option>
                              <option value="Pre-School (Nursery/Kinder/Prep)">Pre-School (Nursery/Kinder/Prep)</option>
                              <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                              <option value="Elementary Graduate">Elementary Graduate</option>
                              <option value="High School Undergraduate">High School Undergraduate</option>
                              <option value="High School Graduate">High School Graduate</option>
                              <option value="Junior High Graduate">Junior High Graduate</option>
                              <option value="Senior High Graduate">Senior High Graduate</option>
                              <option value="Post Secondary Undergraduate">Post Secondary Undergraduate</option>
                              <option value="Post Secondary Graduate">Post Secondary Graduate</option>
                              <option value="College Undergraduate">College Undergraduate</option>
                              <option value="College Graduate or Higher">College Graduate or Higher</option>
                            </select>
                        </div>
                    </div>
                </td>
                    
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <div class="row" style="padding:5px;">
                        <div class="col-sm-3" align="left" style="padding-left:20px;"><label>Parent/Guardian<span style="color: red;">*</span></label></div>
                        <div class="col-sm-9" align="center">
                            <input type="text" name="parentGuardian" placeholder="Complete Name" onkeypress="return /[A-Za-z\W+]/i.test(event.key)" style="width:36%; text-transform: capitalize;" required>
                            <input type="text" name="parent_add" placeholder="Complete Permanent Mailing Address" onkeypress="return /[A-Za-z\W+]/i.test(event.key)" style="width:60%; text-transform: capitalize;" required>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3" style="padding:5px; background-color:#dad8d8">
                    <label>Learner/Trainee/Student (Clients) Classification:</label>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" style="padding-bottom:5px; font-size:12px;">
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="4ps"> 4Ps Beneficiary
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="agra_ref_benef"> Agrarian Reform Beneficiary
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="balik_prob"> balik Probinsya
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="displcd-wrkr"> Displaced Workers
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="drug_dep_surr"> Drug Dependents Surrenderees/Surrenderers
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="fam_of_AfpPnp_KIA"> Family Members of AFP and PNP Killed-in-Action
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="fam_of_AfpPnp_WIA"> Family Members of AFP and PNP Wounded-in-Action
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="Farm_and_Fisher"> Farmers and Fisherman
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="ipcc"> Indigneous People & Cultural Communities
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="industry_wrkrs"> Industry Workers
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="inmates"> Inmates and Detainees
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="milfBenef"> MILF Beneficiary
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="osy"> Out-of-School-Youth
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="ofw_dep"> Overseas Filipino Workers(OFW) Dependents
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="rcefresp"> RCEF-RESP
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="rebel_combat"> Rebel Returnees/Decommissioned Comabatants
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="return_ofw"> Returning/Repatriated Overseas Filipino Workers(OFW)
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="student"> Student
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="tesda_alum"> TESDA Alumni
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="tvet_trainers"> TVET Trainers
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="unifrmd_personnel"> Uniformed Personnel
                        </div>
                    </div>
                    <div class="row" id="educ" style="display:none;">
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="victim_ndc"> Victim of Natural Disasters and Calamities
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="WIA_afp_pnp"> Wounded-in-Action AFP & PNP Personnel
                        </div>
                        <div class="col-sm-4" align="left" id="educ_choice">
                            <input type="checkbox" name="learner_class" class="check2" value="others"> Others
                            <input type="text" name="class_spec" placeholder="Please specify" style="width:75%;">
                        </div>
                    </div>
                    <div class="row" id="educ">
                        <div class="col-sm-12" align="left" id="educ_choice">
                            <select class="form-control" id="clclass" name="clclass" required>
                              <option value="">Please select</option>
                              <option value="4Ps Beneficiary">4Ps Beneficiary</option>
                              <option value="Agrarian Reform Beneficiary">Agrarian Reform Beneficiary</option>
                              <option value="Balik Probinsya">Balik Probinsya</option>
                              <option value="Displaced Workers">Displaced Workers</option>
                              <option value="Drug Dependents Surrenderees or Surrenderer">Drug Dependents Surrenderees or Surrenderers</option>
                              <option value="Family Members of AFP and PNP Killed-in-Action">Family Members of AFP and PNP Killed-in-Action</option>
                              <option value="Family Members of AFP and PNP Wounded-in-Action">Family Members of AFP and PNP Wounded-in-Action</option>
                              <option value="Farmers and Fisherman">Farmers and Fisherman</option>
                              <option value="Indigneous People and Cultural Communities">Indigneous People and Cultural Communities</option>
                              <option value="Industry Workers">Industry Workers</option>
                              <option value="Inmates and Detainees">Inmates and Detainees</option>
                              <option value="MILF Beneficiary">MILF Beneficiary</option>
                              <option value="Out-of-School-Youth">Out-of-School-Youth</option>
                              <option value="Overseas Filipino Workers(OFW) Dependents">Overseas Filipino Workers(OFW) Dependents</option>
                              <option value="RCEF-RESP">RCEF-RESP</option>
                              <option value="Rebel Returnees or Decommissioned Comabatant">Rebel Returnees or Decommissioned Comabatants</option>
                              <option value="Returning or Repatriated Overseas Filipino Workers(OFW)">Returning or Repatriated Overseas Filipino Workers(OFW)</option>
                              <option value="Student">Student</option>
                              <option value="TESDA Alumni">TESDA Alumni</option>
                              <option value="TVET Trainers">TVET Trainers</option>
                              <option value="Uniformed Personnel">Uniformed Personnel</option>
                              <option value="Victim of Natural Disasters and Calamities">Victim of Natural Disasters and Calamities</option>
                              <option value="Wounded-in-Action AFP and PNP Personnel">Wounded-in-Action AFP and PNP Personnel</option>
                              <option value="Others">Others</option>
                            </select>
                            
                        </div>
                        <div class="col-sm-12" align="left" id="educ_choice" style="font-size:15px; margin-top:5px;">
                            <input type="text" id="class_spec" name="class_spec" placeholder="Please specify" style="width:50%; padding-left:15px; display:none;">
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3" style="padding:5px; background-color:#dad8d8">
                    <div class="row">
                        <div class="col-sm-3"><label>Name of Course / Qualification:<span style="color: red;">*</span></label></div>
                        <div class="col-sm-9">
                            <select class="form-control" id="course" name="course" required>
                              <option value="">Please Select</option>
                              <option value="Cookery NC II">Cookery NC II (Preparing Cold and Hot Meals [Full Qualification])</option>
                              <option value="Foods and Beverages Services NC II">Foods and Beverages Services NC II</option>
                              <option value="Bartending NC II">Bartending NC II</option>
                            </select>
                        </div>
                    </div> 
                </td>
            </tr>

            <tr>
                <td colspan="3" style="padding:5px; background-color:#dad8d8">
                    <label>Privacy Disclaimer:</label>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding:5px;" align="justify">
                    <label><i>I hereby allow TESDA to use/post my contact details, name, email, cellphone/landline nos. and other information I provided which may be used for processing of my scholarship application, for employment opportunities and for survey of TESDA programs.</i></label>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" align="center"><input type="checkbox" name="allowcl" class="check3" value="agree"> Agree</div>
                        <div class="col-sm-3" align="center"><input type="checkbox" name="allowcl" class="check3" value="disag"> Disagree</div>
                        <div class="col-sm-3"></div>
                    </div>
                </td>
            </tr>
        </table>
        <br/><br/>
        <div align="center">
        <input type="submit" class="btn btn-primary" value="Submit">
        <button type="button" class="btn btn-info">Back</button>
        <button type="button" class="btn btn-warning" onclick="clearForm()">Clear Form</button>
        </div>
    </form>
    </div>

    <script src="<?php echo base_url();?>assets/lib/propeller.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/lib/sweetalert.min.js"></script>

    <script>
    $('.form_date').datetimepicker({
            // format: 'MM-dd-yyyy',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    $(document).ready(function() {
        $('#clclass').change( function() {
                var clclass = $('#clclass').val();
                if(clclass == 'Others'){
                    $('#class_spec').show();
                    $('#class_spec').attr('required', ''); 
                }else{
                    $('#class_spec').hide();
                    $('#class_spec').val('');
                    $('#class_spec').removeAttr('required');
                }
                
            } );

        $("#region").change( function() {
            $("#prov").html("");
            $("#prov").append('<option value="">Select Province</option>');
            var reg =$("#region").val();
            var r = reg.split("|");
            var regCode = r[0];
            $.ajax({
                url:"<?php echo site_url("register/province") ?>",
                method:"POST",
                dataType:'json',
                data:{regCode:regCode},
                success:function(data){
                    // for (var i =  0; i < data.length; i++) {
                    //     $('#prov').append('<option value="'+data[i].provCode+'">'+data[i].provDesc+'</option>');
                    // }
                    // console.log(data);
                    $.each(data,function (i, data){
                        $('#prov').append('<option value="'+data.provCode+'|'+data.provDesc+'">'+data.provDesc+'</option>');
                    });
                }
            });
        });

          $("#birth_region").change( function() {
            $("#birth_prov").html("");
            $("#birth_prov").append('<option value="">Select Province</option>');
            var reg =$("#birth_region").val();
            var r = reg.split("|");
            var regCode = r[0];
            $.ajax({
                url:"<?php echo site_url("register/province") ?>",
                method:"POST",
                dataType:'json',
                data:{regCode:regCode},
                success:function(data){
                    // for (var i =  0; i < data.length; i++) {
                    //     $('#prov').append('<option value="'+data[i].provCode+'">'+data[i].provDesc+'</option>');
                    // }
                    // console.log(data);
                    $.each(data,function (i, data){
                        $('#birth_prov').append('<option value="'+data.provCode+'|'+data.provDesc+'">'+data.provDesc+'</option>');
                    });
                }
            });
        });

        $("#prov").change( function() {
            $("#citymun").html("");
            $("#citymun").append('<option value="">Select City/Municipality</option>');
            var prov =$("#prov").val();
            var p = prov.split("|");
            var provCode = p[0];
            var provDesc = p[1];

            $.ajax({
                url:"<?php echo site_url("register/citymun") ?>",
                method:"POST",
                dataType:'json',
                data:{provCode:provCode},
                success:function(data){
                    $.each(data,function (i, data){
                        $('#citymun').append('<option value="'+data.citymunCode+'|'+data.citymunDesc+'">'+data.citymunDesc+'</option>');
                    });
                }
            });
        });

        $("#birth_prov").change( function() {
            $("#birth_cityMun").html("");
            $("#birth_cityMun").append('<option value="">Select City/Municipality</option>');
            var prov =$("#birth_prov").val();
            var p = prov.split("|");
            var provCode = p[0];
            var provDesc = p[1];

            $.ajax({
                url:"<?php echo site_url("register/citymun") ?>",
                method:"POST",
                dataType:'json',
                data:{provCode:provCode},
                success:function(data){
                    $.each(data,function (i, data){
                        $('#birth_cityMun').append('<option value="'+data.citymunCode+'|'+data.citymunDesc+'">'+data.citymunDesc+'</option>');
                    });
                }
            });
        });

        $("#email_fb").keyup( function() {
            var em = this.value;
            var emPattern = new RegExp('^[\w{1,30}.%+]+@[a-zA-Z0-9.-]+\.(\w{2,4})');

            if (emPattern.test(cn)) {
                $("#em_err").html("invalid e-mail address");
            }
        });

        $("#contactno").keyup( function() {
            var cn = this.value;
            var emPattern = new RegExp('^[\w{1,30}.%+]+@[a-zA-Z0-9.-]+\.(\w{2,4})');

            if (emPattern.test(cn)) {
                $("#cn_err").html("invalid contact number");
            }
        });

        $("#citymun").change( function() {
            $("#brgy").html("");
            $("#brgy").append('<option value="">Select Barangay</option>');

            var prov =$("#prov").val();
            var p = prov.split("|");
            var provDesc = p[1];

            var citymun =$("#citymun").val();
            var c = citymun.split("|");
            var citymunCode = c[0];
            var citymunDesc = c[1];

            var dist = "";
            var dist1 = [
                    "ALBURQUERQUE",
                    "ANTEQUERA",
                    "BACLAYON",
                    "BALILIHAN",
                    "CALAPE",
                    "CATIGBIAN",
                    "CORELLA",
                    "CORTES",
                    "DAUIS",
                    "LOON",
                    "MARIBOJOC",
                    "PANGLAO",
                    "SIKATUNA",
                    "TAGBILARAN CITY",
                    "TUBIGON"
                ];

            var dist2 = [
                    "BIEN UNIDO",
                    "BUENAVISTA",
                    "CLARIN",
                    "DAGOHOY",
                    "DANAO",
                    "GETAFE",
                    "INABANGA",
                    "PRES. CARLOS P. GARCIA",
                    "SAGBAYAN",
                    "SAN ISIDRO",
                    "SAN MIGUEL",
                    "TALIBON",
                    "TRINIDAD",
                    "UBAY"
                ];

            var dist3 = [
                    "ALICIA",
                    "ANDA",
                    "BATUAN",
                    "BILAR",
                    "CANDIJAY",
                    "CARMEN",
                    "DIMIAO",
                    "DUERO",
                    "GARCIA HERNANDEZ",
                    "GUINDULMAN",
                    "JAGNA",
                    "LILA",
                    "LOAY",
                    "LOBOC",
                    "MABINI",
                    "PILAR",
                    "SEVILLA",
                    "SIERRA BULLONES",
                    "VALENCIA"
                ];
            
            if(provDesc == 'BOHOL'){
                if(dist1.includes(citymunDesc)){
                    $("#district").val("District 1");
                }else if (dist2.includes(citymunDesc)) {
                    $("#district").val("District 2");
                }else if (dist3.includes(citymunDesc)) {
                    $("#district").val("District 3");
                }
            }
                
            $.ajax({
                url:"<?php echo site_url("register/brgy") ?>",
                method:"POST",
                dataType:'json',
                data:{citymunCode:citymunCode},
                success:function(data){
                    $.each(data,function (i, data){

                        $('#brgy').append('<option value="'+data.brgyCode+'|'+data.brgyDesc+'">'+data.brgyDesc+'</option>');
                    });
                }
            });
        });

        $("#birth_cityMun").change( function() {
            $("#birth_brgy").html("");
            $("#birth_brgy").append('<option value="">Select Barangay</option>');

            var prov =$("#birth_prov").val();
            var p = prov.split("|");
            var provDesc = p[1];

            var citymun =$("#birth_cityMun").val();
            var c = citymun.split("|");
            var citymunCode = c[0];
            var citymunDesc = c[1];

            var dist = "";
            var dist1 = [
                    "ALBURQUERQUE",
                    "ANTEQUERA",
                    "BACLAYON",
                    "BALILIHAN",
                    "CALAPE",
                    "CATIGBIAN",
                    "CORELLA",
                    "CORTES",
                    "DAUIS",
                    "LOON",
                    "MARIBOJOC",
                    "PANGLAO",
                    "SIKATUNA",
                    "TAGBILARAN CITY",
                    "TUBIGON"
                ];

            var dist2 = [
                    "BIEN UNIDO",
                    "BUENAVISTA",
                    "CLARIN",
                    "DAGOHOY",
                    "DANAO",
                    "GETAFE",
                    "INABANGA",
                    "PRES. CARLOS P. GARCIA",
                    "SAGBAYAN",
                    "SAN ISIDRO",
                    "SAN MIGUEL",
                    "TALIBON",
                    "TRINIDAD",
                    "UBAY"
                ];

            var dist3 = [
                    "ALICIA",
                    "ANDA",
                    "BATUAN",
                    "BILAR",
                    "CANDIJAY",
                    "CARMEN",
                    "DIMIAO",
                    "DUERO",
                    "GARCIA HERNANDEZ",
                    "GUINDULMAN",
                    "JAGNA",
                    "LILA",
                    "LOAY",
                    "LOBOC",
                    "MABINI",
                    "PILAR",
                    "SEVILLA",
                    "SIERRA BULLONES",
                    "VALENCIA"
                ];
            
            if(provDesc == 'BOHOL'){
                if(dist1.includes(citymunDesc)){
                    $("#district").val("District 1");
                }else if (dist2.includes(citymunDesc)) {
                    $("#district").val("District 2");
                }else if (dist3.includes(citymunDesc)) {
                    $("#district").val("District 3");
                }
            }
                
            $.ajax({
                url:"<?php echo site_url("register/brgy") ?>",
                method:"POST",
                dataType:'json',
                data:{citymunCode:citymunCode},
                success:function(data){
                    $.each(data,function (i, data){

                        $('#birth_brgy').append('<option value="'+data.brgyCode+'|'+data.brgyDesc+'">'+data.brgyDesc+'</option>');
                    });
                }
            });
        });
    });

    $("#reg1_enform").submit(function(e){
            e.preventDefault();

            var lname = $('#lastname').val();
            var firstname = $('#firstname').val();
            var mname = $('#midname').val();

            var nameExt = '';
            nameExt = " "+$('#name_ext').val();
            var numStreet = '';
            numStreet = $('#num_street').val();
            if(numStreet != ''){
                numStreet = numStreet+', ';
            }

            var brgy = $('#brgy').val();
            var brgyval = brgy.split('|');
            brgy = brgyval[1];

            var dist = '';
            dist = $('#district').val();
            
            var cityMun = $('#citymun').val();
            var cityMunval = cityMun.split('|');
            cityMun = cityMunval[1];

            var prov = $('#prov').val();
            var provval = prov.split("|");
            prov = provval[1];

            var region = $('#region').val();
            var regionval = region.split('|');
            region = regionval[1];

            var emailFb = $('#email_fb').val();
            var contactNo = $('#contactno').val();
            var nal = $('#nationlty').val();
            var sex = $('#sex').val();
            var cStatus = $('#cstatus').val();
            var empStatus = $('#empstatus').val();
            var bdate = $('#birthdate').val();
            var bCityMun = $('#birth_cityMun').val();
            var bProv = $('#birth_prov').val();
            var bRegion = $('#birth_region').val();
            var educAttain = $('#edattain').val();
            var parentG = $('#parentGuardian').val();
            var parentAdd = $('#parent_add').val();
            var clclass = $('#clclass').val();
            var course = $('#course').val();
            var allowcl = "";
            allowcl = $('.check3:checked').val();
            var classSpec = '';

            if(clclass == 'Others'){
                classSpec = $('#class_spec').val();
            }

            if(bdate == ''){
                swal({
                    title:"Please input your Birth Date.",
                    icon:"warning"
                });
            }
            else if(allowcl == null){
                swal({
                    title:"Please select whether you Agree or Disagree with the Privacy Disclaimer.",
                    icon:"warning"
                });
            }else{
                lname = lname.charAt(0).toUpperCase()+lname.slice(1);
                firstname = firstname.charAt(0).toUpperCase()+firstname.slice(1);
                mname = mname.charAt(0).toUpperCase()+mname.slice(1);

                var completeName = lname + ', ' + firstname + nameExt + ', ' + mname;
                var completeAdd = numStreet + brgy + ', ' + cityMun + ', ' + prov;
                var birthPlace = bCityMun+', '+bProv+', '+bRegion;

                // console.log(completeName);
                // console.log(completeAdd);
                // console.log(birthPlace);
                // console.log(allowcl);

                console.log(district);

                $.ajax({
                        url:"<?php echo site_url("register/enroll_client") ?>",
                        method:"POST",
                        data: new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data){
                            if (data.trim()=='created') {
                                swal({
                                    title:"Registered successfully",
                                    icon:"success"
                                }).then(function() {
                                    window.location = '<?php echo base_url(); ?>/my_records';
                                });
                            }else{
                                 swal({
                                    title:'updated',
                                    icon:"success"
                                }).then(function() {
                                    window.location = '<?php echo base_url(); ?>/my_records';
                                });
                            }
                            // if (data.trim()=='updated') {
                            //     swal({
                            //         title:"Updated successfully",
                            //         icon:"success"
                            //     }).then(function() {
                            //         window.location = '<?php //echo base_url(); ?>/reg_stat';
                            //     });
                            // }else{
                            //     swal({
                            //         title:data,
                            //         icon:"success"
                            //     }).then(function() {
                            //         window.location = '<?php //echo base_url(); ?>/reg_stat';
                            //     });
                            // }
                        }
                    });
            }
   
        });
    </script>
    </body>
</html>