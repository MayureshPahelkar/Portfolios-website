<?php
include './aheader.php';
?>
<br>
<div class="container">
    <div class="row ">
        <div>
        <table class="table table-responsive-100 border border-dark ">
                <thead class="table-dark  text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>About</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Work</th>
                </thead>
                <tbody>
                    <?php
 include ('./db.php');
 $Record = mysqli_query($conn, "select * from uprofile");
 $serial_count = 0;
 while ($row = mysqli_fetch_array($Record, MYSQLI_ASSOC)) {
 $serial_count += 1;
 ?>
                    <tr>
                        <td class='text-center'><?php echo $serial_count?></td>
                        <td class='text-center'><?php echo $row['name1']; ?></td>
                        <td class='text-center'><?php echo $row['about']; ?></td>
                        <td class='text-center'><?php echo $row['category']; ?></td>
                        <td class='text-center'><img class="container" src="./<?php echo $row['img1']; ?>"></td>
                        <td class='text-center'><img class="container" src="./<?php echo $row['img2']; ?>"></td>
                    </tr>
                    <?php
 }
 ?>
                </tbody>
            </table>
        </div>
        <form action="" method="POST">
                <input type="text" name="name" class="p-1 m-1" placeholder="Enter name" required>
                <input type="submit" value="Delete" name="delete" style="text-decoration:none" class="btn-sm btn-dark mt-3 mb-1 fw-bold"></a>   
            </form>
        
    </div>
</div>

</html>
<?php 
if(isset($_POST['delete'])){
    $name = $_POST['name'];
    $sql = "DELETE FROM `uprofile` WHERE name1='$name   '";
    $query = mysqli_query($conn,$sql);
    
}
include './afooter.php'; ?>