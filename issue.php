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
<option>Fax Machine</option>
<option>Projector</option>
<option>Web Camera</option>
<option>Others</option>
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
<td><input type="date" name="date"></td>
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
   	 $emp_id=$_SESSION["emp_id"];
   	 $hardware=$_POST["hardware"];
   	 $model=$_POST["model"];
     $item=$_POST["Item_no"];
   	 $date=$_POST["date"];
     $issue=$_POST["issue"];
   	 if(($name=="") or ($emp_id=="") or ($model=="") or ($item=="") or ($date==""))
   	 {
   	 	echo "<script>alert('Please provide the information !')</script>";
   	 }
   	 else
     {
    	$query="SELECT name from Employee Table Where Employee_Id=$emp_id";
         $query1= "INSERT INTO request VALUES('$name' , '$emp_id' , '$hardware' , '$model' , '$item', '$date','$issue')";
         $run=mysql_query($query)or die(mysql_error());
         $run1=mysql_query($query1) or die(mysql_error());
         echo "<script>alert('Thankyou ! ' /n ' Please check after one week')</script>";
         echo "<script>window.open('client.php','_self')</script>";
     }
   }
?>