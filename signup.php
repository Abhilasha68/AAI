<html>
<body align="center">
<form action="signup.php" method="POST">
<br>
<table border="0" align="center">
<tr><td align ="center"><h3><u>SIGN UP</ul></h3></td></tr>
<tr>
<td>Name*:</td>
<td><input type='text' name='name' id='name' maxlength="50" /></td>
</tr>
<tr>
<td>E-Mail*:</td>
<td><input type='email' name='email' id='email' maxlength="50" /></td>
</tr>
<tr>
<td>Department*:</td>
<td><select type='listbox' name='dept' id='dept' maxlength="50"/>
<option>Administration</option>
<option>Aerodrome Licensing</option>
<option>Aerodrome Planning</option>
<option>Air Traffic Management</option>
<option>Airport Systems</option>
<option>Architecture Planning</option>
<option>Aviation Safety</option>
<option>Aviation Security</option>
<option>Cargo</option>
<option>Central Radio Stores Depot</option>
<option>CNS-OM</option>
<option>CNS-P</option>
<option>Commercial</option>
<option>Consultancy and Coordination Division</option>
<option>Corp. Plng. And Mgmt. Services</option>
<option>Directorate of Fire</option>
<option>Directorate of Technical</option>
<option>Engineering(Metro)</option>
<option>Engineering(RGB)</option>
<option>Finance And Accounts</option>
<option>Flight Inspection Unit</option>
<option>Human Resource</option>
<option>Information Technology</option>
<option>Internal Audit</option>
<option>Key Infrastructure Development(KID)</option>
<option>Land Management</option>
<option>Law</option>
<option>Operations</option>
<option>Proj. Monitoring And Quality Assurance</options>
<option>Public Relations</option>
<option>RCDU</option>
</select>
</td>
</tr>
<tr>
<td>Location*:</td>
<td><input type= 'varchar' name='location' , id= 'location' , maxlength="50"/></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type='varchar' , name ='dob' , id='dob' , maxlength="15"/></td>
</tr>
<tr>
<td>Employee_ID*:</td>
<td><input type='varchar' name='emp_id' id='emp_id' maxlength="50" /></td>
</tr>
<tr>
<td>Password*:</td>

<td><input type='password' name='password' id='password' maxlength="50" /></td>
<td ><input type="hidden" , name="type" , value="client"></td>
</tr>
<tr>
<td><input type='submit' name='Submit' value='Submit' /></td>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aai",$con);
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$dept=$_POST['dept'];
	$location=$_POST['location'];
	$emp_id=$_POST['emp_id'];
	$emp_pass=$_POST['password'];
	$type=$_POST['type'];
	if(($name=="")or ($email=="")or ($location=="") or ($emp_id=="") or ($password=""))
	{ echo "<script>alert('please enetr the details')</script>";
    }
	else
	{  $query= "INSERT INTO pending_reg VALUES('$name' , '$email' , '$dept' , '$location' , '$emp_id' , '$emp_pass' , '$type' )";
        $run= mysql_query($query) or die(mysql_error());
		echo"<script>alert('please check in after 4 days')</script>";
		echo "<script>window.open('first.php','_self')</script>";
    }
	
}
?>