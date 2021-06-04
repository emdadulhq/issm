<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

	 <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Baloo+Tamma+2:wght@500&family=Great+Vibes&family=Libre+Franklin:wght@100&family=Montserrat:wght@700&display=swap" rel="stylesheet">
     <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/event.css') }}">

  </head>
  <body>
  <div class="clock_sec" onload="initClock()">



    <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname">Friday</span>,
        <span id="month">March</span>
        <span id="daynum">26</span>,
        <span id="year">2021</span>
      </div>
      <div class="time">
        <span id="hour">1</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">PM</span>
      </div>
    </div>
	<div class="contact">
            <h2 class="heading">Upcoming Event </h2>
			<h3>Bangladesh Independence Day </h3>
        <i class="material-icons"> place</i>
        <span>Uttara<br /></span><br />

        </div>



  </div>

    <!--digital clock end-->

    <script type="text/javascript">
    function updateClock(){
      var now = event Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>

  </body>
</html>
