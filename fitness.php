<?php include('./header.php'); ?>
<div class="container-fluid">
 <div class="col-md-12">
 <div class="row">
 <?php include('./db.php');
//  $id = $_SESSION['id'];                        
 $Record = mysqli_query($conn, 'Select * from uprofile where category="Fitness"');
 while ($row = mysqli_fetch_array($Record)) {
 echo "
 <div class='col-lg-4 mb-5 m-auto'>
 <div class='card container mt-5 border shadow-lg ' style='width: 25rem;'>
 <img class='container mt-1 card-img-top' style='height: 20rem width: 20rem;' src='$row[img1]'>
 <div class='d-flex'>
 <p class='fs-4'>$row[name1]</p></div>
 <p class='fw-bold'>$row[category]</p>
 <h6>About</h6>
 <p>$row[about]</p>
 <h6>Links</h6>
 <div class='d-flex'>
 <a class='btn btn-danger mb-2 mr-2'href='$row[link1]' style='border-radius:20px;'>IG</a>
 <a class='btn btn-primary mb-2 mr-2'href='$row[link2]' style='border-radius:20px; background-color:rgb(66 103 178);'>FB</a>
 <a class='btn btn-info text-light mb-2 mr-2'href='$row[link3]' style='border-radius:20px;'>TW</a>
 <a class='btn text-light mb-2 mr-2'href='$row[link4]' style='border-radius:20px; background-color:rgb(0, 114, 177);'>LI</a> 
 <a class='btn btn-dark mb-2 mr-2'href='$row[link5]' style='border-radius:20px;'>GH</a> 
 </div>
 </div>
 </div>
 ";
 }
 ?>
 </div>
 </div>
</div>
<?php include('./footer.php'); ?>
