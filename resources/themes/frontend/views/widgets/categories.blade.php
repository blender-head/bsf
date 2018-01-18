<div class="widget widget_categories">
                                   
    <h4 class="widget-title">Categories</h4>

    <ul>
    	@foreach($categories as $category)
    		<li class="cat-item"><a href="{{ url('category/' . $category->slug ) }}" title="View all posts filed under Photography">{{ $category->name }}</a></li>
    	@endforeach
    </ul>
    
</div><!-- end .widget_categories -->