<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
            var xmlHttp;
            function showname(to){
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
                //    alert(xmlHttp.responseText);
                    document.getElementById("select2").innerHTML=xmlHttp.responseText   
                }
            }
			
			function showsub(to){
				
				var dept = document.getElementById("select").value;
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
                url +="?name=" +to+"&&dept="+dept+"&&crs="+crs;
                xmlHttp.onreadystatechange = stateChange2;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange2(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                //    alert(xmlHttp.responseText);
                    document.getElementById("select4").innerHTML=xmlHttp.responseText   
                }
            }
</script>
<script>

function val()
{
	if(document.getElementById('select').value=="")
	{
	alert("Select department")
	document.getElementById('select').focus();
	return false;	
	}
	
	if(document.getElementById('select2').value=="")
	{
	alert("Select course")
	document.getElementById('select2').focus();
	return false;	
	}
	if(document.getElementById('select3').value=="")
	{
	alert("Select Semester")
	document.getElementById('select3').focus();
	return false;	
	}
	if(document.getElementById('select4').value=="")
	{
	alert("Select Subject")
	document.getElementById('select4').focus();
	return false;	
	}
	if(document.getElementById('fileField').value=="")
	{
	alert("Choose A File")
	document.getElementById('fileField').focus();
	return false;	
	
	}
	
	return true;
}
</script>

<body>
<?php
include("connect.php");
include("staffheader.php");


if(isset($_POST["button"]))
{    $dept=$_POST["select"];
     $crs=$_POST["select2"]; 
	 $sem=$_POST["select3"]; 
	 $sub=$_POST["select4"]; 
	  
	  $ques=$_FILES["fileField"]["name"];
	  move_uploaded_file($_FILES['fileField']['tmp_name'],"files/".$ques); 
	 
	 mysql_query("insert into prevque values(null,'$dept','$crs',' $sem','$sub','$ques')");
	 header("location:staffhome.php");
}



?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="366" border="1">
    <tr>
      <td>Department</td>
      <td><label for="select"></label>
        <select name="select" id="select" onchange="showname(this.value)">
      <option value="">Select</option>
        <?php 
		$r=mysql_query("select id, department from department");
		if(mysql_num_rows($r)>0)
		{
			while($r1=mysql_fetch_array($r))
			{
		
		?>
         <option value="<?php  echo $r1[0] ?>"><?php  echo $r1[1] ?>
        </option>
        
        <?php }}?>
      </select></td>
    </tr>
    <tr>
      <td width="170">Course</td>
      <td width="180"><label for="select2"></label>
        <select name="select2" id="select2">
         <option value="">Select</option>
      </select></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td><label for="select3"></label>
        <select name="select3" id="select3" onchange="showsub(this.value)">
        <option value="">Select</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>

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
      <td> Question File</td>
      <td><label for="select4"></label>
        <label for="fileField"></label>
      <input type="file" name="fileField" id="fileField" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Submit" onclick="return val()" />
      </div></td>
    </tr>
  </table>
  <label for="select3"></label>
</form>
<?php
include("stafffooter.php");
?>
</body>
</html>