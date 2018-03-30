@extends('layouts.admin')

@section('title')
    Blog | Create
@stop

@section('pre_styles')
    <link href="{{ Theme::asset('plugins/summernote/dist/summernote.css') }}" rel="stylesheet" />
    <link href="{{ Theme::asset('plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ Theme::asset('plugins/tokenfield/css/bootstrap-tokenfield.min.css') }}" rel="stylesheet" />
    <link href="{{ Theme::asset('plugins/tokenfield/css/tokenfield-typeahead.min.css') }}" rel="stylesheet" />
@stop

@section('post_styles')
@stop

@section('content')
<div class="content">

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Create Blog Form</h4>
                <ol class="breadcrumb"></ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <p class="text-muted m-b-30 font-13"><span class="red">*</span> required</p>
                            
                    <form id="create-blog" role="form" data-op="add" enctype="multipart/form-data">
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label>Title <span class="red">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="Enter blog title">
                        </div>

                        <div class="form-group">
                            <label>Content <span class="red">*</span></label>
                            <textarea class="blog_content"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Excerpt</label>
                            <textarea class="form-control" name="excerpt"></textarea>
                            <span class="help-text"><em>Excerpt is optional hand-crafted summaries of your content. If you don't specify one, the application will automatically build one for you.</em></span>
                        </div>

                        <div class="form-group">
                        	<div class="row">
                        		<div class="col-sm-6">
	                            	<label class="control-label">Featured Image</label>
	                            	<input type="file" class="featured_image filestyle" data-iconname="fa fa-cloud-upload" name="featured_image">
	                            	<p><span class="help-text"><em>Featured image is an image that will be displayed on the blog's detail page. It must be exactly 950 × 633 in dimension and no more than 200kb in size</em></span></p>                           	
	                            </div>
	                        </div>
                        </div>

                        <div class="form-group">
                        	<img id="featured-image-preview" />
                        </div>

                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>


    </div> <!-- container -->

</div> <!-- content -->

@stop

@section('scripts')
    
    <script src="{{ Theme::asset('plugins/summernote/dist/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ Theme::asset('plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
    <script src="{{ Theme::asset('plugins/tokenfield/bootstrap-tokenfield.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        var form_element = '#create-blog';
        var data_selector = 'blog';
        var op_url = baseUrl + '/blogs/create';
        var redirect_url = baseUrl + '/blogs/index';
        var op_source = 'Blog';
        var origin = 'post';
        var summernote_el = '.blog_content';
    </script>
    
    <script type="text/javascript">

        var src = [];

        $(document).ready(function(){
            
            initSummernote(summernote_el);

        });
    </script>

@stop

@section('additional_scripts')
    <script src="{{ Theme::asset('pages/modules/ContentManager.js') }}"></script>
@stop