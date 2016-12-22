<html>
<body>
<form action="requestsupp.php" method="POST">
<br><br><br><br><br><br>
<fieldset align="center" width='300'>
<legend align='center'>Purchase Order</legend>
<table width='200' border='0' align='center'>
<tr>
<td width='100'>Supplier Name</td>
<td width='150'><input type="text" name="supp_name"></input></td>
</tr>
<tr>
<td width='100'>Supplier ID</td>
<td width='150'><input type="number" name="supp_id"></input></td>
</tr>
<tr>
<td width='100'>Hardware Type</td>
<td width='150'><input type='text' name="hw_type"></input></td>
</tr>
<tr>
<td width='100'>Hardware Model</td>
<td width='150'><input type="varchar" name='hw_model'></input></td>
</tr>
<tr>
<td width='100'>Quantity</td>
<td width='150'><input type="number" name='qty'></input></td>
</tr>
<tr>
<td width='100'>Date</td>
<td width='150'><input type='date' name='date'></input></td>
</tr>
<tr>
<td width='100'>POI</td>
<td width='150'><input type="number" name='poi'></input></td>
</tr>
</table>
<p align='center'><input type='submit' name='submit' value='Submit'></input></p>
</fieldset>
</form>
</body>
</html>