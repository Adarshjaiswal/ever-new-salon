<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Login - Ever New Beauty Salon</title>
    <link rel="apple-touch-icon" href="{{asset('admin_assets/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/pages/login-register.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="text-center mb-1">
                                      <h4>Evernew Beauty Salon</h4>
                                    </div>
                                    <div class="font-large-1  text-center">
                                       Admin Login
                                    </div>
                                </div>
                                <div class="card-content">
  @if(\Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    {{ \Session::get('success') }}
                </div>
               
            </div>
            @endif
            {{ \Session::forget('success') }}
            @if(\Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    {{ \Session::get('error') }}
                </div>
              
            </div>
            @endif
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{{route('adminLoginPost')}}" novalidate>
                                       @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="email" class="form-control round" id="user-name" placeholder="Your Username" name="email" required>
                                                 @if ($errors->has('email'))
                            <span class="help-block font-red-mint">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control round" id="user-password" placeholder="Enter Password" name="password" required>
                                                  @if ($errors->has('password'))
                            <span class="help-block font-red-mint">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left">

                                                </div>
                                                <!-- <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div> -->
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                    
                                 

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin_assets/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin_assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin_assets/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin_assets/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin_assets/app-assets/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>