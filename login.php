<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="csscode.css">
	<link rel="javascript" type="text/javascript" href="jscode.js">
</head>
<body>
<?php

$db=mysql_connect("localhost","root","");
if($db)
{
 mysql_select_db("questionbank",$db);
 
 }
 else {
  
  echo("Error! Unable to establish connection.");
  
  }
?>
<div class="login-page">
  <div class="form">
  	<!--We dont need registration screen so commenting the code
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
-->
    <form action="logincontroller.php" method="POST">
      <input type="text" placeholder="username" id="username" name="username" />
      <input type="password" placeholder="password" id="password" name="password" />
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>