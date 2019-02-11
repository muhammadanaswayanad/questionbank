<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="csscode.css">
	<link rel="javascript" type="text/javascript" href="jscode.js">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/full-slider.css" rel="stylesheet">
</head>
<script>

function val()
{
	if(document.getElementById('textfield').value=="")
	{
	alert("Enter Name ")
	document.getElementById('textfield').focus();
	return false;	
	}
	if(/[^a-z\s&'-\.]/gi.test(document.getElementById("textfield").value)){
		alert("Special characters  and Numeric values not allowed");
		document.getElementById("textfield").focus();
		return false;
	}
	
	if(document.getElementById('textfield2').value=="")
	{
	alert("Enter Age")
	document.getElementById('textfield2').focus();
	return false;	
	}
	
	if(document.getElementById('radio').value=="")
	{
	alert("Select Gender ")
	document.getElementById('radio').focus();
	return false;	
	}
	
	if(document.getElementById('textfield3').value=="")
	{
	alert("Enter Housename")
	document.getElementById('textfield3').focus();
	return false;	
	}
	
	if(document.getElementById('textfield4').value=="")
	{
	alert("Enter Place")
	document.getElementById('textfield4').focus();
	return false;	
	}
	if(document.getElementById('textfield5').value=="")
	{
	alert("Enter Post")
	document.getElementById('textfield5').focus();
	return false;	
	}
	if(document.getElementById('textfield6').value=="")
	{
	alert("Enter Pin")
	document.getElementById('textfield6').focus();
	return false;	
	}
	if(document.getElementById("textfield6").value.length!=6)

     {

                alert("Your Postal code seems incorrect!");

               document.getElementById("textfield6").focus();

               return false;

     }
	if(document.getElementById('textfield7').value=="")
	{
	alert("Enter Mob")
	document.getElementById('textfield7').focus();
	return false;	
	}
	if(isNaN(document.getElementById("textfield7").value))
	
	{
		 alert(" Characters Not Allowed!");

     	 document.getElementById("textfield7").focus();

     	 return false;
	}
	 if(document.getElementById("textfield7").value.length<10)

    {

     alert(" Enter correct Phone Number!");

     document.getElementById("textfield7").focus();

     return false;

    }
	
	if(document.getElementById('textfield8').value=="")
	{
	alert("Enter Email")
	document.getElementById('textfield8').focus();
	return false;	
	}
	var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("textfield8").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

    {

               alert("Your Email ID seems incorrect. Enter Correct Email ID.");

               document.getElementById("textfield8").focus();

               return false;

    }
	
    
	if(document.getElementById('textfield9').value=="")
	{
	alert("Enter Usernmae")
	document.getElementById('textfield9').focus();
	return false;	
	}
	if(document.getElementById('textfield10').value=="")
	{
	alert("Enter {Password")
	document.getElementById('textfield10').focus();
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
  <table width="320" border="1">
    <tr>
      <td width="88">Name</td>
      <td width="216"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="radio" id="radio" value="male" checked="checked" />
        M     
        <label for="radio">
          <input type="radio" name="radio" id="radio2" value="female" />
      F</label></td>
      
    </tr>
    <tr>
      <td>House name</td>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" /></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
    </tr>
    <tr>
      <td>Post</td>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" /></td>
    </tr>
    <tr>
      <td>Pin</td>
      <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" /></td>
    </tr>
    <tr>
      <td>Mob</td>
      <td><label for="textfield7"></label>
      <input type="text" name="textfield7" id="textfield7" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" /></td>
    </tr>
    <tr>
      <td>User name</td>
      <td><label for="textfield9"></label>
      <input type="text" name="textfield9" id="textfield9" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield10"></label>
      <input type="text" name="textfield10" id="textfield10" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
      	
      </div></td>
    </tr>
  </table>


  <div class="form-group">
  	<label for="textfield">Name</label>
   <input type="text" name="textfield" id="textfield" />
</div>

  <input type="submit" class="btn btn-info" value="Register" onclick="return val()">
 </div>
</form>

<?php
include("adminfooter.php")
?>
</body>
</html>