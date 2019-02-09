<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("connect.php");
include("userheader.php");

$res = mysql_query("select * from notification");
if(mysql_num_rows($res) > 0)
{





?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="343" height="168" border="1">
    <tr>
      <td width="333" height="32">Notification</td>
    </tr>
      <?php
	while($row=mysql_fetch_array($res)) 
	{
	?>
    <tr>
      <td height="50"><?php echo $row[1]; ?></td>
     
    
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
include("userfooter.php");
?>
</body>
</html>