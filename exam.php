<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript" language="javascript">
        var Timer;
        var TotSec;
        function CreateTimer(TimerId,Time){
            Timer=document.getElementById(TimerId);
            TotSec=Time;
            window.setTimeout("Tick()", 1000);
        }
        function Tick(){
            TotSec-=1;
            if(TotSec == -1){
                Timer.innerHTML="Time out.....";
				document.getElementById("form1").submit();
                document.getElementById("time").innerHTML="";
				document.getElementById("hid").value="0";
            }
            else{
                UpdateTimer()
                window.setTimeout("Tick()",1000);
                }
            }
            function UpdateTimer(){
				document.getElementById("hid").value=TotSec;
                Timer.innerHTML="Remaining Time:"+TotSec;
            }
</script>
<?php
include("connect.php");

session_start();

$dept = $_SESSION["dept"];
$crs = $_SESSION["crs"];
$sem = $_SESSION["sem"];
$sub = $_SESSION["sub"];

$i = 0;
$cnt;
$n=mysql_query("select * from knock where departmentid = '$dept' and courseid = '$crs' and sem = '$sem' and subjectid = '$sub'");
$qst = array();
$op1 = array();
$op2 = array();
$op3 = array();
$op4 = array();
$ans = array();
if(mysql_num_rows($n)>0)
{
	while($row=mysql_fetch_array($n))
	{
		$qst[$i] = $row[5];
		$op1[$i] = $row[6];
		$op2[$i] = $row[7];
		$op3[$i] = $row[8];
		$op4[$i] = $row[9];
		$ans[$i] = $row[10];
		$i++;
	}
}
?>
<body>

<div id="time">
<p>&nbsp;</p>
<div id='Timer' align="center"></div>
<?php ?>
<form id="form1" name="form1" method="post" action="">

<input type="hidden" name="hid" id="hid" />
<?php
	$cnt = $_SESSION["cnt"];
	if(isset($_POST["hid"]))
	{
		$val = $_POST["hid"];
		if($val == 20 || $val == 0)
		{
			$cnt = $cnt+1;
			$_SESSION["cnt"] = $cnt;
		}
	}
	if($cnt < count($qst))
	{
?>
  <p align="center"><font color="#990066" size="+2"><i>EXAM</i></font></p>
  <table width="720" height="269" border="2" align="center" bgcolor="#66CCFF">
    <tr>
      <td colspan="4"><font color="#990066" size="+2"><i><?php echo $cnt+1 ." : " . $qst[$cnt];?></i></font></td>
    </tr>
    <tr>
      <td width="194"><label for="textfield">
        <input type="radio" name="radio" id="radio" value="<?php echo $op1[$cnt]; ?>" /><font color="#990066" size="+2"><i><?php echo $op1[$cnt]; ?></i></font>
      </label></td>
      <td width="203" colspan="2"><label for="textfield2">
        <input type="radio" name="radio" id="radio3" value="<?php echo $op2[$cnt]; ?>" /><font color="#990066" size="+2"><i><?php echo $op2[$cnt]; ?></i></font>
      </label></td>
    </tr>
    <tr>
      <td><label for="textfield4">
        <input type="radio" name="radio" id="radio2" value="<?php echo $op3[$cnt]; ?>" /><font color="#990066" size="+2"><i><?php echo $op3[$cnt]; ?></i></font>
      </label></td>
      <td colspan="2"><label for="textfield3">
        <input type="radio" name="radio" id="radio4" value="<?php echo $op4[$cnt]; ?>" /><font color="#990066" size="+2"><i><?php echo $op4[$cnt]; ?></i></font>
      </label></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" />
      </div></td>
    </tr>
  </table>
 <?php
	}
	else 
	{
		$mark = $_SESSION["mark"];
		$_SESSION["cnt"] = 0;
		$_SESSION["mark"] = 0;
?>
<script type="text/javascript">
	alert("Exam Over ! Your Score is <?php echo $mark; ?> !");
	window.location = "userhome.php";
</script>
<?php	
	}
?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script>
	CreateTimer("Timer",20);
</script>
</div>

</body>
</html>
<?php
if(isset($_POST["button"]))
{
	$mark = $_SESSION["mark"];
	if($cnt < count($qst))
	{
		$mans = $_POST["radio"];
		$cans = $ans[$cnt];
		if($mans == $cans)
		{
			$mark = $mark + 1;
			$_SESSION["mark"] = $mark;
		}
		$cnt = $cnt+1;
		$_SESSION["cnt"] = $cnt;
		header("location:exam.php");
	}
}
?>