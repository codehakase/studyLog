<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>StudyLog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
            .icon-love {
                display: inline-block;
                animation: heartbeat 1.2s ease-in-out infinite;
                margin-left: 3px;
                margin-right: 3px;
                transition: all 0.2s ease-in-out;
            }
            @keyframes heartbeat {
                0% {transform: scale(1); }
            14% {transform: scale(1.3); }
            28% {transform: scale(1); }
            42% {transform: scale(1.3); }
            70% {transform: scale(1); } 
            }
            
            .attrib {
                margin-top: 20%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Study<b>Log</b><sup>&hearts;</sup>
                </div>
                @if (Route::has('login'))
                <div class="links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Go to App</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        <a href="http://github.com/codehakase/studyLog">GitHub</a>
                    @endif
                </div>
            @endif
            <footer class="attrib">
                <small>Made with <svg class="icon-love" width="21" height="17" viewBox="0 0 21 17" xmlns="http://www.w3.org/2000/svg"><title>love</title><path d="M14.725.032a5.31 5.31 0 0 0-4.687 2.814 5.312 5.312 0 0 0-10 2.498c0 4.763 5.834 7.397 10 11.564 4.306-4.306 10-6.76 10-11.563A5.312 5.312 0 0 0 14.725.032z" fill="#E82F2F" fill-rule="evenodd"></path></svg> by <a href="https://twitter.com/codehakase">@codehakase</a></small>   
            </footer>
            </div>
        </div>
    </body>
</html>
