<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}
 
include_once('User.php');
 
$user = new User();
 
//fetch user data
$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);
 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="css/profile.css">
    <title>Gestion Contacts</title>
</head>
<body class="d-flex flex-column">
<!------navbar------->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
        <a class="navbar-brand" href="profile.php"><img src="img/logo.jpg" alt="LOGO" width="50" height="50" class="d-inline-block align-text-top rounded"></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarCollapse2">
                <div class="navbar-nav">
                    <a href="profile.php" class="nav-item nav-link active">PROFILE</a>
                    <a href="contacts.php" class="nav-item nav-link">CONTACTS</a>
                    <a href="index.php" class="nav-item nav-link ">LOG-OUT</a>
                </div>
                <form id="search"  class="d-flex ms-auto">
                    <input type="text" class="form-control me-sm-2" placeholder="Search">
                    <button type="submit" class="btn btn-outline-light">Search</button>
                </form>
            </div>
        </div>        
</nav>
<!-- content -->
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">ADMIN</span><span class="text-black-50">NAME</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="<?php echo $row['fname']; ?>" value=""></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="last name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email" value=""></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter password" value=""></div>
                </div>
                <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Phone</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-6"><label class="labels">Date</label><input type="date" class="form-control" value="" placeholder="date"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- footer -->
<footer  id="sticky-footer" class="flex-shrink-0 py-4 bg-primary text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; ELKHALDAOUI OUSSAMA</small>
    </div>
    <div class="container text-center social-media">
            <a href="https://www.linkedin.com/in/oussama-elkhaldaoui-0b8535138/"><i class="fab fa-linkedin-in text-muted"></i></a>
            <a href="https://github.com/elkhaldaoui/"><i class="fab fa-github text-muted"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100008515982539"><i class="fab fa-facebook-f text-muted"></i></a>
            <a href="https://www.instagram.com/oussama_elkhaldaoui/"><i class="fab fa-instagram text-muted"></i></a>
    </div>
</footer>
</body>
</html>