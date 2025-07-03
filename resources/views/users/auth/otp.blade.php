@extends('users.layouts.app')

@section('content')

 
<div class="login-section">
  <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
  <div class="outer-box">
    <!-- Login Form -->
    <div class="login-form default-form">
      <div class="form-inner">
        <h3>Enter OTP</h3>

        <!--Login Form-->
        <form method="POST" action="{{ route('otp') }}">
         @csrf



         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




          <div class="form-group">
            <p>
            <?php

            print_r($session_data);
            ?>
           
          </p>


          @if(session()->has('user_otp'))
              <p>dsdsdsd</p>
          @else 
              <p>dsdsddss*sd</p>
          @endif

         


            <label for="otp">{{ __('6 Digit OTP') }}</label>
            <input class="form-control @error('otp') is-invalid @enderror" type="number" id="otp" name="otp" placeholder="6 Digit OTP" value="{{ old('otp') }}" required autocomplete="otp">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          @if(session()->has('user_otp'))
              <input type="hidden" name="phone" value="{{session('phone')}}" />
          @endif


          


   



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