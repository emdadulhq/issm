<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
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




{{--    <!-- script for time limitation of exam -->--}}
{{--    <script type="text/javascript">--}}
{{--        var timeoutHandle;--}}
{{--        function countdown(minutes) {--}}
{{--            var seconds = 60;--}}
{{--            var mins = minutes--}}
{{--            function tick() {--}}
{{--                var counter = document.getElementById("timer");--}}
{{--                var current_minutes = mins-1--}}
{{--                seconds--;--}}
{{--                counter.innerHTML =--}}
{{--                    current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);--}}
{{--                if( seconds > 0 ) {--}}
{{--                    timeoutHandle=setTimeout(tick, 1000);--}}
{{--                } else {--}}

{{--                    if(mins > 1){--}}

{{--                        // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst--}}
{{--                        setTimeout(function () { countdown(mins - 1); }, 1000);--}}

{{--                    }--}}
{{--                }--}}
{{--            }--}}
{{--            tick();--}}
{{--        }--}}

{{--        --}}{{--countdown('<?php echo $time; ?>');--}}

{{--    </script>--}}

{{--    <!-- script for disable url -->--}}
{{--    <script type="text/javascript">--}}
{{--        --}}{{--var time= '<?php echo $time; ?>';--}}
{{--        var realtime = time*60000;--}}
{{--        setTimeout(function () {--}}
{{--                alert('Time Out');--}}
{{--                window.location.href= '/';},--}}
{{--            realtime);--}}


{{--    </script>--}}


{{--        <body style="background-color: darkseagreen">--}}
{{--        <div>--}}
{{--            <nav class="col-lg-1 pull-right">--}}
{{--                <div class="sidebar-nav-fixed affix">--}}
{{--                    <h1><b>Time <span id="timer" style="color: red">0.00</span></b></h1><br>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--            <h1 class="col-lg-offset-4" style="color: red;"><span style="background-color:seagreen;color: white;border-radius: 5px"><b>  Examination on {{$course}}  </b></span></h1>--}}
{{--            <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3" style="background-color: white">--}}

{{--                @foreach($questions as $question)--}}
{{--                    <div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-2">--}}
{{--                        <form method="post" action="{{route('answer.store')}}" class="ansform">--}}
{{--                            {{ csrf_field() }}--}}

{{--                            <h3>{{$question->question}} ?</h3>--}}
{{--                            <div class="col-lg-offset-1">--}}
{{--                                <input type="hidden" name="question" value="{{$question->question}}">--}}
{{--                                <input type="hidden" name="student_id" value="{{$student_id}}">--}}
{{--                                <input type="hidden" name="true_answer" value="{{$question->answer}}">--}}
{{--                                <input name="answer" value="{{$question->choice1}}" type="radio"> {{$question->choice1}} <br>--}}
{{--                                <input name="answer" value="{{$question->choice2}}" type="radio">{{$question->choice2}}<br>--}}
{{--                                <input name="answer" value="{{$question->choice3}}" type="radio">{{$question->choice3}}<br>--}}
{{--                                <input name="answer" value="{{$question->choice4}}" type="radio">{{$question->choice4}}<br>--}}
{{--                                <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--        </div>--}}





		<div class="box" id="questionScreen" >

			<div class="title">
				Questions Quiz Test
			</div>

			<div class="header">
				<div class="scoreBox">Score: <span></span></div>
				<div class="timerBox">Time Left: <span></span></div>
			</div>

			<div class="questionBox">
				What does HTML stand for?
			</div>

			<div class="optionBox">
				<span id="answer" onclick="checkAnswer(this)" data-opt="1"></span>
				<span id="answer" onclick="checkAnswer(this)" data-opt="2"></span>
				<span id="answer" onclick="checkAnswer(this)" data-opt="3"></span>
				<span id="answer" onclick="checkAnswer(this)" data-opt="4"></span>
			</div>

			<div class="footer">
				<button onclick="showNext()" >
					Next
				</button>
				<button onclick="showResult(1)">
					Show Result
				</button>
			</div>
		</div>

		<div class="box" id="resultScreen" style="display:none;">
			<div class="title">
				Questions Quiz Test
			</div>
			<div class="resultBox">
				<label>Questions : </label>
				<span id="totalQuestion">10</span>
				<label>Attempt : </label>
				<span id="attemptQuestion">0</span>
				<label>Correct : </label>
				<span id="correctAnswer">0</span>
				<label>Worng : </label>
				<span id="wrongAnswer">0</span>
			</div>
			<div class="buttonBox">
				<a href="{{ route('admin.minquiz') }}">Start Again</a>
			</div>
		</div>

    </body>
    <script src="{{ asset('assets/60minutesQuiz/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/60minutesQuiz/js/quiz.js') }}"></script>
    <script src="{{ asset('assets/60minutesQuiz/js/script.js') }}"></script>
</html>
