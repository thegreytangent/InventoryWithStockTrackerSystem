<?php $user = \Illuminate\Support\Facades\Auth::user(); ?>


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Health Monitoring of Barangay Igmaya-an Local Health Center")</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">

    <link rel="stylesheet" href="{{asset("assets/vendors/perfect-scrollbar/perfect-scrollbar.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/bootstrap-icons/bootstrap-icons.css")}}">
    <link rel="stylesheet" href=" {{asset("assets/css/app.css")}}">
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.svg")}}" type="image/x-icon">
    <script src="{{asset("assets/js/jquery.js")}}"></script>
    @yield("styles")
    @stack('styles')
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            {{-- <div class="sidebar-header">
              <div class="d-flex justify-content-between">
                <div class="logo">
                  <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                  <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
              </div>
            </div> --}}

            @include("template.sidebar")
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main" class='layout-navbar'>
        @include("template.navbar")
        <div id="main-content">

            @yield("content")


        </div>
    </div>
</div>
<script src="{{asset("assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>


</body>

@stack('scripts')

</html>
