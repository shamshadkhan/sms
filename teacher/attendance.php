<!DOCTYPE html>
<!-- saved from url=(0046)http://redteamux.com/avant/form-components.php -->
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
    <link rel="stylesheet" type="text/css" href="../css/calander.css"> 
  </head>
  <body class="" style="">
    <div id="headerbar">
      <div class="container">
      </div>
    </div>
    <?php include('header.php'); ?>
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
                      <li>Form</li>
                      <li class="active">Dashboard</li>
                  </ol>
                  <h1>Dashboard</h1>
                </div>
        <div class="container">
             <div class="panel panel-midnightblue">
               <div class="panel-heading">
                    <h4>Teacher's Attendance</h4>
                    <!--div class="options">   
                        <a href="javascript:;"><i class="fa fa-cog"></i></a>
                        <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                        <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                    </div-->
                </div>
               
                <div class="panel-body collapse in">
                  <form action="" class="form-horizontal row-border" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">
                       
                        <div class="form-group">
                        
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="emp_joindate" id="datepicker">
                            </div>
                           </div>
                        <div class="form-group" style="display: none;">
                            <label class="col-sm-3 control-label">Fullscreen Textarea</label>
                            <div class="col-sm-6">
                                <textarea class="form-control fullscreen" style="display: none;"></textarea>
                            </div>
                        </div>
                    </form>
                      <div class="fc-view fc-view-month fc-grid" style="position: relative;" unselectable="on">
                        <table class="fc-border-separate" style="width:100%" cellspacing="0">
                          <thead>
                            <tr class="fc-first fc-last">
                              <th style="background-color: rgb(216, 216, 216); color: rgb(0, 0, 0); text-transform: uppercase; font-size: 11px; -webkit-box-shadow: rgb(78, 78, 78) 5px 0px 8px inset; box-shadow: rgb(114, 114, 114) 0px 5px 0px inset; height: 8px; width: 110px; background-position: initial initial; background-repeat: initial initial;" class="fc-sun fc-widget-header fc-first">Sunday</th>
                              <th style="background-color: rgb(216, 216, 216); color: rgb(0, 0, 0); text-transform: uppercase; font-size: 11px; -webkit-box-shadow: rgb(78, 78, 78) 5px 0px 8px inset; box-shadow: rgb(114, 114, 114) 0px 5px 0px inset; height: 8px; width: 110px; background-position: initial initial; background-repeat: initial initial;" class="fc-mon fc-widget-header">Monday</th>
                              <th style="background-color: rgb(216, 216, 216); color: rgb(0, 0, 0); text-transform: uppercase; font-size: 11px; -webkit-box-shadow: rgb(78, 78, 78) 5px 0px 8px inset; box-shadow: rgb(114, 114, 114) 0px 5px 0px inset; height: 8px; width: 110px; background-position: initial initial; background-repeat: initial initial;" class="fc-tue fc-widget-header">Tuesday</th>
                              <th style="background-color: rgb(216, 216, 216); color: rgb(0, 0, 0); text-transform: uppercase; font-size: 11px; -webkit-box-shadow: rgb(78, 78, 78) 5px 0px 8px inset; box-shadow: rgb(114, 114, 114) 0px 5px 0px inset; height: 8px; width: 110px; background-position: initial initial; background-repeat: initial initial;" class="fc-wed fc-widget-header">Wednesday</th>
                              <th style="background-color: rgb(216, 216, 216); color: rgb(0, 0, 0); text-transform: uppercase; font-size: 11px; -webkit-box-shadow: rgb(78, 78, 78) 5px 0px 8px inset; box-shadow: rgb(114, 114, 114) 0px 5px 0px inset; height: 8px; width: 110px; background-position: initial initial; background-repeat: initial initial;" class="fc-thu fc-widget-header">Thursday</th>
                              <th style="background-color: rgb(216, 216, 216); color: rgb(0, 0, 0); text-transform: uppercase; font-size: 11px; -webkit-box-shadow: rgb(78, 78, 78) 5px 0px 8px inset; box-shadow: rgb(114, 114, 114) 0px 5px 0px inset; height: 8px; width: 110px; background-position: initial initial; background-repeat: initial initial;" class="fc-fri fc-widget-header">Friday</th>
                              <th style="background-color: rgb(216, 216, 216); color: rgb(0, 0, 0); text-transform: uppercase; font-size: 11px; -webkit-box-shadow: rgb(78, 78, 78) 5px 0px 8px inset; box-shadow: rgb(114, 114, 114) 0px 5px 0px inset; height: 8px; width: 110px; background-position: initial initial; background-repeat: initial initial;" class="fc-fri fc-widget-header">Saturday</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $date=date('d-m-Y');
                            $lastdate = date('t', strtotime($date));
                            $firstdate=date('01-m-Y', strtotime($date));
                            $firstday =date('D', strtotime($firstdate));
                            ?>
                            <tr class="fc-week0 fc-first">
                            <?php
                              $j=1;
                              if($firstday=="Sun")
                              {
                                for($i=1;$i<=7;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"><?php echo $j; $j++?></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                  <?php
                                }
                              }
                              else if($firstday=="Mon")
                              {
                                for($i=1;$i<=1;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                <?php
                                }
                                for(;$i<=7;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"><?php echo $j; $j++?></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                  <?php
                                }
                              }
                              else if($firstday=="Tue")
                              {
                                for($i=1;$i<=2;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                <?php
                                }
                                for(;$i<=7;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"><?php echo $j; $j++?></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                  <?php
                                }
                              }
                              else if($firstday=="Wed")
                              {
                                for($i=1;$i<=3;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                <?php
                                }
                                for(;$i<=7;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"><?php echo $j; $j++?></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                  <?php
                                }
                              }
                              else if($firstday=="Thu")
                              {
                                for($i=1;$i<=4;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                <?php
                                }
                                for(;$i<=7;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"><?php echo $j; $j++?></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                  <?php
                                }
                              }
                              else if($firstday=="Fri")
                              {
                                for($i=1;$i<=5;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                <?php
                                }
                                for(;$i<=7;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"><?php echo $j; $j++?></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                  <?php
                                }
                              }
                              if($firstday=="Sat")
                              {
                                for($i=1;$i<=6;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                <?php
                                }
                                for(;$i<=7;$i++)
                                {

                                ?>
                                  <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                    <div style="min-height: 50px;">
                                      <div class="fc-day-number"><?php echo $j; $j++?></div>
                                      <div class="fc-day-content">
                                        <div style="position: relative; height: 23px;">&nbsp;</div>
                                      </div>
                                    </div>
                                  </td>
                                  <?php
                                }
                              }
                            ?>
                            </tr>
                            <?php
                            for(;$j<=$lastdate;)
                            {
                              ?>
                              <tr class="fc-week0 fc-first">
                              <?php
                              for($i=1;$i<=7 && $j<=$lastdate;$i++)
                              {

                              ?>
                                <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                  <div style="min-height: 50px;">
                                    <div class="fc-day-number"><?php echo $j;?></div>
                                    <div class="fc-day-content"><?php if($j==10){ ?> <img style="width: 20%;margin-top: -21px;margin-right: -135px;float: left;" src="image/red.png"> <?php } $j++; ?>
                                      <div style="position: relative; height: 23px;">&nbsp;</div>
                                    </div>
                                  </div>
                                </td>
                              <?php
                              }
                              for(;$i<=7;$i++)
                              {

                              ?>
                                <td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month">
                                  <div style="min-height: 50px;">
                                    <div class="fc-day-number"></div>
                                    <div class="fc-day-content">
                                      <div style="position: relative; height: 23px;">&nbsp;</div>
                                    </div>
                                  </div>
                                </td>
                              <?php
                              }
                              
                              ?>
                            </tr>
                            <?php
                            }
                            ?>
                             </tbody>
                             </table>   
                </div>
                </div>
                
            </div>
         </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include('footer.php');?>

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->

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
<script type="text/javascript" src="../js/placeholdr.js"></script><style>.placeholdr{color:#AAA;}</style> 
<script type="text/javascript" src="../js/application.js"></script> 
<script type="text/javascript" src="../js/demo.js"></script> 
</body></html>
