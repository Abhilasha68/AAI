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
<td>Period od Allocation : </td>
<td><input type='varchar' name='period'></td>
</tr>
<tr>
<td>Warranty Date : </td>
<td><input type='date' name='warranty'></td>
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
<br><br><br><br>
<p align="center"><a href="admin.html"><input type="submit" name="home" value="Home"></a></p>
</body>
</html> 
<?php
$con=mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("aai" , $con);
if(isset($_POST["submit"]))
  {
  	$emp_id=$_POST["emp_id"];
  	$hardware=$_POST["hardware"];
  	$model=$_POST["model"];
  	$item=$_POST["item"];
  	$qty=$_POST["qty"];
  	$period=$_POST["period"];  	
  	$warranty=$_POST["warranty"];
    $date=$_POST["date"];

     if(($hardware=="") or ($emp_id=="") or ($qty<=0)or ($date=="") or ($model=="") or ($item=="") or ($period=="") or ($warranty=="")) 
     {
      echo "<script>alert('Please provide valid information!')</script>";
     }
     else
     {
      $query="insert into employee_items values('$emp_id','$hardware','$model','$item','$qty','$date','$period',$'warranty')";
      $run=mysql_query($query) or die(mysql_error());
     }
 }
?>