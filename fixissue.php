<html>
<head>
<title>ISSUES :-</title>
</head>
<boby>
<fieldset>
<?php
 $con=mysql_connect("localhost" , "root" ,"");
 $db=mysql_select_db("aai", $con);
 $value1='';
 $query= "select * from issue";
 $run=mysql_query($query);
 ?>
<table border ="1" , align="center">
<thead>
  <tr>
  <th  id='ep_id'>Employee ID</th>
  <th id='nm'>Employee Name</th>
  <th>Hardware type</th>
  <th>Model No</th>
  <th>Item No</th>
  <th>Issue</th>
  <th>Date</th>
  <th>Action</th>
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
			<td>{$row['Item_no']}</a></td>
			<td>{$row['Issue']}</td>
			<td>{$row['Date']}</td>
			<td><a href='fix.php?value1=$row[Item_no]'><input type='submit' name='fix' value='Fix'></a>
      <a href='escalate.php?value1=$row[Item_no]'><input type='submit' name='escalate' value='Escalate'</a> </td>
			</tr>\n";
		}
 ?>
 </tbody>
 </table>
</fieldset>
</boby>
</html>