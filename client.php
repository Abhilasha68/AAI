<html>
<body>
<?php
session_start();
$var=$_SESSION['emp_id'];
$_SESSION['emp_id']=$var;
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$query = "select Name,Employee_ID,Building,Floor_No,Seat_No from employee_table where Employee_ID='$var'";
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
<td>{$row['Building']}/{$row['Floor_No']}/{$row['Seat_No']}</td>
</tr>";
?>
</table>
<table border='1' align='Center'>
<thead>
<th><strong>Hardware Type</strong></th>
<th><strong>Model No</strong></th>
<th><strong>Item No</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Date Of Allocation</strong></th>
<th><strong>Period Of Allocation</strong></th>
<th><strong>Warranty Date</strong></th>
<th><strong></strong></th>
</thead>
<tbody>
<?php
$query1="select * from employee_items where Employee_ID='$var'";
$run1=mysql_query($query1) or die(mysql_error());
while($row1=mysql_fetch_array($run1))
{
	echo "<tr>
		<td>{$row1['HW_Type']}</td>
		<td>{$row1['Model_No']}</td>
		<td>{$row1['Item_No']}</td>
		<td>{$row1['Quantity']}</td>
		<td>{$row1['Date_of_All']}</td>
		<td>{$row1['Period_of_All']}</td>
		<td>{$row1['Warranty_Date']}</td>
		<td><a href='reallocate.php?var=$row[Employee_ID]'><input type='button' name='reallocate' value='Reallocate'></a>
		<a href='move.php?var=$row[Employee_ID]'><input type='button' name='move' value='Move'></a></td>
		</tr>";
}
?>
</tbody>
</table>
<?php
echo '<p align="center"><a href="request.php">Request an Item</a><br>
<a href="issue.php">Raise an Issue</a><br>
<a href="history.php">History of your issues</a><br></p>';
?>
</body>
</html>