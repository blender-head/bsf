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
    
    @if($blogs->total() > 0)
        @foreach($blogs as $blog)
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
                                                                        
                <div class="post-content">
                    
                    <p>
                        @if($blog->excerpt)
                            {{ $blog->excerpt }}
                        @else
                            {{ str_limit(strip_tags($blog->content), 200) }}
                        @endif
                    </p>
                    
                    <p><a class="more-link btn" href="{{ url('blog/' . $blog->slug ) }}">Read more</a></p>
                
                </div><!-- .post-content -->
                
            </div><!-- end .post --> 
        @endforeach
    @else
        <h4>Sorry. No posts found.</h4>
    @endif
    
    
@stop

@section('blog_pagination')            
    @include('partials.pagination', ['paginator' => $blogs])
@stop
