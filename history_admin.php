<!DOCTYPE html>
<html>
<head>
	<title>All History</title>
</head>
<body>
<h3><b>History</b></h3>
<br><br><br><br><br>
<Fieldset>
<legend align="center">ISSUES</legend>
<?php
$con=mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("aai" , $con);
$query1= "select Employee_ID,Name,Hardware_type,Date,issue from history where Type='issues'";
$query2= "select Employee_ID,Name,Hardware_type,Date from history where Type='request'";
$query3= "select Employee_ID,Name,Date from history where Type='move'";
$run1=mysql_query($query1);
$run2=mysql_query($query2);
$run3=mysql_query($query3);
?>
<table border="1" , align="center">
<thead>
<tr>
 <th>Employee ID</th>
 <th>Name</th>
 <th>Hardware Type</th>
 <th>Issue</th>
 <th>Date</th>
 </tr>
 </thead>
 <tbody>
 <?php
    while($row=mysql_fetch_array($run1))
    {    echo "<tr>
				<td>{$row['Employee_ID']}</td>
				<td>{$row['Name']}</td>
				<td>{$row['Hardware_type']}</td>
				<td>{$row['issue']}</td>
				<td>{$row['Date']}</td>
				</tr>";
    }
 ?>
 </tbody>
 </table>
 </fieldset>
 <br><br><br><br>
 <fieldset>
 <legend align="center">Hardware request</legend>
<table border="1" , align="center">
<thead>
<tr>
 <th>Employee ID</th>
 <th>Name</th>
 <th>Hardware Type</th>
 <th>Date</th>
 </tr>
 </thead>
 <tbody>
 <?php
    while($row=mysql_fetch_array($run2))
    {    echo "<tr>
				<td>{$row['Employee_ID']}</td>
				<td>{$row['Name']}</td>
				<td>{$row['Hardware_type']}</td>
				<td>{$row['Date']}</td>
				</tr>";
    }
 ?>
 </tbody>
 </table>
 </fieldset>
 <br><br><br><br><br>
 <fieldset>
 <legend align="center">Move</legend>
<table border="1" , align="center">
<thead>
<tr>
 <th>Employee ID</th>
 <th>Name</th>
 <th>Date</th>
 </tr>
 </thead>
 <tbody>
 <?php
    while($row=mysql_fetch_array($run3))
    {    echo "<tr>
				<td>{$row['Employee_ID']}</td>
				<td>{$row['Name']}</td>
				<td>{$row['Date']}</td>
				</tr>";
    }
 ?>
 </tbody>
 </table>
 </fieldset>
</body>
</html>