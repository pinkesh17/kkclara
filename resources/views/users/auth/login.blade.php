@extends('users.layouts.app')

@section('title', 'Login')
@section('description', 'Log in to your Kochaisa Kurmi Samaj member account to access community resources, events, and member services. Connect with fellow community members.')
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
        <form method="POST" action="{{ route('login') }}" autocomplete="off">
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


              @if (Route::has('password.request'))
                <a class="pwd" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              @endif



            </div>
          </div>

          <div class="form-group">
             <button type="submit"  class="theme-btn btn-style-one">{{ __('Login') }}</button>
          </div>


        </form>


        <div class="bottom-box">
          <a class="btn btn-link" href="{{url('register')}}">
            {{ __("Don't have an account? Signup") }}
         </a>
        </div>



      </div>
    </div>
    <!--End Login Form -->
  </div>
</div>
</dic>





@endsection