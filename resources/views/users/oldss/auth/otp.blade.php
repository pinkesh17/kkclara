@extends('users.layouts.app')

@section('title', 'OTP verification - Kochaisa Kurmi Samaj Member Portal')
@section('description', 'OTP verification - Kochaisa Kurmi Samaj Member Portalß')
@section('canonical', URL::current())

 

@section('content')



<dic class="signin whitish medium-opacity register">
<div class="bg-image" style="background-image:url({{asset('assets/images/bg/theme-bg.jpg')}})"></div>
<div class="login-section">



  <div class="outer-box">
    <!-- Login Form -->
    <div class="login-form default-form">
      <div class="form-inner reg-from">
        <h3>OTP Verification</h3>

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


      
         


            <label for="otp">
              {{ __('Enter the 6-digit OTP sent to your mobile number') }} 
              @if(session()->has('phone')) {{session('phone')}} @endif
            </label>
            <input class="form-control @error('otp') is-invalid @enderror" type="number" id="otp" name="otp" placeholder=" 6-digit OTP" value="{{ old('otp') }}" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="form-group">
            <div class="field-outer">

              <div>
                <a href="{{url('register')}}">
                  {{ __("Change phone number?") }}
               </a>
              </div>

              <div>
                <a href="{{url('register')}}">
                  {{ __("Resend OTP") }}
               </a>
              </div>

            </div>
          </div>

  
   



          <div class="form-group">
            <button class="theme-btn btn-style-one" type="submit">{{ __('Register') }}</button>
          </div>
        </form>


        



      </div>
    </div>
    <!--End Login Form -->
  </div>
</div>
</dic>


@endsection