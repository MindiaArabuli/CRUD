<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Laravel</title>

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
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <br>
                <br>
                <form method="post" action="{{ route('book.store') }}">
                <div class="form-group">
                    <label for="BookTitle">სათაური</label>
                    <br>
                    <input type="text" class="form-control" name="BookTitle"/>
                </div>
                <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                 <div class="form-group">
                    <label for="Description">აღწერა</label>
                    <br>
                    <input type="text" class="form-control" name="Description"/>
                </div>
               
                <div class="form-group">
                    <label for="BookPrice">ფასი </label>
                    <br>
                    <input type="text" class="form-control" name="BookPrice"/>
                </div>
                <div class="form-group">
                        <label for="Link">სურათის მისამართი </label>
                        <br>
                        <input type="text" class="form-control" name="Link"/>
                    </div>
                <button type="submit" class="btn btn-primary-outline"> წიგნის დამატება</button>
                </form>
                <br>
                <br>

                <div class="links">
                    <a href="{{ url('/admin/company') }}">ყველას წიგნი</a>
                  
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
