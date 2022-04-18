<?php
	//start session
	session_start();
 
	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:profile.php');
	}
	?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/index.css">
		<title>Gestion Contacts</title>
	</head>
	<body>
<!------------->
<div class="container right-panel-active">

	<!-- Sign Up -->
	<!-- <div class="container__form container--signup">
		<form action="regester.php" class="form" id="form1" name="register" method="post">
			<h2 class="form__title">Sign Up</h2>
			<input form="form1" type="text" placeholder="User Name" class="input" id="username" name="username" />
			<input form="form1" type="email" placeholder="Email" class="input" id="email" name="email" />
			<input  form="form1"type="password" placeholder="Password" class="input" id="password" name="password" />
			<input  form="form1"type="date" placeholder="Date" class="input" id="date" name="date" />
			<button form="form1" class="btn" type="submit" name="register">Sign Up</button>
			</form>
		</div> -->

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="login.php" class="form" id="form2" name="login" method="post">
			<h2 class="form__title">Sign In</h2>
			<input form="form2" type="text" placeholder="User Name" class="input" id="username" name="username" />
			<input form="form2" type="email" placeholder="Email" class="input" id="email" name="email" />
			<input form="form2" type="password" placeholder="Password" class="input" id="password" name="password" />
			<a href="#" class="link">Forgot your password?</a>
			<button form="form2" class="btn" type="submit" name="login">Sign In</button>
			</form>
	</div>

	<!-- Overlay -->
	<!-- <div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<button class="btn" id="signIn">Sign In</button>
			</div>
			<div class="overlay__panel overlay--right">
				<button class="btn" id="signUp">Sign Up</button>
			</div>
		</div>
	</div> -->
</div>

<?php
if(isset($_SESSION['message'])){
?>

<div class="alert alert-info text-center">

<?php
 echo $_SESSION['message']; 
 ?>
</div>

<?php
 
 unset($_SESSION['message']);
}
?> 
<script src="js/index.js"></script>
</body>
</html>