<html>
<head>
<title>History</title>
</head>
<body>
<fieldset>
<legend align="center">History</legend>
<?php
session_start();
$con=mysql_connect("localhost",'root','');
$db=mysql_select_db("aai",$con);
$var=$_SESSION['emp_id'];
$query="select Hardware_Type,Model_no,Item_no,Date,Issue from issue where Employee_Id='$var'";
$run=mysql_query($query);
?>
<table border='1' align='center'>
<thead>
<tr>
<th>HW_Type</th>
<th>Model No</th>
<th>Item No</th>
<th>Date</th>
<th>Issue</th>
</tr>
</thead>
<tbody>
<?php
while($row=mysql_fetch_array($run))
{
	echo "<tr>
	<td>{$row['Hardware_Type']}</td>
	<td>{$row['Model_no']}</td>
	<td>{$row['Item_no']}</td>
	<td>{$row['Date']}</td>
	<td>{$row['Issue']}</td>
	</tr>";
}
?>
</tbody>
</table>
</fieldset>
<br><br><br><br><br>
<p align="center"><a href="client.php"><input type="submit" name="home" value="Home"></a></p>
</body>
</html>
=
