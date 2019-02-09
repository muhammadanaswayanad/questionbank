<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

 $idd=$_GET["id"];
 $res = mysql_query("select * from staff where lid='$idd'");
 if(mysql_num_rows($res) > 0)
{
		if($row=mysql_fetch_array($res)) 
		{
?>

<body>
<form id="form1" name="form1" method="post" action="">

   <table width="320" border="1">
    <tr>
      <td width="88">Name</td>
      <td width="216"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" value="<?php echo $row[0]; ?>"/></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" value="<?php echo $row[1]; ?>" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><label for="textfield9"></label>
      <input type="text" name="textfield9" id="textfield9"
     value="<?php echo $row[2]; ?> "/></td>
    </tr>
    <tr>
      <td>House name</td>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3"
      value="<?php echo $row[5]; ?>" /></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4"
      value="<?php echo $row[6]; ?>" /></td>
    </tr>
    <tr>
      <td>Post</td>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5"
      value="<?php echo $row[7]; ?>" /></td>
    </tr>
    <tr>
      <td>Pin</td>
      <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6"
      value="<?php echo $row[8]; ?>" /></td>
    </tr>
    <tr>
      <td>Mob</td>
      <td><label for="textfield7"></label>
      <input type="text" name="textfield7" id="textfield7"
      value="<?php echo $row[3]; ?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8"
      value="<?php echo $row[4]; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Update" onclick="return val()" />
      </div></td>
    </tr>
  </table>
</form>
<?php
}}
if(isset($_POST["button"]))
{
	$name=$_POST["textfield"];
	$age=$_POST["textfield2"];
	$hn=$_POST["textfield3"];
	$place=$_POST["textfield4"];
	$post=$_POST["textfield5"];
	$pin=$_POST["textfield6"];
	$mob=$_POST["textfield7"];
	$email=$_POST["textfield8"];
	$gd=$_POST["textfield9"];
	mysql_query("update staff set Name='$name',Age='$age',Gender='$gd',Housename='$hn',Place='$place',Post='$post',Pin='$pin',Mob='$mob',Email='$email' where lid='$idd'");
	header("location:adminhome.php");
	

}
?>
<?php
include("adminfooter.php")
?>

</body>
</html>