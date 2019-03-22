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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>

function val()
{
	if(document.getElementById('textarea').value=="")
	{
	alert("Enter The Notification")
	document.getElementById('textarea').focus();
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
	
	$not=$_POST["textarea"];
	mysql_query("insert into notification values(null,'$not')");
	header("location:adminhome.php");
}

 ?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Notification</td>
      <td><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return val()" />
      </div>        <div align="center"></div></td>
    </tr>
  </table>
</form>
<?php
include("adminfooter.php")
?>
</body>
</html>