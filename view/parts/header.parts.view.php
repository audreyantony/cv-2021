<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Montserrat:wght@200;300;400&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Audrey Antony || Portfolio </title>
</head>
<body>
<header id="sideBarNav" class="sideNav">
    <nav role="navigation">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <ul class="menu">
            <?php
            if (isset($_SESSION['session_id']) && $_SESSION['session_id']==session_id()){
                echo '<a href="?admin=home"><li>Admin Home</li></a>';
                echo '<a href="?admin=projects"><li>Projects</li></a>';
                echo '<a href="?admin=contact"><li>Contact</li></a>';
                echo '<a href="?admin=disconnection"><li>Disconnection</li></a>';
            } else {
                echo '<a href="?page=home"><li>Home</li></a>';
                echo '<a href="?page=about"><li>About</li></a>';
                echo '<a href="?page=projects"><li>Projects</li></a>';
                echo '<a href="?page=contact"><li>Contact</li></a>';
            }
            ?>
        </ul>
        <div id="container">
            <div class="toggle">
                <input type="checkbox" id="btn">
                <label for="btn" class="toggle-btn day"></label>
                <span id="text-for-checkbox"></span>
            </div>
        </div>
        <div class="socialmedia">
            <a href="https://www.facebook.com/audrey.antony.calzi" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="https://www.instagram.com/antony_audrey/?hl=fr" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
            <a href="https://github.com/audreyantony" target="_blank"><i class="fa fa-github fa-lg"></i></a>
            <a href="https://www.linkedin.com/in/audrey-antony-b7754084/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
        </div>
    </nav>
</header>

<span class="openMenu" id="openMenuId" onclick="openNav()">=<span>=</span></span>