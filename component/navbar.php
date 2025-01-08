<?php
    if(isset($_SESSION["loggedin"]) and $_SESSION["loggedin"]) {
        require "loggedinNavbar.php";
    } else {
        require "notloggedinNavbar.php";
    }
?>