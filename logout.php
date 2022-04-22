<?php
    include_once ('User.php');
	$logout=new User();
	$logout->logout();
	header('location:index.php');
?>