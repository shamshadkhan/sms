<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>School Managment System</title>
  <head>
    <link rel="stylesheet" href="../css/styles.min.css">
    <link href="css" rel="stylesheet" type="text/css">
    <link href="default.css" rel="stylesheet" type="text/css" media="all" id="styleswitcher"> 
    <link rel="stylesheet" type="text/css" href="../css/select2.css"> 
    <link rel="stylesheet" type="text/css" href="../css/multi-select.css"> 
    <link rel="stylesheet" type="text/css" href="../css/jquery.ui.timepicker.css"> 
    <link rel="stylesheet" type="text/css" href="../css/daterangepicker-bs3.css"> 
    <link rel="stylesheet" type="text/css" href="../css/fseditor.css"> 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-tokenfield.css"> 
    <link rel="stylesheet" type="text/css" href="../css/jqueryui.css"> 
    <link rel="stylesheet" type="text/css" href="../css/prettify.css"> 
    <link rel="stylesheet" type="text/css" href="../css/toggles.css">
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script>
   $(document).ready(function (){
        $("#joindate").hide();
        $("#releasedate").hide();
     $('#status').change(function(){     
            var opt = $('select[name="status"]').val()
            if(opt=='Active')
            {
                $("#joindate").slideDown("slow");
                $("#releasedate").hide();
            }
            if(opt=='Inactive')
            {
                $("#releasedate").slideDown("slow");
                $("#joindate").hide();
            }
        });
     $('#same').click(function(){
        var opt=$('#emp_present_address').val();
        var i= $('#same').prop('checked');
            if(i)
            {
                $("#emp_permenant_address").val(opt);
            }
        
     })

    });
   </script> 
   <script>
   function numericOnly(event) {
    var key = window.event.keyCode || event.keyCode;
    return ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key == 8) || (key == 9));
}
   </script>
  </head>
  <body class="" style="">
    <div id="headerbar">
      <div class="container">
      </div>
    </div>
    <?php include('header.php');?>
    <div id="page-container">
      <nav id="page-leftbar" role="navigation">
        <!-- BEGIN SIDEBAR MENU -->
        <?php include('sidebar.php');?>
        <!-- END SIDEBAR MENU -->
      </nav>
     <!-- END RIGHTBAR -->
      <div id="page-content" style="min-height: 883px;">
          <div id="wrap">
              <div id="page-heading">
                  <ol class="breadcrumb">
                      <li><a href="index.php">SMS</a></li>
                      <li>Employee Information</li>
                      <li class="active">Add New Employee Information</li>
                  </ol>
                  <h1>Employee Information</h1>
                </div>
        <div class="container">
             <?php 
            if($f==1)
            {
              ?>
              <div class="alert alert-dismissable alert-success">
                <strong><?php echo $message1;?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
            <?php  
            $f=0;
            }
             if($f==2)
            {
              ?>
              <div class="alert alert-dismissable alert-error">
                <strong><?php echo $message2;?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
            <?php
            $f=0;  
            }
            if($f==3)
            {
              ?>
              <div class="alert alert-dismissable alert-warning">
                <strong><?php echo $message3;?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
            <?php
            $f=0;  
            }
          ?>
            <form action="" enctype="multipart/form-data" method="post" class="form-horizontal row-border" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">
             <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Employee's General Details</h4>
                </div>
                <div class="panel-body collapse in">
                    <div class="form-group">
                            <label style="" class="col-sm-3 control-label">Employee Number</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                            <label class="col-sm-3 control-label">Joining Date</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="emp_joindate" id="datepicker">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label style="" class="col-sm-3 control-label">First Name</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                            <label style="" class="col-sm-3 control-label">Last Name</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-3">
                                <input type="text" name="emp_dob" class="form-control" id="datepicker">
                            </div>
                             <label class="col-sm-3 control-label">Gender</label>
                            <div  style="" class="col-sm-3">
                                <label class="radio-inline">
                                  <input type="radio" checked="checked" id="inlineradio1" name="emp_gender" value="Male"> Male
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" id="inlineradio2" name="emp_gender" value="Female"> Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Employee Position</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="emp_designation" id="source">
                                    <option value="">Select Position</option>
                                    <option value="">Head of Science</option>
                                    <option value="">Head of Commerce</option>
                                    <option value="">Science Teacher</option>
                                    <option value="">Commerce Teacher</option>
                                    <option value="">Library Admin</option>
                                </select>
                            </div>
                            <label class="col-sm-3 control-label">Employee Category</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="status" name="status">
                                    <option value="">Select Category</option>
                                    <option value="">Class Lecturer</option>
                                    <option value="">Assistant Professor</option>
                                    <option value="">Associate Professor</option>
                                    <option value="">Head of Department</option>
                                    <option value="">Deen</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Employee Department</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="status" name="status">
                                    <option value="">Select Department</option>
                                    <option value="Active">Science</option>
                                    <option value="Inactive">Commerce</option>
                                </select>
                            </div>
                            <label class="col-sm-3 control-label">Qualification</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="emp_qualification" id="source">
                                    <option value="">Select qualification</option>
                                    <option value="">Secondary School Certified</option>
                                    <option value="">Higher Secondary Certified</option>
                                    <option value="">Bachelor Certified</option>
                                    <option value="">Masters Certified</option>    
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                             <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="emp_qualification" id="source">
                                    <option value="">Select status</option>
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>     
                                </select>
                            </div>
                            <label class="col-sm-3 control-label" >Total Experience</label>
                            <div class="col-sm-3" >
                                <select class="" name="emp_qualification" id="source">
                                    <option value="">Years</option>
                                    <option value="">0</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                    <option value="">17</option>
                                    <option value="">18</option>
                                    <option value="">19</option>
                                    <option value="">20</option>
                                </select>
                                <select class="" name="emp_qualification" id="source">
                                    <option value="">Months</option>
                                    <option value="">0</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                        
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                             <label style="margin-top: 3%;" class="col-sm-3 control-label">Experience Details</label>
                            <div class="col-sm-3">
                                <textarea class="form-control autosize" name="emp_present_address" id="emp_present_address" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 92px;"></textarea>
                            </div>
                           
                        </div>
                        <div class="form-group" style="display:none">
                            <label class="col-sm-3 control-label">Fullscreen Textarea</label>
                            <div class="col-sm-6">
                                <textarea class="form-control fullscreen" style="display: none;"></textarea><div class="fs-editor-wrapper">                     <div class="fs-editor"><a href="http://redteamux.com/avant/form-components.php#" class="fs-icon"></a>                     <div class="fs-editable" contenteditable="true" style="min-height: 52px;"></div>                     </div></div>
                            </div>
                        </div>
                    <!--div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="btn-toolbar">
                                    <button class="btn-primary btn" onclick="javascript:$(&#39;#validate-form&#39;).parsley( &#39;validate&#39; );">Submit</button>
                                    <button class="btn-primary btn">Submit</button>
                                    <button class="btn-default btn">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>   
            </div>
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Employee's Personal Details</h4>
                </div>
                <div class="panel-body collapse in">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Marital Status</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="source" name="emp_job_status">
                                    <option value="">Select Status</option>
                                    <option value="Part Time">Single</option>
                                    <option value="Full Time">Married</option>
                                    <option value="Full Time">Divorced</option>
                                </select>
                            </div>
                            <label style="" class="col-sm-3 control-label">Children Count</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="" class="col-sm-3 control-label">Father's Name</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                            <label style="" class="col-sm-3 control-label">Mother's Name</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label style="" class="col-sm-3 control-label">Husband/Wife Name</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                             <label class="col-sm-3 control-label">Blood Group</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="emp_qualification" id="source">
                                    <option value="">Select Group</option>
                                    <option value="">A+</option>
                                    <option value="">A-</option>
                                    <option value="">B+</option>
                                    <option value="">B-</option>
                                    <option value="">O+</option>
                                    <option value="">O-</option>
                                    <option value="">AB+</option>
                                    <option value="">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="joindate">
                            <label style="margin-top:7%" class="col-sm-3 control-label">Nationality</label>
                            <div class="col-sm-3" style="margin-top:7%">
                                <select class="form-control" name="emp_qualification" id="source">
                                    <option value="">Select Nationality</option>
                                    <option value="">Bangladeshi</option>
                                    <option value="">Indian</option>
                                    <option value="">Pakistani</option>
                                    <option value="">Malaysian</option>
                                    <option value="">Emarathi</option>
                                </select>
                            </div>
                            <label style="margin-top: 7%;" class="col-sm-3 control-label">Photo Upload</label>
                            <div class="col-sm-3">
                                <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden" value="" name="...">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"></div>
                                    <div>
                                      <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="emp_image"></span>
                                      <a href="" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>   
            </div>
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Employee's Contact Details</h4>
                </div>
                <div class="panel-body collapse in">
                        <div class="form-group">
                             <label class="col-sm-3 control-label">Email ID</label>
                            <div class="col-sm-3">
                                <input type="email" name="emp_email" data-type="email" placeholder="Email address"  class="form-control parsley-validated">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mobile No</label>
                            <div class="col-sm-3">
                                <input type="numbers" onkeydown="return numericOnly(event);" data-type="phone" name="emp_mobile_no" placeholder="(XXX) XXXX XXX" class="form-control parsley-validated">
                            </div>
                            <label class="col-sm-3 control-label">Telephone</label>
                            <div class="col-sm-3">
                                <input type="tel" onkeydown="return numericOnly(event);" data-type="phone" name="emp_telephone" placeholder="(XXX) XXXX XXX"  class="form-control parsley-validated">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 3%;" class="col-sm-3 control-label">Present Address</label>
                            <div class="col-sm-3">
                                <textarea class="form-control autosize" name="emp_present_address" id="emp_present_address" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 92px;"></textarea>
                            </div>

                            <label style="margin-top: 3%;" class="col-sm-3 control-label">Permenant Address</label>
                            <div class="col-sm-3">
                                <textarea class="form-control autosize" name="emp_permenant_address" id="emp_permenant_address" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 92px;"></textarea>
                                 <label><input type="checkbox" value="same" name="same" id="same">Same as Present Address</label>
                            </div>
                        </div>
                            <div class="form-group">
                            <label style="" class="col-sm-3 control-label">City</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                            <label style="" class="col-sm-3 control-label">State</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="" class="col-sm-3 control-label">Pincode</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                            <label style="" class="col-sm-3 control-label">Country</label>
                            <div style="" class="col-sm-3">
                                <input type="text" name="emp_name" class="form-control">
                            </div>
                        </div>
                       
                         <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="btn-toolbar">
                                    <!--button class="btn-primary btn" onclick="javascript:$(&#39;#validate-form&#39;).parsley( &#39;validate&#39; );">Submit</button-->
                                    <button class="btn-primary btn" type="submit" name="save" id="save" >Save</button>
                                    <button class="btn-default btn">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
          </form>
         </div> <!-- container -->
      </div> <!--wrap -->
    </div> <!-- page-content -->
   <?php include('footer.php');?>
    

