<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Dashboard - Evernew Beauty Salon</title>
    <link rel="apple-touch-icon" href="{{asset('admin_assets/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin_assets/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
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
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/pages/chat-application.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  


  

    <!-- BEGIN: Content-->
  @yield('content')
    <!-- END: Content-->


 


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin_assets/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin_assets/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin_assets/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin_assets/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin_assets/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin_assets/app-assets/js/scripts/pages/dashboard-analytics.js')}}" type="text/javascript"></script>
    <!-- END: Page JS-->
   <script src="{{asset('admin_assets/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
</body>
<!-- END: Body-->

</html>