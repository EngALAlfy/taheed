<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="{{asset("assets/website/img/logo/ficon.png")}}"/>
    <title>{{config("app.name")}} | Login</title>

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{asset("assets/admin/css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("assets/admin/fonts/icomoon/icomoon.css")}}"/>

    <!-- Mian and Login css -->
    <link rel="stylesheet" href="{{asset("assets/admin/css/main.css")}}"/>

</head>

<body class="login-bg">

<div class="container">
    <div class="login-screen row align-items-center justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <form action="{{route("login")}}" method="post">
                @csrf
                @method("post")
                <div class="login-container">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-12">
                            <div class="login-box text-center">
                                <h2 class=" text-center"> لوحة التحكم</h2>
                                <h4 class=" text-center mb-5"> تسجيل الدخول</h4>

                                @include('flash::message')

                                <div class="input-group">
                                    <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="icon-account_circle"></i>
												</span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                           aria-label="username" aria-describedby="username">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="icon-verified_user"></i>
												</span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                           aria-label="Password" aria-describedby="password">
                                </div>
                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="main-footer no-bdr fixed-btm">
    <div class="container">
        Copyright {{config("app.name")}} 2023.
    </div>
</footer>
</body>

</html>
