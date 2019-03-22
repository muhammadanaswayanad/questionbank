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

<?php
require("connect.php");
include("staffheader.php");
 session_start();
		$dept=  $_SESSION['dep'];
		$crs=   $_SESSION['crs'];
		$sem=  $_SESSION['sem'];
		$sub=  $_SESSION['sub'];
		$ne=	  $_SESSION['ne'];
			$tm=   $_SESSION['tm'];
			$m1=    $_SESSION['m1'];
			$m2=	 $_SESSION['m2'];
			$m3=	  $_SESSION['m3'];
				$m4=   $_SESSION['m4'];

?>
<form id="form1" name="form1" method="post" action="">
  <table width="400" border="1">
  <tr>
      <td><?php echo $ne."        "."Total(".$tm.")" ?></td>
    </tr>
  
  <?php

$res = mysql_query("select * from examques where departmentid='$dept' and Courseid='$crs' and Semester='$sem' and Subjectid='$sub' and mark='1' order by rand() limit $m1");
if(mysql_num_rows($res) > 0)
{ 



  while($row=mysql_fetch_array($res)) 
	{
		?>
    <tr>
      <td><?php echo $row[6]."      (" .$row[5].")"; ?> </td>
      
    </tr>
    <?php
	}
	
}

		?>

    
    
     <?php

$res = mysql_query("select * from examques where departmentid='$dept' and Courseid='$crs' and Semester='$sem' and Subjectid='$sub' and mark='2' order by rand() limit $m2");
if(mysql_num_rows($res) > 0)
{ 



  while($row=mysql_fetch_array($res)) 
	{
		?>
    <tr>
      <td><?php echo $row[6]."        (" .$row[5].")"; ?> </td>
      
    </tr>
    <?php
	}
	
}

		?>

    
     <?php

$res = mysql_query("select * from examques where departmentid='$dept' and Courseid='$crs' and Semester='$sem' and Subjectid='$sub' and mark='4' order by rand() limit $m3");
if(mysql_num_rows($res) > 0)
{ 



  while($row=mysql_fetch_array($res)) 
	{
		?>
    <tr>
      <td><?php echo $row[6]."     (" .$row[5].")"; ?> </td>
      
    </tr>
    <?php
	}
	
}

		?>

   
    
       <?php

$res = mysql_query("select * from examques where departmentid='$dept' and Courseid='$crs' and Semester='$sem' and Subjectid='$sub' and mark='8' order by rand() limit $m4");
if(mysql_num_rows($res) > 0)
{ 



  while($row=mysql_fetch_array($res)) 
	{
		?>
    <tr>
      <td><?php echo $row[6]."     (" .$row[5].")"; ?> </td>
      
    </tr>
    <?php
	}
	
}

		?>
   
	
  </table>
</form>
<?php
include("stafffooter.php");
?>
</body>
</html>