@extends('users.layouts.dashboard')

@section('title', 'Profile Settings')


@section('stylesheet')
<style>
</style>
@endsection


@section('content')


<div class="theme-layout">

	<div class="postoverlay"></div>

	 @include('users.includes.dashboard.responsive-header')
	 @include('users.includes.dashboard.topbar')

	 @include('users.includes.dashboard.fixed-sidebar-right')
	 @include('users.includes.dashboard.fixed-sidebar-left')

		
	<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">

						{{-- 	
						<div class="user-profile">
								<figure>
									<div class="edit-pp">
										<label class="fileContainer">
											<i class="fa fa-camera"></i>
											<input type="file">
										</label>
									</div>
									<img src="{{asset('dashboard/images/resources/profile-image.jpg')}}" alt="">
									<ul class="profile-controls">
										<li><a href="#" title="Add friend" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a></li>
										<li><a href="#" title="Follow" data-toggle="tooltip"><i class="fa fa-star"></i></a></li>
										<li><a class="send-mesg" href="#" title="Send Message" data-toggle="tooltip"><i class="fa fa-comment"></i></a></li>
										<li>
											<div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
												<ul class="more-dropdown">
													<li><a href="setting.html" title="">Update Profile Photo</a></li>
													<li><a href="setting.html" title="">Update Header Photo</a></li>
													<li><a href="setting.html" title="">Account Settings</a></li>
													<li><a href="support-and-help.html" title="">Find Support</a></li>
													<li><a class="bad-report" href="#" title="">Report Profile</a></li>
													<li><a href="#" title="">Block Profile</a></li>
												</ul>
											</div>
										</li>
									</ul>
									<ol class="pit-rate">
										<li class="rated"><i class="fa fa-star"></i></li>
										<li class="rated"><i class="fa fa-star"></i></li>
										<li class="rated"><i class="fa fa-star"></i></li>
										<li class="rated"><i class="fa fa-star"></i></li>
										<li class=""><i class="fa fa-star"></i></li>
										<li><span>4.7/5</span></li>
									</ol>
								</figure>
								
								<div class="profile-section">
									<div class="row">
										<div class="col-lg-2 col-md-3">
											<div class="profile-author">
												<div class="profile-author-thumb">
													<img alt="author" src="{{asset('dashboard/images/resources/author.jpg')}}">
													<div class="edit-dp">
														<label class="fileContainer">
															<i class="fa fa-camera"></i>
															<input type="file">
														</label>
													</div>
												</div>
													
												<div class="author-content">
													<a class="h4 author-name" href="about.html">Jack Carter</a>
													<div class="country">Ontario, CA</div>
												</div>
											</div>
										</div>
										<div class="col-lg-10 col-md-9">
											<ul class="profile-menu">
												<li>
													<a class="active" href="timeline.html">Timeline</a>
												</li>
												<li>
													<a class="" href="about.html">About</a>
												</li>
												<li>
													<a class="" href="timeline-friends.html">Friends</a>
												</li>
												<li>
													<a class="" href="timeline-photos.html">Photos</a>
												</li>
												<li>
													<a class="" href="timeline-videos.html">Videos</a>
												</li>
												<li>
													<div class="more">
														<i class="fa fa-ellipsis-h"></i>
														<ul class="more-dropdown">
															<li>
																<a href="timeline-groups.html">Profile Groups</a>
															</li>
															<li>
																<a href="statistics.html">Profile Analytics</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
											<ol class="folw-detail">
												<li><span>Posts</span><ins>101</ins></li>
												<li><span>Followers</span><ins>1.3K</ins></li>
												<li><span>Following</span><ins>22</ins></li>
											</ol>
										</div>
									</div>
								</div>	
							</div><!-- user profile banner  -->
							--}}


							<div class="col-lg-9">
								<div class="central-meta">
									<div class="about">
										<div class="d-flex flex-row mt-2">
											<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >

												<li class="nav-item">
													<a href="#edit-profile" class="nav-link active" data-toggle="tab" ><i class="fa-regular fa-pen-to-square"></i> Edit Profile</a>
												</li>

												<li class="nav-item">
													<a href="#gen-setting" class="nav-link" data-toggle="tab" ><i class="fa-regular fa-gear"></i> General Setting</a>
												</li>

												<li class="nav-item">
													<a href="#notifi" class="nav-link" data-toggle="tab" ><i class="fa-regular fa-bell"></i> Notification</a>
												</li>
												<li class="nav-item">
													<a href="#messages" class="nav-link" data-toggle="tab" ><i class="fa-sharp fa-regular fa-comments"></i> Messages</a>
												</li>
												<li class="nav-item">
													<a href="#weather" class="nav-link" data-toggle="tab" ><i class="fa-regular fa-cloud-bolt-sun"></i> Weather Setting</a>
												</li>
												<li class="nav-item">
													<a href="#page-manage" class="nav-link" data-toggle="tab" ><i class="fa-regular fa-sliders"></i> Widgets Setting</a>
												</li>
												<li class="nav-item">
													<a href="#privacy" class="nav-link" data-toggle="tab"  ><i class="fa-regular fa-shield-check"></i> Privacy & Data</a>
												</li>
												<li class="nav-item">
													<a href="#security" class="nav-link" data-toggle="tab" ><i class="fa-regular fa-lock"></i> Security</a>
												</li>
												<li class="nav-item">
													<a href="#apps" class="nav-link" data-toggle="tab" ><i class="fa-brands fa-app-store"></i> Apps</a>
												</li>
											</ul>
											<div class="tab-content">

												<div class="tab-pane fade show active" id="edit-profile" >
													<div class="set-title">
														<h5>Edit Profile</h5>
														<span>People on Pitnik will get to know you with the info below</span>
													</div>
													<div class="setting-meta">
														<div class="change-photo">
															<figure><img src="{{asset('dashboard/images/resources/admin2.jpg')}}" alt=""></figure>
															<div class="edit-img">
																<form class="edit-phto">
																	
																	<label class="fileContainer">
																		<i class="fa-brands fa-instagram"></i>
																		Chage DP
																	<input type="file">
																	</label>
																</form>
															</div>
														</div>
													</div>

													<div class="stg-form-area">
														<form id="personalInfo" class="c-form formvalid " method="POST" autocomplete="off" novalidate>
														@csrf


															<div>
																<label for="prefix">Prefix</label>
																<select id="prefix" name="prefix">
																 <option value="">Select</option>
																  <option value="country">Country</option>
																</select>  
															</div>	


															<div class="row">
																<div class="col-lg-6">
																	<div>
																		<label for="first_name">First Name*</label>
																		<input type="text" id="first_name" name="first_name"  value="" required>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div>
																		<label for="last_name">Last Name*</label>
																		<input type="text" id="last_name" name="last_name"  value="" required>
																	</div>
																</div>
															</div>

															<div class="uzer-nam">
																<label for="phone">Mobile*</label>
																<input type="number" id="phone" name="phone" value="" required>
															</div>
															<div>
																<label for="email">Email Address</label>
																<input type="email" id="email" name="email" value=""  placeholder="abc@pitnikmail.com">
															</div>

															<div>
																<label>Gender</label>
																<div class="form-radio">
																  <div class="radio">
																	<label for="male">
																	  <input id="male" type="radio" checked="checked" name="gender" value="1" name="radio"><i class="check-box"></i>Male
																	</label>
																  </div>
																  <div class="radio">
																	<label for="male">
																		<input id="female" type="radio" name="gender" value="2" name="radio"><i class="check-box"></i>Female
																	</label>
																  </div>
																</div>
															</div>

															<div>
																<label for="bio">Bio</label>
																<textarea rows="3" id="bio" name="bio" placeholder="write someting about yourself"></textarea>
															</div>	
																	

															<div class="d-flex justify-content-end">
																<div class="form-spinner spinner-border text-secondary" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<button class="form-button" type="submit" data-ripple="">Update Profile</button>
															</div>

															{{-- 

															<div>
																
																<div class="spinner-border text-primary" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-border text-secondary" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-border text-success" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-border text-danger" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-border text-warning" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-border text-info" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-border text-light" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-border text-dark" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>

															</div>

															<div>

																<div class="spinner-grow text-primary" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-grow text-secondary" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-grow text-success" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-grow text-danger" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-grow text-warning" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-grow text-info" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-grow text-light" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>
																<div class="spinner-grow text-dark" role="status">
																  <span class="visually-hidden">Loading...</span>
																</div>

															</div>	--}}




														</form>


													</div>
												</div>

												<div class="tab-pane fade" id="gen-setting" >
													<div class="set-title">
														<h5>General Setting</h5>
														<span>Set your login preference, help us personalize your experience and make big account change here.</span>
													</div>
													<div class="onoff-options ">
														<form method="post">
															<div class="setting-row">
																<span>Sub users</span>
																<p>Enable this if you want people to follow you</p>
																<input type="checkbox" id="switch00" /> 
																<label for="switch00" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable follow me</span>
																<p>Enable this if you want people to follow you</p>
																<input type="checkbox" id="switch01" /> 
																<label for="switch01" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Send me notifications</span>
																<p>Send me notification emails my friends like, share or message me</p>
																<input type="checkbox" id="switch02" /> 
																<label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Text messages</span>
																<p>Send me messages to my cell phone</p>
																<input type="checkbox" id="switch03" /> 
																<label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable tagging</span>
																<p>Enable my friends to tag me on their posts</p>
																<input type="checkbox" id="switch04" /> 
																<label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable sound Notification</span>
																<p>You'll hear notification sound when someone sends you a private message</p>
																<input type="checkbox" id="switch05" checked=""/> 
																<label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															
															<div class="submit-btns">
																<button type="button" class="main-btn" data-ripple=""><span>Save</span></button>
																<button type="button" class="main-btn3" data-ripple=""><span>Cancel</span></button>
															</div>
														</form>
													</div>
													<div class="account-delete">
														<h5>Account Changes</h5>
														<div>
															<span>Hide Your Posts and profile </span>
															<button type="button" class=""><span>Deactivate account</span></button>
														</div>	
														<div>
															<span>Delete your account and data </span>
															<button type="button" class=""><span>close account</span></button>
														</div>
													</div>
												</div><!-- general setting -->


												<div class="tab-pane fade" id="notifi" role="tabpanel">
													<div class="set-title">
														<h5>Notification Setting</h5>
														<span>Select push and email notifications you'd like to receive.</span>
													</div>
													<div class="notifi-seting">
														<div class="form-radio">
														  <div class="radio">
															<label>
															  <input type="radio" checked="checked" name="radio"><i class="check-box"></i>
																Send Me emails about my activity except emails i have unsubscribe from
															</label>
														  </div>
														  <div class="radio">
															<label>
															  <input type="radio" name="radio"><i class="check-box"></i>
																Only send me required services announcements.
															</label>
														  </div>
														</div>
														<div class="set-title">
															<h6>i'd like to receive emails and updates from Pitnik about</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Always General announcement, updates, posts, and videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Personalise tips for my page. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Announcements and recommendations. 
														  </label>
															<p><a href="#" title="">learn more</a> about emails from pitnik</p>
														</div>
														<div class="set-title">
															<h6>Other Notifications</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Recommended videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  activity on my page or channel. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Activity on my comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Reply to comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Mentions. 
														  </label>
															
														</div>
														<div class="set-title">
															<h6>Language Preference</h6>
															<span>Select your email language</span>
														</div>
														<select class="select">
															<option value="">Eglish US</option>
															<option value="">Eglish UK</option>
															<option value="">Russia</option>
														</select>
														<p>
															you will always get notifications you have turned on for individual <a href="#" title="">Manage All Subscriptions</a>
														</p>
													</div>
												</div><!-- notification -->
												<div class="tab-pane fade" id="messages" role="tabpanel">
													<div class="set-title">
														<h5>Messages Setting</h5>
														<span>Set your login preference, help us personalize your experience and make big account change here.</span>
														<div class="mesg-seting">
														
														<div class="set-title">
															<h6>i'd like to receive emails and updates from Pitnik about</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Always General announcement, updates, posts, and videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Personalise tips for my page. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Announcements and recommendations. 
														  </label>
															<p><a href="#" title="">learn more</a> about emails from pitnik</p>
														</div>
														<div class="set-title">
															<h6>Other Messages</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  From Recommended videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Messages from activity on my page or channel. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Message me the replyer Activity on my comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Reply to comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Mentions. 
														  </label>
															
														</div>
														<div class="set-title">
															<h6>Language Preference</h6>
															<span>Select your Messages language</span>
														</div>
														<select class="select">
															<option value="">Eglish US</option>
															<option value="">Eglish UK</option>
															<option value="">Russia</option>
														</select>
														<p>
															you will always get notifications you have turned on for individual <a href="#" title="">Manage All Subscriptions</a>
														</p>
													</div>
													</div>
												</div><!-- messages -->
												<div class="tab-pane fade" id="weather" role="tabpanel">
													<div class="set-title">
														<h5>Weather Widget Setting</h5>
														<span>Set your weather widget or page setting.</span>
														<div class="mesg-seting">
															<div class="set-title">
																<h6>Country & Timezone</h6>
																<span>Select your Country Time Zone</span>
															</div>
															<select class="select">
																<option value="">US (UTC-8)</option>
																<option value="">Ontario(UTC-7)</option>
																<option value="">Nova Scotia(UTC-5)</option>
															</select>
															<div class="set-title">
																<h6>Temperature Unit</h6>
															</div>
															<select class="select">
																<option value="">F° (Farenheit)</option>
																<option value="">C° (Celsius)</option>
															</select>
															<div class="set-title">
																<h6>Show Extended forecast</h6>
															</div>
															<div class="checkbox">
															  <label>
																<input type="checkbox" checked="checked"><i class="check-box"></i>
																  Show Extended Forecast on Widget. 
															  </label>
																<p><a href="#" title="">learn more</a></p>
															</div>
															<div class="set-title">
																<h6>Forecast Days</h6>
															</div>
															<select class="select">
																<option value="">Next Day</option>
																<option value="">Next week</option>
																<option value="">Next Month</option>
																<option value="">Next Year</option>
															</select>
															<p>
																you will always get Daily notifications you have turned on for individual.
															</p>
															<div>
															<form>
																<button class="main-btn" data-ripple="" type="submit">Save</button>
																<button class="main-btn3" data-ripple="" type="submit">Cancel</button>
																
															</form>	
															</div>
														</div>
													</div>
												</div><!-- weather widget setting -->
												<div class="tab-pane fade" id="page-manage" role="tabpanel">
													<div class="set-title">
														<h5>Page & sidebar</h5>
														<span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info"><a href="manage-page.html">Click here</a> to go widget and page setting area</p>
												</div><!-- privacy -->
												<div class="tab-pane fade" id="privacy" role="tabpanel">
													<div class="set-title">
														<h5>Privacy & data</h5>
														<span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
													</div>
													<div class="onoff-options ">
														<form method="post">
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>Hide your profile from search engine (Ex.google) <a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0001" /> 
																<label for="switch0001" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="set-title">
																<h5>Personalization</h5>
															</div>	
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>use sites you visit to improve which recommendation and ads you see. <a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0002" /> 
																<label for="switch0002" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>use information from our partners to improve which ads you see<a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0003" /> 
																<label for="switch0003" data-on-label="ON" data-off-label="OFF"></label>
															</div>
														</form>
													</div>
												</div><!-- privacy -->
												<div class="tab-pane fade" id="security" role="tabpanel">
													<div class="set-title">
														<h5>Security Setting</h5>
														<span>trun on two factor authentication and check your list of connected device to keep your account posts safe <a href="#" title="">Learn More</a>.</span>
													</div>
													<div class="seting-box">
														<p>to turn on two-factor authentication, you must <a href="#" title=""> confirm Your Email </a> and <a href="#" title="">Set Password</a></p>
														<div class="set-title">
															<h5>Connected Devicese</h5>
														</div>
														<p>This is a list of devices that have logged into your account, Revok any session that you do not recognize. <a href="#" title="">Hide Sessions</a></p>
														<span>Last Accessed</span>
														<p>August 30, 2020 12:25AM</p>
														<span>Location</span>
														<p>Berlin, Germany (based on IP = 103.233.24.5)</p>
														<span>Device Type</span>
														<p>Chrome on windows 10</p>
													</div>
												</div><!-- security -->
												<div class="tab-pane fade" id="apps" role="tabpanel">
													<div class="set-title">
														<h5>Apps</h5>
														<span>Keep track of everywhere you have login with your pintik profile and remove access from apps you are no longer using with pitnik <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info">You have not approved any app</p>
												</div><!-- apps -->
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											<h4 class="widget-title">Your page</h4>	
											<div class="your-page">
												<figure>
													<a title="" href="#"><img alt="" src="{{asset('dashboard/images/resources/friend-avatar9.jpg')}}"></a>
												</figure>
												<div class="page-meta">
													<a class="underline" title="" href="#">My page</a>
													<span><i class="ti-comment"></i>Messages <em class="bg-blue">9</em></span>
													<span><i class="ti-bell"></i>Notifications <em class="bg-purple">2</em></span>
												</div>
												<div class="page-likes">
													<ul class="nav nav-tabs likes-btn">
														<li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
														 <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
													  <div id="link1" class="tab-pane active fade show">
														<span><i class="ti-heart"></i>884</span>
														  <a title="weekly-likes" href="#">35 new likes this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-1.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-2.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-3.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-4.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-5.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-6.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-7.jpg')}}">  
															</a>  
														  </div>
													  </div>
													  <div id="link2" class="tab-pane fade">
														  <span><i class="ti-eye"></i>445</span>
														  <a title="weekly-likes" href="#">440 new views this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-1.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-2.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-3.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-4.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-5.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-6.jpg')}}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="{{asset('dashboard/images/resources/userlist-7.jpg')}}">  
															</a>  
														  </div>
													  </div>
													</div>
												</div>
											</div>
										</div>
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	@include('users.includes.dashboard.bottombar')

</div>


@include('users.includes.dashboard.side-panel')


@endsection



@section('scripts')

<script>


$(document).ready(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $("#personalInfo").validate({
    rules: {
      first_name: {
        required: true,
        minlength: 2
      }
    },
    messages: {
      first_name: {
        required: "Enter your name",
        minlength: "At least 2 characters"
      }
    },
    submitHandler: function (form, event) {
      event.preventDefault();

      $.ajax({
        url: '{{url("dashboard/save-profile")}}',
        method: 'POST',
        data: $(form).serialize(),
        beforeSend: function( xhr ) {
        	$(form).addClass("form-submitting");
        },
        success: function (res) {
          alert("Saved!");
          $(form).removeClass("form-submitting");

        },
        error: function (xhr) {
          alert("Error: " + xhr.responseText);
        }
      });
    }
  });
});

</script>
@endsection