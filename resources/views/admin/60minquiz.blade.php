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

</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="{{ route('home') }}" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="{{asset('assets/images/logo-mobile.png')}}" width="30"
							 height="30">
						<img class="ttr-logo-desktop" alt="" src="{{asset('assets/images/logo-white.png')}}" width="100"
							 height="17">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="{{ route('home') }}" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="../courses.html">Our Courses</a></li>
								<li><a href="../event.html">New Event</a></li>
								<li><a href="../membership.html">Membership</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top">9 New</span>
								<span class="ttr-notify-text">User Notifications</span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-yellow">
											<i class="fa fa-shopping-cart"></i>
										</span>
										<span class="notification-text">
											<a href="#">Your order is placed</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 7 Min</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Your item is shipped</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 May</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Sneha Jogi</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img
										alt="" src="{{ URL::to('assets/images/testimonials/pic3.jpg') }}" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="user-profile.html">My profile</a></li>
								<li><a href="list-view-calendar.html">Activity</a></li>
								<li><a href="mailbox.html">Messages</a></li>
								<li>
									<a href="{{ route('logout') }}"
									   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</div>
					</li>
					<li class="ttr-hide-on-mobile">
						<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
						<div class="ttr-header-submenu ttr-extra-menu">
							<a href="#">
								<i class="fa fa-music"></i>
								<span>Musics</span>
							</a>
							<a href="#">
								<i class="fa fa-youtube-play"></i>
								<span>Videos</span>
							</a>
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span>Emails</span>
							</a>
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Reports</span>
							</a>
							<a href="#">
								<i class="fa fa-smile-o"></i>
								<span>Persons</span>
							</a>
							<a href="#">
								<i class="fa fa-picture-o"></i>
								<span>Pictures</span>
							</a>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="{{ route('home') }}"><img alt="" src="{{ asset('assets/images/logo.png') }}" width="82" height="27"></a>
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->

			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="{{ route('home') }}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
							<span class="ttr-label">Dashborad</span>
						</a>
					</li>
					<li>
						<a href="{{route('admin.course')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
							<span class="ttr-label">Courses</span>
						</a>
					</li>
					<li>
						<a href="{{ route('admin.quiz') }}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-view-list-alt"></i></span>
							<span class="ttr-label">60minutesQuiz</span>
						</a>
					</li>
					<li>
						<a href="{{ route('admin.mailbox') }}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-email"></i></span>
							<span class="ttr-label">Mailbox</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
							<li>
								<a href="{{ route('admin.mailbox') }}" class="ttr-material-button"><span class="ttr-label">Mail Box</span></a>
							</li>
							<li>
								<a href="{{ route('admin.compose') }}" class="ttr-material-button"><span class="ttr-label">Compose</span></a>
							</li>
							<li>
								<a href="{{ route('admin.readmail') }}" class="ttr-material-button"><span class="ttr-label">Mail Read</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ route('admin.bcalender') }}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-calendar"></i></span>
							<span class="ttr-label">Calendar</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
							<li>
								<a href="{{ route('admin.bcalender') }}" class="ttr-material-button"><span class="ttr-label">Basic Calendar</span></a>
							</li>
							<li>
								<a href="{{ route('admin.lcalender') }}" class="ttr-material-button"><span class="ttr-label">List View</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ route('admin.bookmark') }}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
							<span class="ttr-label">Bookmarks</span>
						</a>
					</li>
					<li>
						<a href="{{ route('admin.review') }}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-comments"></i></span>
							<span class="ttr-label">Review</span>
						</a>
					</li>
					<li>
						<a href="{{ route('admin.listing') }}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
							<span class="ttr-label">Add listing</span>
						</a>
					</li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
							<span class="ttr-label">My Profile</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
							<li>
								<a href="{{ route('admin.profile') }}" class="ttr-material-button"><span class="ttr-label">User
                                    Profile</span></a>
							</li>

							<li>
								<a href="{{ route('admin.permission') }}" class="ttr-material-button"><span
											class="ttr-label">User
                                    Permission</span></a>
							</li>

						</ul>
					</li>
					<li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->s

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">60 Minite Quiz</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>60 Minite Quiz</li>
				</ul>
			</div>
			<div class="container">
				<!-- Your Profile Views Chart -->

					<div class="widget-box">

						<div class="wrap shadow">
							<div class="card">
								<div class="card-body">
									<h2>Add New Quiz</h2>

									@if($errors->any())
										<p class="alert alert-warning">{{$errors->first()}} <button class="close"
																									data-dismiss="alert">&times;</button>
										</p>
									@endif
									@if(Session::has('success'))
										<p class="alert alert-success">{{Session::get('success')}} <button class="close"
																										   data-dismiss="alert">&times;</button>
										</p>
									@endif

									<form action="{{ route('admin.store') }}" method="POST" >
										@csrf



                                        <div class="form-group">
{{--                                            <label for="">Subject</label>--}}


