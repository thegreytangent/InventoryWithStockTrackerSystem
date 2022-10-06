<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Inventory With Stock Tracker System </title>

    <!-- vendor css -->

    <link href="{{asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">

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
    </style>

</head>
<body class="az-body">

<div class="az-signin-wrapper">
    <div class="az-card-signin">
        <h1 class="app-logo text-center">Inventory With Stock Tracker System</h1>
        <div class="az-signin-header">

            <form action="/login" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Username:</label>
                    <input name="username" type="text" class="form-control" />
                </div><!-- form-group -->
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" />
                </div><!-- form-group -->
                <button type="submit" class="btn btn-az-primary btn-block">Sign In</button>
            </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
            <p><a href="">Forgot password?</a></p>
            <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
        </div><!-- az-signin-footer -->
    </div><!-- az-card-signin -->
</div><!-- az-signin-wrapper -->


<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.cookie.js')}}"></script>
<script src="{{asset('assets/js/jquery.cookie.js')}}"></script>
<script src="{{asset('assets/js/azia.js')}}"></script>
<script>
    $(function () {
        'use strict'

    });
</script>
</body>
</html>
