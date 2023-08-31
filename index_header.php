<?php
require('config.php');
?>
<!doctype html>
<html class=no-js lang="">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Soccer club</title>
    <link rel="shortcut icon" href=images/Ahlam.png>
    <link rel=stylesheet href=vendor.css>
    <link rel=stylesheet href=style.css>
    <link rel=stylesheet type=text/css href=css/layerslider.css>
    <script src=js/vendor/modernizr.js></script>
</head>
<body><!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class=wrapper>
    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>

                    <ul>
                    <li><a href="admin_add.php">ADMIN PANEL</a></li>
<?php
session_start();
if(!isset($_SESSION['USER_LOGIN'])||$_SESSION['USER_LOGIN'] != true ){
    ?>
     <li><a href="user_login.php">login</a></li>
<?php
}
else {
    ?>
 <li><a href="logout.php">LOGOUT</a></li>
<?php

}
?>
                       

                        <li><a href=shopcart.php><i class="fa fa-shopping-cart"></i> <span>cart(<span
                                class=cartitems>0</span>)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-lower clearfix">
            <div class=container>
                <div class=row><h1 class=logo><a href=index.php><img src=images/Ahlam.png alt=image></a></h1>

                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu>
                                    <ul class="nav navbar-nav menu-bar">
                                        <li><a href="index.php" >Home <span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                        
                                     <li><a href=index.php#pro>shop <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                     
                                            <span></span></a></li>
                                            <li><a href="feedback_index.php">feedback<span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                            <li><a>more<span></span> <span></span> <span></span> <span></span></a>
                                            <ul class=sub-menu>
                                                <li><a href="index.php#lr">LATEST RESULT</a></li>
                                                <li><a href=index.php#ms>MATCH SCHEDULE</a></li>
                                                <li><a href=index.php#lv>LATEST VIDEO</a></li>
                                                <li><a href=index.php#ln>LATEST NEWS</a></li>
                                                <li><a href=index.php#oh>OUR HEROES</a></li>
                                                <li><a href="team.php">Project Team</a></li>
                                            </ul>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class=social><a href=https://www.facebook.com/profile.php?id=100055888222566&mibextid=D4KYlr class=facebook><i
                            class="fa fa-facebook"></i></a> <a href=https://instagram.com/md_yasir90?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D class=twitter><i
                            class="fa fa-instagram"></i></a> <a href=https://www.linkedin.com/in/muhammad-yasir-a74a68252/ class=behance><i
                            class="fa fa-linkedin"></i></a></div>

                </div>
            </div>
        </div>
    </header>
