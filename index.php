<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Gestion Contacts</title>
</head>
<body>
<!------------->
<div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form action="#" class="form" id="form1">
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="User" class="input" />
			<input type="email" placeholder="Email" class="input" />
			<input type="password" placeholder="Password" class="input" />
			<button class="btn">Sign Up</button>
		</form>
	</div>

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="#" class="form" id="form2">
			<h2 class="form__title">Sign In</h2>
			<input type="email" placeholder="Email" class="input" />
			<input type="password" placeholder="Password" class="input" />
			<a href="#" class="link">Forgot your password?</a>
			<a  href="profile.php" class="btn">Sign In</a>
		</form>
	</div>

	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<button class="btn" id="signIn">Sign In</button>
			</div>
			<div class="overlay__panel overlay--right">
				<button class="btn" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>