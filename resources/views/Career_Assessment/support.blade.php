<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/css/utilities.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lecture.css')}}">
    <title>Support</title>
    <link rel="icon" href="{{asset('assets/images/home 80 px.png')}}">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar"><div class="navbar">
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



    <!-- Head -->
    <section class="features-head bg-primary py-3">
        <div class="container grid">
            <div>
                <h1 class="xl"></h1>
                <p class="lead">
                    Infomation Support
                </p>
            </div>
            <img src="" alt="photo ">
        </div>
    </section>

    <!-- Sub head -->
    <section class="features-sub-head bg-light py-3">
        <div class="container grid">
            <div>
                <h1 class="md">Support</h1>
                <p>
				Questions & Answers
			  </p>
            </div>


        </div>
    </section>

    <section class="features-main my-2">
        <div class="container grid grid-3">
 <video width="500" height="240" controls >
           <source src="tulon.mp4" type="video/mp4">

          Your browser does not support the video tag.
</video>


        <div class="contact">

            <form>

                <span class="inputbox">
                    <textarea name="" id="" cols="30" rows="3" required></textarea>
                    <span class="textname">Any enquiry..</span> </span><br />
                <input type="submit" class="submit" />
            </form>

</body>
</html>
