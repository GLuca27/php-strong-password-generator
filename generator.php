<?php
session_start();
require_once __DIR__ . "/function.php";

 if(isset($_GET['length'])){
    $result = get_password($_GET['length']);
 }

 if(result['password']) {
    $_SESSION['password'] = $result['password'];
    header("Location: ");
 }
