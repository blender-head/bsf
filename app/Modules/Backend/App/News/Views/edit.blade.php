@extends('layouts.admin')

@section('title')
    News | Edit
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
                <h4 class="page-title">Edit News Form</h4>
                <ol class="breadcrumb"></ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <p class="text-muted m-b-30 font-13"><span class="red">*</span> required</p>
                            
                    <form id="edit-news" role="form" data-op="edit" enctype="multipart/form-data">
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label>Title <span class="red">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="Enter blog title" value="{{ $news->title }}">
                        </div>

                        <div class="form-group">
                            <label>Content <span class="red">*</span></label>
                            <textarea class="news_content">{{ $news->content }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Excerpt</label>
                            <textarea class="form-control" name="excerpt">{{ $news->excerpt }}</textarea>
                            <span class="help-text"><em>Excerpt is optional hand-crafted summaries of your content. If you don't specify one, the application will automatically build one for you.</em></span>
                        </div>

                        <div class="form-group">
                        	<div class="row">
                        		<div class="col-sm-6">
	                            	<label class="control-label">Featured Image</label>
	                            	<input type="file" class="featured_image filestyle" data-iconname="fa fa-cloud-upload" name="featured_image">
	                            	<p><span class="help-text"><em>Featured image is an image that will be displayed on the news's detail page. It must be exactly 950 × 633 in dimension and no more than 200kb in size</em></span></p>                           	
	                            </div>
	                        </div>
                        </div>

                        <div class="form-group">
                        	<img width="40%" id="featured-image-preview" src="{{ $news->filepath }}" />
                        </div>

                        <input type="hidden" name="id" value="{{ $news->id }}">
                        <input type="hidden" name="old_featured_image" value="{{ $news->filename }}">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        <a href="{{ url('/') }}/{{ $be_prefix }}/news/index" class="btn btn-success waves-effect waves-light">Cancel</a>
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
        var form_element = '#edit-news';
        var data_selector = 'news';
        var op_url = baseUrl + '/news/edit';
        var redirect_url = baseUrl + '/news/index';
        var op_source = 'News';
        var origin = 'post';
        var summernote_el = '.news_content';
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