

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Baloo+Tamma+2:wght@500&family=Great+Vibes&family=Libre+Franklin:wght@100&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">


    <title> 3i Schooling | Home </title>
    <link rel="icon" href="{{ URL::to('assets/images/home 80 px.png') }}">

    <!--Java script function -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript'>
        $.get('event.html',function(response){
            $('#eventshow').html(response);
        });
    </script>
    <script src="three.r119.min.js"></script>
    <script src="vanta.net.min.js"></script>
    <script>
        VANTA.NET({
            el: "#your-element-selector",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x3fddff,
            points: 7.00,
            maxDistance: 23.00
        })
    </script>

</head>
<body>

<!-- Navbar -->

<!--marquee direction="right"><img src=""></image></marquee-->

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
            <li><a href="{{ asset('schooling.html') }}">Schooling</a></li>
            <li><a href="{{ asset('60minutesQuiz/index.html') }}">60minutesQuiz</a></li>
            <li><a href="{{ asset('sci.html') }}">Sci-M</a></li>
            <li><a href="{{ asset('carrer_assessment.html') }}">Carrer Assessment</a></li>
            <li><a href="{{ asset('mock.html') }}">Mock</a></li>

            <li><a href="{{ asset('contact.html') }}">Contact</a></li>
        </ul>
    </div>

</div>




<!-- Showcase -->
<section class="showcase">
    <div class="container grid">
        <div class="showcase-text">
            <h1>3i Schooling</h1>

            <div class="text-3"><span class="typing"></span></div>

        </div>

        <div class="logo1">
            <iframe width="320" height="240" src="https://www.youtube.com/embed/pyOcSEkG4Q0"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!--				<video src="" width="320" height="240" controls></video>-->
            <!--				<video width="320" height="240" controls >-->
            <!--			<source src="" type="video/mp4">-->

            <!--			Your browser does not support the video tag.-->
            </video>
        </div>


    </div>
</section>
<section>
    @include('event')
</section>

{{--</br>--}}
{{--<!-- Event Starts from here -->--}}
{{--@section('')--}}
{{--    <div class="event">--}}

{{--        --}}{{----}}{{--		<iframe src="event.html" frameborder="0" scrolling="no">--}}
{{--        --}}{{----}}{{--		  <p> display</p>--}}
{{--        --}}{{----}}{{--		</iframe>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--	<div class="about">--}}
{{--		<iframe src="About.html" frameborder="0" scrolling="no">--}}
{{--		  <p> display</p>--}}
{{--		</iframe>--}}
{{--	</div>--}}

@include('about')
{{--	<div class="mission">--}}
{{--		<iframe src="mission.html" frameborder="0" scrolling="no" >--}}
{{--		  <p> display</p>--}}
{{--		</iframe>--}}
{{--	</div>--}}
@include('mission')
{{--	<div class="affiliation">--}}

{{--		<iframe src="affiliation.html" frameborder="0" height="100%" scrolling="no" >--}}
{{--		<p> display</p>--}}
{{--		</iframe>--}}
@include('affiliation')
{{--	</div>--}}
{{--		<div class="contact">--}}
{{--		<iframe src="contact.html" frameborder="0" scrolling="no" >--}}
{{--		 <p> display</p>--}}
{{--		</iframe>--}}
{{--	</div>--}}

{{--        @include('contact')--}}


<!-- Footer -->
<script>
    var typed = new Typed(".typing", {
        strings: [ "Be Educate, Help Others To Educate", "3i Schooling","Frontend Web ",],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
</script>

</body>

</html>









