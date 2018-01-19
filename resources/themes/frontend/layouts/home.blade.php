
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

	<!-- ### BEGIN HEAD ####  -->
	<head>

		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
			
		<!-- Favicon -->


		<!-- Wordpress functions -->	
		<title>@yield('title')</title>
		<meta name='robots' content='noindex,follow' />
		<link rel='dns-prefetch' href='//maps.googleapis.com' />
		<link rel='dns-prefetch' href='//fonts.googleapis.com' />
		<link rel='dns-prefetch' href='//s.w.org' />

		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/soundwave.wizedesign.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.8"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>

		<style type="text/css">
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 .07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>

		<link rel='stylesheet' id='style-css'  href="{{ Theme::asset('css/style.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' id='css-option-css'  href="{{ Theme::asset('css/css_option.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' id='prettyPhoto-css'  href="{{ Theme::asset('css/prettyPhoto.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' id='shortcodes-css'  href="{{ Theme::asset('css/shortcodes.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' id='slider-css'  href="{{ Theme::asset('css/slider.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' id='hover-css'  href="{{ Theme::asset('css/hover.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' id='responsive-css'  href="{{ Theme::asset('css/responsive.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' id='font-css'  href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900%2C300&#038;ver=4.7.8' type='text/css' media='all' />
		<link rel='stylesheet' id='player-css'  href="{{ Theme::asset('css/player.css') }}" type='text/css' media='all' />
		<script type='text/javascript' src="{{ Theme::asset('js/jquery.js') }}"></script>
		<script type='text/javascript' src="{{ Theme::asset('js/jquery-migrate.min.js') }}"></script>
		<script type='text/javascript' src="{{ Theme::asset('js/soundmanager2.js') }}"></script>
		<script type='text/javascript' src="{{ Theme::asset('js/jquery.history.js') }}"></script>
		<script type='text/javascript' src="{{ Theme::asset('js/ajax.js') }}"></script>
	</head>


	<!-- Begin Body -->
	<body  class="home page-template-default page page-id-6"> 

		<script type="text/javascript">
		    //soundManager.url = "http://soundwave.wizedesign.com/wp-content/themes/soundwave/swf/";
		    soundManager.url = "{{ url('/') }}/assets/themes/frontend/swf/";
			soundManager.flashVersion = 9;
			soundManager.useHTML5Audio = true;
			soundManager.debugMode = false;
			
		    jQuery(document).ready(function(){
				
				//put your own soundcloud key here
		    	jQuery("#fap").fullwidthAudioPlayer({ 
					keyboard: false,autoPlay: true, opened: true, playNextWhenFinished: true, 
				});
			});
		</script>	

		<div id="fap">
			<a href="{{ Theme::asset('media/01.-DJ-KoZaK-Promo-Mix-Soundwave-125.mp3')" title="DJ KoZaK - Promo Mix Soundwave 125" rel="{{ Theme::asset('images/7254264-97x97.jpg') }}" data-meta="#player-meta"></a>
			<a href="{{ Theme::asset('media/Fcking-Amazing-Original-Mix2.mp3') }}" title="Fcking Amazing (Original Mix)" rel="{{ Theme::asset('images/7254264-97x97.jpg') }}" data-meta="#player-meta"></a>
			<a href="{{ Theme::asset('media/Miko-Lay-Original-Mix2.mp3') }}" title="Miko Lay (Original Mix)" rel="{{ Theme::asset('images/7254264-97x97.jpg') }}" data-meta="#player-meta"></a>
			<a href="{{ Theme::asset('media/2013/04/No-Haste-Paul-C.-Rmx2.mp3') }}" title="No Haste (Paul C. Rmx)" rel="{{ Theme::asset('images/7254264-97x97.jpg') }}" data-meta="#player-meta"></a>
			<a href="{{ Theme::asset('media/Ximprezor-Hollen-Remix1.mp3') }}" title="Ximprezor (Hollen Remix)" rel="{{ Theme::asset('images/7254264-97x97.jpg') }}" data-meta="#player-meta"></a> 
			
			<span id="player-meta">
				<a href="http://soundwave.wizedesign.com/audio/heavy-artillery-vid/">Heavy Artillery Vid</a>
				<div> 09 Dec  2012 | Tech House </div>
			</span>
		</div>

	  	<div id="contback">

	  		<!-- Header -->
			<div id="header"> 			
		   		
		   		<div class="header-row clearfix">		

		      		<div id="logo">					
		      			<a href="#"><img src="{{ Theme::asset('images/logo.png') }}" alt="logo" /></a>      
		      		</div><!-- end #logo --> 
		  
		      		<div id="evftr"></div> 

			   </div>
			   <!-- end .header-row clearfix -->   

		   		<div id="main">

					<!-- Main Nav -->
			   		<div class="main-navigation">

						<div id="wizemenu" class="menu-top-menu-container">
							<ul id="menu-top-menu" class="menu">
								<li id="menu-item-519" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6"><a href="{{ url('/') }}">Home</a></li>
								<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="blog.html">About</a></li>
								<li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="event.html">Bands</a></li>
								<li id="menu-item-390" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="audio.html">Featured</a></li>
								<li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="photo.html">Review</a></li>
								<li id="menu-item-645" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub"><a>Events</a>
									<ul>
										<li id="menu-item-644" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://soundwave.wizedesign.com/contact-2/">BSF</a></li>
										<li id="menu-item-658" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://soundwave.wizedesign.com/columns/">Band on Your</a></li>
									</ul>
								</li>
								<li id="menu-item-374" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="artist.html">Blog</a></li>
								<li id="menu-item-374" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="artist.html">News</a></li>
								<li id="menu-item-645" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="contact.html">Contact</a>
								<li id="menu-item-645" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub"><a>Media</a>
									<ul>
										<li id="menu-item-644" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://soundwave.wizedesign.com/contact-2/">Photos</a></li>
										<li id="menu-item-658" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://soundwave.wizedesign.com/columns/">Videos</a></li>
										<li id="menu-item-658" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://soundwave.wizedesign.com/columns/">Downloads</a></li>
									</ul>
								</li>
								<!--
								<li id="menu-item-645" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#">About</a>
								<li id="menu-item-645" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="contact.html">Contact</a>
								<li id="menu-item-614" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://soundwave.wizedesign.com/dj-mixes/">DJ Mixes</a></li>
								-->
								
							</ul>
						</div>	
					</div>
			      	<!-- end .main-navigation -->	

			      	<!-- Social Header -->
			      	<div class="header-social">
			      		<ul id="footer-social">
			        		<li class="facebook footer-social"><a href="#" target="_blank"></a></li>
			            	<li class="twitter footer-social"><a href="#" target="_blank"></a></li>
			            	<li class="vimeo footer-social"><a href="#" target="_blank"></a></li>
			            	<li class="flickr1 footer-social"><a href="#" target="_blank"></a></li>
			            	<li class="beatport footer-social"><a href="#" target="_blank"></a></li>
			            </ul>
				  	</div>
				  	<!-- end .header-social -->
				
			  	</div>
			   	<!-- end #main -->     
			
			</div>
			<!-- end #header -->

			<!-- Wrap -->
			<div class="wrap clearfix">

				<div id="wrcon">

					<div id="content">

						<div id="slider-large">
		      				
		      				<div class="flexslider">
		         
		         				<ul class="slides">			
		            				<li>
		            					<a href="#"><img src="{{ Theme::asset('images/8212425588_d02c3d529d_b-985x430.jpg') }}" alt="Join SoundWave" /></a>
		               					<a href="#"><div class="flex-title-large">Join SoundWave</div></a>
		               					<a href="#"><div class="flex-des-large">Theme Wordpress</div></a>
		            				</li>			
						            <li>
						            	<img src="{{ Theme::asset('images/aaa4-985x430.jpg') }}" alt="Mix Dj Andi Clubbing" /> 
						                <div class="flex-title-large">Mix Dj Andi Clubbing</div>
						                <div class="flex-des-large">A new clubbing concept, a frenetic show</div>
						            </li>			
						            <li>
						               <a href="#"><img src="{{ Theme::asset('images/zz1-985x430.jpg') }}" alt="We Are Waiting You Party" /></a>
						               <a href="#"><div class="flex-title-large">We Are Waiting You Party</div></a>
						            </li>			
						            <li>
						                <img src="{{ Theme::asset('images/test1-985x430.jpg') }}" alt="Your Happiness Is More Special" /> 
						                <div class="flex-title-large">Your Happiness Is More Special</div>
						            </li>	
		         				</ul>

		      				</div><!-- end .flexslider -->

		   				</div><!-- end #slider-large --> 

						<div class="col-left-home clearfix">
							
							<div class="title-home">
								<h3>Latest Blog</h3>
							</div>	
		   	
							<div class="home-shr clearfix">

								<div class="home-width">
		 
			 						<div class="bl1shr-col">
			 							<div class="bl1shr-cover">
							               <div class="wz-wrap wz-hover">
							                  <img src="{{ Theme::asset('images/8438287284_58a4666848_b-250x200.jpg')" alt="Big city party on the streets" />
							                  <div class="he-view">
							                     <div class="bg a0" data-animate="fadeIn">
							                        <a href="blog-content.html" class="bl1shr-link a2" data-animate="zoomIn"></a>
							                        <a href="{{ Theme::asset('images/8438287284_58a4666848_b-950x633.jpg') }}" class="bl1shr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>	
							                     </div>
							                  </div>	  
							               </div> 
							            </div><!-- end .blog-home-cover --> 
			    
			    						<h2 class="bl1shr-title"><a href="blog-content.html">Big city party on the streets</a></h2>

							            <div class="bl1shr-text">
							               <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a metus diam, sit amet tristique risus. Aliquam dictum, lectus vel consequat malesuada, enim metus blandit urna, vel sodales tellus nibh eget tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem  ...</p>
							            </div>	  

										<div class="bl1shr-info">
										   <p class="bl1shr-user">admin</p> 
										   <p class="bl1shr-date">April 24th, 2013</p> 
										   <p class="bl1shr-comment">No comments</p>  
										</div><!-- end .bl1shr-info -->
			 						</div><!-- end .bl1shr-col -->
		 
									<div class="bl1shr-col">
							            <div class="bl1shr-cover">
							               <div class="wz-wrap wz-hover">
							                  <img src="{{ Theme::asset('images/8468781786_82b75e3606_b-250x200.jpg') }}" alt="Clubbing Royalty Back Basics Turns" />
							                  <div class="he-view">
							                     <div class="bg a0" data-animate="fadeIn">
							                        <a href="blog-content.html" class="bl1shr-link a2" data-animate="zoomIn"></a>
							                        <a href="{{ Theme::asset('images/8468781786_82b75e3606_b-950x633.jpg') }}" class="bl1shr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>	
							                     </div>
							                  </div>	  
							               </div> 
							            </div><!-- end .blog-home-cover --> 
			    						
			    						<h2 class="bl1shr-title"><a href="blog-content.html">Clubbing Royalty Back Basics Turns</a></h2>

							            <div class="bl1shr-text">
							               <p> Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales  ...</p>
							            </div>	  

							            <div class="bl1shr-info">
							               <p class="bl1shr-user">admin</p> 
							               <p class="bl1shr-date">April 24th, 2013</p> 
							               <p class="bl1shr-comment">No comments</p>  
							            </div><!-- end .bl1shr-info -->
			 						</div><!-- end .bl1shr-col -->

								</div><!-- end .home-width -->

							</div><!-- end .home-shr clearfix -->

							<div class="title-home">
								<h3>Latest Event</h3>
							</div>

		   					<div class="home-shr clearfix">
		     
		    					<div class="home-width">
		        
		        					<div class="ev1shr-col">
		            
							            <div class="ev1shr-cover">
							               <div class="wz-wrap wz-hover">
							                  <img src="{{ Theme::asset('images/sunrise-150x200.jpg') }}" alt="Magic Island Beach" />	
							                  <div class="he-view">
							                     <div class="bg a1" data-animate="fadeIn">	
							                        <a href="event-content.html" class="ev1shr-link a2" data-animate="zoomIn"></a>
							                        <a href="images/sunrise.jpg" class="ev1shr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
							                        <div class="ev1shr-tickets"><a href="#" >Buy Tickets</a></div><!-- end #event-tickets -->	
							                     </div>
							                  </div>	
							               </div>			
							            </div><!-- end .ev1shr-cover -->

		            					<div class="ev1shr-title"><a href="event-content.html">Magic Island Beach</a></div>
		            					
		            					<div class="ev1shr-info">
											<div class="ev1shr-information">
		               							<div class="ev1shr-location">Constanta, Romania</div>
		               							<div class="ev1shr-venue">Kudos Beach</div>
		                   						<div class="ev1shr-hour">09:00 am - 06:00 pm</div>
					 						</div> 
							               <div class="ev1shr-data">
							                     <div class="ev1shr-day">29 Sep</div>
							                     <div class="ev1shr-week">Friday</div>
							               </div>
				    					</div><!-- end .ev1shr-info -->
		         					</div><!-- end .ev1shr-col -->   

		         					<div class="ev1shr-col">

		            					<div class="ev1shr-cover">
							               <div class="wz-wrap wz-hover">
							                  <img src="{{ Theme::asset('images/6796822668_a680431e98_b-150x200.jpg') }}" alt="Every Hot Summer" />	
							                  <div class="he-view">
							                     <div class="bg a1" data-animate="fadeIn">	
							                        <a href="event-content.html" class="ev1shr-link a2" data-animate="zoomIn"></a>
							                        <a href="{{ Theme::asset('images/04/6796822668_a680431e98_b-950x629.jpg') }}" class="ev1shr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
							                        <div class="ev1shr-cancel">Free Entry</div>	
							                     </div>
							                  </div>	
							               </div>			
							            </div><!-- end .ev1shr-cover -->
		            					
		            					<div class="ev1shr-title"><a href="event-content.html">Every Hot Summer</a></div>
		            
		            					<div class="ev1shr-info">
											<div class="ev1shr-information">
								               	<div class="ev1shr-location">Targoviste, Romania</div>
								               	<div class="ev1shr-venue">Tao Club</div>
								                <div class="ev1shr-hour">All Day</div>
											</div> 
							               	<div class="ev1shr-data">
							                    <div class="ev1shr-day">31 Mar</div>
							                    <div class="ev1shr-week">Friday</div>
							               </div>
									    </div><!-- end .ev1shr-info -->
		         					</div><!-- end .ev1shr-col -->     
		      					</div><!-- end .home-width -->
		   					</div><!-- end .home-shr clearfix -->

							<div class="title-home"><h3>Latest Audio</h3></div> 

							<div class="home-shr clearfix">
						
								<div class="adshr-col">
		 			
		 							<div class="home-width">
		    		
			    						<div class="adshr-fix wz-last">
			       							<div class="adshr-cover">
												<div class="wz-wrap wz-hover">
													<img src="{{ Theme::asset('images/7254264-212x212.jpg') }}" alt="Heavy Artillery Vid" />	
													<div class="he-view">
														<div class="bg a0" data-animate="fadeIn">
															<a href="audio-content.html" class="adshr-link a2" data-animate="zoomIn"></a>
															<a href="{{ Theme::asset('images/7254264.jpg') }}" class="adshr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
														</div>
													</div>			
												</div>
			       							</div><!-- end .adshr-cover -->  

							               	<a href="audio-content.html">
							                  	<div class="adshr-info">	
							                    	<div class="adshr-title">Heavy Artillery Vid</div>
							                     	<div class="adshr-des"> Tech House</div>
												</div>
							               	</a>
			    						</div><!-- end .adshr-fix wz-last -->

									    <div class="adshr-fix wz-last">
									       <div class="adshr-cover">
									          <div class="wz-wrap wz-hover">
									             <img src="{{ Theme::asset('images/7374826-212x212.jpg') }}" alt="Strictly Rhythm" />	
									             <div class="he-view">
									                <div class="bg a0" data-animate="fadeIn">
									                   <a href="audio-content.html" class="adshr-link a2" data-animate="zoomIn"></a>
									                   <a href="{{ Theme::asset('images/7374826.jpg') }}" class="adshr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
													</div>
									             </div>			
									          </div>
									       </div><!-- end .adshr-cover -->  

									       <a href="audio-content.html">
									          <div class="adshr-info">	
									             <div class="adshr-title">Strictly Rhythm</div>
									             <div class="adshr-des"> Trance
									             </div>

									          </div>
									       </a>
									    </div><!-- end .adshr-fix wz-last -->

							            <div class="adshr-fix wz-last">
							               <div class="adshr-cover">
							                  <div class="wz-wrap wz-hover">
							                     <img src="images/5786892-212x212.jpg" alt="Great Nights Party" />	
							                     <div class="he-view">
							                        <div class="bg a0" data-animate="fadeIn">
							                           <a href="audio-content.html" class="adshr-link a2" data-animate="zoomIn"></a>
							                           <a href="{{ Theme::asset('images/5786892.jpg') }}" class="adshr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
													</div>
							                     </div>			
							                  </div>
							               </div><!-- end .adshr-cover -->  
							               <a href="audio-content.html/">
							                  <div class="adshr-info">	
							                     <div class="adshr-title">Great Nights Party</div>
							                     <div class="adshr-des"> Tech House
							                     </div>
									
							                  </div>
							               </a>
							            </div><!-- end .adshr-fix wz-last --> 
		 							</div><!-- end .home-width -->
								</div><!-- end .adshr-col -->
							</div><!-- end .home-shr fixed -->

							<div class="title-home"><h3>Upcoming Events</h3></div>

							<div class="home-shr clearfix">
						
								<div class="home-width">
		 			
			 						<div class="ev2shr-col"> 		 
				   						<div class="ev2shr-data">
											<div class="ev2shr-day">29</div>
											<div class="ev2shr-month">Sep</div>
											<div class="ev2shr-year">2017</div>
				   						</div><!-- end .ev2shr-data -->

							            <div class="ev2shr-cover">
							               <div class="wz-wrap wz-hover">
							                  <img src="images/sunrise-166x166.jpg" alt="Magic Island Beach" />	
							                  <div class="he-view">
							                     <div class="bg a1" data-animate="fadeIn">
							                        <a href="event-content.html" class="ev2shr-link a2" data-animate="zoomIn"></a>
							                        <a href="{{ Theme::asset('images/sunrise.jpg') }}" class="ev2shr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>						
							                     </div>
							                  </div>	
							               </div>		
							            </div><!-- end .ev2shr-cover -->   

			    						<h2 class="ev2shr-title"><a href="event-content.html">Magic Island Beach</a></h2>
			    						
			    						<div class="ev2shr-info">
			           						<div class="ev2shr-hour">09:00 am - 06:00 pm</div>	
			       							<div class="ev2shr-venue">Kudos Beach</div>
			    						</div><!-- end .ev2shr-info -->

			    						<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a metus diam, sit amet tristique risus. Aliquam dictum, lectus vel consequat malesuada, enim metus  ...</p>
			    
			    						<div class="ev2shr-tickets"><a href="#" >Buy Tickets</a></div>    
			    						<div class="ev2shr-week">Friday</div>
			 						</div><!-- end .ev2shr-col -->

			 						<div class="ev2shr-col"> 		 
				   						<div class="ev2shr-data">
											<div class="ev2shr-day">31</div>
											<div class="ev2shr-month">Mar</div>
											<div class="ev2shr-year">2017</div>
				   						</div><!-- end .ev2shr-data -->

							            <div class="ev2shr-cover">
							               <div class="wz-wrap wz-hover">
							                  <img src="{{ Theme::asset('images/6796822668_a680431e98_b-166x166.jpg') }}" alt="Every Hot Summer" />	
							                  <div class="he-view">
							                     <div class="bg a1" data-animate="fadeIn">
							                        <a href="event-content.html" class="ev2shr-link a2" data-animate="zoomIn"></a>
							                        <a href="{{ Theme::asset('images/6796822668_a680431e98_b-950x629.jpg') }}" class="ev2shr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>						
							                     </div>
							                  </div>	
							               </div>		
							            </div><!-- end .ev2shr-cover -->   

			    						<h2 class="ev2shr-title"><a href="event-content.html">Every Hot Summer</a></h2>
			    
			    						<div class="ev2shr-info">
			           						<div class="ev2shr-hour">All Day</div>	
			       							<div class="ev2shr-venue">Tao Club</div>
			    						</div><!-- end .ev2shr-info -->

			    						<p> Cras eget augue vitae neque euismod congue quis non erat. Praesent eget eros felis. Cras elementum pulvinar est, non imperdiet magna placerat eget. Integer  ...</p>
			    
			    						<div class="ev2shr-cancel">Free Entry</div>    
			    						<div class="ev2shr-week">Friday</div>
			 						</div><!-- end .ev2shr-col -->
								</div><!-- end .home-width -->
							</div><!-- end .home-shr clearfix -->

							<div class="title-home">
								<h3>Latest Photo</h3>
							</div> 

		    				<div class="home-shr clearfix">
			  					<div class="phshr-col">
				 					<div class="home-width">
							            <div class="phshr-fix wz-last">
							               <div class="phshr-cover">
							                  <div class="wz-wrap wz-hover">
							                     <img src="{{ Theme::asset('images/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_038.JPG1-212x140.jpg') }}" alt="Karmon Event Party" />	
							                     <div class="he-view">
							                        <div class="bg a0" data-animate="fadeIn">
							                           <a href="#" class="phshr-link a2" data-animate="zoomIn"></a>
							                           <a href="{{ Theme::asset('images/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_038.JPG1.jpg') }}" class="phshr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
							                        </div>
							                     </div>			
							                  </div>
							               </div><!-- end .phshr-cover -->  
							               <a href="#">
							                  <div class="phshr-info">	
							                     <div class="phshr-title">Karmon Event Party</div>
							                     <div class="phshr-des">Shade Club </div>
							                  </div>
							               </a>
							            </div><!-- end .phshr-fix wz-last -->

							            <div class="phshr-fix wz-last">
							               <div class="phshr-cover">
							                  <div class="wz-wrap wz-hover">
							                     <img src="{{ Theme::asset('images/3-212x140.jpg') }}" alt="Barocco Bar  For You" />	
							                     <div class="he-view">
							                        <div class="bg a0" data-animate="fadeIn">
							                           <a href="#" class="phshr-link a2" data-animate="zoomIn"></a>
							                           <a href="{{ Theme::asset('images/3-950x633.jpg') }}" class="phshr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
							                        </div>
							                     </div>			
							                  </div>
							               </div><!-- end .phshr-cover -->  
							               <a href="#">
							                  <div class="phshr-info">	
							                     <div class="phshr-title">Barocco Bar  For You</div>
							                     <div class="phshr-des">27 September 2013</div>
							                  </div>
							               </a>
							            </div><!-- end .phshr-fix wz-last -->

							            <div class="phshr-fix wz-last">
							               <div class="phshr-cover">
							                  <div class="wz-wrap wz-hover">
							                     <img src="{{ Theme::asset('images/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_044.JPG1-212x140.jpg') }}" alt="Petersburg Island Beach" />	
							                     <div class="he-view">
							                        <div class="bg a0" data-animate="fadeIn">
							                           <a href="#" class="phshr-link a2" data-animate="zoomIn"></a>
							                           <a href="{{ Theme::asset('images/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_044.JPG1-950x533.jpg') }}" class="phshr-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
							                        </div>
							                     </div>			
							                  </div>
							               </div><!-- end .phshr-cover -->  

							               <a href="#">
							                  <div class="phshr-info">	
							                     <div class="phshr-title">Petersburg Island Beach</div>
							                     <div class="phshr-des">Kudos Beach </div>
							                  </div>
							               </a>
							            </div><!-- end .phshr-fix wz-last -->    

									</div><!-- end .home-width -->
			  					
			  					</div><!-- end .phshr-col -->
		   					
		   					</div><!-- end .home-shr clearfix --></p>

						</div><!-- end .left-column -->

						<div class="sidebar-right">

		  					<div id="audio-widget-2" class="widget list-nav audio_widget">
		    			
		    					<div class="sidebarnav"><h3>Audio Player</h3></div>		
			
								<div class="widgets-col-player">
		
									<div class="adwdg-cover">
										<img src="{{ Theme::asset('images/5786892-97x97.jpg') }}" alt="Great Nights Party" />  
									</div><!-- end .adwdg-cover -->

									<div class="adwdg-title">
										<a href="audio-content.html" rel="bookmark" title="Great Nights Party">Great Nights Party</a>
									</div>


									<div class="adwdg-info">
										<div class="adwdg-artist">Dj Optick</div>
										<div class="adwdg-genre">Tech House</div>
										<div class="adwdg-data">13 Nov  2012</div>
									</div> 
	  

								    <ul class="fap-my-playlist"> 

										<li><a href="{{ Theme::asset('media/Cars-Girls-Original-Club-Mix1.mp3')" title="Cars & Girls (Original Club Mix)" rel="{{ Theme::asset('images/5786892-97x97.jpg') }}" data-meta="#player-meta-widget" class="no-ajax">Cars & Girls (Original Club Mix)</a></li>
										<li><a href="{{ Theme::asset('media/No-Haste-Paul-C.-Rmx1.mp3') }}" title="No Haste (Paul C. Rmx)" rel="{{ Theme::asset('images/5786892-97x97.jpg') }}" data-meta="#player-meta-widget" class="no-ajax">No Haste (Paul C. Rmx)</a></li>
										<li><a href="{{ Theme::asset('media/Mas-Que-Nada-DJ-PP-Remix1.mp3') }}" title="Mas Que Nada (DJ PP Remix)" rel="{{ Theme::asset('images/5786892-97x97.jpg') }}" data-meta="#player-meta-widget" class="no-ajax">Mas Que Nada (DJ PP Remix)</a></li>
										<li><a href="{{ Theme::asset('media/Culture-101-Original-Mix1.mp3') }}" title="Culture 101 (Original Mix)" rel="{{ Theme::asset('images/5786892-97x97.jpg') }}" data-meta="#player-meta-widget" class="no-ajax">Culture 101 (Original Mix)</a></li>
										<li><a href="{{ Theme::asset('media/Boomeer-Johan-Dresser-Remix1.mp3') }}" title="Boomeer (Johan Dresser Remix)" rel="{{ Theme::asset('images/5786892-97x97.jpg') }}" data-meta="#player-meta-widget" class="no-ajax">Boomeer (Johan Dresser Remix)</a></li>
										<li><a href="{{ Theme::asset('media/Exhale-Original-Mix1.mp3') }}" title="Exhale (Original Mix)" rel="{{ Theme::asset('images/5786892-97x97.jpg') }}" data-meta="#player-meta-widget" class="no-ajax">Exhale (Original Mix)</a></li>
										<li><a href="{{ Theme::asset('media/Rainbow-Original-Mix1.mp3') }}" title="Rainbow (Original Mix)" rel="{{ Theme::asset('images/5786892-97x97.jpg') }}" data-meta="#player-meta-widget" class="no-ajax">Rainbow (Original Mix)</a></li> 
								    </ul>

									<span id="player-meta-widget">
										<a href="audio-content.html">Great Nights Party</a>
										<div> 13 Nov  2012 | Tech House </div>
									</span>

									<div class="adwdg-buy-now">
										<div class="adwdg-now">Buy now</div>
								        <div class="widget-audio-buy"><a href="#">iTunes</a></div>
								        <div class="widget-audio-buy"><a href="#">Beatport</a></div>
								    </div><!-- .adwdg-buy-now-->

								</div>
			
	  						</div>

		  					<br/>
		  
	  						<div id="events-widget-2" class="widget list-nav events_widget">
	    						<div class="sidebarnav"><h3>Upcoming Events</h3></div>
	    						<div class="widgets-col"></div><!-- .widgets-col-->		
	  						</div>

		  					<br/>

		  					<div id="photos-widget-2" class="widget list-nav phwdg_wz">
		    
		    					<div class="sidebarnav"><h3>Photos Party</h3></div>		 

							    <div class="phwdg">

							      	<div class="phwdg-col">
								
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-950x545.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/06.04.2013-Karmon@-AllTimeClubbing-4th-Anniversary-@-Club-Kristal-by-Adrian-Stanescu_016.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->

								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-950x534.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_002.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->
							        
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-950x562.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/02-03-2013-Mihai-Popoviciu-si-Jay-Bliss@Barocco-by-Adrian-Stanescu_032.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->
								        
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-950x557.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_058.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->
								        
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-950x553.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_053.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->
								        
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-950x541.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/10-02-2013-Adrian-EftimieCaval@Barocco-by-Adrian-Stanescu_006.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->
								        
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-950x569.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/28-04-2013-Adrian-Eftimie-si-Kool-@-Black-Jack-by-Mike_086.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->
								        
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-950x542.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/04-03-2013-NushaBetaVika-Jigulina@Staff-Party-by-Adrian-Stanescu_064.JPG-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->
								        
								        <div class="phwdg-cover">
									  		<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-950x629.jpg" class="photo-preview" data-rel="prettyPhoto-widget[pp_gallery]"><img width="87" height="87" src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-87x87.jpg" class="attachment-photo-widget size-photo-widget" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/05/6316444450_322e3a5d50_b-97x97.jpg 97w" sizes="(max-width: 87px) 100vw, 87px" /></a>
										</div><!-- end .phwdg-cover -->                                  	

	      							</div><!-- .photo-widgets-->

		    					</div><!-- end .widgets-col-photo --> 
				
		  					</div>

		  					<br/>

		  					<div id="videos-widget-2" class="widget list-nav videos_widget">

		    					<div class="sidebarnav"><h3>Latest Videos</h3></div>		
			
								<div class="vdwdg">                                     
									<div class="vdwdg-cover">
										<div class="wz-wrap wz-hover">
											<img src="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/575356_535388973161408_380061256_n-270x160.jpg" alt="Davide Squillace Party" />	
											<div class="he-view">
												<div class="bg a0" data-animate="fadeIn">
													<a href="http://youtu.be/FkRDuP4WZv0" class="vdwdg-link a2" data-animate="zoomIn" data-rel="prettyPhoto"></a>
													<a href="http://soundwave.wizedesign.com/wp-content/uploads/2013/05/575356_535388973161408_380061256_n.jpg" class="vdwdg-zoom a2" data-animate="zoomIn" data-rel="prettyPhoto-cover"></a>
												</div>
											</div>			
										</div>
								    </div><!-- end .vdwdg-cover -->

									<a href="http://youtu.be/FkRDuP4WZv0" data-rel="prettyPhoto">
										<div class="vdwdg-info">		
											<div class="vdpage-title">Davide Squillace Party</div>
											<div class="vdpage-des">Zomer Park </div>
										</div>
									</a>		


								</div><!-- .vdwdg -->	

		  					</div>

		  					<br/>

		  					<div id="soundcloud-widget-2" class="widget list-nav soundcloud_widget">
		    	
		    					<div class="sidebarnav"><h3>SoundCloud Mix</h3></div>		

	    						<div class="widgets-col">
									<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F88117193&show_artwork=true"></iframe>
	    						</div><!-- end .widgets-col -->

							</div>

							<br/>

						</div><!-- end .sidebar-right -->

					</div><!-- end #content -->

				</div><!-- end #wrcon -->
				
			</div><!-- end #wrap -->

			<!-- Footer -->
			<div class="footer-bar"></div>

			<div id="footer">
	  
	  			<div class="footer-row clearfix">
				
	    			<div class="footer-col">

	      				<div id="text-2" class="footer-widget widget_text">
	      					<h4>Sound Wave</h4>			

	      					<div class="textwidget">SoundWave is the only place where you can enjoy music & radio while you look up for available or upcoming events, information about artists, photos, videos and Dj Mixes. SoundWave is the appropriate theme for dj’s and club music fans. It’s simple to use and personalize, comes loaded with strong tools for events managing, sharing music, videos and much more. </div>
			
	      				</div>    
	    			</div><!-- end .footer-col -->
					
	    			<div class="footer-col">

	      				<div id="text-3" class="footer-widget widget_text">
	      					<h4>Video YouTube</h4>			
	      					<div class="textwidget"><iframe width="240" height="235" src="http://www.youtube.com/embed/aGjZVQlITJo" frameborder="0" allowfullscreen></iframe></div>
						</div>    
	    			</div><!-- end .footer-col -->
					
	    			<div class="footer-col">

	      				<div id="blog-widget-2" class="footer-widget blog_widget">
	      					<h4>Recent Posts</h4>		
		
							<div class="widgets-col">
								<div class="blwdg">                                        
	        						<div class="blwdg-post"> 
										<div class="blwdg-cover"> 
	            							<img width="65" height="65" src="{{ Theme::asset('images/8438287284_58a4666848_b-87x87.jpg') }}" class="attachment-65x65 size-65x65 wp-post-image" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8438287284_58a4666848_b-97x97.jpg 97w" sizes="(max-width: 65px) 100vw, 65px" />
										</div>		

										<div class="blwdg-text"> 
	            							<a href="http://soundwave.wizedesign.com/big-city-party-on-the-streets/" rel="bookmark" title="Big city party on the streets">Big city party on the streets</a>
											<div class="blwdg-data">April 24th, 2013</div>
										</div>
	    							</div>

									<div class="blwdg-post"> 
										<div class="blwdg-cover"> 
							            	<img width="65" height="65" src="{{ Theme::asset('images/8468781786_82b75e3606_b-87x87.jpg') }}" class="attachment-65x65 size-65x65 wp-post-image" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/8468781786_82b75e3606_b-97x97.jpg 97w" sizes="(max-width: 65px) 100vw, 65px" />
										</div>		
										<div class="blwdg-text"> 
							            	<a href="http://soundwave.wizedesign.com/clubbing-royalty-back-basics-turns/" rel="bookmark" title="Clubbing Royalty Back Basics Turns">Clubbing Royalty Back Basics Turns</a>
											<div class="blwdg-data">April 24th, 2013</div>
										</div>

	    							</div>

									<div class="blwdg-post"> 
										<div class="blwdg-cover"> 
								        	<img width="65" height="65" src="{{ Theme::asset('images/3000036089_4f81c6c670_b-87x87.jpg') }}" class="attachment-65x65 size-65x65 wp-post-image" alt="" srcset="http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-87x87.jpg 87w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-150x150.jpg 150w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-50x50.jpg 50w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-185x185.jpg 185w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-166x166.jpg 166w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-212x212.jpg 212w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-235x235.jpg 235w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-318x318.jpg 318w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-275x275.jpg 275w, http://soundwave.wizedesign.com/wp-content/uploads/2013/04/3000036089_4f81c6c670_b-97x97.jpg 97w" sizes="(max-width: 65px) 100vw, 65px" />
										</div>		
										<div class="blwdg-text"> 
								        	<a href="#" rel="bookmark" title="A New Way to Bleed Party">A New Way to Bleed Party</a>
											<div class="blwdg-data">April 24th, 2013</div>
										</div>
		    						</div>
	  
								</div><!-- end .widgets-col-->	

							</div>
			
	      				</div>    
	    
	    			</div><!-- end .footer-col -->
					
		    		<div class="footer-col">

		      			<div id="soundcloud-widget-3" class="footer-widget soundcloud_widget">
		      				<h4>SoundCloud</h4>		

		      				<div class="widgets-col">
								<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F290414336&show_artwork=true"></iframe>
		    				</div><!-- end .widgets-col -->

						</div>    
		    
		    		</div><!-- end .footer-col -->	
	  
	  			</div><!-- end .footer-row clearfix -->	

			</div><!-- end #footer -->

			<div class="footer-ls">
				<div id="footer-ls-col">
					<a href="#" target="_blank">
						<div class="facebook"></div>
					</a>
					<a href="#" target="_blank">
						<div class="twitter"></div>
					</a>
					<a href="#" target="_blank">
						<div class="vimeo"></div>
					</a>
					<a href="#" target="_blank">
						<div class="beatport"></div>
					</a>

					<a href="#" target="_blank">
						<div class="flickr"></div>
					</a>
				</div>

			</div>

			<div id="footer-bottom"> 
		  		<div class="footer-row">
		    		<div class="footer-bottom-copyright">&copy;2018 SoundWave &#8211; Wordpress Theme. All Rights Reserved.</div><!-- end .footer-bottom-copyright -->
		    
		    		<div class="footer-bottom-social">
		      			<ul id="footer-social">
		        			<li class="facebook footer-social"><a href="#" target="_blank"></a></li>
		        			<li class="twitter footer-social"><a href="#" target="_blank"></a></li>
		        			<li class="vimeo footer-social"><a href="#" target="_blank"></a></li>
		        			<li class="flickr1 footer-social"><a href="#" target="_blank"></a></li>
		        			<li class="beatport footer-social"><a href="#" target="_blank"></a></li>
		        		</ul>
		    		</div><!-- end .footer-bottom-social -->
			
		  		</div><!-- end .footer-row -->
			</div><!-- end .footer-bottom -->

			<script>
				//<![CDATA[
				jQuery(document).ready(function($){
					$.backstretch("{{ Theme::asset('images/background.jpg') }}");
						if ( jQuery(".flexslider").length && jQuery() ) {
						jQuery(".flexslider").flexslider({
							controlNav: true,
							animationLoop: true,  
							controlsContainer:"",
							pauseOnAction: false,
							pauseOnHover: true,
							smoothHeight: true,
							nextText:"&rsaquo;",
							prevText:"&lsaquo;",
							keyboardNav: false, 		
							slideshowSpeed: 3000,
							animationSpeed: 500,
					        start: function(slider) {
				            slider.removeClass("loading");
				            }
						});			
					}
				});
				//]]>
			</script> 
	 
			<script type='text/javascript' src="{{ Theme::asset('js/flexslider.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/fullwidthAudioPlayer.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/jPlayerRadio.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/prettyPhoto.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/backstretch.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/hoverex.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/gmap.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/idTabs.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/firstword.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/scriptnoajax.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/script.js') }}"></script>
			<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false&#038;ver=4.7.8'></script>
			<script type='text/javascript' src="{{ Theme::asset('js/comment-reply.min.js') }}"></script>
			<script type='text/javascript' src="{{ Theme::asset('js/wp-embed.min.js') }}"></script>
		</div><!-- END#contback -->
	</body>
</html>