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
<title>Question Bank</title>
</head>
<script>

	function val()
	{
		if(document.getElementById('textarea').value=="")
	{
	alert("Enter Your Feedback")
	document.getElementById('textarea').focus();
	return false;	
	}
	return true;
	}
	</script>
<?php
include("connect.php");
include("userheader.php");
if(isset($_POST["button"]))
{
	$feed=$_POST["textarea"];
	$id=mysql_insert_id();
		mysql_query("insert into feedback values(null,'$id','$feed')");
		 header("location:userhome.php");
	
}
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="305" border="1">
    <tr>
      <td width="164">Feedback</td>
      <td width="125"><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return val()" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php
include("userfooter.php")
?>
</body>
</html>