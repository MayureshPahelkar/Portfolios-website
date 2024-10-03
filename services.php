<?php include('./header.php');
if(!isset($_SESSION['username'])){
    header('Location:login.php');
  }
 ?>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="">SmartFolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <script src="./JS/script.js"></script>
    <style>
        .btn:hover{
            background:rgb(0,0,0);            
        }
    </style>


</head>
<div class="text-center mt-2">
    <h1 class="fw-bold text-dark">What you're looking for</h1>
    <a href="createP.php" type="submit" class="btn btn-primary mt-3 mb-1 fw-bold">Create  Profile</a>
    <a href="showUser.php" type="submit" class="btn btn-primary mt-3 mb-1 fw-bold">View  Profile</a>
    <a href="updateP.php" type="submit" class="btn btn-primary mt-3 mb-1 fw-bold">Update  Profile</a>
</div>
<section class="">
    <div class="container-fluid text-center">
        <h1 class="fw-bold my-5">Categories</h1>
        <div class="row mx-auto">
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <a href="Webd.php"><img src="Images/WebDev.png" style='width: 17rem; height:15rem;'
                        class="img-fluid"></a>
                <p class="fw-bold mt-3 lh-lg">Web Developement</p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <a href="drawU.php"><img src="Images/illustrator.jpg" style='width: 17rem; height:15rem;'
                        class="img-fluid "></a>
                <p class="fw-bold mt-3 lh-lg">Illustrator</p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <a href="Fitness.php"><img src="Images/gym.png" style='width: 16rem; height: 14rem;'
                        class="img-fluid  "></a>
                <p class="fw-bold mt-3 lh-lg">Fitness</p>
            </div>
            <br>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <a href="dance.php"><img src="Images/dance.jpg" style='width: 17rem; height: 15rem;'
                        class="img-fluid "></a>
                <p class="fw-bold mt-3 lh-lg">Dancer</p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <a href="music.php"><img src="Images/musician.jpg" style='width: 17rem; height: 15rem;'
                        class="img-fluid "></a>
                <p class="fw-bold mt-3 lh-lg">Musician</p>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <a href="tutor.php"><img src="Images/teacher.jpg" style='width: 17rem; height: 15rem;'
                        class="img-fluid "></a>
                <p class="fw-bold mt-3 lh-lg">Tutor</p>
            </div>
        </div>
    </div>
</section>
</div>
<?php include('./footer.php'); ?>