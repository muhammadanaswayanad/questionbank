<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>

function val()
{
	if(document.getElementById('select').value=="")
	{
	alert("Select department")
	document.getElementById('select').focus();
	return false;	
	}
	
	if(document.getElementById('textfield').value=="")
	{
	alert("Enter course")
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
$re=mysql_query("select * from department");
if(isset($_POST["button"]))
{
	$dept=$_POST["select"];
	$corse=$_POST["textfield"];
	mysql_query("insert into course values(null,'$dept','$corse')");
	header("location:adminhome.php");
}

 ?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Department</td>
      <td><label for="select"></label>
        <select name="select" id="select" class="form-group">
         <option value="">Select</option>
        <?php  
		while($row=mysql_fetch_array($re))
		{
		?>
        <option value="<?php  echo $row[0]?>"><?php  echo $row[1]?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td>Course</td>
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