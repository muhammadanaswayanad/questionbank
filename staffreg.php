<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- <link rel="stylesheet" type="text/css" href="csscode.css"> -->
	<link rel="javascript" type="text/javascript" href="jscode.js">
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom styles for this template -->
  <link href="css/full-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<script>

function val()
{
	if(document.getElementById('name').value=="")
	{
	alert("Enter Name ")
	document.getElementById('name').focus();
	return false;	
	}
	if(/[^a-z\s&'-\.]/gi.test(document.getElementById("name").value)){
		alert("Special characters  and Numeric values not allowed");
		document.getElementById("name").focus();
		return false;
	}
	
	if(document.getElementById("age").value=="")
	{
	alert("Enter Age")
	document.getElementById("age").focus();
	return false;	
	}
	
	if(document.getElementById("gender").value=="")
	{
	alert("Select Gender ")
	document.getElementById("gender").focus();
	return false;	
	}
	
	if(document.getElementById("house name").value=="")
	{
	alert("Enter Housename")
	document.getElementById("house name").focus();
	return false;	
	}
	
	if(document.getElementById("place").value=="")
	{
	alert("Enter Place")
	document.getElementById("place").focus();
	return false;	
	}
	if(document.getElementById("post").value=="")
	{
	alert("Enter Post")
	document.getElementById("post").focus();
	return false;	
	}
	if(document.getElementById("pin").value=="")
	{
	alert("Enter Pin")
	document.getElementById("pin").focus();
	return false;	
	}
	if(document.getElementById("pin").value.length!=6)

     {

                alert("Your Postal code seems incorrect!");

               document.getElementById("pin").focus();

               return false;

     }
	if(document.getElementById("mob").value=="")
	{
	alert("Enter Mob")
	document.getElementById("mob").focus();
	return false;	
	}
	if(isNaN(document.getElementById("mob").value))
	
	{
		 alert(" Characters Not Allowed!");

     	 document.getElementById("mob").focus();

     	 return false;
	}
	 if(document.getElementById("mob").value.length<10)

    {

     alert(" Enter correct Phone Number!");

     document.getElementById("mob").focus();

     return false;

    }
	
	if(document.getElementById("email").value=="")
	{
	alert("Enter Email")
	document.getElementById("email").focus();
	return false;	
	}
	var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("email").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

    {

               alert("Your Email ID seems incorrect. Enter Correct Email ID.");

               document.getElementById("Email").focus();

               return false;

    }
	
    
	if(document.getElementById("username").value=="")
	{
	alert("Enter Username")
	document.getElementById("username").focus();
	return false;	
	}
	if(document.getElementById("password").value=="")
	{
	alert("Enter Password")
	document.getElementById("password").focus();
	return false;	
	}
	
	
	return true;
	
}


</script>
<?php
include("adminheader.php");

include("connect.php");
if(isset($_POST["button"]))
{
	$name=$_POST["textfield"];
	$age=$_POST["textfield2"];
	$gender=$_POST["radio"];
	$mob=$_POST["textfield7"];
	$email=$_POST["textfield8"];
	
	
	$hn=$_POST["textfield3"];
	$place=$_POST["textfield4"];
	$post=$_POST["textfield5"];
	$pin=$_POST["textfield6"];
	
	
	$un=$_POST["textfield9"];
	$pw=$_POST["textfield10"];
	$type="staff";
	mysql_query("insert into login values(null,'$un','$pw','$type')");
	$id=mysql_insert_id();
	
	mysql_query("insert into staff values('$name','$age','$gender','$mob','$email','$hn',
	'$place','$post','$pin','$id')");
	header("location:adminhome.php");
	

}
?>

<body>
<form id="form1" name="form1" method="post" action="" >
<div class="form-group">
  	<label for="name">Name</label>
   <input type="text" name="name" id="name" placeholder="Enter name of staff" />
</div>
<div class="form-group">
	<label for="textfield"><h5><b>Age</b></h5></label>
	<input type="text" name="age" id="age" />
</div>
<div class="form-group">
	<label for="gender">Gender:</label>
      <select class="form-control" id="gender">
        <option>Male</option>
        <option>Female</option>
      </select>
</div>
 <div class="form-group">
  	<label for="textfield"><h5><b>House Name</b></h5></label>
   <input type="text" name="house name" id="house name" />
</div>
<div class="form-group">
	<label for="textfield"><h5><b>place</b></h5></label>
	<input type="text" name="place" id="place" />
</div>
<div class="form-group">
	<label for="textfield"><h5><b>post</b></h5></label>
	<input type="text" name="post" id="post" />
</div>
 <div class="form-group">
  	<label for="textfield"><h5><b>Pin</b></h5></label>
   <input type="text" name="pin" id="pin" />
</div>
<div class="form-group">
	<label for="textfield"><h5><b>Mob</b></h5></label>
	<input type="tel" name="mob" id="mob" />
</div>
<div class="form-group">
	<label for="textfield"><h5><b>Email</b></h5></label>
	<input type="email" name="email" id="email" />
</div> 
<div class="form-group">
  	<label for="textfield"><h5><b>Username</b></h5></label>
   <input type="text" name="username" id="username" />
</div>
<div class="form-group">
	<label for="textfield"><h5><b>Password</b></h5></label>
	<input type="password" name="password" id="password" />
</div>
  <input type="submit" class="btn btn-info" value="Register" onclick="return val()">
 </div>
</form>

<?php
include("adminfooter.php")
?>
</body>
</html>