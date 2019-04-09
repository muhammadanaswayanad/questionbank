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
  <table width="443" height="359" border="1">
    <tr>
      <td colspan="2"><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" />
      <label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" /></td>
    </tr>
    <tr>
      <td width="287"><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
      <td width="140"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td><label for="textarea2"></label>
      <textarea name="textarea2" id="textarea2" cols="45" rows="5"></textarea></td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <td><label for="textarea3"></label>
      <textarea name="textarea3" id="textarea3" cols="45" rows="5"></textarea></td>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" /></td>
    </tr>
    <tr>
      <td><label for="textarea4"></label>
      <textarea name="textarea4" id="textarea4" cols="45" rows="5"></textarea></td>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
    </tr>
  </table>
</form>
</body>
</html>