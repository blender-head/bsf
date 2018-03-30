@if($status == 'Published')
	<span class="label label-success status-text-{{ $uuid }}">{{ $status }}</span>
@else
	<span class="label label-info status-text-{{ $uuid }}">{{ $status }}</span>
@endif