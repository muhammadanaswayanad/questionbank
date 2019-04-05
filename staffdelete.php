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
<?php
include("connect.php");


 $idd=$_GET["id"];
 mysql_query("delete from staff where lid='$idd'");
 mysql_query("delete from login where id='$idd'");
 header("location:viewstaff.php");
 
 
 ?>

<body>
<form id="form1" name="form1" method="post" action="">
</form>
</body>
</html>