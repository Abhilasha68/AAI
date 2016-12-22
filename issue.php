<html>
<body>
<table border="0" , align="center">
<form method="POST" , align="center">
<tr>
<td><u><b>ISSUE <b></u></td>
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
<td>Model_No : </td>
<td><input type="varchar" name="model"></td>
</tr>
<tr>
<td>Item_No :</td>
<td><input type="varchar" name="Item_no"></td>
</tr>
<tr>
<td>Date : </td>
<td><input type="varchar" name="date"></td>
</tr>
<tr>
<td>Issue : </td>
<td><textarea row="20" , columns="100" type="text" , name="issue"></textarea>
</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</body>
</html>
<?php
$con=mysql_connect("localhost", "root" , "");
if(isset($_POST["submit"]))
   {
   	 $name=$_POST["name"];
   	 $emp_id=$_POST["emp_id"];
   	 $hardware=$_POST["hardware"];
   	 $model=$_POST["Item_no"];
   	 $date=$_POST["date"];
   	 if(($name=="") or ($emp_id=="") or ($model=="") or ($model=="") or ($date==""))
   	 {
   	 	echo "<script>alert('Please provide the information !')</script>";
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