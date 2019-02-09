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
  <table width="200" border="1">
    <tr>
      <td>Department</td>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return val()" />
      </div></td>
    </tr>
  </table>
</form>
<?php
include("adminfooter.php")
?>
</body>
</html>