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
    <link href="inc/css/swiper.min.css" rel="stylesheet" />
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


    <!-- We Are Newave -->
    <section id="we-are-newave">

        <!-- Container -->
        <div class="container">

            <!-- Section Title -->
            <div class="section-title">
                <h1>Anton Shumin</h1>
                <span class="border"></span>
                <p>Hallo, mijn naam is Anton. Ik ben een <b>full stack</b> web developer, <b>VR</b> ontwikkelaar en een tech enthousiast.</p>
                <p>In mijn werk streef ik voortdurent naar een balans tussen het <b>gebruiksgemak</b> en <b>business</b>. Ik ben een <b>teamspeler</b> die eveneens zelfstandig zijn plan kan trekken. <b>Out of the box</b> denken, <b>sport</b> (lichaam en geest). </p>


                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/1)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/2)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/3)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/4)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/5)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/6)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/7)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/8)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/9)"></div>
                        <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/10)"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>




        </div>
        <!--/Container -->



    </section>
    <!--/We Are Newave -->



    <!-- Services-->
    <section id="services" class="content">

        <!-- Container -->
        <div class="container">

            <!-- Section Title -->
            <div class="section-title">
                <h1>Vaardigheden</h1>
                <span class="border"></span>
                <p>Wat ik kan doen voor uw bedrijf</p>
            </div>
            <!--/Section Title -->



            <div class="one_half">

                <div class="service-item text-right element_from_left">
                    <span class="fa-stack fa-3x right">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-cog fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>PHP development</h5>
                    <p>Uitgebreide kennis en professionele ervaring binnen de wereld van PHP. Kan vlot overweg met de sequentiele of object georienteerde code.</p>
                </div>

                <div class="service-item text-right element_from_left">
                    <span class="fa-stack fa-2x right">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-user fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>Front End</h5>
                    <p>Kan vlot overweg met css en javascript. Werkervaring met bootstrap, jQuery, google API's en meer</p>
                </div>


            </div>


            <div class="one_half last">

                <div class="service-item text-left element_from_right">
                    <span class="fa-stack fa-3x left">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-desktop fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>C# Ontwikkeling</h5>
                    <p>Ervaring met de ASP.NET Framework en een lange geschiedenis van persoonlijke projecten in de Unity 3D Engine.</p>
                </div>

                <div class="service-item text-left element_from_right">
                    <span class="fa-stack fa-3x left">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-apple fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>UX Design</h5>
                    <p>Mee met de trends van gebruiksvriendelijke ontwerpen en user testing</p>
                </div>


            </div>

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                    <div class="swiper-slide">Slide 10</div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>




        </div>
        <!--/Container -->

    </section>
    <!--/Services-->




    <!-- Portfolio -->
    <section id="portfolio" class="content">

        <!-- Container -->
        <div class="container portfolio-title">

            <!-- Section Title -->
            <div class="section-title">
                <h1>Portfolio</h1>
                <span class="border"></span>
                <p>Projecten waar ik aan gewerkt heb</p>
            </div>
            <!--/Section Title -->


        </div>
        <!-- Container -->





        <div class="portfolio-top"></div>


        <!-- Portfolio Plus Filters -->
        <div class="portfolio">




            <!-- Portfolio Filters -->
            <div  id="filters" class="sixteen columns">

                <ul class="clearfix">
                    <li><a id="all" href="#" data-filter="*" class="active"><h5>All</h5></a></li>
                    <li><a href="#" data-filter=".branding"><h5>Branding</h5></a></li>
                    <li><a href="#" data-filter=".design"><h5>Design</h5></a></li>
                    <li><a href="#" data-filter=".photography"><h5>Photography</h5></a></li>
                    <li><a href="#" data-filter=".videography"><h5>Videography</h5></a></li>
                    <li><a href="#" data-filter=".web"><h5>Web</h5></a></li>
                </ul>
            </div>
            <!--/Portfolio Filters -->



            <!-- Portfolio Wrap -->
            <div id="portfolio-wrap">





                <!-- Portfolio Item With PrettyPhoto  -->
                <div class="portfolio-item one-four   branding web">

                    <div class="portfolio-image">
                        <img src="inc/images/home_background.jpg" alt="Portfolio 1"/>
                    </div>

                    <a title="Starbucks Coffee" rel="prettyPhoto[galname]" href="images/portfolio/portfolio2.jpg">
                        <div class="project-overlay">
                            <div class="project-info">
                                <div class="zoom-icon"></div>
                                <h4 class="project-name">Starbucks Coffee</h4>
                                <p class="project-categories">Image Popup</p>
                            </div>
                        </div>
                    </a>

                </div>
                <!--/Portfolio Item With PrettyPhoto  -->






                <!-- Portfolio Item Video Expander  -->
                <div class="portfolio-item one-four  design  photography   web">

                    <div class="portfolio-image">
                        <img src="inc/images/home_background.jpg" alt="Portfolio 1"/>
                    </div>

                    <div class="project-overlay">
                        <div class="open-project-link">
                            <a class="open-project" href="project-video-expander.html" title="Open Project"></a>
                        </div>
                        <div class="project-info">
                            <div class="zoom-icon"></div>
                            <h4 class="project-name">Chambre Des Notaires</h4>
                            <p class="project-categories">Video Expander</p>
                        </div>
                    </div>

                </div>
                <!--/Portfolio Item Video Expander  -->





                <!-- Portfolio Item Normal Expander -->
                <div class="portfolio-item one-four  design    videography ">

                    <div class="portfolio-image">
                        <img src="inc/images/home_background.jpg" alt="Portfolio 1"/>
                    </div>

                    <div class="project-overlay">
                        <div class="open-project-link">
                            <a class="open-project" href="project-normal-expander-1.html" title="Open Project"></a>
                        </div>
                        <div class="project-info">
                            <div class="zoom-icon"></div>
                            <h4 class="project-name">Mors Identity</h4>
                            <p class="project-categories">Normal Expander</p>
                        </div>
                    </div>

                </div>
                <!--/Portfolio Item Normal Expander -->





                <!-- Portfolio Item FullScreen Expander -->
                <div class="portfolio-item one-four  photography  branding web">

                    <div class="portfolio-image">
                        <img src="inc/images/home_background.jpg" alt="Portfolio 1"/>
                    </div>

                    <div class="project-overlay">
                        <div class="open-project-link">
                            <a class="open-project" href="project-fullscreen-expander-1.html" title="Open Project"></a>
                        </div>
                        <div class="project-info">
                            <div class="zoom-icon"></div>
                            <h4 class="project-name">Beauty Collection</h4>
                            <p class="project-categories">Fullscreen Expander</p>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Item FullScreen Expander -->





            </div>
            <!--/Portfolio Wrap -->

        </div>
        <!--/Portfolio Plus Filters -->





        <div class="portfolio-bottom"></div>





        <!-- Project Page Holder-->
        <div id="project-page-holder">

            <div class="clear"></div>
            <div id="project-page-data"></div>

        </div>
        <!--/Project Page Holder-->





    </section>
    <!--/Portfolio -->






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

    <!-- Footer -->


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
    <script src="inc/js/swiper.jquery.min.js" type="text/javascript"></script>

    <script src="inc/js/scripts.js" type="text/javascript"></script>


</body>

</html>