<?php
if (isset($_REQUEST["logout"]))
{
session_start();
session_destroy();
	header('location:login.php');
}
?>
