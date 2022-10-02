
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="{{asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">


    <!-- azia CSS -->
    <link href="{{asset('assets/css/azia.css')}}" rel="stylesheet">

    <style>
        .app-logo {
            font-weight: 700;
            font-size: 28px;
            font-family: 'Poppins', sans-serif;
            color: #5b47fb;
            letter-spacing: -1px;
            display: flex;
            align-items: center;
            position: relative;
            top: -2px;
        }
        .header-center {
            margin: auto;
            width: 40%;
            /*border: 3px solid green;*/
            padding: 10px;
        }

    </style>

</head>
<body>

@include('template.header')

@include('template.navigation')

<div class="az-content az-content-dashboard">
    <div class="container">
        @yield('content')
    </div>
</div><!-- az-content -->

<div class="az-footer ht-40">
    <div class="container ht-100p pd-t-0-f">

    </div><!-- container -->
</div><!-- az-footer -->


<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/lib/ionicons/ionicons.js')}}"></script>

<script src="{{asset('assets/js/azia.js')}}"></script>
</body>
</html>
