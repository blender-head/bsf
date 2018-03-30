@extends('layouts.admin')

@section('title')
    News | Index
@stop

@section('content')
<div class="content">

	<div class="container">

		<!-- Page-Title -->
	    <div class="row">
	        <div class="col-sm-12">
	            <h4 class="page-title">News</h4>
	            <p class="breadcrumb">
	                <a href="{{ route('news.create') }}" type="button" class="btn btn-default waves-effect waves-light">Add New News</a>
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
                                        <li><a class="set-status-all" data-status="1" href="#">Publish</a></li>
                                        <li><a class="set-status-all" data-status="0" href="#">Unpublish</a></li>
                                        <li><a class="delete-all" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-wrapper">
                    	<table id="news-data" class="table table-striped table-bordered table-actions-bar">
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
        var form_element = '#create-news';
        var data_selector = 'news';
        var op_url = baseUrl + '/news/delete';
        var publish_url = baseUrl + '/news/set_status';
        var redirect_url = baseUrl + '/news/index';
        var op_source = 'News';
        var delete_url = baseUrl + '/news/delete';
        var publish_url = baseUrl + '/news/set_status';
        var token = "{{ csrf_token() }}";
        var datatable_el = "#news-data";
    </script>
@stop

@section('additional_scripts')
	<script src="{{ Theme::asset('js/opManager.js') }}"></script>

    <script type="text/javascript">

    	$(document).ready(function() {
      		var datatable_url = baseUrl + '/news/index';
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

        		var table = $('#news-data').DataTable();

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