{{--                                            <input name="subject" class="form-control" value="{{ old('subject') }}"--}}
{{--                                                   type="text">--}}
{{--                                            @if($errors->has('subject'))--}}
{{--                                                <p class="alert alert-warning">{{$errors->first('subject')}} <button class="close"--}}
{{--                                                                                                                      data-dismiss="alert">&times;</button>--}}
{{--                                                </p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
										<div class="form-group">
											<label for="subject">Subject</label>
                                            <br>

                                            <input class="py-5" name="subject" type="radio" value="Bangla" id="Bangla">
                                            <label
                                                for="Bangla">Bangla</label>
                                            <input name="subject" type="radio" value="English" id="English"> <label
                                                for="English">English</label>
                                            <input name="subject" type="radio" value="Mathematics" id="Mathematics"> <label
                                                for="Mathematics">Mathematics</label>
                                            <input name="subject" type="radio" value="Science" id="Science"> <label
                                                for="Science">Science</label>
                                            <input name="subject" type="radio" value="ICT" id="ICT"> <label
                                                for="ICT">ICT</label>
                                            <input name="subject" type="radio" value="Business" id="Business"> <label
                                                for="Business">Business</label>
                                            <input name="subject" type="radio" value="Geography" id="Geography"> <label
                                                for="Geography">Geography</label>
                                            <input name="subject" type="radio" value="Religion" id="Religion"> <label
                                                for="Religion">Religion</label>


                                            {{--                                            <select id="subject">--}}
{{--                                                <option name="subject" value="" > <--Select--></option>--}}
{{--                                                <option name="subject" value="Bangla">Bangla</option>--}}
{{--                                                <option name="subject" value="English">English</option>--}}
{{--                                                <option name="subject" value="Mathematics">Mathematics</option>--}}
{{--                                                <option name="subject" value="Science">Science</option>--}}
{{--                                                <option name="subject" value="ICT">ICT</option>--}}
{{--                                                <option name="subject" value="Business">Business</option>--}}
{{--                                                <option name="subject" value="Geography">Geography</option>--}}
{{--                                                <option name="subject" value="History">History</option>--}}
{{--                                                <option name="subject" value="Religion">Religion</option>--}}
{{--                                            </select>--}}


											@if($errors->has('subject'))
												<p class="alert alert-warning">{{$errors->first('subject')}} <button
                                                        class="close"
																												  data-dismiss="alert">&times;</button>
												</p>
											@endif
										</div>

                                        <div class="form-group">
											<label for="">Question</label>

											<input name="question" class="form-control" value="{{ old('question') }}"
												   type="text">
											@if($errors->has('question'))
												<p class="alert alert-warning">{{$errors->first('question')}} <button class="close"
																												  data-dismiss="alert">&times;</button>
												</p>
											@endif
										</div>

										<div class="form-group">
											<label for="">Choice 1</label>
											<input name="choice1" class="form-control" value="{{ old('choice1') }}"
												   type="text">
											@if($errors->has('choice1'))
												<p class="alert alert-warning">{{$errors->first('choice1')}} <button class="close"
																												   data-dismiss="alert">&times;</button>
												</p>
											@endif
										</div>

										<div class="form-group">
											<label for="">Choice 2</label>
											<input name="choice2" class="form-control" value="{{ old('choice2') }}"
												   type="text">
											@if($errors->has('choice2'))
												<p class="alert alert-warning">{{$errors->first('choice2')}} <button
															class="close"
																												   data-dismiss="alert">&times;</button>
												</p>
											@endif
										</div>

										<div class="form-group">
											<label for="">Choice 3</label>
											<input name="choice3" class="form-control" value="{{ old('choice3') }}"
												   type="text">
											@if($errors->has('choice3'))
												<p class="alert alert-warning">{{$errors->first('choice3')}} <button
															class="close"
																												   data-dismiss="alert">&times;</button>
												</p>
											@endif
										</div>

										<div class="form-group">
											<label for="">Choice 4</label>
											<input name="choice4" class="form-control" value="{{ old('choice4') }}"
												   type="text">
											@if($errors->has('choice4'))
												<p class="alert alert-warning">{{$errors->first('choice4')}} <button
															class="close"
																												   data-dismiss="alert">&times;</button>
												</p>
											@endif
										</div>


                                            <div class="form-group">
                                                <label for="">Answer</label>
                                                <br>

                                                <input name="answer" type="radio" value="choice1" id="c1"> <label
                                                    for="c1">Choice 1</label>
                                                <input name="answer" type="radio" value="choice2" id="c2"> <label
                                                    for="c2">Choice 2</label>
                                                <input name="answer" type="radio" value="choice3" id="c3"> <label
                                                    for="c3">Choice 3</label>
                                                <input name="answer" type="radio" value="choice4" id="c4"> <label
                                                    for="c4">Choice 4</label>


                                            </div>
{{--                                            <label for="answer">Answer</label>--}}
{{--                                            <select  id="answer">--}}
{{--                                                <option name="answer" value="" > <--Select--></option>--}}
{{--                                                <option name="answer" value="choice1">Choice 1</option>--}}
{{--                                                <option name="answer" value="choice2">Choice 2</option>--}}
{{--                                                <option name="answer" value="choice3">Choice 3</option>--}}
{{--                                                <option name="answer" value="choice4">Choice 4</option>--}}
{{--                                            </select>--}}

											@if($errors->has('answer'))
												<p class="alert alert-warning">{{$errors->first('answer')}} <button
															class="close"
																												   data-dismiss="alert">&times;</button>
												</p>
											@endif
										</div>

										<div class="form-group">
											<input class="btn btn-primary" type="submit" value="Add">

										</div>
									</form>
								</div>
							</div>
						</div>
				<!-- Your Profile Views Chart END-->
			</div>
			<hr>



			<div class="container">
				<h2 style="text-align: center;">All Question</strong></h2>

					<div class="">
						<form method="get" action="" class="ansform">

							<div class="">
								<!-- <p></p> -->
								<input type="hidden" name="questionId" id="question" value="">

								<input type="hidden" name="true_answer"  value="">
								<input type="hidden" name="true_answer"  value="">

								<table class="table table-striped">
									<thead >
										<tr>
											<th>#</th>
											<th>Subject</th>
											<th>Question</th>
											<th>Choice1</th>
											<th>Choice2</th>
											<th>Choice3</th>
											<th>Choice4</th>
											<th>Amswer</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody >
									@foreach ($quizlist as $lquiz)
										<tr>
											<td>{{ $loop ->index +1 }}</td>
											<td>{{ $lquiz->subject }}</td>
											<td>{{ $lquiz->question }}</td>
											<td>{{ $lquiz->choice1 }}</td>
											<td>{{ $lquiz->choice2 }}</td>
											<td>{{ $lquiz->choice3 }}</td>
											<td>{{ $lquiz->choice4 }}</td>
											<td>{{ $lquiz->answer }}</td>

											<td class="d-table">
												<a class="btn btn-sm" data-toggle="modal" id=""  href="#view"><i
                                                        class="fa fa-book"></i></a>
												<a class="btn btn-sm " data-toggle="modal" href="#edit"><i class="fa fa-edit"></i></a>
												<a class="btn btn-sm " href="#"><i class="fa fa-trash"></i></a>
											</td>

										</tr>
									@endforeach
								</table>
							</div>

						 </form>
						 <div id="view" class="modal fade">
							 <div class="modal-dialog modal-dialog-centered">
								 <div class="modal-content">
									 <div class="modal-header">
										<h2 style="text-align: center;"> Question</h2><button
                                             class="close"
                                                                                        data-dismiss="modal">&times;</button>
									 </div>
									 <div class="modal-body">

										<table class="table-striped ">
											<tr>
												<td>1.</td>
												<td>Hyper Tag Markup Language </td>
											</tr>
											<tr>
												<td>2.</td>
												<td>Hyper Text Markup Language </td>
											</tr>
											<tr>
												<td>3.</td>
												<td>Hyperlinks Text Mark Language </td>
											</tr>
											<tr>
												<td>4.</td>
												<td>Hyperlinking Text Marking Language </td>
											</tr>


										</table>
									 </div>

								 </div>
							 </div>
						 </div>


						 <div id="edit" class="modal fade">
							 <div class="modal-dialog modal-dialog-centered">
								 <div class="modal-content">
									 <div class="modal-header">
										<h2 style="text-align: center;"> Edit Question </h2> <button class="close" data-dismiss="modal">&times;</button>
									 </div>
									 <div class="modal-body">

										<table class="table-striped ">
											<table class="table bg-success">
												<tbody>
												  <div class="form-group">
												  <tr class="danger">
													<td><strong>Question : </strong></td>
													<td><input type="text" class="form-control" name="question" value="" ></td>

												  </tr>
												  </div>

												  <div class="form-group">
												  <tr class="bg-success">
													<td><strong>Choice1 : </strong></td>
													<td><input name="choice1" class="form-control"  value="" type="text" ></td>
												  </tr>
												</div>

												<div class="form-group">
												  <tr class="danger">
													<td><strong>Choice2 : </strong></td>
													<td><input name="choice2" class="form-control" value="" type="text" ></td>
												  </tr>
												</div>

												<div class="form-group">
												  <tr class="bg-success">
													<td><strong>Choice3 : </strong></td>
													<td><input name="choice3" class="form-control" value="" type="text" ></td>
												  </tr>
												</div>

												<div class="form-group">
												  <tr class="warning">
													<td><strong>Choice4 : </strong></td>
													<td><input name="choice4" class="form-control" value="" type="text" ></td>
												  </tr>
												</div>

												<div class="form-group">
												  <tr class="bg-success">
													<td><strong>Answer : </strong></td>
													<td><input name="answer" class="form-control" value="" type="text" ></td>
												  </tr>
												</div>
												</tbody>
											  </table>
											  <button type="Submit" class="btn btn-success btn-block">Save</button>

										</table>
									 </div>

								 </div>
							 </div>
						 </div>
					</div><br>



		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('assets/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('assets/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('assets/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/vendors/scroll/scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="{{ asset('assets/vendors/chart/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/admin.js') }}"></script>
<script src="{{ asset('assets/vendors/switcher/switcher.js') }}"></script>
</body>


</html>
