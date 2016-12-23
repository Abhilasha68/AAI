<html>
<body>
<form>
<fieldset>
<legend align='center' >Allocation Form</legend>
<table align='center'>
<tr>
<td> Employee Id : </td>
<td><input type='varchar' name='emp_id'></td>
</tr>
<tr>
<td>Hardware Type : </td>
<td><select type='varchar' name='hardware'>
<option>Computer</option>
<option>Printer</option>
<option>Scanner</option>
<option>Mouse</option>
<option>KeyBoard</option>
<option>CPU</option>
<option>Monitor</option>
<option>Fax Machine</option>
<option>Web Camera</option>
<option>Projector</option>
<option>other</option>
</select>
</td>
</tr>
<tr>
<td>Model_no : </td>
<td><input type='varchar' name='model'></td>
</tr>
<tr>
<td>Item_No : </td>
<td><input type='varchar' name='item'></td>
</tr>
<tr>
<td>Quantity</td>
<td><input type='number' name='qty'></td>
</tr>
<tr>
<td>Period od Allocation</td>
</tr>
<tr>
<td>From:</td>
<td><input type='date' name='from'></td>
</tr>
<tr>
<td>to:</td>
<td><input type='date' name='to'></td>
</tr>
<tr>
<td>Warranty Period : </td>
<td><input type='number' name='warranty'></td>
</tr>
<tr>
<td>Date</td>
<td><input type='date' name='date'></td>
</tr>
<tr>
<td><input type='submit' name='submit' value='submit'></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html> 
<?php
$con=mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("aai" , $con);
session_start();
if(isset($_POST["submit"]))
  {
  	$emp_id=$_SESSION["emp_id"];
  	$hardware=$_POST["hardware"];
  	$model=$_POST["model"];
  	$item=$_POST["item"];
  	$qty=$_POST["qty"];
  	$from=$_POST["from"];
  	$to=$_POST["to"];
  	$warranty=$_POST['warranty'];
    $date=$_POST["date"];

     if(($hardware=="") or ($emp_id=="") or ($qty<=0)or ($date=="") or ($model=="") or ($item=="") or ($from=="") or ($to=="")) 
     {
     	echo "<script>alert('Please provide valid information!')</script>";
     }
 }
?>