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
<div id="wrapper">
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Airports Authority of India</a>
            </div>
        </nav>


    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="EmployeeID" name="emp_id" type="varchar" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="emp_pass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <a href="signupUI.php" class="btn btn-lg btn-danger btn-block">Not already signed in? SIGN UP</a>
            </div>
        </div>
    </div>
</div>
    <?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db('aai',$con);
if (isset($_POST['login']))
{
    $emp_id=$_POST['emp_id'];
    $emp_pass=$_POST['emp_pass'];
    $var1=$emp_id;
    session_start();
    $_SESSION['emp_id']=$var1;
    if(($emp_id=='') AND ($emp_pass==''))
    {echo '<script>alert("Enter EmployeeID and Password")</script>';}
    else if($emp_id=='')
    {echo '<script>alert("Enter EmployeeID")</script>';}
    else if($emp_pass=='')
    {echo '<script>alert("Enter Password")</script>';}
    else
    {
    $query1="select * from login_table where Employee_ID='$emp_id' AND Password='$emp_pass' AND Type='client'";
    $query2="select * from login_table where Employee_ID='$emp_id' AND Password='$emp_pass' AND Type='admin'";
    $query3="select * from login_table where Employee_ID='$emp_id' AND Password='$emp_pass' AND Type='inventory'";
    $run1=mysql_query($query1) or die (mysql_error());
    $run2=mysql_query($query2) or die (mysql_error());
    $run3=mysql_query($query3) or die (mysql_error());
    if(mysql_num_rows($run1)>0)
        {echo "<script>window.open('client.php','_self')</script>";}
    else if(mysql_num_rows($run2)>0)
        {echo "<script>window.open('admin.php','_self')</script>";}
    else if(mysql_num_rows($run3)>0)
        {echo "<script>window.open('store.php','_self')</script>";}
    else
        {echo '<script>alert("Invalid EmployeeID and Password")</script>';}
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
