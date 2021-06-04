






<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Baloo+Tamma+2:wght@500&family=Great+Vibes&family=Libre+Franklin:wght@100&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title></title>
    <link rel="stylesheet" href="{{ asset('assets/css/style22.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('assets/images/home 80 px.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">

</head>
<body>

<form method="POST" action="{{ route('register') }}" method="POST" class="signup-form">

    {{ csrf_field() }}
    <div class="callout" ><a href="{{ route('login') }}">
            <button class="close-button" aria-label="Close alert" align="left" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </a>
    </div>



    <form action="{{ route('register') }}" method="POST" class="T">
        <h1>Create your Account</h1>
        @if(Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}} <button class="close"
                                                                               data-dismiss="alert">&times;</button>
            </p>
        @endif

        <div class="txtb {{ $errors->has('name') ? ' has-error' : '' }}">

            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif

            <span data-placeholder="Name"></span>
        </div>
        <div class="txtb {{ $errors->has('email') ? ' has-error' : '' }}">

            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif

            <span data-placeholder="Email:abc@gmail.com" ></span>
        </div>

        <div class="txtb {{ $errors->has('phone') ? ' has-error' : '' }}">

            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
            @if ($errors->has('phone'))
                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
            @endif

            <span data-placeholder="Phone-Number"></span>
        </div>


        <div class="txtb {{ $errors->has('gender') ? ' has-error' : '' }}">

            <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required>
            @if ($errors->has('gender'))
                <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
            @endif

            <span data-placeholder="Gender"></span>
        </div>

        <div class="txtb {{ $errors->has('password') ? ' has-error' : '' }}">

            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif


            <span data-placeholder="Password"></span>
        </div>
        <div class="txtb">

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


            <span data-placeholder="Confirm Password"></span>
        </div>

        <input type="submit" name="register" class="logbtn" value="Register">


    </form>



    <script type="text/javascript">
        $(".txtb input").on("focus",function(){
            $(this).addClass("focus");
        });

        $(".txtb input").on("blur",function(){
            if($(this).val() == "")
                $(this).removeClass("focus");
        });

    </script>


</body>
</html>
