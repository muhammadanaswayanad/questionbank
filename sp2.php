<?php
include("connect.php");

$id = $_GET["name"];
$dept = $_GET["dept"];
$crs = $_GET["crs"];

$buffer = "<select name='select4' id='select4'><option value=''>Select</option>";

$res = mysql_query("select * from subject where depid='$dept' and courseid='$crs' and semester='$id'");
if(mysql_num_rows($res) > 0)
{
	while($row = mysql_fetch_array($res))
	{
		$buffer.= "<option value='".$row[0]."'>".$row[4]."</option>";
	}
}
echo $buffer;
?>