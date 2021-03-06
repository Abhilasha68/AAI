<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Client- request item</title>

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
            $con=mysql_connect("localhost", "root" , "");
            $db=mysql_select_db("aai",$con);
            session_start();
            $emp_id=$_SESSION["emp_id"];
            $q="select Name,Employee_ID from employee_table where Employee_ID=$emp_id";
            $r=mysql_query($q);
            $ro=mysql_fetch_array($r);
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
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Request Item</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="request.php" method="POST">
                            <fieldset>
                            <div class="row">

                                <div class="form-group">
                                <label>Name</label>
                                    <input class="form-control" placeholder="Employee id" name="name" type="text" id='name' value=<?php echo $ro['Name'];?> maxlength="50" autofocus>
                                </div>

                                <div class="form-group">
                                <label>Employee Id</label>
                                    <input class="form-control" placeholder="Employee id" name="emp_id" type="varchar" id='emp_id' value=<?php echo $ro['Employee_ID'];?> maxlength="50" autofocus>
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
                                <label>Quantity</label>
                                    <input class="form-control" placeholder="Quantity " name="qty" type="varchar" id='qty' maxlength="50" autofocus>
                                </div>


                                <div class="form-group">
                                 <label>Date</label>
                                 <input class="form-control" placeholder="Date" name="date" type="date" maxlength="50" autofocus>
                                </div>
                                
                                <input class="btn btn-lg btn-primary btn-block" type="Submit" name="Submit" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                   <div class="col-lg-2 col-lg-offset-4">
                      <a href="client.php"><input class="btn btn-lg btn-primary btn-block" type="submit" name="Home" value="Home"></a>
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
if(isset($_POST["Submit"]))
  {  
    $name=$_POST["name"];
    $emp_id=$_POST["emp_id"];   
    $hardware=$_POST["hardware"];
    $qty=$_POST["qty"];
    $date=$_POST["date"];
    $ht="request";

     if(($name=="") or ($emp_id=="") or ($qty<=0)or ($date==""))
     {
        echo "<script>alert('Please provide valid information!')</script>";
     }
     else
     {   $query="SELECT Name from employee_table Where Employee_ID=$emp_id";
           $query1= "INSERT INTO request VALUES('$name' , '$emp_id' , '$hardware' , '$qty' , '$date')";
         $query2= "INSERT INTO history(Employee_ID , Name , Type , Date , Hardware_type) VALUES( '$emp_id' ,'$name'  , '$ht' , '$date' , '$hardware' )";
         $run=mysql_query($query)or die(mysql_error());
         $run1=mysql_query($query1) or die (mysql_error());
         $run2=mysql_query($query2) or die (mysql_error());
         echo "<script>alert('Thankyou ! Please check after one week')</script>";
     }
  }

?>