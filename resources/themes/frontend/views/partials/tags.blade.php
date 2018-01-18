@if($blog->tags)
    <?php $last_key = end(array_keys($blog->tags)); ?>

	@foreach($blog->tags as $key => $tag)
	    @if($key == $last_key)
	        <a href="{{ url('tag/' . $tag['slug'] ) }}">{{ $tag['name'] }}</a>
	    @else
	        <a href="{{ url('tag/' . $tag['slug'] ) }}">{{ $tag['name'] }}</a>,
	    @endif  
	    
	@endforeach
@else
    {{ '-' }}
@endif