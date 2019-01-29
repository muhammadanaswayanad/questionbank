<?php 
session_start();
if ($_SESSION["lid"]) {
	print("Session variable set lid is");
	echo SESSION["lid"];
}
?>