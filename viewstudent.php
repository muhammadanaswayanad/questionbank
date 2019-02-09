<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("connect.php");
include("staffheader.php");
$res = mysql_query("select * from studentreg ");
if(mysql_num_rows($res) > 0)
{
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="319" border="1">
    <tr>
      <td width="46">Id</td>
      <td width="87">Name</td>
      <td width="69">Email</td>
      <td width="185">&nbsp;</td>
      <?php
	while($row=mysql_fetch_array($res)) 
	{
	?>
    <tr>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[9]; ?></td>
      <td><p><a href="updatestudent.php?id=<?php echo $row[12]?>">Update</a></p>
      <p><a href="studelete,php.php?id=<?php echo $row[12]?>">Delete</a></p></td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
<?php
	}
	?>
    <?php
include("stafffooter.php");
?>
</body>
</html>