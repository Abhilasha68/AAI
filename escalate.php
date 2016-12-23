<html>
<head>
<title>ISSUES :-</title>
</head>
<boby>
<fieldset>
<?php
$var1=$_GET['value1'];
 $con=mysql_connect("localhost" , "root" ,"");
 $db=mysql_select_db("aai", $con);
 $query= "select * from issue where Item_no='$var1'";
 $run=mysql_query($query);
 ?>
<table border ="1" , align="center">
<thead>
  <tr>
  <th>Employee No</th>
  <th>Employee Name</th>
  <th>Hardware type</th>
  <th>Model No</th>
  <th>Item No</th>
  <th>Issue</th>
  <th>Date</th>
  <tr>
  </tr>
 </thead>
 <tbody>
 <?php
 while($row=mysql_fetch_array($run))
 	{  echo  "<tr>
 			<td>{$row['Employee_Id']}</td>
 			<td>{$row['Name']}</td>
      <td>{$row['Hardware_Type']}</td>
			<td>{$row['Model_no']}</td>
			<td>{$row['Item_no']}</td>
			<td>{$row['Date']}</td>
			<td>{$row['Issue']}</td>
      <td><input type='submit' name='submit' value='submit' /></td>
      </tr>";
		}
 ?>
 </tbody>
 </table>
</fieldset>
</boby>
</html>