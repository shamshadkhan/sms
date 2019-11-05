<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>School Managment System</title>
  <head>
    <link href="../css/view-profile.css" rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
    
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

        function myPrint()
        {
           window.print();
        }
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
      <div id="page-content" class="print_top" style="min-height: 883px;margin-left:0px;">
          <div id="wrap">
              
        <div class="container widget">
            
            <form action="" enctype="multipart/form-data" method="post" class="form-horizontal row-border" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">
               <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                     <h4>Paid Student's Details</h4>
                    </div>
                    <div class="panel-body collapse in" style="border:none">

                          <div class="form-group">
                            <form action="" method="post">
                            <button type="button" class="btn btn-info" onclick="myPrint()" style="float: right;margin-right: 127px;margin-top: 7.5px;"><i class="icon16 i-print"></i>Print</button>
                            <a href="../admin/paid_list.php" class="btn btn-info" style="float: right;margin-right: 10px;margin-top: 8.5px;">Back</a>
                            <!--button  type="submit" class="btn btn-primary" style="float: right;margin-right: 10px;margin-top: -28.5px;"><i class="icon16 i-folder-download-3"></i>Download</button-->
                            </form>
                          </div>
                            <div id="example_wrapper" class="dataTables_wrapper" role="grid">
                               <div id="head-title">
                                        <div>
                                            <div class="center-head-img">
                                                <center><img src="image/excel_it.png"></center>
                                            </div>
                                            <div class="center-head">
                                               <p class="center marine" style="font-weight:900">International Grammer School</p>
                                               <h3 class="center seafar" style="font-weight:900">Chittagong, Bangladesh</h3>
                                            </div>
                                        </div>
                                        <div id="lower-half">
                                            <p style="margin-top: -4px;">Head office:<span style="font-weight:bold"> Holding # 16/A, 4th Floor, Road # 01
                                            Sugandha R/A,<br> Next Left to Chevron Hospital Panchlaish, Chittagong </span>
                                            </p>
                                            <p style="margin-top: -10px;" class="center">Cell No: <span style=""><b>01615 550880, 01858 550880</b></span>, Web: <span style=""><b>www.schoolbd.com</b></span></p>
                                        </div>
                                    </div>
                                   <center>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables dataTable" id="example" aria-describedby="example_info" style="width:80%;margin-top:3%">
                                <thead>
                                  <tr>
                                    <th style="width:20%">Name:</th><td>Rohan Kumar</td><th style="width:20%">Date:</th><td>03-May-2014</td>
                                  </tr>
                                  <tr>
                                    <th style="width:20%">Division:</th><td>VIII</td><th style="width:20%">Section:</th><td>A</td>
                                  </tr>
                                  <tr>
                                    <th style="width:20%">Address:</th><td>student address</td><th style="width:20%">Admission No:</th><td>343</td>
                                  </tr>
                                </thead>
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                              
                                  <tr role="row">
                                    <th colspan="2" class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 265px;">Total Fees</th>
                                    <th colspan="2" class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Fees Paid</th>
                                  </tr>
                                  <tr class="gradeA odd">
                                  <td colspan="2" class=" ">5000 Tk.</td>
                                  <td colspan="2" class=" ">1000 tk.</td>
                                  </tr>
                                  <tr>
                                    <th colspan="2" class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Due (if any)</th>
                                    <td colspan="2" class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">4000 Tk.</td>
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
                             <div  style="float: right;width: 50%;font-weight: bold;font-family: arial;font-size: 15px;margin-top: 10%;">
                                <p>Authorised Signature</p>
                                <p style="width:43%;border: 1px solid black;"></p>
                             </div>
                             </center>
                             
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
