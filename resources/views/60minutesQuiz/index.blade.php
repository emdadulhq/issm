<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="3iSchooling : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="3iSchooling : Education HTML Template" />
    <meta property="og:description" content="3iSchooling : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>3iSchooling : Dashboard </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
	<script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
	<script src="{{ asset('assets/js/respond.min.js') }}"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/calendar/fullcalendar.css') }}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/shortcodes/shortcodes.css')}}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dashboard.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.css')}}">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Baloo+Tamma+2:wght@500&family=Great+Vibes&family=Libre+Franklin:wght@100&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title></title>
    <link rel="stylesheet" href="{{ asset('assets/css/style11.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('assets/images/home 80 px.png') }}">



        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
        <title>3i Schooling</title>
        <link rel="stylesheet" href="{{ asset('assets/60minutesQuiz/css/style.css') }}" />
		<link rel="icon" href="{{ asset('assets/60minutesQuiz/images/home 80 px.png') }}">
    </head>
    <body>
		<div class="container">

			<div class="leftside">
				<a href=""><img src="{{asset('assets/60minutesQuiz/images/3i.png')}}" alt="3i Logo" class="tilt" /></a>
			</div>
			<div class="rightside">
				<h1>6o minutes Quiz Test</h1><br/>
				<h3>Test Your Skills</h3>
				<h3>Features:</h3>
				<h4>1. 60 Question</h4>
				<h4>2. Time limits(60 minutes)</h4>
				<h4>3. Score Results</h4><br/>
				<a href="{{ route('admin.startquiz') }}"><h3>Start Quiz</h3></a>
			</div>
		</div>

    </body>
    <script src="{{ asset('assets/60minutesQuiz/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/60minutesQuiz/js/tilt.min.js') }}"></script>

    <script>
		$(".tilt").tilt({
			scale:1.2,
		});
	</script>
</html>
