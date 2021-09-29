<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>

  </head>
  <body style="background-color: rgb(27, 27, 27);">

      <nav class="navbar navbar-expand-lg navbar-dark" style="height: 100px; background-color: transparent; background-size: cover;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
        <h5 class="navbar-brand" href="#">TB.CORP</h5>  
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 850px;">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Berita <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
            </li>
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </div>
      </div>
      </nav>
      <!-- Close Nav -->

      <!-- modal -->

      

      <!-- close modal -->

      <!-- hero -->
      <div class="jumbotron jumbotron-fluid" style="height: 600px; background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTgsn5TsoiIxm8gbbWnd-rs_t5_KAZJo2HU6sDhkSdSBXMeQnV9Q4qkvwler9WI7STfCw&usqp=CAU'); background-size: cover; color: white;">
        <div class="container">
          <h1 class="display-4" style="text-align: center; margin-top: 160px;"><b>Starbhak News</b></h1>
        </div>
      </div>
      <!-- close hero -->

    
      <div class="container" style="color: white; margin-bottom:50px;">
        <h2 style="margin-top: 60px; text-align: center;">Siapa Sosok di Balik Warkopi yang Bikin Keki Warkop DKI?</h2>
          <img src="https://asset.kompas.com/crops/C1mi7TqcoeCFFxTGjs2qbpekRKM=/0x170:1080x890/750x500/data/photo/2021/09/19/61468317d049a.jpg" style="margin-left: 180px;" class="img-fluid mt-4" alt="Responsive image">
          <div class="container" style="padding-left: 80px; padding-right: 50px;">
              @foreach ($landing as $data)
          <h5 class="mt-5">{{ $data->subjudul }}</h5>
          <p>{{ $data->isi }}</p>
          @endforeach
      </div>
        </div>
    </div>
        
        <div class="line" style="width: auto; height: 3px; background-color: rgb(129, 129, 129);"></div>

          <br>
        <div class="container" style="color: white;">
            <div class="row">
                <div class="col-2">
                    <h3>Komentar</h3>
                </div>
                <div class="col" style="margin-left: -60px; margin-top: 10px;">
                <p>{{$komens->count('id')}}
                </p>
                </div>
            </div>
            <table class="table text-white mt-5">
              </div>
            <tbody>
                @foreach ($komens as $item)
                <tr>
                <td class="font-weight-lighter">{{$item->name}} :<p class="font-weight-bold">{{$item->komentar}}</p></td>
              </tr>
              @endforeach
              </tr>
            </tbody>
          </table>
        </div>
        </div>

          
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>