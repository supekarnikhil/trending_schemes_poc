<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Schemes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <style>
            html, body {
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

        @if ( '' != Session::get('message') )
        <div class="alert alert-success flex-center">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="flex-center position-ref full-height">
            @if (isset( $error ) )
                <div class="">
                    {{$error}}
                </div>
            @else
            <div class="content">
                <div class="title m-b-md">
                    <a href="/">Haqdarshak</a>
                </div>
                <div class="card" style="width:70rem;">
                    <div class="card-body">
                        <h4 class="card-title">
                            All Schemes
                        </h4>
                        <p class="card-text">
                        </p>
                        <p class="card-text">
                        <ul class="border-bottom">
                        @foreach ( $AllSchemes as $scheme )
                            <li>
                                <div class="row text-left">
                                    <div class="col-3">
                                        {{$AllCategories[$scheme->category_id]}}
                                    </div>
                                    <div class="col-6">
                                        {{$scheme->name}}
                                    </div>
                                    <div class="col-3">
                                        <a href="/book/{{$scheme->id}}" class="button">Book</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                        </p>
                        <p class="card-text row flex-center">
                            <a href="trending">View Trending Schemes</a>
                        </p>
                        <p class="card-text">
                            <div class="row">
                                <span class="col-6">
                                    
                                </span>
                                <span class="col-6">
                                    
                                </span>
                            </div>
                            <p class="card-text">
                                
                            </p>
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
