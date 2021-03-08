<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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
            font-size: 13px;
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
<div class=" position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="">
        <div class="title m-b-md">
            <h4>Laravel</h4>
        </div>

        <div class="links">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-light mt-3">
                            <div class="card-header">
                                Laravel 6 Import Export Excel to database Example - ItSolutionStuff.com
                            </div>
                            <div class="card-body" style="width:400px">
                                <form action="{{ url('import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" class="form-control">
                                    <br>
                                    <button class="btn btn-success">Import User Data</button>
                                    <a class="btn btn-warning" href="{{ url('export') }}">Export User Data</a>
                                </form>
                                <a class="btn btn-success mt-3" href="{{ url('comment_import') }}">Export Comment
                                    Data</a>

                                <a class="btn btn-info mt-3 " href="{{ url('pdf') }}">send pdf </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div>


            </div>
        </div>
    </div>
</div>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "de0ac1d7-9f90-4ca4-b208-c936d66f84f7",
        });
    });
</script>
</body>

</html>
