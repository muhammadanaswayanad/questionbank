<?php 
 session_start();
if (isset($_SESSION["lid"])) {

}
else{
	header("location:login.php");
}
?>