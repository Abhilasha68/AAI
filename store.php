<html>
<body>
<br><br><br><br><br><br><br>
<table>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
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
		<td>{$row['HW_Type']}</td>
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
<p align="center"><a href="localhost/aai/requestsupp.php">Request Item from Supplier</a><br>
<a href="localhost/aai/collectsupp.php">Collect Item from Supplier</a></p>
</body>
</html>