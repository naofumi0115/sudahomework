<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My web page</title>
    <link rel="stylesheet" , href="index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="login_form" id="hidden_form">
        <form id="login" method="post" action="/login">
            <ul>
                <li><input class="form_des" id="name" type="text" placeholder="User name" /></li>
                <li><input class="form_des" id="pass" type="text" placeholder="Password" /></li>
                <li><input type="checkbox" value="0"> Remember user name</li>
                <li><input class="login" step="submit" value="CLOSE" onclick="none()"></li>
                <li><input class="login" type="submit" value="LOGIN" onclick="login()"></li>
            </ul>
        </form>
    </div>
    <header>
        <div>The logo</div>
        <div id="slogan" class="slogan">The header slogan</div>
        <div id="search">
            <p id="guest">Hi<span>Guest</span></p>
            <a class="login_btn" href="javascript:void(0);" onclick="display()">login</a>
            <form action="javascript:void(0);" method="GET">
                <input id="textarea" type="text" name="keyword" />
                <i class="material-icons">search</i>
            </form>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="users.html">Users</a></li>
            <li><a>Courses</a></li>
            <li><a>Trainers</a></li>
        </ul>
    </nav>
    <div id="main">
        <div id="main-content">
            <h3> The main content go here</h3>
            <p id="log"></p>
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
    <footer>
        <ol>
            <li>Extra info 1</li>
            <li>Extra info 1</li>
        </ol>
        <h3> The footer</h3>
        <div id="scroll">
            <a href="javascript:void(0);" onclick="scrollToTop()">
                <i class="material-icons">arrow_drop_up</i>
            </a>
        </div>
    </footer>
    <script src="index.js"></script>
</body>

</html>