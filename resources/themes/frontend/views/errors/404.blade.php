@extends('layouts.blog_no_sidebar')

@section('blog_header')
    <div class="parallax" id="page-header" style="background-image:url(content/backgrounds/1920x800-8.jpg);">
                
        <div class="container">
            <div class="row">
                <div class="span12">

                    <h3>Page not found</h3>
                
                </div><!-- end .span12 -->
            </div><!-- end .row -->
        </div><!-- end .container -->
        
    </div><!-- end #page-header -->
    
    <div class="container"> 
        <div class="row">
            <div class="offset3 span9">
                
                <div class="headline error">
                    
                    <h1>Ooops!</h1>
                    
                </div><!-- end .headline -->
                
            </div><!-- end .span9 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
@stop

@section('blog_content')
    
    <div class="container"> 
        <div class="row">
            <div class="span3"> 
                
                <h1 class="text-right"><strong>404</strong></h1>
                
            </div><!-- end .span3 -->
            <div class="span9">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet lorem ac orci dictum sodales 
                et eget orci. Vestibulum a laoreet dolor. Sed finibus vulputate nisl, at pulvinar nisi commodo ac. Proin 
                placerat auctor libero. Phasellus nec suscipit mi, sed faucibus purus.</p>
                
                <br>
                
                <p>
                    <a class="btn" href="{{ url('/') }}">Get me Home</a>
                </p>
                
                <!--<div class="divider shadow"></div>-->
                
            </div><!-- end .span9 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
    
    <br><br>
    
@stop

@section('blog_pagination')            

@stop
