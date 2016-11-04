<?php
$page_title = 'Sushi &amp; BBbop';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php print $page_title; ?></title>

        <link rel="stylesheet" href="common/css/style.css" type="text/css">
        <link rel="shortcut icon" href="images/favicon.ico" />

        <!--[if IE7]>
                <link rel="stylesheet" href="common/css/ie7.css" type="text/css">
        <![endif]-->
    </head>
    <body>
        <div id="page">
            <div id="header">
                <div id="sidebar">
                    <a href="./" id="logo">
                        <img src="images/logo.gif" alt="LOGO"></a>
                    <div id="navigation">
                        <ul>
                            <li class="selected">
                                <a href="./" class="transition">Home</a>
                            </li>
                            <li class="menu">
                                <a href="" class="transition">Menu</a>
                                <div class="sub">
                                    <a href="menu">Sushi</a> 
                                    <a href="menu/?menu=2" class="last-child">BBbop</a>
                                </div>
                                <span></span>
                            </li>
                            <!--                            <li>
                                                            <a href="review" class="transition">Review</a>
                                                        </li>-->
                            <li class="last">
                                <a href="about" class="transition">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- header -->

            <div id="content-effect">
                <div id="sushi_main">
                    <h1>Fresh &amp; Healthy</h1>
                    <div class="frame">
                        <div class="section">
                            <p>
                                <span style="font-size: 20px;">Korean cuisine</span> is largely based upon rice, vegetables, and meats. 
                                Traditional Korean meals are noted for the number of side dishes (banchan) 
                                that accompany steam-cooked short-grain rice.
                            </p>
                        </div>
                        <div class="section">
                            <p>
                                <span style="font-size: 20px;">Japanese food</span> is based on rice with miso soup and other dishes, 
                                each in its own utensil, with an emphasis on seasonal ingredients. 
                                The side dishes often consist of fish, pickled vegetables, and vegetables cooked in broth.
                            </p>
                        </div>
                    </div>
                </div>


                <div id="contents">
                    <div id="articles">
                        <div>
                            <div class="frame">
                                <img src="images/sushi_party_tray.gif" alt="Sushi" height="192" width="189">
                                <h2>Sushi &amp; Roll</h2>
                                <p>
                                    Sushi is cooked vinegared rice combined with other ingredients, 
                                    usually raw fish or other seafood. 
                                </p>
                                <a href="menu" class="more">See Menu..</a>
                            </div>
                            <div class="frame">
                                <img src="images/bibim.gif" alt="Bibim" height="192" width="189">
                                <h2>Bibimbop</h2>
                                <p>
                                    Bibimbop is served as a bowl of warm white rice topped with vegetables and chili pepper paste.
                                </p>
                                <a href="menu?menu=2" class="more">See Menu..</a>
                            </div>
                            <div id="featured">
                                <ul>
                                    <li>
                                        <img src="images/korean1.png" alt="Korean1">
                                        <h3>Combo w/ Bulgogi</h3>
                                    </li>
                                    <li>
                                        <img src="images/korean2.png" alt="Korean2">
                                        <h3>Combo w/ Kalbi</h3>
                                    </li>
                                    <li>
                                        <img src="images/korean3.png" alt="Korean3">
                                        <h3>Pork Bone Soup</h3>
                                    </li>
                                    <li>
                                        <img src="images/korean5.png" alt="Korean4">
                                        <h3>Bibimbop</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="dummy">
                    </div>
                </div>


                <div id="footer">
                    <!--                    <div class="header">
                                            <div class="body">
                                                <ul>
                                                    <li>
                                                        <h4>Lorem Ipsum</h4>
                                                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                                                    </li>
                                                    <li>
                                                        <h4>Dolor Sit Amet</h4>
                                                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                                                    </li>
                                                    <li>
                                                        <h4>Nulla Pretium</h4>
                                                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                                                    </li>
                                                    <li class="last-child">
                                                        <h4>Curabitur</h4>
                                                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                                                    </li>
                                                </ul>
                                            </div>-->
                    <div class="footer">
                        <div id="connect">
                            <!--                                <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a>
                                                            <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> 
                                                            <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> 
                                                            <a href="http://freewebsitetemplates.com/go/vimeo/" target="_blank" class="vimeo"></a>-->
                        </div>
                        <p>
                            &copy;Copyright 2013-2014 Sushi &amp; BBbop. All Rights Reserved.
                        </p>
                    </div>
                    <!--</div>-->
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="common/js/effect.js"></script>

    </body>
</html>