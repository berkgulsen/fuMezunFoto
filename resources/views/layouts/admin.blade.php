<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">

</head>
<body class="g-sidenav-show  bg-gray-200">

<div class="wrapper">
    @include('layouts.inc.sidebar')
    <div class="main-panel">
        @include('layouts.inc.adminnav')
        <div class="content">
            @if(Session::has('message'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @yield('content')
        </div>
        @include('layouts.inc.adminfooter')
    </div>
</div>

<!-- Scripts -->
<!--   Core JS Files   -->
<script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
<script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}" defer></script>
<script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>

@yield('scripts')

</body>
</html>
