<?php include('./header.php'); ?>
<?php include('./db.php') ?>
<?php error_reporting(0); ?>
<?php

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = " select * from userinfo where username='$username'";
    $result = mysqli_query($conn, $q);
    $num = mysqli_num_rows($result);
    
    if ($num>0 ) {
        // header('location:signUp.php?error:UsernameExists');
        echo('<script>alert("Username already exists.")</script>');
    }
    else {
        if ($name != '' && $username != '' && $email != '' && $password != '') {
            // echo "Success";
            $pwd_hash = md5($password);
            $sql = "INSERT INTO userinfo (name,username,email,password) VALUES ('$name', 
'$username', '$email', '$pwd_hash')";
            mysqli_query($conn,$sql);
            
            header('Location:login.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartFolio</title>
    <link rel="stylesheet" href='./CSS/style.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

    <style>
         body{
          background-image:url('https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&w=3000');
        }
        .btn:hover {
            background: rgb(0, 0, 0);
        }

        .login {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="section d-flex align-items-center justify-content-center">
        <div class="container-responsive">
            <div class="shadow shadow-lg p-5  my-5" style="border-radius: 25px;">
                <h2 class="text-center mb-5">Create your account</h2>


                <form action="signUp.php" method="POST" class="needs-validation">
                    <div class="form-group ">
                        <input class="form-control text-center" style="border-radius:20px;" type="text" name="name"
                            placeholder="Full Name" autocomplete="off" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group ">
                        <input class="form-control text-center" style="border-radius:20px;" type="text" name="username"
                            placeholder="Username" autocomplete="off" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group ">
                        <input class="form-control text-center" type="email" name="email" id="email"
                            placeholder="E-mail" autocomplete="off" style="border-radius: 20px;" required>
                        <!-- <small id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</small> -->
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group ">
                        <input class="form-control text-center" style="border-radius:20px;" type="password"
                            name="password" placeholder="Password" autocomplete="off" required>
                        <div class="valid-feedback">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <input class="btn btn-primary w-100" style="border-radius:20px;" type="submit" name="register"
                            value="Sign Up">
                    </div>
                    <div class="text-center text-muted mt-2 mb-0">
                        <span>Already have an account? <a class="login" href="login.php">Login</a></span>

                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<?php include"./footer.php" ?>