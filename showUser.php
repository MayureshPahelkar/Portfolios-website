<?php include('./header.php'); ?>
<h1 class="text-center mt-2 fw-bold">Your Profile</h1>
<div>
    <div class="bg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 mt-2 pt-5">
                    <div class="row z-depth-3">
                        <?php include('./db.php');
                        $id = $_SESSION['id'];
                        $query = "SELECT * FROM uprofile where id=$id";
                        $row = mysqli_query($conn,$query);
                        $datas = mysqli_fetch_assoc($row);
                        $q = "SELECT * FROM userinfo where id=$id";
                        $r = mysqli_query($conn,$q);
                        $datab = mysqli_fetch_assoc($r);
                        ?>
                        <div class=" text-light col-sm-6 text-dark">
                            <p class="font-weight-bold">Username : <?php echo $datas['name1']; ?></p>
                            <h6 class="text-muted"></h6>
                        </div>
                        <div class="col-sm-6">
                            <input type="hidden" name="urname" autocomplete="off" class="form-control"
                             value="<?php echo $session?>" readonly="">
                        </div>
                        <div class="col-sm-4 bg-light border border-dark border-width:5 rounded-left">
                            <div class="card-block text-center ">
                                <h2 class="font-weight-bold mt-4 "></h2>
                                <img class="border border-dark img-responsive container" src="<?php echo $datas['img1']; ?>"
                                style='width: 17rem; height: 17rem;'>
                                <p class="mt-3">Profile Picture </p>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-white rounded-right border shadow">
                            <h3 class="mt-3 text-center fw-bold ">Information</h3>
                            <hr class="badge-primary mt-0 w-100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Name : <?php echo $datab['name']; ?></p>
                                    <h6 class="text-muted"></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Email : <?php echo $datab['email']; ?></p>
                                    <h6 class="text-muted"></h6>
                                </div>
                            </div>
                            <h5 class="mt-3">Category</h5>
                            <hr class="bg-primary">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold fs-4"><?php echo $datas['category'];?></p>
                                    <h6 class="text-muted">
                                </div>
                                <h4 class="mt-3">Links related to Work</h4>
                                <hr class=" bg-primary">
                                <div class="row">
                                    <div class="col-xl mb-3 ">
                                        <!-- Instagram -->
                                        <a href="<?php echo $datas['link1']; ?>" class="btn btn-danger">Instagram</a>
                                        <!-- Facebook -->
                                        <a href="<?php echo $datas['link2']; ?>" class="btn btn-primary">Facebook</a>
                                        <!-- Twitter -->
                                        <a href="<?php echo $datas['link3']; ?>" class="btn btn-info text-light">Twitter</a>
                                        <!-- LinkedIn -->
                                        <a href="<?php echo $datas['link4']; ?>" class="btn btn-primary">LinkedIn</a>
                                        <!-- Github -->
                                        <a href="<?php echo $datas['link5']; ?>" class="btn btn-dark">Github</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services -->
                <a href="services.php" class="btn btn-primary float-right mr-3">services</a>
        <br><br>
        <?php include('./footer.php'); ?>