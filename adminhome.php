<?php 
 session_start();
if (isset($_SESSION["lid"])) {
	echo "";
}
else{
	header("location:login.php");
}
?>
<html>
<head>
<title>
Question Bank :: Admin Home
</title>
</head>
<body>
<?php

include("adminheader.php");
?>

<form action="" method="get">
  
</form>
<?php
include("adminfooter.php");
?>
</body>
</html>