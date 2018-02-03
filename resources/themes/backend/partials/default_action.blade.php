<a data-hover="tooltip" title="Edit" data-placement="bottom" href="{{ url('/') . '/' . $edit_url . '?slug=' . $data->slug }}" class="table-action-btn on-default edit-row"><i class="md md-edit"></i></a>

@if($data->status == 'Published')
    <a data-hover="tooltip" title="Unpublished" data-status="unpublished" data-placement="bottom" href="#" class="table-action-btn on-default edit-row set-status" data-id="{{ $data->id }}"><i class="md md-close"></i></a>
@endif

<a data-hover="tooltip" title="Delete" href="#" data-placement="bottom" class="table-action-btn on-default remove-row delete" data-id="{{ $data->id }}"><i class="md md-delete"></i></a>