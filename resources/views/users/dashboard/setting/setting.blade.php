@extends('users.layouts.dashboard')

@section('title', 'My Setting')
@section('description', '')
@section('canonical', URL::current())


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
		<div class="page-header">
			<div class="header-inner">
				<h2>Widgets</h2>
				<p>
					Welcome to Pitnik Social Network. Here you’ll find all the widgets which are usages in the whole template and ready made elemets as you want. you can use to show on your custom pages.
				</p>
			</div>
			<figure><img src="images/resources/baner-forum.png" alt=""></figure>
		</div>
	</section><!-- sub header -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row widget-page merged20">
							<div class="col-lg-3 col-md-12 col-sm-6">
								<aside class="sidebar">
									
									<div class="widget">
										<h4 class="widget-title">Complete Your Profile</h4>
										<div class="pit-reg-complete">
											<div class="progresdiv"  data-percent="86">
												  <svg class="progres" width="90" height="90" version="1.1" xmlns="http://www.w3.org/2000/svg">
												  <circle r="50" cx="50" cy="50" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0" ></circle>
												  <circle class="bar" r="50" cx="50" cy="50" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle>
												</svg>
											</div>
											<div class="reg-comp-meta">
												<p>filling your profile details will help you to meet the right people</p>
												<ul>
													<li><i class="fa-regular fa-envelope bg-red"></i> <span>Profile Information 20%</span> 
														<a href="{{url('dashboard/profile-information')}}" title="" class="underline">Add</a>
													</li>
													<li><i class="fa-regular fa-at bg-blue"></i> <span>your Email 10%</span> 
														<a href="#" title="" class="underline">Add</a>
													</li>
													<li><i class="fa-regular fa-phone bg-purple"></i> <span>your phone number 10%</span> 
														<a href="#" title="" class="underline">Add</a>
													</li>
													<li><i class="fa-regular fa-map-marker bg-green"></i> <span>Your Location 10%</span>
														<a href="#" title="" class="underline">Add</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="widget">
										<h4 class="widget-title">Shortcuts</h4>
										<ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="#" title="">News feed</a>
											</li>
											<li>
												<i class="ti-mouse-alt"></i>
												<a href="inbox.html" title="">Inbox</a>
											</li>
											<li>
												<i class="ti-files"></i>
												<a href="page.html" title="">My pages</a>
											</li>
											<li>
												<i class="ti-user"></i>
												<a href="friends-list.html" title="">friends</a>
											</li>
											<li>
												<i class="ti-image"></i>
												<a href="images.html" title="">images</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="videos.html" title="">videos</a>
											</li>
											<li>
												<i class="ti-comments-smiley"></i>
												<a href="inbox.html" title="">Messages</a>
											</li>
											<li>
												<i class="ti-share"></i>
												<a href="location.html" title="">People Nearby</a>
											</li>
											<li>
												<i class="fa-regular fa-bar-chart"></i>
												<a href="insight.html" title="">insights</a>
											</li>
											<li>
												<i class="ti-power-off"></i>
												<a href="login.html" title="">Logout</a>
											</li>
										</ul>
									</div>
								</aside>
							</div><!-- sidebar -->


							<div class="col-lg-3 col-md-12 col-sm-6">
								<aside class="sidebar">
									<div class="widget">
										<h4 class="widget-title">E-Contact</h4>

										<ul class="contact-widget">
											<li class="contact-box">
												<span>Address</span>
												<p>320 street 4, Ontario, Tornoto Canada. </p>
											</li>
											<li class="contact-box">
												<span>E-Contact</span>
												<p><i class="fa-brands fa-whatsapp"></i>+13432989734</p>
												<p><i class="fa-regular fa-envelope"></i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c3c25382225270c3523393e212d2520622f2321">[email&#160;protected]</a></p>
												<p><i class="fa-regular fa-phone"></i>+1-343-232</p>
												<p><i class="fa-regular fa-fax"></i>+1-303-2324</p>
											</li>
										</ul>
									</div>
								</aside>
							</div>


							<div class="col-lg-3 col-md-12 col-sm-6">
								<aside class="sidebar">

									<div class="widget">
										<h4 class="widget-title">Profile intro</h4>
										<ul class="short-profile">
											<li>
												<span>about</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft </p>
											</li>
											<li>
												<span>fav tv show</span>
												<p>Sacred Games, Spartcus Blood, Games of Theron </p>
											</li>
											<li>
												<span>favourit music</span>
												<p>Justin Biber, Shakira, Nati Natasah</p>
											</li>
										</ul>
									</div><!-- profile intro -->
								</aside>
							</div>




							<div class="col-lg-3 col-md-12 col-sm-6">
								<aside class="sidebar">
									<div class="widget">
										<h4 class="widget-title">Your page</h4>	
										<div class="your-page">
											<figure>
												<a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
											</figure>
											<div class="page-meta">
												<a href="#" title="" class="underline">My Creative Page</a>
												<span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
												<span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
											</div>
											<ul class="page-publishes">
												<li>
													<span><i class="ti-pencil-alt"></i>Publish</span>
												</li>
												<li>
													<span><i class="ti-camera"></i>Photo</span>
												</li>
												<li>
													<span><i class="ti-video-camera"></i>Live</span>
												</li>
												<li>
													<span><i class="ti-user"></i>Invite</span>
												</li>
											</ul>
											<div class="page-likes">
												<ul class="nav nav-tabs likes-btn">
													<li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">likes</a></li>
													 <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">views</a></li>
												</ul>
												<!-- Tab panes -->
												<div class="tab-content">
												  <div class="tab-pane active fade show " id="link1" >
													<span><i class="ti-heart"></i>884</span>
													  <a href="#" title="weekly-likes">35 new likes this week</a>
													  <div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="images/resources/userlist-1.jpg" alt="">  
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="images/resources/userlist-2.jpg" alt="">  
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="images/resources/userlist-3.jpg" alt="">  
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="images/resources/userlist-4.jpg" alt="">  
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="images/resources/userlist-5.jpg" alt="">  
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="images/resources/userlist-6.jpg" alt="">  
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="images/resources/userlist-7.jpg" alt="">  
														</a>  
													  </div>
												  </div>
												  <div class="tab-pane fade" id="link2" >
													  <span><i class="fa fa-eye"></i>440</span>
													  <a href="#" title="weekly-likes">440 new views this week</a>
													  <div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="images/resources/userlist-1.jpg" alt="">  
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="images/resources/userlist-2.jpg" alt="">  
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="images/resources/userlist-3.jpg" alt="">  
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="images/resources/userlist-4.jpg" alt="">  
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="images/resources/userlist-5.jpg" alt="">  
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="images/resources/userlist-6.jpg" alt="">  
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="images/resources/userlist-7.jpg" alt="">  
														</a>  
													  </div>
												  </div>
												</div>
											</div>
										</div>
									</div><!-- page like widget -->


	

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