<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Airports Authority of India</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">  <!--NAV BAR -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">    <!--SIDE PANEL -->
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="store.php"><i class="fa fa-table fa-fw"></i>IT Store</a>
                        </li>
                        <li>
                            <a href="fixissue.php"><i class="fa fa-table fa-fw"></i> Fix issues</a>
                        </li>
                        <li>
                            <a href="allocate.php"><i class="fa fa-table fa-fw"></i> Allocate/Reallocate Requests</a>
                        </li>
                        <li>
                            <a href="move_admin.php"><i class="fa fa-table fa-fw"></i> Movement Request</a>
                        </li>
                        <li>
                            <a href=".php"><i class="fa fa-table fa-fw"></i> Warrenty Alarm</a>
                        </li>
                                                <li>
                            <a href=".php"><i class="fa fa-table fa-fw"></i> Reallocation Alarm</a>
                        </li>
                        <li>
                        <a href="histroy_admin.php"><i class="fa fa-table fa-fw"></i> History</a>
                        </li>
                      
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Allocation Form</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="allocate.php" method="POST">
                            <fieldset>
                            <div class="row">
                                <div class="form-group">
                                <label>Employee Id</label>
                                    <input class="form-control" placeholder="Employee id" name="emp_id" type="varchar" id='emp_id' maxlength="50" autofocus>
                                </div>

                               <div class="form-group">
                                            <label>Hardware Type</label>
                                            <select class="form-control" name='hardware' maxlength="50">
                                                <option>Computer</option>
                                                <option>Printer</option>
                                                <option>Scanner</option>
                                                <option>Mouse</option>
                                                <option>KeyBoard</option>
                                                <option>CPU</option>
                                                <option>Monitor</option>
                                                <option>Fax Machine</option>
                                                <option>Web Camera</option>
                                                <option>Projector</option>
                                                <option>other</option>
                                            </select>
                                        </div>

                                <div class="form-group">
                                <label>Model Number</label>
                                    <input class="form-control" placeholder="Model Number " name="model" type="varchar" id='model' maxlength="50" autofocus>
                                </div>

                                <div class="form-group">
                                <label>Item number</label>
                                    <input class="form-control" placeholder="Item number" name="item" type="varchar"  maxlength="50" autofocus>
                                </div>

                                <div class="form-group">
                                <label>Quantity</label>
                                    <input class="form-control" placeholder="Quantity" name="qty" type="number"  maxlength="50" autofocus>
                                </div>

                                <label>Period of Allocation</label>
                                <div class="form-group">
                                 <label>From</label><input class="form-control" placeholder="From" name="from" type="date" maxlength="50" autofocus>
                                 <label>To</label><input class="form-control" placeholder="To" name="to" type="date" maxlength="50" autofocus>
                                </div>


                                <div class="form-group">
                                <label>Warranty Period</label>
                                    <input class="form-control" placeholder="Warranty" name="warranty" type="number"  maxlength="50" autofocus>
                                </div>


                                <div class="form-group">
                                <label>Date</label>
                                    <input class="form-control" placeholder="Date" name="date" type="date"  maxlength="50" autofocus>
                                </div>



                                
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="Submit" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
<?php
$con=mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("aai" , $con);
if(isset($_POST["submit"]))
  {
    $emp_id=$_POST["emp_id"];
    $hardware=$_POST["hardware"];
    $model=$_POST["model"];
    $item=$_POST["item"];
    $qty=$_POST["qty"];
    $from=$_POST["from"];
    $to=$_POST["to"];
    $warranty=$_POST["warranty"];
    $date=$_POST["date"];

     if(($hardware=="") or ($emp_id=="") or ($qty<=0)or ($date=="") or ($model=="") or ($item=="") or ($from=="") or ($to=="")) 
     {
      echo "<script>alert('Please provide valid information!')</script>";
     }
 }
?>