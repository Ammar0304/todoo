<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/toastr.css')}}">

       
    <meta charset="utf-8" name="csrf_token" content="{{csrf_token()}}" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
               
                    @yield('content')
               

         <!--        <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{url('js/jquery-3.2.1.slim.min.js')}}"></script> -->
    <!-- <script
  src="https://code.jquery.com/jquery-2.0.3.js"
  integrity="sha256-lCf+LfUffUxr81+W0ZFpcU0LQyuZ3Bj0F2DQNCxTgSI="
  crossorigin="anonymous"></script> -->
  

    <script type="text/javascript" src="{{url('js/toastr.min.js')}}"></script>

    <script type="text/javascript">

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-bottom-right",
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "swing",
        "showMethod": "slideDown",
        "hideMethod": "fadeOut"
    };


    @if (Session::has('app_info'))
    toastr.info("{{ Session::get('app_info') }}", "Message");
    @endif

    @if (Session::has('app_message'))
    toastr.success("{{ Session::get('app_message') }}", "Message");
    @endif

    @if (Session::has('app_warning'))
    toastr.warning("{{ Session::get('app_warning') }}", "Message");
    @endif

    @if (Session::has('app_error'))
    toastr.error("{{ Session::get('app_error') }}", "Message");
    @endif

</script>
</html>
