<?php

include "includes/db.php";
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){
        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];

            header("Location: data.php");
            exit();
        } else {
            echo "Incorrect Password!";
        }
    } else {
        echo "Email not found!" ;
    }

}

?>