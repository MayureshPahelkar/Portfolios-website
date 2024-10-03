<?php include('./db.php');
include './aheader.php';
?>
<br>
<div class="container">
    <div class="row ">
        <div>
            <table class="table table-responsive-100 border border-dark ">
                <thead class="table-dark  text-center">
                    <th>Id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>Message</th>
                </thead>
                <tbody class="table-">
                    <?php
                    include './db.php';
                    $Record = mysqli_query($conn, "select *from contact");
                    $serial_count = 0;
                    while ($row = mysqli_fetch_array($Record, MYSQLI_ASSOC)) {
                        $serial_count += 1;
                        ?>
                    <tr>
                        <td class='text-center'><?php echo $serial_count ?></td>
                        <td class='text-center'><?php echo $row['cname']; ?></td>
                        <td class='text-center'><?php echo $row['cemail']; ?></td>
                        <td class='text-center'><?php echo $row['cmessage']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div>
            <form action="" method="POST">
                <input type="text" name="user" class="p-1 m-1" placeholder="Enter user">
                <input type="submit" value="Delete" name="delete" style="text-decoration:none" class="btn-sm btn-dark mt-3 mb-1 fw-bold"></a> 
                
            </form>
        </div>
    </div>
</div>
</html>

<?php
if(isset($_POST['delete'])){
    $id = $_POST['user'];
    $sql = "DELETE FROM `contact` WHERE cname='$id'";
    $query = mysqli_query($conn,$sql);
    if($query){
        // echo '<script type="text/javascript">alert("Data Deleted")</script>';
        header('Location:adminContact.php');
    }
    else{        
        echo '<script type="text/javascript">alert("Data Not Deleted")</script>';
    }
}


include './afooter.php';
?>