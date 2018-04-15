<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_COOKIE)) {
    unset($_SESSION['name']);
    setcookie('CookieFactoryUserName',"",time() -3600);
    setcookie('cookieCart',"",time() -3600);
    session_destroy();
    header('location: login.php');
}
