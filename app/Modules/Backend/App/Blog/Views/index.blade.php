@extends('layouts.admin')

@section('title')
    Blogs | Index
@stop

@section('content')
<div class="content">

	<div class="container">

		<!-- Page-Title -->
	    <div class="row">
	        <div class="col-sm-12">
	            <h4 class="page-title">Blogs</h4>
	            <p class="breadcrumb">
	                <a href="{{ route('blog.create') }}" type="button" class="btn btn-default waves-effect waves-light">Add New Blog</a>
	            </p>
	        </div>
	    </div>

	    <div class="row">
	    	<div class="col-sm-12">
	    		<div class="card-box table-responsive">
	    			<div class="text-muted font-13 m-b-30">
                        <div class="row">
                            <div class="col-md-3 width-13">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Bulk Actions <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="set-status-all" data-status="published" href="#">Publish</a></li>
                                        <li><a class="set-status-all" data-status="unpublished" href="#">Unpublish</a></li>
                                        <li><a class="delete-all" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-wrapper">
                    	<table id="blog-data" class="table table-striped table-bordered table-actions-bar">
	                    	<thead>
	                            <tr>
	                                <th><input type="checkbox" id="selectall"></th>
	                                <th>No</th>
	                                <th>Title</th>
	                                <th>Author</th>
	                                <th>Status</th>
	                                <th>Created Date</th>
	                                <th>Actions</th>
	                            </tr>
	                        </thead>
	                    </table>	
                    </div>
                    
	    		</div>
	    	</div>
	    </div>

	</div>
    

</div> <!-- content -->
@stop

@section('scripts')
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.15/api/fnMultiFilter.js"></script>

	<script type="text/javascript">
        var form_element = '#create-blog';
        var data_selector = 'blog';
        var op_url = baseUrl + '/blogs/delete';
        var publish_url = baseUrl + '/blogs/set_status';
        var redirect_url = baseUrl + '/blogs/index';
        var op_source = 'Blog';
        var delete_url = baseUrl + '/blogs/delete';
        var publish_url = baseUrl + '/blogs/set_status';
        var token = "{{ csrf_token() }}";
        var datatable_el = "#blog-data";
    </script>
@stop

@section('additional_scripts')
	<script src="{{ Theme::asset('js/opManager.js') }}"></script>

    <script type="text/javascript">

    	$(document).ready(function() {
      		var datatable_url = baseUrl + '/blogs/index';
      		var datatable_loader_el = ".table-wrapper";

      		ajax_data_table(datatable_el, datatable_loader_el, datatable_url);

      		var op_type = '';

      		$('.search_op').click(function() {
        
        		var op = $(this).data('op');

        		var name_keyword = $('.name_keyword').val();

		        if(op == 'search')
		        {
		          if(!name_keyword)
		          {
		            return false;
		          }

		          op_type = 'search';
		        }

        		var table = $('#blog-data').DataTable();

        		table.ajax.url(baseUrl + 'pm/master_data/bank/post_search');

		        if(op == 'reset')
		        {
		          if(!op_type)
		          {
		            return false;
		          }
		          else if(op_type == 'search')
		          {
		            var name_keyword = '';

		            $('.name_keyword').val('');
		            
		            op_type = ''  
		          }
		        }

        
        	table
          		.column(1).search(name_keyword)
          		.draw();
      	});
    });

    </script>
@stop