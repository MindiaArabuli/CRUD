<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
               
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
            <div class="content" >
                <table  class="table table-striped">
                    <thead>
                        <tr>
                           
                            <td>
                               წიგნის ნომერი
                            </td>
                            <td>
                                ტელეფონის ნომერი
                            </td>
                         
                            </tr>

                    </thead>
                    <tbody> 
                        @foreach ($requests as $request)
                        <tr>
                            <td>
                               {{$request-> BookID}}
                            </td>
                            <td>
                                {{$request->PhoneNumber}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
<br>
<br>
                <div class="links">
                    <a href="{{ url('/admin') }}">ადმინისტრატორის გვერდი</a>
                    <a href="{{ url('/') }}">მთავარი</a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
