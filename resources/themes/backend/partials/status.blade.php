@if($status == 'Published')
	<span class="label label-success status-text-{{ $id }}">{{ $status }}</span>
@else
	<span class="label label-info status-text-{{ $id }}">{{ $status }}</span>
@endif