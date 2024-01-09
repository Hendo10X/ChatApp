<?php 
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    if(!empty($fname) && !empty($email) && !empty($password) ) {

    }
    else {
        echo"All field are required";
    }
?>