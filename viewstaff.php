<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("adminheader.php");
include("connect.php");
$res = mysql_query("select * from staff ");
if(mysql_num_rows($res) > 0)
{
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="349" border="1">
    <tr>
      <td width="100">Name</td>
      <td width="34">Email</td>
      <td width="114">Mob</td>
      <td width="73">&nbsp;</td>
    </tr>
      <?php
	while($row=mysql_fetch_array($res)) 
	{
	?>
    <tr>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[4]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><p><a href="updatestaff.php?id=<?php echo $row[9]?>">Update</a></p>
      <p><a href="staffdelete.php?id=<?php echo $row[9]?>">Delete</a></p></td>
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
include("adminfooter.php")
?>
</body>
</html>