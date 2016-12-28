<html>
<head>
<title>Move Requests</title>
</head>
<body>
<table border='1' align="center">
<thead>
<th><strong>Employee ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Old Building</strong></th>
<th><strong>Old Floor</strong></th>
<th><strong>Old Seat No</strong></th>
<th><strong>New Building</strong></th>
<th><strong>New Floor</strong></th>
<th><strong>New Seat No</strong></th>
</thead>
<tbody>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$query="select * from move";
$run=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($run))
{
	echo "<tr>
		<td>{$row['Employee_ID']}</td>
		<td>{$row['Name']}</td>
		<td>{$row['Old_Building']}</td>
		<td>{$row['Old_Floor']}</td>
		<td>{$row['Old_Seat']}</td>
		<td>{$row['New_Building']}</td>
		<td>{$row['New_Floor']}</td>
		<td>{$row['New_Seat']}</td>
		<td><a href='yes.php?value=$row[Employee_ID]'><input type='submit' name='yes' value='Accept'></a><a href='no.php?value=$row[Employee_ID]'><input type='submit' name='no' value='Reject'></a></td> 
		</tr>";
}
?>
</tbody>
</table>
<br><br><br><br>
<p align="center"><a href="admin.html"><input type="submit" name="home" value="Home"></a></p>
</body>
</html>