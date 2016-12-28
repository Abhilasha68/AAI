<html>
<body bgcolor="White">
<form action="login.php" method="POST">
<br><br><br><br><br><br><br><br>
<table width="200" border="0" align="center">
<tr>
<td width="100">EmployeeID</td>
<td width="150"><input type="varchar" name="emp_id"></input>
</td>
</tr>
<tr>
<td width="100">Password</td>
<td width="150"><input type="password" name="emp_pass"></input>
</td>
</tr>
<tr>
<td align="center"><input type="submit" name="login" value="Login"></input>
</td>
</tr>
</table>
<p align = "center" > Not already signed in ? <a href = "signup.php"> Sign Up </a></p>
</body>
</html>
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
	$query1="select * from login_table where Employee_ID='$emp_id' AND Password='$emp_pass'";
	$query2="select * from login_table where Employee_ID='$emp_id' AND Password='$emp_pass' AND Type='admin'";
	$run1=mysql_query($query1) or die (mysql_error());
	$run2=mysql_query($query2) or die (mysql_error());
	if(mysql_num_rows($run2)>0)
		{echo "<script>window.open('admin.html','_self')</script>";}
	else if(mysql_num_rows($run1)>0)
		{echo "<script>window.open('client.php','_self')</script>";}
	else
		{echo '<script>alert("Invalid EmployeeID and Password")</script>';}
	}
}
?>