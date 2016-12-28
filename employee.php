<html>
<head>
<title>Employee Items</title>
</head>
<body>
<?php
$emp_id=$_GET['val'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$query1="select HW_Type,Model_No,Item_No,Quantity,Date_of_All from employee_items where Employee_ID='$emp_id'";
$query2="select Name from employee_table where Employee_ID='$emp_id'";
$run1=mysql_query($query1) or die(mysql_error());
$run2=mysql_query($query2) or die(mysql_error());
$row2=mysql_fetch_array($run2);
echo "<h3 align='center'>Name: {$row2['Name']}</h3>";
?>
<table border='1' align='center'>
<thead>
<tr>
<th><strong>Hardware Type</strong></th>
<th><strong>Model No</strong></th>
<th><strong>Item No</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Date Of Allocation</strong></th>
</tr>
</thead>
<tbody>
<?php
while($row1=mysql_fetch_array($run1))
{
echo "<tr>
	<td>{$row1['HW_Type']}</td>
	<td>{$row1['Model_No']}</td>
	<td>{$row1['Item_No']}</td>
	<td>{$row1['Quantity']}</td>
	<td>{$row1['Date_of_All']}</td>
	</tr>";
}
?>
</tbody>
</table>
</body>
</html>