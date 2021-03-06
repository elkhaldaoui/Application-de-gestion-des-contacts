<?php
    require_once 'classes/User.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Sign Up</title>
</head>
<body  class="bg-image" 
       style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
              height: 100vh">
<!------content------->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">GESTION CONTACTS</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<!-- <h3 class="mb-4 text-center">Have an account?</h3> -->
		      	<form action="#" class="signin-form" method="POST" >
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
                    <div class="form-group">
		      			<input type="text" name="email" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="register" class="form-control btn btn-primary submit px-3">Register Account</button>
	            </div>
	            </form>
				<?php
					if (isset($_GET["error"])) {

						if ($_GET["error"] == "emptyInputs") {
						echo '<div class="alert alert-danger text-center">Fill all the fields</div>';
						}
						else if ($_GET["error"] == "invalidEmail") {
						echo '<div class="alert alert-danger text-center">Invalid email format</div>';
						}
						else if ($_GET["error"] == "emailAlreadyExist") {
						echo '<div class="alert alert-danger text-center">This email is already exist</div>';
						}
					}
        		?>
		        </div>
				</div>
			</div>
		</div>
	</section>
<!-- end content -->
</body>
</html>

<?php
    if(isset($_POST['register'])){    
        // validation
        $user = new User();
        $user->username = $_POST['username'];
        $user->email = $_POST['email'];
        $user->password = md5($_POST['password']);
        $user->registration_date = date('Y-m-d H:i:s');
        $user->register();  
		header("Location: index.php");
    }
?>
