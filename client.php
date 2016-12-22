<html>
<body>
<?php
session_start();
$var=$_SESSION['emp_id'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$query = "select Name,Employee_ID,Location from employee_table where Employee_ID='$var'";
$run=mysql_query($query);
$row=mysql_fetch_array($run);
echo '<br><br><br><br><br>'
?>
<table align="center" border='0'>
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
<td>{$row['Location']}</td>
</tr>"
?>
</table>
<?php
echo '<p align="center"><a href="http://localhost:7070/aai/request.php">Request an Item</a><br>
<a href="http://localhost:7070/aai/issue.php">Raise an Issue</a><br>
<a href="http://localhost:7070/aai/history.php">History of your issues</a><br></p>';
?>
</body>
</html>