@extends('users.layouts.dashboard')

@section('title', 'Dashboard - Kochaisa Kurmi Samaj Member Portal')
@section('description', 'Your personalized Kochaisa Kurmi Samaj member dashboard - manage your profile, view upcoming events, connect with community members, and access exclusive resources.')
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
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<div class="central-meta">

				            <div class="ls-widget ">
				              <div class="tabs-box">
				                <div class="widget-title">
				                  <h4>My Profile</h4>
				                </div>

				                <div class="widget-content">

				                	

				                	@if ($errors->any())
							            <div class="alert alert-danger">
							                <ul>
							                    @foreach ($errors->all() as $error)
							                        <li>{{ $error }}</li>
							                    @endforeach
							                </ul>
							            </div>
							        @endif

			

				                  <form class="form-main" method="POST" action="{{ route('profile-information') }}"  autocomplete="off" novalidate>
				                  	 @csrf
				                  	 <input type="hidden" name="id" value="{{Auth::user()->id}}">


				                    <div class="row">

				                    <div class="form-group col-lg-2 col-md-12">
				                        <label for="prefix">Prefix</label>
										<select class="mb-2" id="prefix" name="prefix">
											<option value="">Select</option>
											@foreach($prefixes as $prefix)
												<option value="{{$prefix->id}}">{{$prefix->prefix}}</option>
										    @endforeach
										</select>
				                     </div>

				                      <div class="form-group col-lg-5 col-md-12">
				                        <label for="first_name">First Name*</label>
				                        <input type="text" id="first_name" name="first_name" value="{{Auth::user()->first_name}}" required>
				                         @error('first_name')
							                <span class="invalid-feedback" role="alert">
							                    <strong>{{ $message }}</strong>
							                </span>
							            @enderror
				                      </div>

				                      <div class="form-group col-lg-5 col-md-12">
				                        <label for="last_name">Last Name*</label>
				                        <input type="text" id="last_name" name="last_name" value="{{Auth::user()->last_name}}" required>
				                        @error('last_name')
							                <span class="invalid-feedback" role="alert">
							                    <strong>{{ $message }}</strong>
							                </span>
							            @enderror
				                      </div>


				                      <div class="form-group col-lg-4 col-md-12">
				                        <label>Phone</label>
				                        <input type="number" name="phone" value="{{Auth::user()->phone}}" readonly>
				                      </div>


				                      <div class="form-group col-lg-4 col-md-12">
				                        <label for="date_of_birth">Date of Birth</label>
				                        <input class="form-control date-input @error('date_of_birth') is-invalid @enderror" type="text" id="date_of_birth" name="date_of_birth" class="date-input" value="{{ \Carbon\Carbon::parse(Auth::user()->date_of_birth)->format('d-m-Y') }}">


				                        @error('date_of_birth')
							                <span class="invalid-feedback" role="alert">
							                    <strong>{{ $message }}</strong>
							                </span>
							            @enderror
				                      </div>

				                      <div class="col-lg-4 col-md-12 col-sm-12">
											<div class="gender mb-2 @error('gender') is-invalid @enderror">
												<label>Gender</label>
												<div class="form-radio">
												  <div class="radio">
													<label>
													  <input type="radio" class="form-control" name="gender" value="1"><i class="check-box"></i>Male
													</label>
												  </div>
												  <div class="radio">
													<label>
													  <input type="radio" class="form-control" name="gender" value="2"><i class="check-box"></i>Female
													</label>
												  </div>
												</div>
											</div>
											@error('gender')
								                <span class="invalid-feedback" role="alert">
								                    <strong>{{ $message }}</strong>
								                </span>
								            @enderror
										</div>
				                      <div class="form-group col-lg-6 col-md-12">
				                        <button type="submit" class="theme-btn btn-style-one">Update Info</button>
				                      </div>
				                    </div>
				                  </form>


				                  
				                </div>
				              </div>
				            </div>
				            <!-- Ls widget -->


						</div>









					<div class="central-meta">
		            <!-- Ls widget -->
		            <div class="ls-widget">
		              <div class="tabs-box">
		                <div class="widget-title">
		                  <h4>Social Network</h4>
		                </div>

		                <div class="widget-content">
		                  <form class="default-form">
		                    <div class="row">
		                      <!-- Input -->
		                      <div class="form-group col-lg-6 col-md-12">
		                        <label>Facebook</label>
		                        <input type="text" name="name" placeholder="www.facebook.com/Invision">
		                      </div>

		                      <!-- Input -->
		                      <div class="form-group col-lg-6 col-md-12">
		                        <label>Twitter</label>
		                        <input type="text" name="name" placeholder="">
		                      </div>

		                      <!-- Input -->
		                      <div class="form-group col-lg-6 col-md-12">
		                        <label>Linkedin</label>
		                        <input type="text" name="name" placeholder="">
		                      </div>

		                      <!-- Input -->
		                      <div class="form-group col-lg-6 col-md-12">
		                        <label>Google Plus</label>
		                        <input type="text" name="name" placeholder="">
		                      </div>

		                      <!-- Input -->
		                      <div class="form-group col-lg-6 col-md-12">
		                        <button class="theme-btn btn-style-one">Save</button>
		                      </div>
		                    </div>
		                  </form>
		                </div>
		              </div>
		            </div>
		           </div>



		           	<div class="central-meta">
			            <!-- Ls widget -->
			            <div class="ls-widget">
			              <div class="tabs-box">
			                <div class="widget-title">
			                  <h4>Contact Information</h4>
			                </div>

			                <div class="widget-content">
			                  <form class="default-form">
			                    <div class="row">
			                      <!-- Input -->
			                      <div class="form-group col-lg-6 col-md-12">
			                        <label>Country</label>
			                        <select class="chosen-select" style="display: none;">
			                          <option>Australia</option>
			                          <option>Pakistan</option>
			                          <option>Chaina</option>
			                          <option>Japan</option>
			                          <option>India</option>
			                        </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 100%;"><a class="chosen-single">
			  <span>Australia</span>
			  <div><b></b></div>
			</a>
			<div class="chosen-drop">
			  <div class="chosen-search">
			    <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
			  </div>
			  <ul class="chosen-results"></ul>
			</div></div>
			                      </div>

			                      <!-- Input -->
			                      <div class="form-group col-lg-6 col-md-12">
			                        <label>City</label>
			                        <select class="chosen-select" style="display: none;">
			                          <option>Melbourne</option>
			                          <option>Pakistan</option>
			                          <option>Chaina</option>
			                          <option>Japan</option>
			                          <option>India</option>
			                        </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 100%;"><a class="chosen-single">
			  <span>Melbourne</span>
			  <div><b></b></div>
			</a>
			<div class="chosen-drop">
			  <div class="chosen-search">
			    <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
			  </div>
			  <ul class="chosen-results"></ul>
			</div></div>
			                      </div>

			                      <!-- Input -->
			                      <div class="form-group col-lg-12 col-md-12">
			                        <label>Complete Address</label>
			                        <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
			                      </div>

			                      <!-- Input -->
			                      <div class="form-group col-lg-6 col-md-12">
			                        <label>Find On Map</label>
			                        <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
			                      </div>

			                      <!-- Input -->
			                      <div class="form-group col-lg-3 col-md-12">
			                        <label>Latitude</label>
			                        <input type="text" name="name" placeholder="Melbourne">
			                      </div>

			                      <!-- Input -->
			                      <div class="form-group col-lg-3 col-md-12">
			                        <label>Longitude</label>
			                        <input type="text" name="name" placeholder="Melbourne">
			                      </div>

			                      <!-- Input -->
			                      <div class="form-group col-lg-12 col-md-12">
			                        <button class="theme-btn btn-style-three">Search Location</button>
			                      </div>


			                      <div class="form-group col-lg-12 col-md-12">
			                        <div class="map-outer">
			                          
			                        </div>
			                      </div>

			                      <!-- Input -->
			                      <div class="form-group col-lg-12 col-md-12">
			                        <button class="theme-btn btn-style-one">Save</button>
			                      </div>
			                    </div>
			                  </form>
			                </div>
			              </div>
			            </div>
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
		jQuery(document).ready(function($) {

			$('.date-input').datepicker({
				format: "dd-mm-yyyy",
				 endDate: "tommorrow",
			    todayBtn: true,
			    daysOfWeekHighlighted: "0",
			    autoclose: true,
			    todayHighlight: true
			});
			
		});	
</script>




@endsection
