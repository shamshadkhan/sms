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
    <script type="text/javascript" src="../js/jquery.min.js"></script> 
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
                      <li>Timetable Managment</li>
                      <li class="active">Set Timetable</li>
                  </ol>
                  <h1>Timetable Information</h1>
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
                    <h4>Timetable Setting</h4>
                </div>
                <div class="panel-body collapse in">
                        <div class="form-group">
                             <label class="col-sm-3 control-label">Student Division</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="status" name="status">
                                     <option value="">Select division</option>
                                    <option value="">I</option>
                                    <option value="">II</option>
                                    <option value="">III</option>
                                    <option value="">IV</option>
                                    <option value="">V</option>
                                    <option value="">VI</option>
                                    <option value="">VII</option>
                                    <option value="">VIII</option>
                                    <option value="">IX</option>
                                    <option value="">X</option>
                                    <option value="">XI</option>
                                    <option value="">XII</option>
                                </select>
                            </div>
                            <label class="col-sm-3 control-label">Section</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="emp_qualification" id="source">
                                    <option value="">Select section</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                  </select>
                            </div> 
                        </div>
                        <div class="form-group" style="overflow-x: scroll;">
                          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables dataTable" id="example" aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Day/Time</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">08:00AM-09:00AM</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">09:00AM-10:00AM</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">10:00AM-11:00AM</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">11:00AM-12:00AM</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">12:00PM-01:00PM</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">01:00AM-02:00AM</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1">02:00AM-03:00AM</th></tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr class="gradeA odd">
                                  <tr class="gradeA odd">
                                <td style="vertical-align: middle;text-align: center;">SAT</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td style="vertical-align: middle;text-align: center;">BREAK</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                </tr>
                               
                                <td style="vertical-align: middle;text-align: center;">SUN</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td style="vertical-align: middle;text-align: center;">BREAK</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                </tr>
                                <tr class="gradeA odd">
                                <td style="vertical-align: middle;text-align: center;">MON</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td style="vertical-align: middle;text-align: center;">BREAK</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                </tr>
                                <tr class="gradeA odd">
                                <td style="vertical-align: middle;text-align: center;">TUE</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td style="vertical-align: middle;text-align: center;">BREAK</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                </tr>
                                <tr class="gradeA odd">
                                <td style="vertical-align: middle;text-align: center;">WED</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td style="vertical-align: middle;text-align: center;">BREAK</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                </tr>
                                <tr class="gradeA odd">
                                <td style="vertical-align: middle;text-align: center;">THU</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td style="vertical-align: middle;text-align: center;">BREAK</td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                <td class=" "><input style="width: 124px;height: 37px;border:none;background-color:transparent;" type="textbox" name=""></td>
                                </tr>

                            </tbody>
                          </table>
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
