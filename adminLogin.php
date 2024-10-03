<?php include('./header.php'); ?>
<?php include('./db.php');
if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $q = " select * from admin where username='$uname' AND password='$pass'";
    $result = mysqli_query($conn, $q);  
    // $row = mysqli_fetch_array($result);
    // $num = mysqli_num_rows($result);
    $num = mysqli_num_rows($result); 
    if ($num == 1) {
        $_SESSION['username'] = $uname;  
        header('location: userinfo.php');
    } 
    else {
        echo('<script>alert("Login failed.")</script>');
        header('location: adminlogin.php');
    }       
} 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="">SmartFolio</title>
    
    <style>
        
        .btn:hover{
            background:rgb(0,0,0);            
        }
    </style>
</head>

<body class="bg-dark">
    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center text-light">SmartFolio</h1>
        </div>
        <div class="w-50 m-auto">
            <form action="" method="POST">
                <div class="form-group text-light">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" name="username" 
                    autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group text-light">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="password" 
                    autocomplete="off" class="form-control" required>
                </div >
                <button type="submit" name="login"  class="btn btn-light ">Login</button>
            </form>
        </div>
    </section>
    <br>
</body>
<?php include('./footer.php'); ?>