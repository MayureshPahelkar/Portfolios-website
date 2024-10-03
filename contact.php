<?php include('./header.php'); ?>
<?php error_reporting(0); ?>
<?php include('./db.php');
if (isset($_POST['csend'])) {
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $cmessage = $_POST['cmessage'];
    // echo "Success";
    $sql = "insert into contact(cname,cemail,cmessage) VALUES ('$cname','$cemail','$cmessage');";
    $result = mysqli_query($conn, $sql) or die('Error');
    header('Location:contact.php');
}
?>
<?php if ($_SESSION['cname']) : ?>
<?php header('Location:contact.php') ?>
<?php else : ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartFolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

    <style>
        body{
            background-image:url('https://images.unsplash.com/photo-1526554850534-7c78330d5f90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80');
            background-repeat:no-repeat;
        }
        .btn:hover{
            background:rgb(0,0,0);
        }
    </style>
</head>

<body>
    <section class="d-flex align-items-center justify-content-center">
        <div  class="container-responsive ">
            <div style="border-radius:25px" class=" shadow shadow-lg  p-5  my-5" style="width: 505px;">
                
                <h1 class="text-center mb-5">Contact Us</h1>

                <form action="contact.php" method="POST" class="needs-validation">
                    <div class="form-group ">
                        <input class="form-control " style="border-radius:25px;" type="text" name="cname"
                            placeholder="Full Name" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group ">
                        <input class="form-control " type="email" name="cemail" style="border-radius:25px;"
                            placeholder="E-mail" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea style="border-radius:20px" class="form-control  mb-3" type="text" name="cmessage" placeholder="Message"
                            required></textarea></textarea>
                        <div class="valid-feedback">
                        </div>

                        <div class="d-flex justify-content-center">
                            <input class="btn btn-block btn-primary w-50 " style="border-radius:25px;" type="submit" name="csend"
                                value="Send">
                        </div>

                </form>
            </div>
        </div>
    </section>
</body>


<?php include('./footer.php'); ?>
<?php endif; ?>