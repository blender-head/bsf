@extends('layouts.front')

@section('title')
    Home
@stop

@section('content')
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
		                  <img src="{{ Theme::asset('images/8438287284_58a4666848_b-250x200.jpg') }}" alt="Big city party on the streets" />
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
@stop