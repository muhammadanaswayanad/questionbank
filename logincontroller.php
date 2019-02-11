<?php

$db=mysql_connect("localhost","root","");
if($db)
{
 mysql_select_db("questionbank",$db);
 
 }
 else {
  
  echo("Error! Unable to establish connection.");
  
  }
?>
<?php
 $un=$_POST["username"];
 $pass=$_POST["password"];
 $re=mysql_query("select * from login where username='$un' and password='$pass'");
 if(mysql_num_rows($re)>0)
 {
  $row=mysql_fetch_array($re);
  $id=$row[0];
  session_start();
  $_SESSION["lid"]=$id;
  
  $type=$row[3];
  if($type=="admin")
  {
   header("location:adminhome.php");
  }
  else if($type=="staff")
  {
   header("location:staffhome.php");
  }
  else if($type=="user")
  {
   header("location:studenthome.php");
  }
  
 }
 else
  {
    echo "invalid credentials";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
    <script type="text/javascript">
      alert("invalid username or password")
      window.location = 'http://localhost/questionbank/login.php';
    </script>
    </body>
    </html>
<?php
//header("location:login.php");
   } 

?>