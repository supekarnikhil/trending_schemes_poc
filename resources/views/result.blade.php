<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Result</title>

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
        <div class="flex-center position-ref full-height">
            @if (isset( $error ) )
                <div class="">
                    {{$error}}
                </div>
            @else
            <div class="content">
                <div class="card" style="width:25rem;">
                    <div class="card-body">
                        <h4 class="card-title">
                            Marksheet
                        </h4>
                        <p class="card-text">
                            <span class="badge badge-primary">Student ID: {{$objStudent->studentId}}</span>
                            <span class="badge badge-primary">Student Name: {{$objStudent->name}}</span>
                            <span class="badge badge-primary">Class: {{$objStudent->class_name}}</span>

                        </p>
                        <p class="card-text">
                        <ol class="border-bottom">
                        @foreach ( $arrObjResult as $subject )
                            <li>
                                <div class="row">
                                    <span class="col-6">{{$subject->name}}</span>
                                    <span class="col-3">{{$subject->marks}}</span>
                                    <span class="col-3">{{$subject->maxMarks}}</span>
                                </div>
                            </li>
                        @endforeach
                        </ol>
                        </p>
                        <p class="card-text row">
                            <span class="col-6">Total</span>
                            <span class="col-3">{{$objReport->total_marks}}</span>
                            <span class="col-3">{{$objReport->total_max_marks}}</span>
                        </p>
                        <p class="card-text">
                            <div class="row">
                                <span class="col-6">
                                    Percentage = {{$objReport->percentage}}
                                </span>
                                <span class="col-6">
                                    Percentile = {{$objReport->percentile}}
                                </span>
                            </div>
                            <p class="card-text">
                                <div>
                                    Result:
                                        @if ($objReport->final_result == 0)
                                        <span class="badge badge-danger p-2">
                                            Fail
                                        </span>
                                        @else
                                        <span class="badge badge-success p-2">
                                            Pass
                                        </span>
                                        @endif
                                </div>
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
