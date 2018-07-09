<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>MARKET-PRICE</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="images/L2.png" rel="shortcut icon" />
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" />

        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Color style -->
        <link rel="stylesheet" href="css/color.css">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        End Preloader-->


        <!-- Header -->

        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed white bootsnav on no-full no-background">

            <div class="container">            
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <!--<ul>
                        <li class="side-menu"><a href="#">-->
                        <form method="post" action="#">
                        	<p>
                        		<label for="Cathégories"><h4>Quels Cathégorie de produit voulez-vous Consulter? </h4></label><br/>
                        		<select name="Cathégories" id="Cathégories">
                        			<option value="Agro alimentaire"> Agro alimentaire</option>
                        			<option value="Numérique">Numérique</option>
                        			<option value="Matériaux de Construction">Matériaux de Construction</option>
                        		</select>
                        	</p>
                        	<button type="submit" class="btn submit_btn">Allons y</button>
                        </form>
                        <!--<p> </p> <i class="fa fa-bars"></i></a></li>
                    </ul>-->
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button data-target="#navbar-menu" data-toggle="collapse" class="navbar-toggle" type="button">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="#brand" class="navbar-brand">
                        <!--<img alt="" class="logo logo-display" src="images/logo.png">
                        <img alt="" class="logo logo-scrolled" src="images/logo.png">-->
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php include ("menu.php");?>   

            <!-- Start Side Menu 
            <div class="side">
                <!--<a class="close-side" href="#"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">Cathégories</h6>
                        <ul class="link">
                            <li><a href="#">Agro alimentaire</a></li>
                            <li><a href="#">Numérique</a></li>
                            <li><a href="#">Matériaux de Construction</a></li>
                        </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>


        <header id="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/m2.jpg" alt="market-price"/>

                        <div class="container caption_area">
                            <div class="carousel-caption">
                                <h3>LE PRIX DES PRODUITS SUR LE MARCHER</h3>
                                <h1>MARKET PRICE</h1>
                                <p>Obtenez les prix de vos produits favorie en temps réels...</p>

                                <a href="" class="banner_btn">achat en ligne </a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/m3.jpg" alt="market-price"/>
                        <a href="" class="banner_btn">achat en ligne </a>
                    </div>
                    <div class="item">
						<img src="images/m1.jpg" alt="market-price"/>
						<a href="" class="banner_btn">achat en ligne </a>
                    </div>
                </div>
            </div><!-- Carousel end-->

        </header><!-- Header end -->

        <!-- About 
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="headding_area">
                            <h2>About BGStudio</h2>
                            <hr />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Aldus PageMaker including versions.</p>					
                        </div>
                    </div>			
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="about_left">
                            <img src="images/about_img.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="about_right">
                            <!--<p>Curabitur tempus, velit ac molestie consectetur, metus ex vestibulum turpis, non blandit libero mauris non mi. Nunc egestas viverra erat, eget scelerisque nisl maximus eu. Aenean faucibus erat nec leo aliquam placerat. Nulla dignissim, ante non tristique cursus, nibh odio feugiat nunc, non tempus magna ante at sem. Praesent ac tortor magna. Cras eu dui mattis, mollis est et, bibendum urna. Integer bibendum id ligula sit amet iaculis.</p>

                            <p>Mauris porta mattis feugiat. Sed commodo, massa quis tristique venenatis, risus sem commodo leo, id porttitor mauris purus a enim. Donec luctus neque vel pharetra maximus. Cras cursus, nisi vitae ultricies euismod, ligula leo vestibulum ipsum, a mollis leo ante non quam. Phasellus nisl ipsum, iaculis aliquet lectus sit amet, suscipit faucibus eros. Praesent metus turpis, porta hendrerit rutrum pretium, porta quis nisi. Fusce at dolor auctor, pretium elit at, elementum lacus.</p>-->

                            <!--<a href="#about" class="about_btn">Read our Story</a>-->
                        </div>
                    </div>
                </div>
            </div><!-- container end -->

            <!-- Contact 
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <!--<div class="contact_content">
                                <h4>How can we build your online presence</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typeset.</p>			
                            </div>-					
                        </div>
                        <div class="col-md-7">
                            <form role="form" class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="unam" placeholder="Enter your full name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                                </div>
                                <button type="submit" class="btn submit_btn">Allons y</button>
                            </form>					
                        </div>
                    </div>
                </div>
            </div><!-- Contact end -->
        </section><!-- About end -->

        <!-- Services 
        <section id="services">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="headding_area">
                            <h2>What we do best</h2>
                            <hr />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Aldus PageMaker including versions.</p>		
                        </div>
                    </div>			
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="service coaching">
                            <img src="images/coaching_icon.png" alt="" />

                            <h4>One to One Coaching</h4>
                            <p>Curabitur tempus, velit ac molestie consectetur, metus ex vestibulum turpis, non blandit libero mauris non mi. Nunc egestas viverra erat, eget scelerisque nisl maximus eu. Aenean faucibus erat nec leo aliquam placerat. Nulla dignissim, ante non tristique cursus, nibh odio feugiat nunc, non tempus magna ante at sem. Praesent ac tortor magna tempus tempus magna ante at magna. ante at. Cras eu dui mattis, mollis est et, bibendum urna. Integer bibendum id ligula sit amet iaculis.</p>

                            <a href="" class="service_btn get_it_btn">Get it Now</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service web">
                            <img src="images/web_icon.png" alt="" />

                            <h4>Website Development</h4>
                            <p>Curabitur tempus, velit ac molestie consectetur, metus ex vestibulum turpis, non blandit libero mauris non mi. Nunc egestas viverra erat, eget scelerisque nisl maximus eu. Aenean faucibus erat nec leo aliquam placerat. Nulla dignissim, ante non tristique cursus, nibh odio feugiat nunc, non tempus magna ante at sem. Praesent ac tortor magna tempus tempus magna ante at magna. ante at. Cras eu dui mattis, mollis est et, bibendum urna. Integer bibendum id ligula sit amet iaculis.</p>

                            <a href="" class="service_btn learn_btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services end -->


        <!-- Testimonial 
        <section id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="headding_area">
                        <div class="col-xs-12 text-center">
                            <div class="headding_area">
                                <h2>What our clients have to say...</h2>
                                <hr />
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Aldus PageMaker including versions.</p>				
                            </div>
                        </div>					
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="testimonial_item">
                            <span class="fa fa-quote-left"></span>

                            <p>Curabitur tempus, velit ac molestie consectetur, metus ex vestibulum turpis, non blandit libero mauris non mi. Nunc egestas viverra erat, eget scelerisque nisl maximus eu. Aenean faucibus erat nec leo aliquam placerat. Nulla dignissim, ante non tristique cursus, nibh odio feugiat nunc, non tempus magna ante at sem. Praesent ac tortor magna tempus tempus magna ante at magna.</p>

                            <div class="photo_sec">
                                <img src="images/testi_img.png" alt="" />

                                <p class="name">Ben Angel</p>
                                <a href="#testimonial" class="testi_btn">www.hellogorgeous.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="testimonial_item">
                            <span class="fa fa-quote-left"></span>

                            <p>Curabitur tempus, velit ac molestie consectetur, metus ex vestibulum turpis, non blandit libero mauris non mi. Nunc egestas viverra erat, eget scelerisque nisl maximus eu. Aenean faucibus erat nec leo aliquam placerat. Nulla dignissim, ante non tristique cursus, nibh odio feugiat nunc, non tempus magna ante at sem. Praesent ac tortor magna tempus tempus magna ante at magna.</p>

                            <div class="photo_sec">
                                <img src="images/testi_img.png" alt="" />

                                <p class="name">Ben Angel</p>
                                <a href="#testimonial" class="testi_btn">www.hellogorgeous.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="testimonial_item">
                            <span class="fa fa-quote-left"></span>

                            <p>Curabitur tempus, velit ac molestie consectetur, metus ex vestibulum turpis, non blandit libero mauris non mi. Nunc egestas viverra erat, eget scelerisque nisl maximus eu. Aenean faucibus erat nec leo aliquam placerat. Nulla dignissim, ante non tristique cursus, nibh odio feugiat nunc, non tempus magna ante at sem. Praesent ac tortor magna tempus tempus magna ante at magna.</p>

                            <div class="photo_sec">
                                <img src="images/testi_img.png" alt="" />

                                <p class="name">Ben Angel</p>
                                <a href="#testimonial" class="testi_btn">www.hellogorgeous.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial end-->

        <!-- Work Us --
        <section id="work_us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <p class="work_content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>

                        <a href="#work_us" class="work_us_btn">Work With Us!</a>
                    </div>			
                </div>
            </div>
        </section><!-- Work Us end -->

        <!-- Footer -->
        <footer>
            <div class="container text-canter">
                <ul class="list-inline footer_menu">
                    <li role="presentation"><a href="#">Accueil</a></li>
                    <li role="presentation"><a href="#">Crée un compte</a></li>
                    <li role="presentation"><a href="#">Abonnement</a></li>
                    <li role="presentation"><a href="#">shop</a></li>
                    <li role="presentation"><a href="#">Services</a></li>
                    <li role="presentation"><a href="#">Contact</a></li>
                </ul>
                <a class="footer_logo" href="#"><img src="images/logo.png" alt="bgstudio" /></a>

                <ul class="list-inline social">
                    <li role="presentation"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li role="presentation"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li role="presentation"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                </ul>

                <div class="footer-copyright text-center">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                        Made with 
                        <i class="fa fa-heart"></i>
                        by 
                        <a target="_blank" href="http://bootstrapthemes.co">Market-Price</a>
                        2017. All Rights Reserved
                    </p>
                </div>

            </div>
        </footer><!-- Footer end -->


        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->
              

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>


        <!--main js-->
        <script type="text/javascript" src="js/main.js"></script>

    </body>	
</html>	