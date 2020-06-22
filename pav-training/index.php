<?php

require 'src/helpers/route.php';

session_start();

$parsed_url = parse_url($_SERVER['REQUEST_URI']);

if (!isset($_SESSION['LOGGED_IN']) && $parsed_url['path'] != '/' && $parsed_url['path'] != '/login') {
    header("Location: /");
    die();
}

Route::add('/', function () {
    include 'src/home/index.php';
});

Route::add('/home', function () {
    include 'src/home/index.php';
});

Route::add('/users', function () {
    include 'src/users/index.php';
});

Route::add('/login', function () {
    if (!empty($_POST)) {

        if("logout" == $_POST['log']){
            $_SESSION['LOGGED_IN'] = null;
            $_SESSION['USERNAME'] = null;
        }

        $username = $_POST['username'];
        $pass = $_POST['password'];

        if (isset($username) && isset($pass)) {
            if (isUserValid($username, $pass)) {
                $_SESSION['LOGGED_IN'] = $username;
                $_SESSION['USERNAME'] = $_POST['username'];
                }
            if (isset($_POST['rememberUsername'])) {
                $_SESSION['rem_name'] = $username;
                setcookie('username', $username, time() + (24 * 60 * 60 * 5), "/"); // 5 days
                }else{
                    $_SESSION['rem_name'] = "";
                }
            }
        }
                header('Location: /');
                exit;
            }, 'post');

            function isUserValid($username, $password)
            {
                return $username == 'pav' && $password == '123';
            }

Route::add('/logout', function () {
    $_SESSION['LOGGED_IN'] = null;
    $_SESSION['USERNAME'] = null;
},'post');

            Route::run('/');
?>