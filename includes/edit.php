<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:index.php");
  }
require_once '../classes/Contact.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.ttf">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/contacts.css">
  <title> EDITE CONTACTS</title>
</head>
<body  class="bg-image" 
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">
<!------navbar------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CONTACTS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../profile.php">PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Contacts.php">CONTACTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">Log-Out</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!------content------->
<?php
		$contact = new Contact();
		$id = $_GET['id'];
		$result = $contact->getContact($id);
		// print_r($result);

?>
<div class="w-100" style="margin-top:200px;">
    <form class="w-25 mx-auto" method="post" id="editeForm">
    <input type="hidden" name="id" value="<?php echo $result[0]['id']?>">
    <div class="form-outline mb-4">
        <label class="form-label" for="form1Example1">User Name</label>
        <input name="username" id="userName" type="text" value="<?php echo $result[0]['username']?>" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Email</label>
        <input name="email" id="email" type="email" value="<?php echo $result[0]['email']?>" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Address</label>
        <input name="adresse" id="adresse" type="text" value="<?php echo $result[0]['adresse']?>" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Phone</label>
        <input name="phone" id="phone" type="text" value="<?php echo $result[0]['phone']?>" class="form-control" />
    </div>

    <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
    </form>
</div>
<?php
	if(isset($_POST['update'])){  
		$username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
		$adresse = $_POST['adresse'];
		$id = $_POST['id'];
		$contact = new Contact();
		$contact->username = $username;
		$contact->email = $email;
		$contact->phone = $phone;
		$contact->adresse = $adresse;
		
		$contact->updateContact($id);
		echo "
            <script>
            window.location.href = '../contacts.php';
            </script>";
    }

?>
<script src="js/edite.js"></script>
</body>
</html>