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
<title>Add Department</title>
</head>
<script>
function val()
{
	if(document.getElementById('textfield').value=="")
	{
	alert("Enter Department")
	document.getElementById('textfield').focus();
	return false;	
	}
	return true;
}



</script>

<body>
<?php
include("adminheader.php");
include("connect.php");
if(isset($_POST["button"]))
{
	$dep=$_POST["textfield"];
	mysql_query("insert into department values(null,'$dep')");
	header("location:adminhome.php");
}




?>

<form id="form1" name="form1" method="post" action="">
      Department<br>
      <label for="textfield"></label>
      <input type="text" class="form-control" name="textfield" id="textfield" placeholder="Enter department name" />
      <div align="center">
        <input type="submit" name="button" class="btn btn-primary" id="button" value="Submit" onclick="return val()" />
      </div>
    
</form>
<?php
include("adminfooter.php")
?>
</body>
</html>