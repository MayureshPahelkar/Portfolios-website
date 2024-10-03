<?php include './aheader.php';?>
<br>
<div class="container">
    <div class="row ">
        <div>
        <table class="table table-responsive-100 border border-dark ">
                <thead class="table-dark  text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>   
                    <th>Email</th>
                </thead>
                <tbody>
                    <?php
 include './db.php';
 $Record = mysqli_query($conn, "select * from userinfo");
 $serial_count = 0;
 while ($row = mysqli_fetch_array($Record, MYSQLI_ASSOC)) {
 $serial_count += 1;
 ?>
                    <tr>
                        <td class='text-center'><?php echo $serial_count ?></td>
                        <td class='text-center'><?php echo $row['name']; ?></td>
                        <td class='text-center'><?php echo $row['username']; ?></td>
                        <td class='text-center'><?php echo $row['email']; ?></td>
                    </tr>
                    <?php
 }
 ?>
                </tbody>
            </table>
        </div>
        <form action="" method="POST">
                <input type="text" name="name" class="p-1 m-1" placeholder="Enter name" required>
                <input type="text" name="username" class="p-1 m-1" placeholder="Enter username">
                <input type="text" name="email" class="p-1 m-1" placeholder="Enter email">
                <input type="text" name="password" class="p-1 m-1" placeholder="Enter password">
                <!-- <a href="" type="submit" name="delete" style="text-decoration:none" class="btn-sm btn-dark mt-3 mb-1 fw-bold">Delete </a> -->
                <input type="submit" value="Add" name="add" style="text-decoration:none" class="btn-sm btn-dark mt-3 mb-1 fw-bold"></a> 
                <input type="submit" value="Update" name="update" style="text-decoration:none" class="btn-sm btn-dark mt-3 mb-1 fw-bold"></a>   
                <input type="submit" value="Delete" name="delete" style="text-decoration:none" class="btn-sm btn-dark mt-3 mb-1 fw-bold"></a>   
            </form>
    </div>
</div>
<?php

// Delete
if(isset($_POST['delete'])){
    $id = $_POST['name'];
    $sql = "DELETE FROM `userInfo` WHERE name='$id'";
    $query = mysqli_query($conn,$sql);
    if($query){        
        // header('Location:userInfo.php');
    }
    else{        
        // echo '<script type="text/javascript">alert("Data Not Deleted")</script>';
    }
}

// Add
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypted_pwd = md5($password);
    $sql = "insert into userInfo (name, username, email, password) VALUES ('$name', '$username', '$email', '$encrypted_pwd');";
    $query = mysqli_query($conn,$sql);
    if($query){        
        // header('Location:userInfo.php');
    }
    else{        
        // echo '<script type="text/javascript">alert("Record not inserted")</script>';
    }
}

// Update
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $encrypted_pwd = md5($password);
    $sql="UPDATE `userInfo` SET `username`='$username',`email`='$email',
     `password`='$encrypted_pwd' WHERE `name`='$name'";
    $query = mysqli_query($conn,$sql);
    
}

include './afooter.php';?>