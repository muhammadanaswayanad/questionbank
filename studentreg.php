<?php 
 session_start();
if (isset($_SESSION["lid"])) {
	echo "";
}
else{
	header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
            var xmlHttp;
            function showname(to){
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="sp.php";
                url +="?name=" +to
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
               // alert(xmlHttp.responseText);
                    document.getElementById("select2").innerHTML=xmlHttp.responseText   
                }
            }
</script>
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
	if(document.getElementById('select').value=="")
	{
	alert("Select department")
	document.getElementById('select').focus();
	return false;	
	}
	
	if(document.getElementById('select2').value=="")
	{
	alert("Select course")
	document.getElementById('select2').focus();
	return false;	
	}
	if(document.getElementById('textfield12').value=="")
	{
	alert("Enter User Name ")
	document.getElementById('textfield12').focus();
	return false;	
	}
	if(document.getElementById('textfield13').value=="")
	{
	alert("Enter Password")
	document.getElementById('textfield13').focus();
	return false;	
	}
	
	
	
	return true;
}
</script>
<body>
<?php

include("connect.php");
include("staffheader.php");
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
	
	
	
	$un=$_POST["textfield12"];
	$pw=$_POST["textfield13"];
	$dpt=$_POST["select"];
	$crs=$_POST["select2"];
	
	$type="user";
	mysql_query("insert into login values(null,'$un','$pw','$type')");
	$id=mysql_insert_id();
	
	mysql_query("insert into studentreg values(null,'$name','$age','$gender','$hn','$place','$post','$pin','$mob','$email','$dpt','$crs','$id')");
	header("location:staffhome.php");
	
	

}
?>


<form id="form1" name="form1" method="post" action="">
  <table width="354" border="1">
    <tr>
      <td width="169">Name</td>
      <td width="172"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>
      	<label for="select2"></label>
        <select name="select2" id="select2">
         <option value="Male">Male</option>
         <option value="Female">Female</option>
      	</select>
  </td>
    </tr>
    <tr>
      <td>House Name</td>
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
      <input type="tel" name="textfield7" id="textfield7" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="textfield8"></label>
      <input type="email" name="textfield8" id="textfield8" /></td>
    </tr>
     <tr>
      <td width="169">Department</td>
      <td width="172"><label for="textfield"></label>
        <label for="select"></label>
      <select name="select" id="select" onchange="showname(this.value)">
      <option value="">Select</option>
        <?php 
		$r=mysql_query("select id, department from department");
		if(mysql_num_rows($r)>0)
		{
			while($r1=mysql_fetch_array($r))
			{
		
		?>
         <option value="<?php  echo $r1[0] ?>"><?php  echo $r1[1] ?>
        </option>
        
        <?php }}?>
      </select></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><label for="select2"></label>
        <select name="select2" id="select2">
         <option value="">Select</option>
      
      
      
        
      </select></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><label for="textfield12"></label>
      <input type="text" name="textfield12" id="textfield12" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield13"></label>
      <input type="password" name="textfield13" id="textfield13" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return val()" />
      </div></td>
    </tr>
  </table>
</form>
<?php
include("stafffooter.php");
?>
</body>
</html>