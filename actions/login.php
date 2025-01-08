<?php
    session_start();

    if(isset($_POST["password"]) and isset($_POST["email"]) and $_POST["password"] == "test" and $_POST["email"] == "test") {
        $_SESSION["loggedin"] = true;
        $_SESSION["loginError"] = false;
        header("location: ../index.php");
    } else {
        $_SESSION["loginError"] = true;
        header("location: ../loginPage.php");
    }
?>