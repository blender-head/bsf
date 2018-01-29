
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <link href="{{ Theme::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ Theme::asset('css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ Theme::asset('css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ Theme::asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ Theme::asset('css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ Theme::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ Theme::asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ Theme::asset('plugins/waitme/waitMe.css', null, true) }}" rel="stylesheet" type="text/css" id="theme" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ Theme::asset('/js/modernizr.min.js') }}"></script>

        <script type="text/javascript">
            var baseUrl = "{{ URL::to('/') }}"
        </script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        
        <div class="clearfix"></div>

        <div class="wrapper-page">

            <div class=" card-box">

                <div class="panel-heading"> 
                    <h3 class="text-center"> Sign In to <strong class="text-custom">UBold</strong> </h3>
                </div> 

                <div id="error-container" class="form-group hide">
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <strong class="error-type"></strong> 
                            <div class="error-messages"></div>
                        </div>  
                    </div>
                </div>

                <div class="panel-body">

                    <form id="login-form" class="form-horizontal m-t-20" method="post">
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="email" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>

                    </form> 
                
                </div>   

            </div>          
           
        </div>
        
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ Theme::asset('/js/jquery.min.js') }}"></script>
        <script src="{{ Theme::asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ Theme::asset('/js/detect.js') }}"></script>
        <script src="{{ Theme::asset('/js/fastclick.js') }}"></script>
        <script src="{{ Theme::asset('/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ Theme::asset('/js/jquery.blockUI.js') }}"></script>
        <script src="{{ Theme::asset('/js/waves.js') }}"></script>
        <script src="{{ Theme::asset('/js/wow.min.js') }}"></script>
        <script src="{{ Theme::asset('/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ Theme::asset('/js/jquery.scrollTo.min.js') }}"></script>

        <script src="{{ Theme::asset('/js/jquery.core.js') }}"></script>
        <script src="{{ Theme::asset('/js/jquery.app.js') }}"></script>

        <script src="{{ Theme::asset('plugins/waitme/waitMe.js') }}" type="text/javascript"></script>
        <script src="{{ Theme::asset('pages/modules/AuthManager.js') }}" type="text/javascript"></script>
    
    </body>
</html>