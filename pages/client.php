<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMPLOYEE</title>

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
<?php
    session_start();
    $var=$_SESSION['emp_id'];
    $_SESSION['emp_id']=$var;
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("aai",$con);
    $query = "select Name,Employee_ID,Building , Floor_No, Seat_No from employee_table where Employee_ID='$var'";
    $run=mysql_query($query);
    $row=mysql_fetch_array($run);
 ?>

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
                <a class="navbar-brand" href="index.html">Airports Authority of India</a>
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
                            <a href="request.php"><i class="fa fa-table fa-fw"></i>Request Item</a>
                        </li>
                        <li>
                            <a href="issue.php"><i class="fa fa-table fa-fw"></i> Raise an issue</a>
                        </li>
                        <li>
                            <a href="history.php"><i class="fa fa-table fa-fw"></i> History of issues</a>
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


       <div id="page-wrapper">
       <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Client Details
                        </div>
                        <div class="panel-body">
                            

                        <div class="col-lg-8 col-md-offset-2">
                    <!--<div class="panel panel-default">-->
                        
                        <!-- /.panel-heading -->
                        <!--<div class="panel-body">-->
                            <div class="table-responsive">

                                <table class="table">
                                   <?php
                                   echo "<tr>
                                    <td><strong>Name:</strong></td>
                                    <td>{$row['Name']}</td>
                                    </tr>
                                    <tr>
                                    <td><strong>Employee ID:</strong></td>
                                    <td>{$row['Employee_ID']}</td>
                                    </tr>
                                    <tr>
                                    <td><strong>Location:</strong></td>
                                    <td>{$row['Building']}/{$row['Floor_No']}/{$row['Seat_No']}</td>
                                    </tr>";
                                    ?>                               
                                    </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                        <div class="panel-footer">

                        </div>
                    </div>
                </div>
            </div> 

           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">My Items</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Items in IT Store
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        
                                <thead>
                                <th><strong>Hardware Type</strong></th>
                                <th><strong>Model No</strong></th>
                                <th><strong>Item No</strong></th>
                                <th><strong>Quantity</strong></th>
                                <th><strong>Date Of Allocation</strong></th>
                                <th><strong>Period Of Allocation</strong></th>
                                <th><strong>Warranty Date</strong></th>
                                <th><strong></strong></th>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                            $con=mysql_connect("localhost","root","");
                                            $db=mysql_select_db("aai",$con);
                                            $query1="select HW_Type,Model_No,Item_No,Quantity,Date_of_All,Period_of_All,Warranty_Date from employee_items where Employee_ID= '$var'";
                                            $run1=mysql_query($query1);
                                        
                                        while($row1=mysql_fetch_array($run1))
                                        {
                                           echo "<tr>
                                                <td>{$row1['HW_Type']}</td>
                                                <td>{$row1['Model_No']}</td>
                                                <td>{$row1['Item_No']}</td>
                                                <td>{$row1['Quantity']}</td>
                                                <td>{$row1['Date_of_All']}</td>
                                                <td>{$row1['Period_of_All']}</td>
                                                <td>{$row1['Warranty_Date']}</td>
                                                <td><a href='reallocate.php?var=$row[Employee_ID]'><input type='button' name='reallocate' value='Reallocate'></a>
                                                <a href='move.php?var=$row[Employee_ID]'><input type='button' name='move' value='Move'></a></td>
                                                </tr>";
                                        }
                                        ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
