<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A resume and a personal portfolio for Bilal Khawar">
    <meta name="author" content="Bilal Khawar">

    <title>Bilal</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="{{asset('css/devicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/resume.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    @yield('sidebar')

    <div class="container-fluid p-0">
        @yield('about')
        @yield('experience')
        @yield('education')
        @yield('skills')
        @yield('interests')
        @yield('awards')
    </div>

    <!-- JavaScript -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/fontawesome-all.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/resume.min.js')}}"></script>

</body>

</html>