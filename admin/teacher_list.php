<!DOCTYPE html>
<!-- saved from url=(0046)http://redteamux.com/avant/form-components.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>School Managment System</title>
  <head>
    <link rel="stylesheet" href="../css/styles.min.css">
    <link href="css" rel="stylesheet" type="text/css">
    <link href="default.css" rel="stylesheet" type="text/css" media="all" id="styleswitcher"> 
    <link rel="stylesheet" type="text/css" href="../css/dataTables.css"> 
    <link rel="stylesheet" type="text/css" href="../css/prettify.css"> 
    <link rel="stylesheet" type="text/css" href="../css/toggles.css">
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
     <div id="page-content" style="min-height: 847px;">
    <div id="wrap">
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a hrefndex="i.php">SMS</a></li>
                <li>Teacher Information</li>
                <li class="active">View Teacher Information</li>
            </ol>

            <h1>Teacher Information</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href="http://redteamux.com/avant/tables-data.php#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://redteamux.com/avant/tables-data.php#">Text File (*.txt)</a></li>
                            <li><a href="http://redteamux.com/avant/tables-data.php#">Excel File (*.xlsx)</a></li>
                            <li><a href="http://redteamux.com/avant/tables-data.php#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="http://redteamux.com/avant/tables-data.php#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
            </div>
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
            if($up==1)
            {
              ?>
              <div class="alert alert-dismissable alert-success">
                <strong><?php echo $message4;?></strong>
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
             if($up==2)
            {
              ?>
              <div class="alert alert-dismissable alert-error">
                <strong><?php echo $message5;?></strong>
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
            <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>View Employee Details</h4>
                            <!--div class="options">   
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div-->
                        </div>
                        <div class="panel-body collapse in">
                            <div id="example_wrapper" class="dataTables_wrapper" role="grid">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables dataTable" id="example" aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 265px;">Teacher Name</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 229px;">Gender</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 151px;">Designation</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Work Unit</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  style="width: 107px;">Action</th></tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                              <tr class="gradeA odd">
                                <td class=" ">Ruksar Begum</td>
                                <td class=" ">Female</td>
                                <td class=" ">Associate professor</td>
                                <td class=" ">Unit III</td>
                                <td class=" "><span class="action-icon"><a href="viewemployee.php?id=' . $row_port['id'] . '"><i class="fa fa-eye"></i></a></span><span class="action-icon"><a href="editemployee.php?id=' . $row_port['id'] . '"><i class="fa fa-pencil"></i></a></span><span class="action-icon"><a href="deletedemployee.php?id=' . $row_port['id'] . '"><i class="fa fa-eraser"></i></a></span></td>
                              </tr>                                        
                              <?php
                                   // include("database.php");
                                    $query = "select * from  employee where deleted='0'";
                                    $res_port = mysql_query($query);
                                    if ($res_port) {
                                       while ($row_port = mysql_fetch_array($res_port)) {
                                         $desg= $row_port['designation'];
                                         $work_unit= $row_port['work_unit'];
                                         $query1 = "select * from  designation where id='$desg'";
                                         $res_port1 = mysql_query($query1);
                                         $row_port1 = mysql_fetch_array($res_port1);
                                         $query2 = "select * from  work_unit where id='$work_unit'";
                                         $res_port2 = mysql_query($query2);
                                         $row_port2 = mysql_fetch_array($res_port2);

                                        echo '<tr class="gradeA odd">';
                                        echo '<td class=" ">'. $row_port['emp_name'] . '</td>';
                                        echo '<td class=" ">'. $row_port['gender'] . '</td>';
                                        echo '<td class=" ">'. $row_port1['designation'] . '</td>';
                                        echo '<td class=" ">'. $row_port2['unit'] . '</td>';
                                        echo '<td class=" "><span class="action-icon"><a href="viewemployee.php?id=' . $row_port['id'] . '"><i class="fa fa-eye"></i></a></span><span class="action-icon"><a href="editemployee.php?id=' . $row_port['id'] . '"><i class="fa fa-pencil"></i></a></span><span class="action-icon"><a href="deletedemployee.php?id=' . $row_port['id'] . '"><i class="fa fa-eraser"></i></a></span></td>';
                                        echo '</tr>';
                                         }
                                       }
                                       ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="../js/dataTables.bootstrap.js"></script> 
<script type="text/javascript" src="../js/demo-datatables.js"></script> 
<script type="text/javascript" src="../js/placeholdr.js"></script><style>.placeholdr{color:#AAA;}</style> 
<script type="text/javascript" src="../js/application.js"></script> 
<script type="text/javascript" src="../js/demo.js"></script> 


</body></html>
