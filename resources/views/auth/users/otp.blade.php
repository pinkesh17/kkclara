@extends('layouts.users.main')

@section('title', 'Kochaisa Kurmi Samaj - Preserving Culture, Uniting Community')
@section('description', 'Join Kochaisa Kurmi Samaj - a vibrant community dedicated to preserving Kurmi traditions, organizing cultural events, and supporting members. Explore membership benefits, upcoming events, and our rich heritage.')
@section('canonical', URL::current())

@section('bodyClass', 'bg-gray-200')



@section('layoutContent')

 
<section class="our-login">
  <div class="container">


{{-- 
  @if ($errors->any())
      <div class="alert alert-danger">

        <?php print_r($errors); ?>


          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      <div class="alert alert-danger">
  @endif
  --}}

  <div class="two-factor">

    <form id="two_factor_form" class="error-forms" method="POST" action="{{route('otp')}}" autocomplete="off" novalidate>
    @csrf
    <div class="row wow fadeInRight" data-wow-delay="300ms">
      <div class="col-xl-12 mx-auto">
        <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">

          <div class="text-center mb-5">
              <h1 class="h3 mb-1">
                  OTP Verification
              </h1> 
              <div class="text-muted fw-semibold fs-6 mb-1">Enter the verification code we sent to</div>
              <div class="fw-bold text-gray-900 fs-5">
                @if(session()->has('phone')) {{Str::mask(session('phone'), '*', -10, 6)}} @endif
                
              </div> 
          </div>

          

          <p>
            <?php

           // print_r($session_data);
            ?>
           
          </p>

          @error('otp_error')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror



          

          <div class="fw-bold text-start text-gray-900 fs-6 mb-1 ms-1">Type your 6 digit security code</div>


          <div class="d-flex flex-wrap flex-stack">                      
            <input type="text" name="code_1" maxlength="1" class="form-control otp_num" value="">
            <input type="number" name="code_2" maxlength="1" class="form-control otp_num" value="">
            <input type="number" name="code_3" maxlength="1" class="form-control otp_num" value="">
            <input type="number" name="code_4" maxlength="1" class="form-control otp_num" value="">
            <input type="number" name="code_5" maxlength="1" class="form-control otp_num" value="">
            <input type="number" name="code_6" maxlength="1" class="form-control otp_num" value="">
        </div>





          <div class="d-grid mt20 mb20">
            <button id="two_factor_submit" class="ud-btn btn-thm" type="submit">Log In <i class="fal fa-arrow-right-long"></i></button>
          </div>


          <div class="d-md-flex justify-content-between">
            <p class="text">Change phone number? <a href="{{route('register')}}" class="text-thm">Update</a></p>
          </div>

        </div>
      </div>
    </div>
    </form>
  </div>

  </div>
</section>

@endsection

@section('scripts')
<script>
$( document ).ready(function() {
  "use strict";

    var TwoFactorAuth = function() {
    let form, submitButton;

    return {
      init: function() {
        form = document.querySelector("#two_factor_form");
        submitButton = document.querySelector("#two_factor_submit");

        // Get all OTP input fields
        let codeInputs = [].slice.call(form.querySelectorAll('input[maxlength="1"]'));

        // Add number validation to each input field
        codeInputs.forEach(function(input) {
          input.addEventListener("input", function() {
            // Remove any non-digit characters
            this.value = this.value.replace(/\D/g, '');
            
            // Limit to one character
            if (this.value.length > 1) {
              this.value = this.value.slice(0, 1);
            }
          });

          input.addEventListener("keydown", function(e) {
            // Allow: backspace, delete, tab, escape, enter
            if ( [8, 9, 27, 13].includes(e.keyCode) || 
                // Allow: Ctrl+A, Ctrl+C, Ctrl+V, Ctrl+X
                (e.ctrlKey && [65, 67, 86, 88].includes(e.keyCode))) {
              return;
            }
            
            // Prevent if not a number key
            if ( (e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105) ) {
              e.preventDefault();
            }
          });
        });

        // Handle form submission
        submitButton.addEventListener("click", function(e) {
          e.preventDefault();

          let isValid = true;
          
          // Validate each input field
          codeInputs.forEach(function(input) {
            if (input.value === "" || input.value.length === 0 || !/^\d$/.test(input.value)) {
              isValid = false;
              input.classList.add("not-invalid");
            } else {
              input.classList.remove("not-invalid");
            }
          });

          if (isValid) {
            form.submit();
          } else {
            
          }
        });

        // Handle auto-focus between input fields
        const inputFields = [
          form.querySelector("[name=code_1]"),
          form.querySelector("[name=code_2]"),
          form.querySelector("[name=code_3]"),
          form.querySelector("[name=code_4]"),
          form.querySelector("[name=code_5]"),
          form.querySelector("[name=code_6]")
        ];

        inputFields[0].focus();

        for (let i = 0; i < inputFields.length - 1; i++) {
          inputFields[i].addEventListener("keyup", function() {
            if (this.value.length === 1) {
              this.classList.remove("not-invalid");
              inputFields[i + 1].focus();
            }
          });
        }

        inputFields[5].addEventListener("keyup", function() {
          if (this.value.length === 1) {
            this.classList.remove("not-invalid");
            this.blur();
          }
        });
      }
    };
  }();

TwoFactorAuth.init();
    
});

</script>
@endsection


