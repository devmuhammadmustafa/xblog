<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/global_assets\css\icons\icomoon\styles.min.css" rel="stylesheet" type="text/css">
    <link href="/assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets\css\bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/assets\css\layout.min.css" rel="stylesheet" type="text/css">
    <link href="/assets\css\components.min.css" rel="stylesheet" type="text/css">
    <link href="/assets\css\colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/global_assets\js\main\jquery.min.js"></script>
    <script src="/global_assets\js\main\bootstrap.bundle.min.js"></script>
    <script src="/global_assets\js\plugins\loaders\blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/assets\js\app.js"></script>
    <!-- /theme JS files -->

</head>

<body>



<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">
        @include('admin.partials.message')
        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form class="login-form" action="{{route('auth.login')}}" method="POST">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Enter your credentials below</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control" name="email" placeholder="test@mail.ru">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="login_password_recover.html">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->


    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
