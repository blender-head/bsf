@extends('layouts.blog_2')

@section('blog_header')
    <div class="parallax" id="page-header" style="background-image:url({{ Theme::asset('content/backgrounds/1920x800-11.jpg') }});">
    
        <div class="container">
            <div class="row">
                <div class="span12">

                    <h3>Blog</h3>
                
                </div><!-- end .span12 -->
            </div><!-- end .row -->
        </div><!-- end .container -->
        
    </div><!-- end #page-header -->

    <div class="container">    
        <div class="row">
            <div class="span12">

                <div class="headline">
                    
                    <h2>The Blog</h2>
                    
                    <h5>Nulla ut semper augue, eget euismod quam.</h5>
                    
                </div><!-- end .headline -->
            
            </div><!-- end .span12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
@stop

@section('blog_content')
    
    <div class="span4">

        <div class="post format-standard has-post-thumbnail hentry">
            
            <a href="blog-post.html" class="post-thumbnail">
                <img src="{{ Theme::asset('content/blog/360x290-1.jpg') }}" alt="" >  
            </a>
            
            <div class="post-header">
            
                <h3 class="post-title">
                    <a rel="bookmark" href="blog-post.html">Boat trip on the sea</a>
                </h3>
                
                <span class="posted-on">17<small>Nov</small></span>
                
            </div><!-- .post-header -->                                                        
                                                                    
            <div class="post-content">
                
                <p>Nulla ut semper augue, eget euismod quam. Quisque vel ligula nunc. Suspendisse eleifend massa 
                molestie, viverra eros id, maximus arcu. Nullam nec turpis sit amet augue.</p> 
                
                <p><a class="more-link" href="blog-post.html"><em>Read more</em></a></p>
            
            </div><!-- .post-content -->
            
        </div><!-- end .post --> 
    
    </div><!-- end .span4 -->
    <div class="span4">

        <div class="post format-standard has-post-thumbnail hentry">
            
            <a href="blog-post.html" class="post-thumbnail">
                <img src="{{ Theme::asset('content/blog/360x290-2.jpg') }}" alt="" >  
            </a>
            
            <div class="post-header">
            
                <h3 class="post-title">
                    <a rel="bookmark" href="blog-post.html">Spring in Japan</a>
                </h3>
                
                <span class="posted-on">16<small>Nov</small></span>
                
            </div><!-- .post-header -->                                                        
                                                                    
            <div class="post-content">
                
                <p>Phasellus eu metus venenatis, porta arcu ac, mattis lectus. Curabitur placerat elementum tellus 
                a volutpat. Sed facilisis, elit ut tincidunt sodales, elit urna ornare lectus.</p> 
                
                <p><a class="more-link" href="blog-post.html"><em>Read more</em></a></p>
            
            </div><!-- .post-content -->
            
        </div><!-- end .post --> 
    
    </div><!-- end .span4 -->
    <div class="span4">

        <div class="post format-standard has-post-thumbnail hentry">
            
            <a href="blog-post.html" class="post-thumbnail">
                <img src="{{ Theme::asset('content/blog/360x290-3.jpg') }}" alt="" >  
            </a>
            
            <div class="post-header">
            
                <h3 class="post-title">
                    <a rel="bookmark" href="blog-post.html">Colors make me happy</a>
                </h3>
                
                <span class="posted-on">15<small>Nov</small></span>
                
            </div><!-- .post-header -->                                                        
                                                                    
            <div class="post-content">
                
                <p>Vivamus quis sem mollis, pretium quam eu, malesuada nisl. Phasellus pharetra velit iaculis, ornare 
                purus id, varius lacus. Cras in sagittis diam. In rhoncus in eleifend vehicula.</p> 
                
                <p><a class="more-link" href="blog-post.html"><em>Read more</em></a></p>
            
            </div><!-- .post-content -->
            
        </div><!-- end .post --> 
    
    </div><!-- end .span4 -->

    <div class="span4">

        <div class="post format-standard has-post-thumbnail hentry">
            
            <a href="blog-post.html" class="post-thumbnail">
                <img src="{{ Theme::asset('content/blog/360x290-1.jpg') }}" alt="" >  
            </a>
            
            <div class="post-header">
            
                <h3 class="post-title">
                    <a rel="bookmark" href="blog-post.html">Boat trip on the sea</a>
                </h3>
                
                <span class="posted-on">17<small>Nov</small></span>
                
            </div><!-- .post-header -->                                                        
                                                                    
            <div class="post-content">
                
                <p>Nulla ut semper augue, eget euismod quam. Quisque vel ligula nunc. Suspendisse eleifend massa 
                molestie, viverra eros id, maximus arcu. Nullam nec turpis sit amet augue.</p> 
                
                <p><a class="more-link" href="blog-post.html"><em>Read more</em></a></p>
            
            </div><!-- .post-content -->
            
        </div><!-- end .post --> 
    
    </div><!-- end .span4 -->
    <div class="span4">

        <div class="post format-standard has-post-thumbnail hentry">
            
            <a href="blog-post.html" class="post-thumbnail">
                <img src="{{ Theme::asset('content/blog/360x290-2.jpg') }}" alt="" >  
            </a>
            
            <div class="post-header">
            
                <h3 class="post-title">
                    <a rel="bookmark" href="blog-post.html">Spring in Japan</a>
                </h3>
                
                <span class="posted-on">16<small>Nov</small></span>
                
            </div><!-- .post-header -->                                                        
                                                                    
            <div class="post-content">
                
                <p>Phasellus eu metus venenatis, porta arcu ac, mattis lectus. Curabitur placerat elementum tellus 
                a volutpat. Sed facilisis, elit ut tincidunt sodales, elit urna ornare lectus.</p> 
                
                <p><a class="more-link" href="blog-post.html"><em>Read more</em></a></p>
            
            </div><!-- .post-content -->
            
        </div><!-- end .post --> 
    
    </div><!-- end .span4 -->
    <div class="span4">

        <div class="post format-standard has-post-thumbnail hentry">
            
            <a href="blog-post.html" class="post-thumbnail">
                <img src="{{ Theme::asset('content/blog/360x290-3.jpg') }}" alt="" >  
            </a>
            
            <div class="post-header">
            
                <h3 class="post-title">
                    <a rel="bookmark" href="blog-post.html">Colors make me happy</a>
                </h3>
                
                <span class="posted-on">15<small>Nov</small></span>
                
            </div><!-- .post-header -->                                                        
                                                                    
            <div class="post-content">
                
                <p>Vivamus quis sem mollis, pretium quam eu, malesuada nisl. Phasellus pharetra velit iaculis, ornare 
                purus id, varius lacus. Cras in sagittis diam. In rhoncus in eleifend vehicula.</p> 
                
                <p><a class="more-link" href="blog-post.html"><em>Read more</em></a></p>
            
            </div><!-- .post-content -->
            
        </div><!-- end .post --> 
    
    </div><!-- end .span4 -->
@stop

@section('blog_pagination')            
    <div class="container">
        <div class="row">
            <div class="span12">
            
                <div class="navigation pagination">
                    
                    <div class="nav-links">                             
                        <span class="page-numbers current"><span class="meta-nav screen-reader-text">Page</span>1</span>    
                        <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page</span>2</a>
                        <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page</span>3</a>
                    </div><!-- end .nav-links -->
                    
                </div><!-- end .navigation -->
            
            </div><!-- end .span12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
@stop
