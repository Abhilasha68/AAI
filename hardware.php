<html>
<head>
<title>Hardware Type</title>
</head>
<body>
<table align='center' border='1'>
<?php
$con=mysql_connect("localhost","root",'');
$db=mysql_select_db("aai",$con);
session_start();
$var=$_SESSION['HW_Type'];
$query="select Model_No,Item_No,Employee_ID,Date_of_All,Period_of_All,Warranty_Date from hardware where Hardware_Type='$HW_Type'";
$run=mysql_query($query);
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
		<td><a href='employee.php?Employee_ID'>{$row['Employee_ID']}</a></td>
		<td>{$row['Date_of_All']}</td>
		<td>{$row['Period_of_All']}</td>
		<td>{$row['Warranty_Date']}</td>
		</tr>";
}
?>
</tbody>
</table>
</body>
</html>