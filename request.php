<html>
<body>
<table align="center" , border="0">
<form method="POST" align="center">
<tr>
<td> <u><b> Request </b></u></td>
</tr>
<tr>
<td>Name : </td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Employee ID : </td>
<td><input type="varchar" name="emp_id"></td>
</tr>
<tr>
<td>Hardware Type : </td>
<td><select type="listbox" name="hardware">
<option>Computer</option>
<option>Printer</option>
<option>Scanner</option>
<option>CPU</option>
<option>Keyboard</option>
<option>Mouse</option>
<option>Monitor</option>
<option>Fax Machine</option>
<option>Projector</option>
<option>Web Camera</option>
<option>Others</option>
</select>
</td>
</tr>
<tr>
<td>Quantity : </td>
<td><input type = "number" name="qty"></td>
</tr>
<tr>
<td>Date : </td>
<td><input type = "date" name="date"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</form>
</table>
</body>
</html>
<?php
$con=mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("aai" , $con);
session_start();
if(isset($_POST["submit"]))
  {
  	$name=$_POST["name"];
  	$emp_id=$_SESSION["emp_id"];
  	$hardware=$_POST["hardware"];
  	$qty=$_POST["qty"];
    $date=$_POST["date"];

     if(($name=="") or ($emp_id=="") or ($qty<=0)or ($date==""))
     {
     	echo "<script>alert('Please provide valid information!')</script>";
     }
     else
     {   $query="SELECT name from Employee Table Where Employee_Id=$emp_id";
    	   $query1= "INSERT INTO request VALUES('$name' , '$emp_id' , '$hardware' , '$qty' , 'date')";
         $run=mysql_query($query)or die(mysql_error());
         echo "<script>alert('Thankyou ! ' /n ' Please check after one week')</script>";
         echo "<script>window.open('client.php','_self')</script>";
     }
  }

?>