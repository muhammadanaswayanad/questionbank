<?php 
 session_start();
if (isset($_SESSION["lid"])) {

}
else{
	header("location:login.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question Bank :: Satff Home</title>
</head>

<body>
<?php
include("staffheader.php");

?>
<form id="form1" name="form1" method="post" action="">
  
</form>
<?php
include("stafffooter.php");
?>
</body>
</html>