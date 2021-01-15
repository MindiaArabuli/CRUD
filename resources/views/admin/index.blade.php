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
              
                        <div class="container">

                                <div class="row">
                                      @foreach($books as $book)
                                  <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                      <img class="card-img-top" src={{$book->BookImageLink}} data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                      <div class="card-body">
                                      <p class="card-text">{{$book->BookTitle}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{action('BookController@edit',$book->id)}}">განახლება</a>
                                            </td>
                                            <td> <form action="{{action('BookController@destroy',$book->id)}}" method="post">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           <input type="hidden" name="_method" value="Delete">
                                           <button type="submit">წაშლა</button>
                                          <small class="text-muted">ფასი  {{$book->BookPrice}}</small>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach
                                           
                                </div>
                              </div>          
<br>
<br>
                <div class="links">
                    <a href="{{ url('/admin') }}">ადმინისტრატორის გვერდი</a>
                    <a href="{{ url('/') }}">მთავარი</a>
                </div>
            </div>
        </div>

    </body>
</html>
