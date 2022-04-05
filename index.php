<?php  
    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  
    if($_POST['login']){  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $user = $funObj->Login($emailid, $password);  
        if ($user) {  
            // Registration Success  
           header("location:profile.php");  
        } else {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
    }  
    if($_POST['register']){  
        $username = $_POST['username'];  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirm_password'];  
        if($password == $confirmPassword){  
            $email = $funObj->isUserExist($emailid);  
            if(!$email){  
                $register = $funObj->UserRegister($username, $emailid, $password);  
                if($register){  
                     echo "<script>alert('Registration Successful')</script>";  
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }  
?>   
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
		<form action="#" class="form" id="form1" name="login" method="post">
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="User" class="input" id="usernamesignup" name="username" />
			<input type="email" placeholder="Email" class="input" id="emailsignup" name="emailid" />
			<input type="password" placeholder="Password" class="input" id="passwordsignup" name="password" />
            <input type="password" placeholder="confirm your Password" class="input" id="passwordsignup_confirm" name="confirm_password" />
			<button class="btn" type="submit" name="register">Sign Up</button>
		</form>
	</div>

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="#" class="form" id="form2" name="login" method="post">
			<h2 class="form__title">Sign In</h2>
			<input type="email" placeholder="Email" class="input" id="emailsignup" name="emailid" />
			<input type="password" placeholder="Password" class="input" id="password" name="password" />
			<a href="#" class="link">Forgot your password?</a>
			<a  href="#" class="btn" type="submit" name="login">Sign In</a>
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