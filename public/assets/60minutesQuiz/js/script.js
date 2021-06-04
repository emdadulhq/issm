let index=0;
let attempt = 0;
let score = 0;
let wrong = 0;


let questions = quiz.sort(function(){
	return 0.5 - Math.random();
});

let totalQuestion = questions.length;

$(function(){
	
	var totalTime = 3600;
	var min = 0;
	var sec = 0;
	var counter = 0;
	
	
	
	var timer = setInterval(function(){
		counter++;
		min = Math.floor(( totalTime - counter) / 60);
		sec = totalTime - (min*60) - counter;
		
		$(".timerBox span").text(min+":"+sec);
		
		if(counter == totalTime){
			
			alert("Times Up.Press OK to to show Result.");
			result();
			clearInterval(timer);
		}
		//console.log("min = " + min);
		//console.log("sec = " + sec);
	},1000);
	
	//print Question
	
	printQuestion(index);
	
	
});

//Function to print question

function printQuestion(i){
	
	
	$(".questionBox").text(questions[i].question);
	$(".optionBox span").eq(0).text(questions[i].option[0]);
	$(".optionBox span").eq(1).text(questions[i].option[1]);
	$(".optionBox span").eq(2).text(questions[i].option[2]);
	$(".optionBox span").eq(3).text(questions[i].option[3]);
}

//Function to check answer

function checkAnswer(option){
	attempt++;
	
	let optionClicked = $(option).data("opt");
	
	//console.log(questions[index]);
	
	if(optionClicked == questions[index].answer){
		$(option).addClass("right");
		score++;
		
	}
	else{
		$(option).addClass("wrong");
		wrong++;
	}
	
	$(".scoreBox span").text(score);
	
	$(".optionBox span").attr("onclick","");

}

//Function For next Question

function showNext(){
	if(index>=questions.length-1){
		showResult(0);
		return;
	}
	
	index++;
	
	$(".optionBox span").removeClass();
	$(".optionBox span").attr("onclick","checkAnswer(this)");
	
	printQuestion(index);
	
	
}
//Function for result

function showResult(j){
	if(j==1 && index<questions.length-1 && !confirm("Quiz Not Finished yet.Press Ok to Skip & get your Result")){
		return;
	}
	
	result();
	
}

//Result after timer

function result(){
	
	$("#questionScreen").hide();
	$("#resultScreen").show();
	
	$("#totalQuestion").text(totalQuestion);
	$("#attemptQuestion").text(attempt);
	$("#correctAnswer").text(score);
	$("#wrongAnswer").text(wrong);
	
}


