@extends('users.layouts.app')

@section('content')


<div class="login-section">
  <div class="image-layer" style="background-image: url('{{asset("assets/images/background/120.jpg")}}');"></div>
  <div class="outer-box">
    <!-- Login Form -->
    <div class="login-form default-form">
      <div class="form-inner">
        <h3>Login to Superio</h3>
        <!--Login Form-->



        @if ($errors->any())
           @foreach ($errors->all() as $error)
               <div>{{$error}}</div>
           @endforeach
       @endif


        <form method="POST" action="{{ route('login') }}">
          @csrf


          <div class="form-group">

            <label for="username">{{ __('Username') }}</label>

            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>



          <div class="form-group">
            <div class="field-outer">
              <div class="input-group checkboxes square">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}}>
                <label for="remember" class="remember"><span class="custom-checkbox"></span> {{ __('Remember Me') }}</label>
              </div>
              <a href="#" class="pwd">Forgot password?</a>
            </div>
          </div>

          <div class="form-group">
             <button type="submit"  class="theme-btn btn-style-one">{{ __('Login') }}</button>
          </div>
        </form>

        @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        @endif



        <div class="bottom-box">
          <div class="text">Don't have an account? <a href="register.html">Signup</a></div>
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