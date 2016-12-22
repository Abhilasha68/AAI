<html>
<body bgcolor="White">
<form action="first.php" method="POST">
<center>
<img src="aai.jpg" width=600 height=300>
</center>
<br>
<center>
<input type="Submit" name="Login" value="Login"></input>
</center>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db('aai',$con);
if (isset($_POST['Login']))
{
	echo "<script>window.open('login.php','_self')</script>";
}
?>