<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/webfonts/fa-brands-400.ttf">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>PROFILE</title>
</head>
<style>
.gradient-custom {
  /* fallback for old browsers */
  background: #f6d365;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
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
          <a class="nav-link active" aria-current="page" href="#">PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacts.php">CONTACTS</a>
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
<section class="vh-100 m-4">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img
                src="https://img1.freepng.fr/20180402/oaq/kisspng-computer-icons-avatar-login-user-avatar-5ac207e6760664.4895544815226654464834.jpg"
                alt="Avatar"
                class="img-fluid my-5"
                style="width: 80px ; border-radius: 50%;"
              />
              <h5>Marie Horwitz</h5>
              <p>ADMIN</p>
              <a href="#" type="button" class="far fa-edit mb-5" data-bs-toggle="modal" data-bs-target="#myModal"></a>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">info@example.com</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Username</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Date</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Adress</h6>
                    <p class="text-muted">maroc</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

<!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edite Admin</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
<!-- Modal body -->
      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Email address</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
       <label for="exampleInputPassword1" class="form-label">Password</label>
       <input type="password" class="form-control" id="exampleInputPassword1">
      <div class="col-auto">
       <span id="passwordHelpInline" class="form-text">
       Must be 8-20 characters long.
       </span>
      </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Edite</button>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>