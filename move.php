<html>  
<body> 
<table border="0" align="center"> 
<tr>
<td><u>Please Fill Up Following Details :</u></td>
</tr>
<tr>
<form method="POST" align="center"> 
<tr><td></td></tr>
<tr><td></td></tr>
<td>Name : </td>
<td> <input type="text" name="name"></td> 
</tr> 
<tr> 
<td>Employee ID : </td>
<td> <input type="varchar" name="emp_id"></td> 
</tr> 
<tr>
<td>Present Building : </td>
<td><input type="text" name="obuilding"></td>
</tr>
<tr> 
<td>Present Seat_No : </td>
<td> <input type="number" name="oseat_no"></td> 
</tr> 
<tr> 
<td>New Building : </td>
<td><input type="text" name="nbuilding"></td> 
</tr> 
<tr> 
<td>New Seat_No : </td>
<td> <input type="number" name="nseat_no"></td> 
</tr>
<tr>
<td>Date : </td>
<td><input type="date" name="date" ></td>
</tr> 
<tr> 
<td><input id="button" type="submit" name="submit" value="submit"></td> 
</tr> 
</form> 
</table> 
</body> 
</html>
<?php
   $con=mysql_connect("localhost" , "root" , "");
   if(isset($_POST["submit"]))
   {
   	  $name=$_POST["name"];
   	  $emp_id=$_POST["emp_id"];
   	  $obuilding=$_POST["obuilding"];
   	  $oseat_no=$_POST["oseat_no"];
   	  $nbuilding=$_POST["nbuilding"];
   	  $nseat_no=$_POST["nseat_no"];
   	  $date=$_POST["date"];
   	  if(($name=="") or ($emp_id=="") or ($obuilding=="") or ($oseat_no=="")or($nbuilding=="") or ($nseat_no=="") or ($date==""));
   	     { echo  "<script>alert('Please provide all the information !')</script>";   	  
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
