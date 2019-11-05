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
     <link href="../css/slide2.css" rel="stylesheet" />
  <script src="../js/jquery.min.js"></script>
    
    <script>
   $(document).ready(function() {
   $("#partial").click(function(){
    $('.shade').css('display','block');
    $('.slide-div').slideDown();
    $(".close").click(function(){
      $('.slide-div').fadeOut('fast');
      $('.shade').css('display','none');
    });
    $(".cancel").click(function(){
      $('.slide-div').fadeOut('fast');
      $('.shade').css('display','none');
    });    
  });
  $("#full").click(function(){
    $('.shade').css('display','block');
    $('.slide-div1').slideDown();
    $(".close").click(function(){
      $('.slide-div1').fadeOut('fast');
      $('.shade').css('display','none');
    });
    $(".cancel").click(function(){
      $('.slide-div1').fadeOut('fast');
      $('.shade').css('display','none');
    });    
  });  
});
   </script>
   </head>
  <body class="" style="">
    <div class="shade"></div>
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
                      <li>Account Managment</li>
                      <li class="active">Paid Student's List</li>
                  </ol>
                  <h1>Paid Students</h1>
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
               <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                     <h4>Paid Student's Details</h4>
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
                            <div class="form-group">
                              <label style="" class="col-sm-3 control-label">Month</label>
                              <div style="" class="col-sm-3">
                                  <select class="form-control" name="emp_qualification" id="source">
                                    <option value="">Select Month</option>
                                    <option value="">January</option>
                                    <option value="">February</option>
                                    <option value="">March</option>
                                    <option value="">April</option>
                                    <option value="">May</option>
                                    <option value="">June</option>
                                    <option value="">July</option>
                                    <option value="">August</option>
                                    <option value="">September</option>
                                    <option value="">October</option>
                                    <option value="">November</option>
                                    <option value="">December</option>
                                  </select>
                              </div>
                              <label class="col-sm-3 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="number" class="form-control" name="emp_joindate" id="" min="2000" max="2015" placeholder="2000-2015">
                              </div>
                            </div>
                    
                            <div style="clear:both"></div>
                            <div id="example_wrapper" class="dataTables_wrapper" role="grid">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables dataTable" id="example" aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 265px;">Admission Number</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Student Name</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Fees (Tk.)</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Fees Paid (Tk.)</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Balance (Tk.)</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Action</th>
                                      </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr class="gradeA odd">
                                <td class=" ">343</td>
                                <td class=" ">Rohan Kumar</td>
                                <td class=" ">5000</td>
                                <td class=" ">5000</td>
                                <td class=" ">-</td>
                                <td class=" "><span class="action-icon"><a href="print.php" id="print">Print</a></span></td>
                                </tr>

                              <?php
                                   // include("database.php");
                                    $query = "select * from  employee where deleted='0'";
                                    $res_port = mysql_query($query);
                                    if ($res_port) {
                                       while ($row_port = mysql_fetch_array($res_port)) {
                                        $desgid=$row_port['designation'];
                                        $query1 = "select * from  designation where id='$desgid'";
                                        $res_port1 = mysql_query($query1);
                                        $row_port1 = mysql_fetch_array($res_port1);
                                         echo '<tr class="gradeA odd">';
                                         echo '<td class=" "><input type="hidden" name="emp_id[]" value='.$row_port['id'].'>'. $row_port['emp_name'] . '</td>';
                                         echo '<td class=" ">'. $row_port1['designation'] . '</td>';
                                         echo '<td class=" ">'. $row_port['joindate'] . '</td>';
                                         echo '<td class=" "><input type="text" name="present[]" onkeydown="return numericOnly(event);"></td>';
                                         echo '<td class=" "><input type="text" name="late_record[]"></td>';
                                        }
                                       }
                                         ?>
                                    
                                </tbody>

                            </table>
                             
                            </div>
                        <div class="form-group" style="display:none">

                            <label class="col-sm-3 control-label">Fullscreen Textarea</label>
                            <div class="col-sm-6">
                                <textarea class="form-control fullscreen" style="display: none;"></textarea><div class="fs-editor-wrapper">                     <div class="fs-editor"><a href="http://redteamux.com/avant/form-components.php#" class="fs-icon"></a>                     <div class="fs-editable" contenteditable="true" style="min-height: 52px;"></div>                     </div></div>
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
