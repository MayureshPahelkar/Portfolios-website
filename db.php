<?php 
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "myjoho";

 $conn = mysqli_connect($server,  $username, $password, $dbname);

 if(!$conn) {
    die("connection Failed ".mysqli_connect_error());
 }
 ?>
