<div class="widget ewf_widget_latest_posts">
                            
    <h4 class="widget-title">Latest Posts</h4>

    @if(!$latest_posts->isEmpty())
        <ul>
            @foreach($latest_posts as $blog)
                <li>
                    <!--<img src="{{ $blog->media->full_uri }}" alt=""> -->
                    <img src="{{ Theme::asset('content/blog-post/75x75-1.jpg') }}" alt=""> 
                    <a class="title" href="{{ url('blog/' . $blog->slug ) }}">{{ $blog->title }}</a>
                    <p>
                        <a href="#">{{ date('M d, y', strtotime($blog->created_at)) }}</a> /
                        <a href="#">{{ $blog->comments->count() }} <i class="fa fa-comment"></i></a>
                    </p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No latest posts found.</p>
    @endif
    
</div><!-- end .ewf_widget_latest_posts -->