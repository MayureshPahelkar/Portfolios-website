<?php session_start();
define('CSSPATH', './CSS/'); //define css path
$cssItem = 'style.css'; //css item to display
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

  <title>SmartFolio</title>
</head>

<body>
  <header class="border-bottom">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="homepg.php">
        <img src="./Images/logo.jpg" style="width: 5rem; height: 5rem" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto me-2 mb-lg-0 ms-md-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="homepg.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="adminlogin.php">Admin</a>
            </li>
            <?php if (isset($_SESSION['id'])) : ?>
            <li class="nav-item active">
              <a class="nav-link active" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">Logout</a>
            </li>
            <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="./login.php">Log IN</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</body>

</html>