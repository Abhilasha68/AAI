<html>
<body>
<?php
session_start();
$var=$_SESSION['emp_id'];
$_SESSION['emp_id']=$var;
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
$query1="select HW_Type,Model_No,Item_No,Quantity,Date_of_All,Period_of_All,Warranty_Date from employee_items where Employee_ID= '$var'";
$run1=mysql_query($query1);
while($row1=mysql_fetch_array($run1))
{
	echo "<tr>
		<td>{$row['HW_Type']}</td>
		<td>{$row['Model_No']}</td>
		<td>{$row['Item_No']}</td>
		<td>{$row['Quantity']}</td>
		<td>{$row['Date_of_All']}</td>
		<td>{$row['Period_of_All']}</td>
		<td>{$row['Warranty_Date']}</td>
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