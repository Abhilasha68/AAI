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
                <div class="col-lg-12">
                    <h1 class="page-header">History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Issues History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                            $con=mysql_connect("localhost" , "root" , "");
                            $db=mysql_select_db("aai" , $con);
                            $query1= "select Employee_ID,Name,Hardware_type,Date,issue from history where Type='issues'";
                            $query3= "select Employee_ID,Name,Date from history where Type='move'";
                            $run1=mysql_query($query1);
                            $run3=mysql_query($query3);
                            ?>                     <thead>
                                    <thead>
                                     <tr>
                                     <th>Employee ID</th>
                                     <th>Name</th>
                                     <th>Hardware Type</th>
                                     <th>Issue</th>
                                     <th>Date</th>
                                     </tr>
                                    </thead>
                                </thead>
                                <tbody>
                                   <?php
                                        while($row=mysql_fetch_array($run1))
                                        {    echo "<tr>
                                                    <td>{$row['Employee_ID']}</td>
                                                    <td>{$row['Name']}</td>
                                                    <td>{$row['Hardware_type']}</td>
                                                    <td>{$row['issue']}</td>
                                                    <td>{$row['Date']}</td>
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
                    <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hardware Requests History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <?php
                             $con=mysql_connect("localhost" , "root" , "");
                             $db=mysql_select_db("aai" , $con);
                             $query2= "select Employee_ID,Name,Hardware_type,Date from history where Type='request'";
                              $run2=mysql_query($query2);
                             ?>
                                    <thead>
                                    <thead>
                                     <tr>
                                     <th>Employee ID</th>
                                     <th>Name</th>
                                     <th>Hardware Type</th>
                                     <th>Date</th>
                                     </tr>
                                    </thead>
                                </thead>
                                <tbody>
                                   <?php
                                        while($row=mysql_fetch_array($run2))
                                        {    echo "<tr>
                                                    <td>{$row['Employee_ID']}</td>
                                                    <td>{$row['Name']}</td>
                                                    <td>{$row['Hardware_type']}</td>
                                                    <td>{$row['Date']}</td>
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
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Move Request History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <?php
                            $con=mysql_connect("localhost" , "root" , "");
                            $db=mysql_select_db("aai" , $con);
                            $query3= "select Employee_ID,Name,Date from history where Type='move'";;
                            $run3=mysql_query($query3);
                            ?>                     <thead>
                                    <thead>
                                     <tr>
                                     <th>Employee ID</th>
                                     <th>Name</th>
                                     <th>Date</th>
                                     </tr>
                                    </thead>
                                </thead>
                                <tbody>
                                   <?php
                                        while($row=mysql_fetch_array($run3))
                                        {    echo "<tr>
                                                    <td>{$row['Employee_ID']}</td>
                                                    <td>{$row['Name']}</td>
                                                    <td>{$row['Date']}</td>
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
            <div class="row">
               <div class="col-lg-2 col-lg-offset-4">
                  <a href="admin.php"><input class="btn btn-lg btn-primary btn-block" type="submit" name="Home" value="Home"></a>
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