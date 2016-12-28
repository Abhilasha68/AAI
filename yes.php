<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$emp_id=$_GET['value'];
$query="select New_Building,New_Floor,New_Seat from move where Employee_ID=$emp_id";
$run=mysql_query($query);
$row=mysql_fetch_array($run);
$query1="update employee_table set Building=$row[New_Building],Floor_No=$row[New_Floor],Seat_No=$row[New_Seat] where Employee_ID=$emp_id";
$run1=mysql_query($query1);
$query2="delete from move where Employee_ID=$emp_id";
$run2=mysql_query($query2);
echo "<script>window.open('move_admin.php','_self')</script>";
?>