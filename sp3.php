<?php
include("connect.php");

$id = $_GET["name"];

$buffer = "<select name='select3' id='select3'><option value=''>Select</option>";

$res = mysql_query("select id,course from course where depid='$id'");
if(mysql_num_rows($res) > 0)
{
	while($row = mysql_fetch_array($res))
	{
		$buffer.= "<option value='".$row[0]."'>".$row[1]."</option>";
	}
}
echo $buffer;
?>