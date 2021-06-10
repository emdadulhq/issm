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

    <title>Ruet</title>
    <link rel="icon" href="{{asset('assets/images/home 80 px.png')}}">
</head>
<body onload="get()">
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
                <p class="lead">
                   Engineering University
                </p>
            </div>
            <img src="" alt="photo ">
        </div>
    </section>

    <!-- Sub head -->
    <section class="features-sub-head bg-light py-3">
        <div class="container grid">
            <div>
                <h1 class="md">RUET</h1>
                <p>
                 English is an Indo-European language and belongs to the West Germanic group of the Germanic languages. Old English originated from a Germanic tribal and linguistic continuum along the Frisian North Sea coast, whose languages gradually evolved into the Anglic languages in the British Isles, and into the Frisian languages and Low German/Low Saxon on the continent.
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


    <div class="container">
				<br /><br />

		<h2>Your Task</h2>
		<h3><p id="printtext"></p></h3>
		<h3><p id="item"></p></h3>
		<br /><br />
        <div class="contact">
		<span class="inputbox">
		<script>

			var savedata4= localStorage.getItem("savedata4");
			function question() {
				var x = document.getElementById("inquirytext").value;
				localStorage.setItem("savedata4",x);
				document.getElementById("printtext").innerHTML = x;
			}

			function get(){
				localStorage.getItem("savedata4");
				document.getElementById("item").innerHTML = savedata4;
			}
		</script>
		<textarea id="inquirytext" type="text" cols="70" rows="3" required></textarea>

		<span class="textname">Any Inquiry?</span> </span><br />
		<button type="submit" class="btn btn-info" onclick="question()">Update</button>

	</div>



</body>
</html>
