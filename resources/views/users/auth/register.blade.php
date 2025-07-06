@extends('users.layouts.app')

@section('title', 'New Member Registration - Join Kochaisa Kurmi Samaj')
@section('description', 'Register as a new member of Kochaisa Kurmi Samaj to participate in community events, access resources, and connect with your cultural heritage. Open to all Kurmi community members.')
@section('canonical', URL::current())

@section('content')



 

<dic class="signin whitish medium-opacity register">
<div class="bg-image" style="background-image:url({{asset('assets/images/bg/theme-bg.jpg')}})"></div>
<div class="login-section">



  <div class="outer-box">
    <!-- Login Form -->
    <div class="login-form default-form">
      <div class="form-inner reg-from">
        <h3>Create Account</h3>

        <!--Login Form-->
        <form method="POST" action="{{ route('register') }}" autocomplete="off">
         @csrf


         {{-- 
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            "This phone number is already registered with us. Please log in or use a different number.""The provided phone number is already associated with an existing account. Please log in or register with a different number."
            
        @endif
        --}}




          <div class="form-group">
            <div class="row">
              <div class="col-md-6">

                <label for="first_name">{{ __('First Name') }}</label>
                <input class="form-control @error('first_name') is-invalid @enderror" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  
                </div>
                <div class="col-md-6">

                  <label for="last_name">{{ __('Last Name') }}</label>
                  <input class="form-control @error('last_name') is-invalid @enderror" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                  @error('last_name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror


                </div>

            </div>
          </div>


          <div class="form-group">
            <label for="phone">{{ __('Mobile Number') }}</label>
            <input class="form-control @error('phone') is-invalid @enderror" type="number" id="phone" name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="form-group">

            <div class="row">

              <div class="col-md-6">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  
                </div>
                <div class="col-md-6">
                  <label for="password-confirm">{{ __('Confirm Password') }}</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

            </div>
          </div>


        <div class="form-group">
            <button class="theme-btn btn-style-one" type="submit">{{ __('Register') }}</button>
          </div>
        </form>

        <div class="bottom-box">
          <a class="btn btn-link" href="{{url('login')}}">
            {{ __("Already have an account? login here") }}
         </a>
        </div>



      </div>
    </div>
    <!--End Login Form -->
  </div>
</div>
</dic>

@endsection