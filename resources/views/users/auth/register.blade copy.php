@extends('users.layouts.app')

@section('content')

 
<div class="login-section">
  <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
  <div class="outer-box">
    <!-- Login Form -->
    <div class="login-form default-form">
      <div class="form-inner">
        <h3>Create Account</h3>

        <!--Login Form-->
        <form method="POST" action="{{ route('register') }}">
         @csrf


          <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"  name="name" value="{{ old('name') }}"  placeholder="Full Name"required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="phone">{{ __('Mobile Number') }}</label>
            <input class="form-control @error('phone') is-invalid @enderror" type="number" id="phone" name="phone" placeholder="Mobile Number" value="{{ old('phone') }}" required autocomplete="phone">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="email">{{ __('Email Address') }}</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>



          <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input class="form-control @error('password') is-invalid @enderror" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
            
          </div>


          <div class="form-group">
            <button class="theme-btn btn-style-one" type="submit">{{ __('Register') }}</button>
          </div>
        </form>

        <div class="bottom-box">
          <div class="divider"><span>or</span></div>
          <div class="btn-box row">
            <div class="col-lg-6 col-md-12">
              <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
            </div>
            <div class="col-lg-6 col-md-12">
              <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Login Form -->
  </div>
</div>


@endsection