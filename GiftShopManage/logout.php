<?php
ob_start();
session_start();
unset($_SESSION["user"]);
        header("Location: Home.php");


?>