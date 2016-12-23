<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Airports Authority of India</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

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

    <div class="container">


        <div class="row">

        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create an Account</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="signup.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                <label>Name</label>
                                    <input class="form-control" placeholder="Name" name="name" type="text" id='name' maxlength="50" autofocus>
                                </div>

                                <div class="form-group">
                                <label>Email id</label>
                                    <input class="form-control" placeholder="Email id" name="email" type="email" id='email' maxlength="100" autofocus>
                                </div>

                               <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control" name='dept' id='dept' maxlength="50">
                                                <option>Administration</option>
                                                <option>Aerodrome Licensing</option>
                                                <option>Aerodrome Planning</option>
                                                <option>Air Traffic Management</option>
                                                <option>Airport Systems</option>
                                                <option>Architecture Planning</option>
                                                <option>Aviation Safety</option>
                                                <option>Aviation Security</option>
                                                <option>Cargo</option>
                                                <option>Central Radio Stores Depot</option>
                                                <option>CNS-OM</option>
                                                <option>CNS-P</option>
                                                <option>Commercial</option>
                                                <option>Consultancy and Coordination Division</option>
                                                <option>Corp. Plng. And Mgmt. Services</option>
                                                <option>Directorate of Fire</option>
                                                <option>Directorate of Technical</option>
                                                <option>Engineering(Metro)</option>
                                                <option>Engineering(RGB)</option>
                                                <option>Finance And Accounts</option>
                                                <option>Flight Inspection Unit</option>
                                                <option>Human Resource</option>
                                                <option>Information Technology</option>
                                                <option>Internal Audit</option>
                                                <option>Key Infrastructure Development(KID)</option>
                                                <option>Land Management</option>
                                                <option>Law</option>
                                                <option>Operations</option>
                                                <option>Proj. Monitoring And Quality Assurance</options>
                                                <option>Public Relations</option>
                                                <option>RCDU</option>
                                            </select>
                                        </div>

                                <div class="form-group">
                                <label>Location</label>
                                    <input class="form-control" placeholder="Location: " name="location" type="varchar" id='location' maxlength="50" autofocus>
                                </div>

                                <div class="form-group">
                                <label>Date of Birth</label>
                                    <input class="form-control" placeholder="Date of Birth" name="dob" type="varchar" id='dob' maxlength="50" autofocus>
                                
                                
                                 <div class="form-group">
                                 <label>Employee Id</label>
                                    <input class="form-control" placeholder="Employee id" name="emp_id" type="text" id='name' maxlength="50" autofocus>
                                </div>

                                <div class="form-group">
                                <label>Password*</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="Submit" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
if(isset($_POST['Submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $location=$_POST['location'];
    $emp_id=$_POST['emp_id'];
    $emp_pass=$_POST['password'];
    $type=$_POST['type'];
    if(($name=="")or ($email=="")or ($location=="") or ($emp_id=="") or ($password=""))
    { echo "<script>alert('please ente the details')</script>";
    }
    else
    {  $query= "INSERT INTO pending_reg VALUES('$name' , '$email' , '$dept' , '$location' , '$emp_id' , '$emp_pass' , '$type' )";
        $run= mysql_query($query) or die(mysql_error());
        echo"<script>alert('please check in after 4 days')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    
}
?>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
