{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/main') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">

        <a class="navbar-brand" href="#">საიტი</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">მთავარი <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">სიახლე <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">კონტაქტი <span class="sr-only">(current)</span></a>
      </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="ძებნა" aria-label="ძებნა">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ძებნა</button>
          </form>
        </div>
</nav>
    </header>
    <div class="container-fluid">
      
      <div class="container">
        <div class="row logos">
      <div class="container">

        <div class="container content ">
          <div class="row d-flex justify-content-around ">
            <div class="col-3">
              <div class="row">
                <div class="col d-flex justify-content-around">
                  <img src="img/idea.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col d-flex justify-content-around">
                  <a href="#" class="badge link"><h2 class="d-flex justify-content-around">ტექსტი2</h2></a>
                </div>
            </div>
            </div>
            <div class="col-3">
              <div class="row">
                <div class="col d-flex justify-content-around">
                  <img src="img/seo.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col d-flex justify-content-around">
                  <a href="#" class="badge link "><h2 class="d-flex justify-content-around ">ტექსტი3</h2></a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="row ">
                <div class="col d-flex justify-content-around">
                  <img src="img/time.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col d-flex justify-content-around">
                  <a href="#" class="badge link"><h2 class="d-flex justify-content-around">ტექსტი2</h2></a>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div><!-- /.row -->

        </div>
        <div class="row">
          <div class="album py-5">
        <div class="container">

          <div class="row">
               
            <div class="col-md-6">
              <div class="card mb-6 box-shadow">
                <img class="card-img-top" src='{{$books->BookImageLink}}' data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                {{-- <div class="card-body">
                <p class="card-text">{{$book->BookTitle}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                        <td> <form action="{{action('MainController@showMore',$book->id)}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="_method" value="Delete">
                       <div class="btn-group">
                       <button type="submit" class="btn btn-sm btn-outline-secondary">სრულად</button>
                   
                        </div>
                    <small class="text-muted">ფასი  {{$book->BookPrice}}</small>
                  </div>
                </div> --}}
              </div>
            </div>
            <div class="col-md-6">
                    <div class="card mb-6 box-shadow">
                      
                      <div class="card-body">
                      <p class="card-text">{{$books->BookTitle}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                               <td> 
                                {{-- <form action="{{action('MainController@showMore',$books->id)}}" method="post"> --}} 
                                  <form method="post" action="{{action('MainController@update',$books->id)}}">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <input type="hidden" value="POST" name="_method"/>
                                      <input type="text" name="phoneNumber" >
                                      <input type="hidden" name="id" value="{{$books->id}}" >
                             <div class="btn-group">
                             <button type="submit" class="btn btn-sm btn-outline-secondary">შეკვეთა</button>
                             
                              </div>
                            </form>
                          <small class="text-muted">ფასი  {{$books->BookPrice}}</small>
                        </div>
                      </div>
                    </div>
                  </div>
           
          </div>
        </div>


          </div>
        </div>
      </div>


</div>


  <footer class="container  d-flex justify-content-around">
    <p>© 2021 მინდია არაბული </p>
  </footer>
  </body>
</html>
