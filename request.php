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
</select>
</td>
</tr>
<tr>
<td>Quantity : </td>
<td><input type = "number" name="qty"></td>
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
$email="shivanisharma1941995@gmail.com";
if(isset($_POST["submit"]))
  {
  	$name=$_POST["name"];
  	$emp_id=$_POST["emp_id"];
  	$hardware=$_POST["hardware"];
  	$qty=$_POST["qty"];
     if(($name=="") or ($emp_id=="") or ($qty<=0))
     {
     	echo "<script>alert('Please provide valid information!')</script>";
     }
     else
     {
    	$to = '$email';
    	$email_subject = "Contact form request item : $name";
    	$email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Employee_ID: $emp_id \n Harware type : $hardware".
         "Quantity: $qty";
    	$headers = "From: $email\n";
    	mail($to,$email_subject,$email_body,$headers);
     }
  }

?>