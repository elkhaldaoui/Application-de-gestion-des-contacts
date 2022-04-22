<?php
    include_once ('classes/User.php');
	$logout=new User();
	$logout->logout();
	header('location:index.php');
?>