<html>  
<body> 
<?php
$con=mysql_connect("localhost" , "root" , "");
$db=mysql_select_db("aai",$con);
$var1=$_GET['var'];
$emp_id=$var1;
$query1="select Name,Employee_ID,Building,Floor_No,Seat_No from employee_table where Employee_ID=$emp_id";
$run1=mysql_query($query1);
$row=mysql_fetch_array($run1);
?>
<table border="0" align="center"> 
<tr>
<td><u>Please Fill Up Following Details :</u></td>
</tr>
<tr>
<form method="POST" align="center"> 
<tr><td></td></tr>
<tr><td></td></tr>
<td>Name : </td>
<td> <input type="text" name="name" value=<?php echo $row['Name'];?>></td> 
</tr> 
<tr> 
<td>Employee ID : </td>
<td> <input type="varchar" name="emp_id" value=<?php echo $row['Employee_ID'];?>></td> 
</tr> 
<tr>
<td>Present Building : </td>
<td><input type="text" name="obuilding" value=<?php echo $row['Building'];?>></td>
</tr>
<tr>
<td>Present Floor :</td>
<td><input type="varchar" name="ofloor" value=<?php echo $row['Floor_No'];?>></td>
</tr>
<tr> 
<td>Present Seat_No : </td>
<td><input type="number" name="oseat_no" value=<?php echo $row['Seat_No'];?>></td> 
</tr>
<tr> 
<td>New Building : </td>
<td><input type="text" name="nbuilding"></td> 
</tr> 
<tr>
<td>New Floor : </td>
<td><input type="varchar" name="nfloor"></td>
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
<br><br><br><br>
<p align="center"><a href="client.php"><input type="submit" name="home" value="Home"></a></p>
</body> 
</html>
<?php
   
   if(isset($_POST["submit"]))
   {   
   	  $name=$_POST["name"];
   	  $obuilding=$_POST["obuilding"];
         $ofloor=$_POST["ofloor"];
   	  $oseat_no=$_POST["oseat_no"];
   	  $nbuilding=$_POST["nbuilding"];
   	  $nseat_no=$_POST["nseat_no"];
         $nfloor=$_POST["nfloor"];
   	  $date=$_POST["date"];
         $ht="move";
   	  if(($name=="") or ($emp_id=="") or($nbuilding=="") or ($nseat_no=="") or ($date==""))
   	     { echo  "<script>alert('Please provide all the information !')</script>";}
   	  else
          {
            $query="insert into move values ('$emp_id','$name','$obuilding','$oseat_no','$nbuilding','$nseat_no','$date')";
            $query1= "INSERT INTO history(Employee_ID , Name , Type , Date) VALUES( '$emp_id' ,'$name' , '$ht' , '$date' )";
            $run=mysql_query($query) or die(mysql_error());
            $run1=mysql_query($query1) or die(mysql_error());
            echo "<script>window.open('client.php','_self')</script>";
          }
   }
?>