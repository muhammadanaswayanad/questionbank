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

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td><div align="center">Options</div></td>
    </tr>
    <tr>
      <td><input type="radio" name="radio" id="radio" value="radio" />
      <label for="radio"></label></td>
    </tr>
    <tr>
      <td><input type="radio" name="radio2" id="radio2" value="radio2" />
      <label for="radio2"></label></td>
    </tr>
    <tr>
      <td><input type="radio" name="radio3" id="radio3" value="radio3" />
      <label for="radio3"></label></td>
    </tr>
    <tr>
      <td><input type="radio" name="radio4" id="radio4" value="radio4" />
      <label for="radio4"></label></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="button" id="button" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>