<html>
<head>
<title>Hardware Type</title>
</head>
<body>
<table align='center' border='1'>
<?php
$var=$_GET['value'];
$con=mysql_connect("localhost","root",'');
$db=mysql_select_db("aai",$con);
$query="select Model_No,Item_No,Employee_ID,Date_of_All,Period_of_All,Warranty_Date from hardware where Hardware_Type='$var'";
$run=mysql_query($query) or die(mysql_error());
$val='';
?>
<thead>
<tr>
<th><strong>Model No</strong></th>
<th><strong>Item No</strong></th>
<th><strong>Employee ID</strong></th>
<th><strong>Date Of Allocation</strong></th>
<th><strong>Period Of Allocation</strong></th>
<th><strong>Warranty Date</strong></th>
</tr>
</thead>
<tbody>
<?php
while($row=mysql_fetch_array($run))
{
	echo "<tr>
		<td>{$row['Model_No']}</td>
		<td>{$row['Item_No']}</td>
		<td><a href='employee.php?val=$row[Employee_ID]'>{$row['Employee_ID']}</a></td>
		<td>{$row['Date_of_All']}</td>
		<td>{$row['Period_of_All']}</td>
		<td>{$row['Warranty_Date']}</td>
		</tr>";
}
?>
</tbody>
</table>
<br><br><br><br><br>
<p align="center">
<input type="submit" name="home" value="Home">
</p>
</body>
</html>
<?php
if(isset($_POST['home']))
{
	echo "<script>window.open('admin.html','_self')</script>";
}
?>