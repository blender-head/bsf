<a data-hover="tooltip" title="Edit" data-placement="bottom" href="{{ url('/') . '/' . $edit_url . '?slug=' . $data->slug }}" class="table-action-btn on-default edit-row"><i class="md md-edit"></i></a>

@if($data->status == 'Published')
    <a data-hover="tooltip" title="Unpublish" data-status="0" data-placement="bottom" href="#" class="table-action-btn on-default edit-row set-status status-button-{{ $data->uuid }}" data-id="{{ $data->uuid }}"><i class="status-button-icon-{{ $data->uuid }} md md-close"></i></a>
@else
	<a data-hover="tooltip" title="Publish" data-status="1" data-placement="bottom" href="#" class="table-action-btn on-default edit-row set-status status-button-{{ $data->uuid }}" data-id="{{ $data->uuid }}"><i class="status-button-icon-{{ $data->uuid }} md md-done"></i></a>
@endif

<a data-hover="tooltip" title="Delete" href="#" data-placement="bottom" class="table-action-btn on-default remove-row delete" data-id="{{ $data->uuid }}"><i class="md md-delete"></i></a>