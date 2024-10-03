<?php include('./header.php'); ?>
<?php error_reporting(0); ?>
<?php include('./db.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username != '' && $password != '') {
        $encrypted_pwd = md5($password);
        $sql = "select *from userinfo where username = '$username' AND password = '$encrypted_pwd'";
        $result = mysqli_query($conn, $sql) or die('Error');
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $username = $row['username'];
                $email = $row['email'];
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
            }
        }
        else{
            echo('<script>alert("Enter Correct username and password.")</script>');

        }
    }
}
?>
<?php if ($_SESSION['name']) : ?>
<?php header('Location:services.php') ?>
<?php else : ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>SmartFolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style>
        body{
          background-image:url('https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&w=3000');
        }
        .btn:hover{
            text:black;
            transition: background, padding 0.1s ease-in;
            background:rgb(0,0,0);
            
        }
        .signup{
          text-decoration :none;
        }
    </style>
</head>

<body>
  <section class="d-flex align-items-center justify-content-center">
    <div class="container-responsive">
      <div class="shadow shadow-lg  p-5  my-5 "style="border-radius:25px">
        <h2 class="text-center mb-5">Log in to your account</h2>
        

        <form action="login.php" method="POST" class="needs-validation">
          <div class="form-group ">
            <input class="form-control text-center" style="border-radius:20px;" type="text" name="username"
              placeholder="Enter your username" autocomplete="off" required>
            <div class="valid-feedback">
            </div>
          </div>
          <div class="form-group ">
            <input class="form-control text-center" style="border-radius:20px;" type="password" name="password"
              placeholder="Enter your password" autocomplete="off" required>
            <div class="valid-feedback">
            </div>
          </div>
          
          <div class="d-flex justify-content-center">
            <input class="btn btn-primary w-100" style="border-radius:20px;"  type="submit" name="login" value="Sign In">
          </div>
          <div class="text-center text-muted mt-2 mb-0">
            <span>Don't have an account? <a class="signup" href="signup.php">Sign up</a></span>

        </div>
        </form>
      </div>
    </div>
  </section>
</body>

<?php include('./footer.php'); ?>
<?php endif; ?>