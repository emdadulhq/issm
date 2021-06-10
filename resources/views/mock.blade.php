<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Icon -->
  <script src="https://kit.fontawesome.com/b3800443f4.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Baloo+Tamma+2:wght@500&family=Great+Vibes&family=Libre+Franklin:wght@100&family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/mock.css')}}">
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
  <script src="{{asset('assets/Javascript/script.js')}}"></script>
  <title>Mock</title>
  <link rel="icon" href="{{asset('assets/images/home 80 px.png')}}">

</head>
<body>

<div class="navbar">
    <div class="flex-center position-ref full-height blur">
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


    </div>

    <div class="container flex">

        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/home 80 px.png') }}"
                                               alt="logo"></a></div>
        <h1></h1>

        <ul>
            <li><a href="{{ url('/') }}">Schooling</a></li>
            <li><a href="{{ route('register') }}">60minutesQuiz</a></li>
            <li><a href="{{ route('sci') }}">Sci-M</a></li>
            <li><a href="{{ route('career') }}">Carrer Assessment</a></li>
            <li><a href="{{ route('mock') }}">Mock</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>

</div>



 <section id="skills">
    <h2>Mock</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('assets/Media/languages.gif')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="{{url('mock/ssc')}}"> SSC</a></h5>
            <p class="card-text text-muted">Short Description</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('assets/Media/database.gif')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="{{url('mock/hsc')}}">HSC</a></h5>
            <p class="card-text text-muted">Short Description</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('assets/Media/vcs.gif')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="{{url('mock/admission')}}">Admission</a></h5>
            <p class="card-text text-muted">Short Description</p>
          </div>
        </div>
      </div>


  </section>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
