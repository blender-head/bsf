@extends('layouts.blog_1')

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
    
    @foreach($blog as $blog)
        <div class="post format-standard has-post-thumbnail hentry">
        
            @if($blog->media_id)  
                <a href="{{ url('blog/' . $blog->slug ) }}" class="post-thumbnail">
                    <img src="{{ $blog->media->full_uri }}" alt="" >  
                </a>
            @endif
            
            <div class="post-header">
            
                <h3 class="post-title">
                    <a rel="bookmark" href="{{ url('blog/' . $blog->slug ) }}">{{ $blog->title }}</a>
                </h3>
                
                <span class="posted-on">{{ date('d', strtotime($blog->created_at)) }}<small>{{ date('M', strtotime($blog->created_at)) }}</small></span>
                <span class="byline">written by <a href="#">{{ $blog->user->full_name }}</a></span>
                <span class="cat-links">in <a href="{{ url('category/' . $blog->categories->slug ) }}">{{ $blog->categories->name }}</a></span>
                <span class="tags-links">tags: @include('partials.tags')</span>
                
            </div><!-- .post-header -->                                                        
                                                                    
            <div class="post-content">{!! $blog->content !!}</div><!-- .post-content -->
            
        </div><!-- end .post -->
    
    
        <div class="row">
            <div class="span3">
                
                <p>
                    <img src="{{ Theme::asset('content/blog-post/165x165.jpg') }}" alt="">
                </p>
                
            </div><!-- end .span3 -->
            <div class="span9">
                
                <h4 class="text-uppercase"><strong>About the author</strong></h4>
                
                <br>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vulputate risus dolor, a venenatis 
                erat mo lestie in. Etiam pellentesque, augue ac ullamcorper elementum, eros metus accumsan ante.</p>
                
                <div class="fixed">
                    
                    <a href="#" class="facebook-icon social-icon">
                        <i class="fa fa-facebook"></i>
                    </a>
                    
                    <a href="#" class="twitter-icon social-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                    
                    <a href="#" class="dribble-icon social-icon">
                        <i class="fa fa-dribbble"></i>
                    </a>
                                
                </div>
                
            </div><!-- end .span9 -->

        </div><!-- end .row -->

    @endforeach

    @include('partials.comment')
    
@stop

@section('blog_pagination')
@stop
