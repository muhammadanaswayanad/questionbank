<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
            var xmlHttp;
            function showcrs(to){
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="sp.php";
                url +="?name=" +to
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("select2").innerHTML=xmlHttp.responseText   
                }
            }
			
			function showsub(to){
				
				var dep = document.getElementById("select").value;
				var crs = document.getElementById("select2").value;
				
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="sp2.php";
                url +="?name=" +to+"&&dept="+dep+"&&crs="+crs
                xmlHttp.onreadystatechange = stateChange2;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange2(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("select4").innerHTML=xmlHttp.responseText   
                }
            }
			
</script>
</head>
<?php
include("connect.php");
session_start();
$rs = mysql_query("select * from department");
?>
<body>
<?php
include("userheader.php");
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Department</td>
      <td><label for="select"></label>
        <select name="select" id="select" onchange="showcrs(this.value)">
        <option value="">Select</option>
        <?php
		if(mysql_num_rows($rs) > 0)
		{
			while($row = mysql_fetch_array($rs))
			{
		?>
        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
        <?php
			}
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><label for="select2"></label>
        <select name="select2" id="select2">
        <option value="">Select</option>
      </select></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td><label for="select3"></label>
        <select name="select3" id="select3" onchange="showsub(this.value)">
        <option value="">Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select></td>
    </tr>
    <tr>
      <td>Subject</td>
      <td><label for="select4"></label>
        <select name="select4" id="select4">
        <option value="">Select</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" />
      </div></td>
    </tr>
  </table>
  
  <?php
  if(isset($_POST["button"]))
  {
	  $dept = $_POST["select"];
	  $crs = $_POST["select2"];
	  $sem = $_POST["select3"];
	  $sub = $_POST["select4"];
	  $_SESSION["cnt"] = 0;
	  $_SESSION["mark"] = 0; 
	  
	  $_SESSION["dept"] = $dept;
	  $_SESSION["crs"] = $crs;
	  $_SESSION["sem"] = $sem;
	  $_SESSION["sub"] = $sub;
	  
	  header("location:exam.php");
  }
?>
</form>
<?php

include("userfooter.php");

?>
</body>