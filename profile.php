<?php
session_start();

include_once('User.php');
 
$user = new User();
  
if(!$_SESSION['login']){
    header("location:index.php");
    die;
}
?>
<!doctype html>
<html lang="en">
<head>
  	<title>PROFILE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/profile.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
 <!------navbar------->

<!------content------->
<section class="ftco-section">
	
</section>
<!-- footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>