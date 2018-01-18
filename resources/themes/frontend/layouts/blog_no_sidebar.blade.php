<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
	<title> Blog :: Elevator </title>
	<meta name="description" content=" add description  ... ">
    
    <!-- /// Favicons ////////  -->
    <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<meta name="msapplication-TileColor" content="#85c334">
	<meta name="msapplication-TileImage" content="mstile.png">
	<meta name="theme-color" content="#85c334">
	
	
	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic">
    
    <!-- /// FontAwesome Icons 4.3.0 ////////  -->
	<link rel="stylesheet" href="{{ Theme::asset('fonts/fontawesome/font-awesome.min.css') }}">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="{{ Theme::asset('fonts/iconfontcustom/icon-font-custom.css') }}">  
    
	<!-- /// Plugins CSS ////////  -->
	<link rel="stylesheet" href="{{ Theme::asset('vendors/revolutionslider/css/settings.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('vendors/revolutionslider/css/layers.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('vendors/revolutionslider/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('vendors/bxslider/jquery.bxslider.css') }}">
	<link rel="stylesheet" href="{{ Theme::asset('vendors/magnificpopup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('vendors/animations/animate.min.css') }}">
	<link rel="stylesheet" href="{{ Theme::asset('vendors/itplayer/css/YTPlayer.css') }}">
	
	<!-- /// Template CSS ////////  -->
	<link rel="stylesheet" href="{{ Theme::asset('css/reset.css') }}">
	<link rel="stylesheet" href="{{ Theme::asset('css/grid.css') }}">
	<link rel="stylesheet" href="{{ Theme::asset('css/elements.css') }}">
	<link rel="stylesheet" href="{{ Theme::asset('css/layout.css') }}">
	<link rel="stylesheet" href="{{ Theme::asset('css/components.css') }}">
	<link rel="stylesheet" href="{{ Theme::asset('css/wordpress.css') }}">
    
	<!-- /// Boxed layout ////////  -->
	<!-- <link rel="stylesheet" href="assets/css/boxed.css"> -->
   
    <!-- /// Template Skin CSS ////////  -->
	<!-- <link rel="stylesheet" href="assets/css/skins/default.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/red.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/blue.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/purple.css"> -->
 
 	
    
