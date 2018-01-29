<a data-hover="tooltip" title="Edit" data-placement="bottom" href="{{ url('/') . '/' . $edit_url . '?slug=' . $data->slug }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
@if($data->status == 'Published')
    <a data-hover="tooltip" title="Unpublished" data-status="unpublished" data-placement="bottom" href="#" class="on-default edit-row set-status" data-id="{{ $data->id }}"><i class="fa fa-times"></i></a>
@elseif($data->status == 'Unpublished')
    <a data-hover="tooltip" title="Published" data-status="published" data-placement="bottom" href="#" class="on-default edit-row set-status" data-id="{{ $data->id }}"><i class="fa fa-check"></i></a>
@endif
<a data-hover="tooltip" title="Delete" href="#" class="on-default remove-row delete" data-id="{{ $data->id }}"><i class="fa fa-trash-o"></i></a>