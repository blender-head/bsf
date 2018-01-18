<div class="widget widget_tag_cloud">
                            
    <h4 class="widget-title">Tag cloud</h4>

    <div class="tagcloud">
        @foreach($tags as $tag)
            <a class="tag-link-1" title="1 topic" href="{{ url('tag/' . $tag->slug ) }}">{{ $tag->name }}</a>
        @endforeach
    </div>
    
</div><!-- end .widget_tag_cloud -->