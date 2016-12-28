<html>
<body>
<br><br><br><br><br><br><br>
<table>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
$value='';
$query="select * from it_store";
$run=mysql_query($query);
?>
<table border="1" align="center">
      <thead>
		<tr>
          <th>Supplier_Name</th>
          <th>Supplier_ID</th>
          <th>HW_Type</th>
          <th>Quantity</th>
          <th>Balance Quantity</th>
          <th>Date</th>
          <th>POI</th>
          <th>Receipt</th>
          <th>Model_No</th>
        </tr>
      </thead>
<tbody>
<?php
while($row=mysql_fetch_array($run))
{
	echo "<tr>
		<td>{$row['Supplier_Name']}</td>
		<td>{$row['Supplier_ID']}</td>
		<td><a href='hardware.php?value=$row[HW_Type]'>{$row['HW_Type']}</a></td>
		<td>{$row['Quantity']}</td>
		<td>{$row['Balance Quantity']}</td>
		<td>{$row['Date']}</td>
		<td>{$row['POI']}</td>
		<td>{$row['Receipt']}</td>
		<td>{$row['Model_No']}</td>
		</tr>\n";
}
?>
</tbody>
</table>
<br><br><br><br>
<p align="center"><a href="requestsupp.html">Request Item from Supplier</a><br>
<a href="collectsupp.php">Collect Item from Supplier</a></p>
<br><br><br><br>
<p align="center"><a href="admin.html"><input type="submit" name="home" value="Home"></a></p>
</body>
</html>
