
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
    <link rel="stylesheet" href="{{ asset('assets/css/style11.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('assets/images/home 80 px.png') }}">


</head>

<body>

<div class="txt">
    <h5>3i Schooling</h5>

</div>
<div class="txt1">  Be Educated, Do Help Others to Educate.</div>



<form  action="{{ route('login') }}" class="login-form" method="POST">
    {{ csrf_field() }}
    <h1>Sign In to your Account</h1>

    <div class="txtb">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
             </span>
        @endif
        <span data-placeholder="Username"></span>
    </div>








    <div class="txtb" >

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label"></label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span data-placeholder="Password" class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <span data-placeholder="Password"></span>
            </div>
        </div>




    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="logbtn">
                Login
            </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">

            </a>
        </div>
    </div>



    <div class="bottom-text">
        Don't have account? <a href="{{ route('register') }}">Sign up</a></br>

        Forgot Your Password?
        <a class="" href="{{ route('password.request') }}">
            Recover Password
        </a>

    </div>

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