</div> <!-- page-container -->

<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script> 
<script type="text/javascript" src="../js/jqueryui-1.10.3.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../js/enquire.js"></script> 
<script type="text/javascript" src="../js/jquery.cookie.js"></script> 
<script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script> 
<script type="text/javascript" src="../js/prettify.js"></script> 
<script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script> 
<script type="text/javascript" src="../js/jquery.sparklines.min.js"></script> 
<script type="text/javascript" src="../js/toggle.min.js"></script> 
<script type="text/javascript" src="../js/jquery.multi-select.min.js"></script> 
<script type="text/javascript" src="../js/jquery.quicksearch.min.js"></script> 
<script type="text/javascript" src="../js/typeahead.min.js"></script> 
<script type="text/javascript" src="../js/select2.min.js"></script> 
<script type="text/javascript" src="../js/jquery.autosize-min.js"></script> 
<script type="text/javascript" src="../js/bootstrap-colorpicker.min.js"></script> 
<script type="text/javascript" src="../js/jquery.ui.timepicker.min.js"></script> 
<script type="text/javascript" src="../js/daterangepicker.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="../js/moment.min.js"></script> 
<script type="text/javascript" src="../js/jquery.fseditor-min.js"></script> 
<script type="text/javascript" src="../js/fileinput.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap-tokenfield.min.js"></script> 
<script type="text/javascript" src="../js/demo-formcomponents.js"></script> 
<script type="text/javascript" src="../js/parsley.min.js"></script> 
<script type="text/javascript" src="../js/demo-formvalidation.js"></script> 
<script type="text/javascript" src="../js/placeholdr.js"></script><style>.placeholdr{color:#AAA;}</style> 
<script type="text/javascript" src="../js/application.js"></script> 
<script type="text/javascript" src="../js/demo.js"></script> 


</body></html>
