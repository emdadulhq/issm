   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	 <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Baloo+Tamma+2:wght@500&family=Great+Vibes&family=Libre+Franklin:wght@100&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/CSS/contact.css') }}">
    <title>contact us</title>
	<link rel="icon" href="{{ URL::to('assets/images/home 80 px.png') }}">
</head>

<body id="cont_sec">
    <div class="container" id="contact_sec">
        <div class="contact-info">
            <h3>Contact Info</h3>
            <i class="material-icons">place</i>
            <span>House#25,Road#5,Sector-6,Uttara<br />1230,Dhaka</span><br />
            <i class="material-icons">email</i>
            <span>3iTech.engineering@gmail.com</span><br />
            <i class="material-icons">phone</i>
            <span>+8801973080878</span>
            <div class="social">

                <i id="social-icon" class="fa fa-facebook-official" onclick="window.open('https://www.facebook.com/iSSM.3itechnology');"></i>


                <i id="social-icon" class="fa fa-linkedin" onclick="window.open('https://www.linkedin.com/feed/?trk=onboarding-landing');"></i>


                <i id="social-icon" class="fa fa-twitter" onclick="window.open('https://www.twitter.com/3iIssm');"></i>


                <i id="social-icon" class="fa fa-instagram" onclick="window.open('https://www.instagram.com/3ischooling3');"></i>

            </div>




        </div>
        <div class="contact">
            <h2 class="heading">Any Enquiry.</h2>
            <form action="contact.php" method="POST">
                <span class="inputbox">
                    <input type="text" name="firstname" required />
                    <span class="inputname">First Name</span>
                </span>
                <span class="inputbox">
                    <input type="text" name="lastname" required />
                    <span class="inputname">Last Name</span>
                </span>
                <span class="inputbox">
                    <input type="text" name="email" required />
                    <span class="inputname">Email Address</span>
                </span>
                <span class="inputbox">
                    <input type="text" name="phone" required />
                    <span class="inputname">Contact Number</span>
                </span>
                <span class="inputbox">
                    <textarea name="enquiry" id="" cols="30" rows="3" required></textarea>
                    <span class="textname">Type your enquiry here..</span> </span><br />
                <input type="submit" name="submit" class="submit" />
            </form>
        </div>
    </div>


  <div class="bottom-container">

    <p class="copyright">©2021 ISSM. @All rights reserved</p>
  </div>
</body>

</html>
