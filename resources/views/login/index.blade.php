<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login -  Inventory With Stock Tracker System</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h2 class="text-center">Inventory With Stock Tracker System</h2>
                <br>
{{--                <img style="height: 10rem;margin-left: -4rem" src="{{asset("assets/images/logo/logo2.png")}}" alt="Logo">--}}
                <h2 class="text-center"> LOGIN</h2>

                <p class="auth-subtitle mb-5"></p>

                {!! Form::open(['url' => 'login', 'method' => 'post']);  !!}

                @include('template.alert')
                <div class="form-group position-relative has-icon-left mb-4">

                    {!! Form::text('username',null, ['class' => 'form-control form-control-xl']) !!}
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    {!! Form::password('password', ['class' => 'form-control form-control-xl']) !!}

                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block btn-lg shadow-lg mt-5']);  !!}
                {!! Form::close() !!}

            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            {{--            <img src="{{asset("assets/images/bg/login.jpg")}}" alt="" style="    top: 0;--}}
            {{--    left: 0;--}}
            {{--    min-width: 100%;--}}
            {{--    min-height: 100%;">--}}


            <img src="{{asset("assets/images/login.jpg")}}" alt="" style="top: 0;
            height: 50px;
            width: 50px;
    left: 0;
    min-width: 100%;
    min-height: 100%;">


        </div>
    </div>

</div>
</body>

</html>
