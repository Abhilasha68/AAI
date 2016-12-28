<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$var=$_GET['value'];
$query="delete from move where Employee_ID=$var";
$run=mysql_query($query);
echo "<script>window.open('move_admin.php' , '_self')</script>";
?>