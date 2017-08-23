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


            <li class="slide" style="background-image: url(inc/images/backgrounds/b1.jpg)" data-anchor-target="section" data-70-top="background-position: center 400px;" data-start="background-position: center 0px;">
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
                        <li class="menu-2"><a class="colapse-menu1" href="#introductie">Over mij</a></li>
                        <li class="menu-3"><a class="colapse-menu1" href="#services">Vaardigheden</a></li>
                        <li class="menu-4"><a class="colapse-menu1" href="#portfolio">Portfolio</a></li>
                        <li class="menu-5"><a class="colapse-menu1" href="#contact">Contact</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/Navigation -->


    <!-- We Are Newave -->
    <section id="introductie">

        <!-- Container -->
        <div class="container">

            <!-- Section Title -->
            <div class="section-title">
                <h1>Anton Shumin</h1>
                <span class="border"></span>
                <div class="introductie_text">
                    <p>Hallo, mijn naam is Anton. Ik ben een <b>full stack</b> web developer, <b>VR</b> ontwikkelaar en een tech enthousiast. In mijn werk streef ik voortdurend naar een balans tussen <b>gebruiksgemak</b> en <b>business</b>. Ik ben een <b>teamspeler</b> zowel op als naast het veld maar kan eveneens mijn plan trekken. Meer weten? Neem gerust een kijkje op mijn website en stuur een mailtje. </p>

                </div>


                <!-- Swiper -->
                <div class="swiper-pictures">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_1.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_2.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_3.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_4.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_5.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_6.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_7.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(inc/images/about/pic_about_8.jpg)"></div>

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
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
                      <i class="fa fa-database fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>PHP development</h5>
                    <p>Uitgebreide kennis en professionele ervaring binnen de wereld van PHP. Kan vlot overweg met de sequentiele of object georienteerde code.</p>
                </div>

                <div class="service-item text-right element_from_left">
                    <span class="fa-stack fa-3x right">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-id-badge fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>Front End</h5>
                    <p>Kan vlot overweg met css en javascript. Werkervaring met bootstrap, jQuery, google API's en meer</p>
                </div>


            </div>


            <div class="one_half last">

                <div class="service-item text-left element_from_right">
                    <span class="fa-stack fa-3x left">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-windows fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>C# Ontwikkeling</h5>
                    <p>Ervaring met de ASP.NET Framework en een lange geschiedenis van persoonlijke projecten in de Unity 3D Engine.</p>
                </div>

                <div class="service-item text-left element_from_right">
                    <span class="fa-stack fa-3x left">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa a fa-handshake-o fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>UX Design</h5>
                    <p>Mee met de trends van gebruiksvriendelijke ontwerpen en user testing</p>
                </div>


            </div>






        </div>
        <!--/Container -->

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_1.jpg")></div>
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_2.jpg")></div>
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_3.jpg")></div>
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_4.jpg")></div>
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_5.jpg")></div>
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_6.jpg")></div>
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_7.jpg")></div>
                <div class="swiper-slide" style="background-image:url(inc/images/skill%20icons/skill_8.jpg")></div>
                <!--
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="inc/images/skill%20icons/skill_8.jpg" alt=""></div>
                -->

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

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
                    <li><a href="#" data-filter=".php"><h5>php</h5></a></li>
                    <li><a href="#" data-filter=".unity"><h5>unity</h5></a></li>
                    <li><a href="#" data-filter=".commerce"><h5>e-commerce</h5></a></li>
                </ul>
            </div>
            <!--/Portfolio Filters -->



            <!-- Portfolio Wrap -->
            <div id="portfolio-wrap">





                <!-- Portfolio Item With PrettyPhoto  -->
                <div class="portfolio-item one-four php">

                    <div class="portfolio-image">
                        <img src="inc/images/salino.jpg" alt="Portfolio 1"/>
                    </div>

                    <a title="Salino"  href="http://www.salino.be" target="_blank">
                        <div class="project-overlay">
                            <div class="project-info">
                                <div class="zoom-icon"></div>
                                <h4 class="project-name">Salino</h4>
                                <p class="project-categories">Zoekmachine</p>
                            </div>
                        </div>
                    </a>

                </div>
                <!--/Portfolio Item With PrettyPhoto  -->






                <!-- Portfolio Item Video Expander  -->
                <div class="portfolio-item one-four  php commerce">

                    <div class="portfolio-image">
                        <img src="inc/images/kivalo.jpg" alt="Portfolio 1"/>
                    </div>


                    <a title="Salino"  href="https://kivalo.kivalo.be/bestellen/" target="_blank">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h4 class="project-name">Kivalo</h4>
                                <p class="project-categories">Online voucher verkoop</p>
                            </div>
                        </div>
                    </a>


                </div>
                <!--/Portfolio Item Video Expander  -->





                <!-- Portfolio Item Normal Expander -->
                <div class="portfolio-item one-four  unity ">

                    <div class="portfolio-image">
                        <img src="inc/images/hockey.jpg" alt="Portfolio 1"/>
                    </div>

                    <a title="Salino"  target="_blank">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h4 class="project-name">Mountain Lake Hockey</h4>
                                <p class="project-categories">Steam VR videospel</p>
                            </div>
                        </div>
                    </a>


                </div>
                <!--/Portfolio Item Normal Expander -->





                <!-- Portfolio Item FullScreen Expander -->
                <div class="portfolio-item one-four  php">

                    <div class="portfolio-image">
                        <img src="inc/images/relaxy.jpg" alt="Portfolio 1"/>
                    </div>

                    <a title="Salino"  href="http://www.relaxy.be" target="_blank">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h4 class="project-name">Relaxy</h4>
                                <p class="project-categories">Bedrijfspagina's</p>
                            </div>
                        </div>
                    </a>


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

    <!-- Contact Section -->
    <section id="contact">

        <!-- Container -->
        <div class="container small-width">

            <!-- Section Title -->
            <div class="section-title">
                <h1>Contact</h1>
                <span class="border"></span>

                <div class="company-phone">

                    <a><h2><i class="fa fa-phone " aria-hidden="true"></i> 0476 50 31 47</h2></a>
                </div>

                <h5 class="company-email"><i class="fa fa-envelope-o" aria-hidden="true"> </i> AntonShuminBe@gmail.com</h5>


                <h5 class="company-address"><i class="fa fa-map-marker" aria-hidden="true"></i> 2800 Mechelen</h5>
            </div>
            <!--/Section Title -->




        </div>
        <!--/Container -->



    </section>
    <!--/Contact Section -->


    <!-- Contact Parralax -->
    <div id="contact-parallax" class="parallax" style="background-image: url('inc/images/pexels-photo-257935.jpeg');" data-stellar-background-ratio="0.9" data-stellar-vertical-offset="20">

        <div class="parallax-overlay">
            <div class="container">

                <div class="contact-details">




                </div>

            </div>
        </div>

    </div>
    <!--/Contact Parralax -->







    <!-- Footer -->

    <footer>
        <div class="container no-padding">

            <a id="back-top"><div id="menu_top"><div id="menu_top_inside"></div></div></a>

            <ul class="socials-icons">
                <li><a href="https://www.facebook.com/ShuminAnton" target="_blank"><img src="inc/images/SMI/facebook-Icon.png" alt="" /></a></li>
                <li><a href="https://www.linkedin.com/in/anton-shumin-58447810/" target="_blank"><img src="inc/images/SMI/Linkedin.png" alt="" /></a></li>
                <li><a href="https://github.com/AntonShumin" target="_blank"><img src="inc/images/SMI/Github-Icon.png" alt="" /></a></li>
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



    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
    <script src="inc/js/jquery.sticky.js" type="text/javascript"></script>
    <script src="inc/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>


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