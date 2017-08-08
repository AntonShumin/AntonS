<?php

//nothing here yet

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Anton Shumin - Portfolio website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Persoonlijke website van S.Anton" />
    <meta name="author" content="Anton Shumin">
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" type="image/ico" href="inc/images/icon.ico" />
    <link href="inc/css/bootstrap.min.css" rel="stylesheet" />
    <link href="inc/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="inc/css/prettyPhoto.css" type="text/css" media="screen" />
    <link href="inc/css/jquery.bxslider.min.css" rel="stylesheet" />
    <link href="inc/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


</head>

<!-- scrollspy tutorial https://www.w3schools.com/bootstrap/bootstrap_scrollspy.asp -->
<body data-spy="scroll" data-target=".navbar" data-offset="75">

    <!-- Home Section -->
    <div id="home" class="parallax-slider">

        <ul class="fullwidth-slider">


            <li class="slide" style="background-image: url(inc/images/home_background.jpg)" data-anchor-target="section" data-70-top="background-position: center 400px;" data-start="background-position: center 0px;">
                <!-- Caption -->
                <div class="caption">
                    <div class="caption-inside" data-anchor-target="section"  data-start="top: 0px; opacity: 1;" data-200-top="top: 270px; opacity: 0;">
                        <div class="slide-caption">
                            <div class="vertical-align-middle">

                                <h1 class="ultralarge">Hallo</h1>
                                <p>Ik zie dat jij mijn pagina gevonden hebt, welkom!</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Caption -->
            </li>


        </ul>

    </div>
    <!-- End Home Section -->


    <!-- Navigation -->
    <div id="navigation" class="navbar navbar-fixed-top">
        <div class="navbar-inner ">
            <div class="container no-padding">

                <a class="show-menu" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="show-menu-bar"></span>
                </a>

                <div id="logo"><a class="external" href="index.html"></a></div>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="menu-1"><a class="colapse-menu1" href="#home">Home</a></li>
                        <li class="menu-2"><a class="colapse-menu1" href="#we-are-newave">About</a></li>
                        <li class="menu-3"><a class="colapse-menu1" href="#services">Services</a></li>
                        <li class="menu-4"><a class="colapse-menu1" href="#clients">Clients</a></li>
                        <li class="menu-5"><a class="colapse-menu1" href="#portfolio">Portfolio</a></li>
                        <li class="menu-6"><a class="colapse-menu1" href="#contact-parallax">Contact</a></li>
                        <li class="dropdown menu-7"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="external" href="blog.html">Blog standard</a></li>
                                <li><a class="external" href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a class="external" href="blog-post.html">Blog post page </a></li>
                            </ul>
                        </li>
                        <li class="menu-8"><a class="external" href="shortcodes.html">Shortcodes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/Navigation -->



    <!-- Footer -->
    <footer>
        <div class="container no-padding">

            <a id="back-top"><div id="menu_top"><div id="menu_top_inside"></div></div></a>

            <ul class="socials-icons">
                <li><a href="#"><img src="inc/images/facebook.png" alt="" /></a></li>
                <li><a href="#"><img src="inc/images/facebook.png" alt="" /></a></li>
                <li><a href="#"><img src="inc/images/facebook.png" alt="" /></a></li>
            </ul>

            <p class="copyright">2017 &copy; Anton Shumin. All rights reserved.</p>

        </div>
    </footer>
    <!--/Footer -->


    <!--
    <div style="opacity:0; height:0px!important; position:fixed; ">
        <img  src="images/projects/3.png" alt="" />
        <img  src="images/projects/4.jpg" alt="" />
        <img  src="images/projects/5.jpg" alt="" />
        <img  src="images/projects/6.png" alt="" />
    </div>
    -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="inc/js/jquery.sticky.js" type="text/javascript"></script>
    <script src="inc/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/tether/1.4.0/tether.min.js"></script>
    <script src="inc/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="inc/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="inc/js/appear.js" type="text/javascript"></script>
    <script src="inc/js/modernizr.js" type="text/javascript"></script>
    <script src="inc/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="inc/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="inc/js/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="inc/js/jquery.cycle.all.js" type="text/javascript"></script>
    <script src="inc/js/jquery.maximage.js" type="text/javascript"></script>
    <script src="inc/js/sscr.js" type="text/javascript"></script>
    <script src="inc/js/skrollr.min.js" type="text/javascript"></script>
    <script src="inc/js/jquery.jigowatt.js" type="text/javascript"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

    <script src="inc/js/scripts.js" type="text/javascript"></script>


</body>

</html>