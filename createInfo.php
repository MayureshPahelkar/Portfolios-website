<?php session_start();?>
<?php include('./db.php');
$id = $_SESSION['id'];
$query = "SELECT * FROM userinfo WHERE id = '$id'";
$result = mysqli_query($conn, $query) or die('Error');
if (mysqli_num_rows($result) > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
 $id = $row['id'];
 }
}
?>
<?php
if (isset($_POST['submitC'])) {
 $user_id = $_SESSION['id'];
 $name1=$_POST['uname'];
 $imga = $_FILES['img1'];
 $imgb = $_FILES['img2'];
 $img_loca = $_FILES['img1']['tmp_name'];
 $imga_name = $_FILES['img1']['name'];
 $imga_des="userimages/".$imga_name;
 move_uploaded_file($img_loca,"userImages/".$imga_name);
 $img_locb = $_FILES['img2']['tmp_name'];
 $imgb_name = $_FILES['img2']['name'];
 $imgb_des="userimages/".$imgb_name;
 move_uploaded_file($img_locb,"userImages/".$imgb_name);
 $about = $_POST['about'];
 $category = $_POST['selects'];
 $link1 = $_POST['link1'];
 $link2 = $_POST['link2'];
 $link3 = $_POST['link3'];
 $link4 = $_POST['link4'];
 $link5 = $_POST['link5'];
 
 $query="INSERT INTO `uprofile`(`id`, `name1`, `about`, `category`, `img1`, `img2`, 
 `link1`, `link2`,`link3`,`link4`,`link5`) VALUES 
('$id','$name1','$about','$category','$imga_des','$imgb_des','$link1','$link2','$link3','$link4','$link5')";
 $result =mysqli_query($conn,$query);
 header('location:showUser.php');
}
?>
