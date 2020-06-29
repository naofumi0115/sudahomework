<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="normalize.css">
    <meta charset="utf-8">
    <title>My web page</title>
    <link rel="stylesheet" , href="/src/home/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="/src/home/index.js"></script>
</head>

<body>
    <!-- The Header -->
    <header>
        <div>
            <h4>The logo</h4>
        </div>
        <div>
            <h2 class="slogan">The header slogan</h2>
        </div>
        <div id="form">
            <ul>
                <li>Hi<?php
                if (!isset($_SESSION['LOGGED_IN'])) {
                    ?><span>Guest</span><?php
                } else {
                    ?><span>pav</span><?php
                    } ?>
                </li>
                <li><a href="javascript:void(0)" onclick="showLoginForm()">Login</a></li>
                <li>
                    <form id="logout" method="post" action="/logout">
                        <button type="submit" name="Login">Logout</button>
                    </form>
                </li>
            </ul>

            <form id="login" method="post" action="/login">
                <input type="text" name="username" placeholder="User name" value=<?php
                if (isset($_SESSION['rem_name'])) {
                    echo $_SESSION['rem_name'];
                    } ?>>
                <input type="password" name="password" placeholder="Password" />
                <label><input type="checkbox" name="rememberUsername" />Remember user name </label>
                <button type="submit" name="Login">Login</button>
            </form>
            <form method="GET" id="search">
                <input type="text" name="keyword" />
                <i class="material-icons">search</i>
            </form>
        </div>
    </header>

    <!-- The menu -->
    <nav>
        <ul>
            <li>Menu 1</li>
            <li>Menu 2</li>
            <li>Menu 3</li>
            <li>Menu 4</li>
        </ul>
    </nav>

    <!-- MAIN content -->
    <div id="main">
        <div id="main-content">
            <?php
            if (!isset($_SESSION['LOGGED_IN'])) {
            ?><h3>You are not logged in!!! please login to view more info</h3><?php
        } else {
            ?><h3>The main content go here</h3><?php
            }?>
        </div>
        <div id="sidebar">
            <h3> Sidebar </h3>
            <ul>
                <li>Feature 1</li>
                <li>Feature 2</li>
                <li>Feature 3</li>
                <li>Feature 4</li>
                <li>Feature 5</li>
                <li>Feature 6</li>
            </ul>
        </div>
    </div>

    <!-- END  MAIN content -->

    <footer>
        <ol>
            <li>Extra info 1</li>
            <li>Extra info 1</li>
        </ol>
        <h3> The footer</h3>
        <div id="scroll">
            <a href="javascript:void(0)" onclick="scrollToTop()">
                <i class="material-icons">arrow_drop_up</i>
            </a>
        </div>
    </footer>
</body>

</html>
