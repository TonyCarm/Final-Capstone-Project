<?php
session_start();

if (isset($_SESSION["idsportsusers"]) && $_SESSION["idsportsusers"] == true) {
    header("location: welcome.php");
    exit;
}