</head>
<body class="sticky-header">
	
    
    
	<div id="wrap">
    
		<div id="header-wrap">
			<div id="header">
			
			<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

				<div class="container">
                    <div class="row">
                        <div class="span3">
                        
                            <!-- // Logo // -->
                            <div id="logo">
                                <a href="index.html">
                                    <img src="{{ Theme::asset('images/logo.png') }}" alt="website logo">
                                </a>
                            </div>
                        
                        </div><!-- end .span3 -->
                        <div class="span9">
                        
                            <!-- // Mobile menu trigger // -->
                            
                            <a href="#" id="mobile-menu-trigger">
                                <i class="fa fa-bars"></i>
                            </a>
                            
                            <!-- // Custom search // -->                                     
                            
                            <form action="#" id="custom-search-form" method="get">
                                <input type="text" value="" name="s" id="s" placeholder="type and press enter to search">
                                <input type="submit" id="custom-search-submit" value="">
                            </form>
    
                            <a id="custom-search-button" href="#"></a>
                            
                            <!-- // Menu // -->
                            
                            <nav>
                                @include('partials.nav')
                            </nav>
    
                        </div><!-- end .span9 -->
                    </div><!-- end .row -->		
				</div><!-- end .container -->
			
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			</div><!-- end #header -->
		</div><!-- end #header-wrap -->	
		<div id="content">
		
		      <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            @yield('blog_header')
            
            <div class="container">    

                <div class="row">

                    <div class="span9">

						@yield('blog_content')
                    
                    </div><!-- end .span9 -->

                </div><!-- end .row -->

            </div><!-- end .container -->

            @yield('blog_pagination')
            
            <div class="fullwidth-section custom-color-selected" id="bg-20">
            
            	<div class="fullwidth-section-content">
                	
                    <div class="container">
                    	<div class="row">
                        	<div class="span12">	
                            	
                                <h2 class="text-center no-margin-bottom"><strong>Suspendisse efficitur nec felis non luctus. 
                                Proin quis enim et est mattis placerat.</strong></h2>
                            
                            </div><!-- end .span12 -->
                        </div><!-- end .row -->
                    </div><!-- end .container -->
                    
                </div><!-- end .fullwidth-section-content -->
            	
            </div><!-- end .fullwidth-section -->                        
		
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->    
		
		</div><!-- end #content -->
		<div id="footer-top">
            
		<!-- /// FOOTER-TOP     ///////////////////////////////////////////////////////////////////////////////////////////////// -->	
		
			<div class="container">
                <div class="row">
                    <div class="span12" id="footer-top-widget-area-1">
                        
                        <div class="widget ewf_widget_social_media">
                            
                            <div class="fixed">
                                
                                <a href="#" class="facebook-icon social-icon">
                                    <i class="ifc-facebook"></i>
                                    Facebook
                                </a>
                                
                                <a href="#" class="twitter-icon social-icon">
                                    <i class="ifc-twitter"></i>
                                    Twitter
                                </a>                                                                
                                
                                <a href="#" class="pinterest-icon social-icon">
                                    <i class="ifc-pin"></i>
                                    Pinterest
                                </a>
                                
                                <a href="#" class="dribbble-icon social-icon">
                                    <i class="ifc-dribbble"></i>
                                    Dribbble
                                </a>
                                
                            </div>
                            
                        </div><!-- end .ewf_widget_social_media -->
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
           </div><!-- end .container -->
		
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->    
		
		</div><!-- end #footer-top -->

        <!--
		<div id="footer">

			<div class="container">
                <div class="row">
                    <div class="span3" id="footer-widget-area-1">
                        
                        <div class="widget widget_text">
                        
                            <div class="textwidget">
                                
                                <p>
                                	<img src="{{ Theme::asset('images/logo-footer.png') }}" alt="">
                                </p>
                                
                            </div>
                            
                        </div>
                        
                        <div class="widget ewf_widget_contact_info">
                            
                            <ul>
                                <li>
                                	<i class="fa fa-map-marker"></i>
                                	4385 Ingram Street<br>
                                    Dayton, OH 45408  
								</li>
                                <li>
                                	<i class="fa fa-phone"></i>
                                    937-532-1022
                                </li>
                                <li>
                                	<i class="fa fa-envelope"></i>
                                    <a href="mailto:#">office@elevator.com</a><br>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="span3" id="footer-widget-area-2">
                        
                        <div class="widget widget_text">
                                    
                            <h4 class="widget-title">About Elevator</h4>
                        
                            <div class="textwidget">
                                <p>Suspendisse efficitur nec felis non luctus. Proin quis enim et est mattis placerat. Aliquam at justo ut est gravida.</p>
                            </div>
                            
                        </div>
                        
                        <div class="widget ewf_widget_newsletter">
                            
                            <form id="newsletter-subscribe-form" action="#">
                                <input type="text" name="email" placeholder="your email">
                                <input type="submit" name="submit" value="Subscribe">
                            </form>
                            
                        </div>
                        
                    </div>
                    <div class="span3" id="footer-widget-area-3">
                        
                        <div class="widget widget_pages">
                            
                            <h4 class="widget-title">Usefull links</h4>
                        
                            <ul>
                            	<li class="page_item current_page_item"><a href="#">Home</a></li>
                                <li class="page_item"><a href="#">About Our History</a></li>
                                <li class="page_item"><a href="#">Services</a></li>
                                <li class="page_item"><a href="#">Portfolio</a></li>
                                <li class="page_item"><a href="#">Clients Testimonials</a></li>
                                <li class="page_item"><a href="#">Client Management</a></li>
                                <li class="page_item"><a href="#">Pricing Table</a></li>                                
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="span3" id="footer-widget-area-4">
                        
                        <div class="widget ewf_widget_flickr">
                        
                            <h4 class="widget-title">Flickr</h4>
                        
                            <div class="flickr-feed">
                                <script src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user_set&amp;set=72157650151141680"></script>
                            </div>
                        
                        </div>
                        
                    </div>

                </div>

            </div>

		</div>
        -->

		<div id="footer-bottom">
		
			<div class="container">
                <div class="row">
                    <div class="span12" id="footer-bottom-widget-area-1">
                        
                        <div class="widget widget_text">
                        
                            <div class="textwidget">
                                <p class="text-uppercase text-center"><strong>Elevator 2016 &copy; All rights reserved</strong></p>
                            </div><!-- end .textwidget -->
                            
                        </div>
                        
                    </div>
                </div>
            </div>   
		
		</div>
		
	</div>
    
    <a id="back-to-top" href="#">
    	<i class="ifc-up4"></i>
    </a>

    <!-- /// jQuery ////////  -->
	<script src="{{ Theme::asset('vendors/jquery-2.1.4.min.js') }}"></script>

    <!-- /// ViewPort ////////  -->
	<script src="{{ Theme::asset('vendors/viewport/jquery.viewport.js') }}"></script>
    
    <!-- /// Easing ////////  -->
	<script src="{{ Theme::asset('vendors/easing/jquery.easing.1.3.js') }}"></script>

    <!-- /// SimplePlaceholder ////////  -->
	<script src="{{ Theme::asset('vendors/simpleplaceholder/jquery.simpleplaceholder.js') }}"></script>

    <!-- /// Fitvids ////////  -->
    <script src="{{ Theme::asset('vendors/fitvids/jquery.fitvids.js') }}"></script>
    
    <!-- /// Animations ////////  -->
    <script src="{{ Theme::asset('vendors/animations/animate.js') }}"></script>
     
    <!-- /// Superfish Menu ////////  -->
	<script src="{{ Theme::asset('vendors/superfish/hoverIntent.js') }}"></script>
    <script src="{{ Theme::asset('vendors/superfish/superfish.js') }}"></script>
    
    <!-- /// Revolution Slider ////////  -->
    <script src="{{ Theme::asset('vendors/revolutionslider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ Theme::asset('vendors/revolutionslider/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/revolutionslider/js/extensions/revolution.extension.video.min.js') }}"></script>
    
    <!-- /// bxSlider ////////  -->
	<script src="{{ Theme::asset('vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    
   	<!-- /// Magnific Popup ////////  -->
	<script src="{{ Theme::asset('vendors/magnificpopup/jquery.magnific-popup.min.js') }}"></script>
    
    <!-- /// Isotope ////////  -->
	<script src="{{ Theme::asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ Theme::asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
    
    <!-- /// Parallax ////////  -->
	<script src="{{ Theme::asset('vendors/parallax/jquery.parallax.min.js') }}"></script>

	<!-- /// EasyPieChart ////////  -->
	<script src="{{ Theme::asset('vendors/easypiechart/jquery.easypiechart.min.js') }}"></script>
    
	<!-- /// YTPlayer ////////  -->
	<script src="{{ Theme::asset('vendors/itplayer/jquery.mb.YTPlayer.js') }}"></script>
	
    <!-- /// Easy Tabs ////////  -->
    <script src="{{ Theme::asset('vendors/easytabs/jquery.easytabs.min.js') }}"></script>	
    
    <!-- /// Form validate ////////  -->
    <script src="{{ Theme::asset('vendors/jqueryvalidate/jquery.validate.min.js') }}"></script>
    
	<!-- /// Form submit ////////  -->
    <script src="{{ Theme::asset('vendors/jqueryform/jquery.form.min.js') }}"></script>
    
    <!-- /// gMap ////////  -->
    <!--
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="{{ Theme::asset('vendors/gmap/jquery.gmap.min.js') }}"></script>
    -->

	<!-- /// Twitter ////////  -->
	<script src="{{ Theme::asset('vendors/twitter/twitterfetcher.js') }}"></script>
    
    <!-- /// MatchHeight ////////  -->
    <script src="{{ Theme::asset('vendors/matchheight/jquery.matchHeight-min.js') }}"></script>
	
	<!-- /// Custom JS ////////  -->
	<script src="{{ Theme::asset('js/main.js') }}"></script>	
    
    

</body>
</html>