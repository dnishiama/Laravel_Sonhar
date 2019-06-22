<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto Sonhar Acordado</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            html, body {
                background-image: url("https://scontent.fsjk1-1.fna.fbcdn.net/v/t1.0-9/10171116_733367176682153_547410129_n.jpg?_nc_cat=101&_nc_oc=AQnHAnbA9hgpfu8izh0TxGlvhuRe8WKFpT8Pn5xo5ASgLU2Hrt7fO8bY1hC8cdPug1fmv9FMokFhiPcnKWo6Niep&_nc_ht=scontent.fsjk1-1.fna&oh=0088e148b042c5e636273bbf9ed80060&oe=5D7A351C");
                background-repeat: no-repeat;
                background-position: bottom;
                background-size: 250px;
                
                color: #6F0202;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Projeto Sonhar
                </div>

            </div>
        </div>
    </body>
</html>
