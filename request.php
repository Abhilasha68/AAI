<html>
<body>
<?php
$con=mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("aai" , $con);
session_start();
$emp_id=$_SESSION["emp_id"];
$q="select Name,Employee_ID from employee_table where Employee_ID=$emp_id";
$r=mysql_query($q);
$ro=mysql_fetch_array($r);
?>
<table align="center" , border="0">
<form method="POST" align="center">
<tr>
<td> <u><b> Request </b></u></td>
</tr>
<tr>
<td>Name : </td>
<td><input type="text" name="name" value=<?php echo $ro['Name'];?>></td>
</tr>
<tr>
<td>Employee ID : </td>
<td><input type="varchar" name="emp_id" value=<?php echo $ro['Employee_ID'];?>></td>
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
<td><input type = 'date' name="date"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</form>
</table>
<br><br><br><br><br>
<p align="center"><a href="client.php"><input type="submit" name="home" value="Home"></a></p>
</body>
</html>
<?php

if(isset($_POST["submit"]))
  {  
    $name=$_POST["name"];
    $emp_id=$_POST["emp_id"];	
  	$hardware=$_POST["hardware"];
  	$qty=$_POST["qty"];
    $date=$_POST["date"];
    $ht="request";

     if(($name=="") or ($emp_id=="") or ($qty<=0)or ($date==""))
     {
     	echo "<script>alert('Please provide valid information!')</script>";
     }
     else
     {   $query="SELECT Name from employee_table Where Employee_ID=$emp_id";
    	   $query1= "INSERT INTO request VALUES('$name' , '$emp_id' , '$hardware' , '$qty' , '$date')";
         $query2= "INSERT INTO history(Employee_ID , Name , Type , Date , Hardware_type) VALUES( '$emp_id' ,'$name'  , '$ht' , '$date' , '$hardware' )";
         $run=mysql_query($query)or die(mysql_error());
         $run1=mysql_query($query1) or die (mysql_error());
         $run2=mysql_query($query2) or die (mysql_error());
         echo "<script>alert('Thankyou ! Please check after one week')</script>";
     }
  }

?>