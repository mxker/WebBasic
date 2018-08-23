<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Jeecloud Admin Panel" />
    <meta name="author" content="" />

    <title>Jeecloud - 吉云</title>

    <link rel="stylesheet" href="{{ asset('admin/css/fonts/linecons/css/linecons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/xenon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/xenon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/xenon-components.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/xenon-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

@section('body')
<body class="page-body login-page">

    @yield('main-content')

</body>
@show

<!-- Bottom Scripts -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('admin/js/resizeable.js') }}"></script>
<script src="{{ asset('admin/js/joinable.js') }}"></script>
<script src="{{ asset('admin/js/xenon-api.js') }}"></script>
<script src="{{ asset('admin/js/xenon-toggles.js') }}"></script>
<script src="{{ 'admin/js/toastr/toastr.min.js' }}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{ 'admin/js/xenon-custom.js' }}"></script>
</html>