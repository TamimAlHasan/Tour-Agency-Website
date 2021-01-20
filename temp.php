<?php
if (isset($_REQUEST["log"]))
	header('location:login.php');
else if (isset($_REQUEST["signup"]))
	header('location:sign.php');
?>