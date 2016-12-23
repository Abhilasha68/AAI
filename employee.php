<html>
<head>
<title>Employee Items</title>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$emp_id=$_GET['Employee_ID'];
$query1="select HW_Type,Model_No,Item_No,Quantity,Date_of_All from employee_items where Employee_ID='$emp_id'";
$query2="select Name from Employee_Items where Employee_ID='$emp_id'";
$run1=mysql_query($query1);
$run2=mysql_query($query2);
$row2=mysql_fetch_array($run2);
echo "<h3>Name: {$row2['Name']}</h3>";
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
	<td>{$row2['HW_Type']}</td>
	<td>{$row2['Model_No']}</td>
	<td>{$row2['Item_No']}</td>
	<td>{$row2['Quantity']}</td>
	<td>{$row2['Date_of_All']}</td>";
}
?>
</tbody>
</table>
</body>
</html>