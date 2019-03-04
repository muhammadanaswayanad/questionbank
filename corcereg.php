<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Register Course</title>
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

    <div class="form-group">
      <label for="sel1">Select department:</label>
      <select class="form-control" id="select">

        <?php  
		while($row=mysql_fetch_array($re))
		{
		?>
        <option value="<?php  echo $row[0]?>">
          <?php  echo $row[1]?>
        </option>
        <?php 
    }
    ?>
      </select>


      <div class="form-group">
        <label for="textfield">Course:</label>
        <input type="text" class="form-control" id="textfield" placeholder="Course " name="textfield">
      </div>

      </tr>
      <tr>
        <td colspan="2">
          <div align="center">
            <input type="submit" class="btn btn-success" name="button" id="button" value="Submit" onclick="return val()" />
          </div>
        </td>
      </tr>
      </table>
  </form>
  <?php
include("adminfooter.php")
?>
</body>

</html>