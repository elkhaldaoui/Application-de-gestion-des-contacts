<?php
session_start();
require_once 'classes/Contact.php';

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
  <title>CONTACTS</title>
</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
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
          <a class="nav-link active" aria-current="page" href="profile.php">PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacts.php">CONTACTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log-Out</a>
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
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Contacts</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addContactModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Contact</span></a>
					</div>
				</div>
			</div>
<?php
    $id_user = $_SESSION['user_id'];
	$contact = new Contact();
	$result = $contact->getAllContacts($id_user);
	// print_r($result);

?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
						</th>
						<th>User Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
<?php
	foreach ($result as $name )
	{
?>
				<tbody>
					<tr>
						<td>
						</td>
						<td><?php echo $name['username']?></td>
						<td><?php echo $name['email']?></td>
						<td><?php echo $name['phone']?></td>
						<td><?php echo $name['adresse']?></td>
						<td>
							<a href="includes/edit.php?id=<?php  echo $name['id'] ?>" class="edit"><i class="material-icons">&#xE254;</i></a>
							<a href="includes/delete.php?id=<?php  echo $name['id'] ?>" class="delete"><i class="material-icons">&#xE872;</i></a>
						</td>
					</tr>
				</tbody>
<?php
	}
?>
			</table>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addContactModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method='POST'>
				<div class="modal-header">						
					<h4 class="modal-title">Add Contact</h4>
					<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="adresse" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="add" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<?php
	if(isset($_POST['add'])){  
		$username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
		$adresse = $_POST['adresse'];
		$id_user = $_SESSION['user_id'];
		$contact = new Contact();
		$contact->username = $username;
		$contact->email = $email;
		$contact->phone = $phone;
		$contact->adresse = $adresse;
		$contact->id_user = $id_user;
		$contact->addContact();
		echo "
            <script>
            window.location.href = 'contacts.php';
            </script>";
    }

?>
<!-- Footer -->
<!-- Footer -->
<script src="js/contacts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
