<?php
$var=$_GET['value1'];
$con=mysql_connect("localhost","root",'');
$db=mysql_select_db("aai",$con);
$query="delete from issue where Item_no=$var";
$run=mysql_query($query) or die(mysql_error());
echo "<script>window.open('fixissue.php','_self')</script>";
?>