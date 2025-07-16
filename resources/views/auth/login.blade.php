@php
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts.main')

@section('title', '*Login Basic - Pages')

{{-- 

@section('vendor-style')
@vite(['resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/pages-auth.js'])
@endsection
--}}

@section('layoutContent')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-6">
      <!-- Login -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center mb-6">
            <a href="{{ url('/') }}" class="app-brand-link">
              <span class="app-brand-text demo text-heading fw-bold">Login</span>
            </a>
          </div>

          <p class="mb-6">Please sign-in to your account</p>

          <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf


            <div class="mb-6 form-control-validation">
              <label for="username" class="form-label">Email or Username</label>
              <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required autofocus />
              @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="mb-6 form-password-toggle form-control-validation">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
              </div>
            </div>
            <div class="my-8">
              <div class="d-flex justify-content-between">
                <div class="form-check mb-0 ms-2">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
                <a href="{{ url('auth/forgot-password-basic') }}">
                  <p class="mb-0">Forgot Password?</p>
                </a>
              </div>
            </div>
            <div class="mb-6">
              <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
            </div>
          </form>

          <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{ url('auth/register-basic') }}">
              <span>Create an account</span>
            </a>
          </p>

          <div class="divider my-6">
            <div class="divider-text">or</div>
          </div>

          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-facebook me-1_5">
              <i class="icon-base ti tabler-brand-facebook-filled icon-20px"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-twitter me-1_5">
              <i class="icon-base ti tabler-brand-twitter-filled icon-20px"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-github me-1_5">
              <i class="icon-base ti tabler-brand-github-filled icon-20px"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-google-plus">
              <i class="icon-base ti tabler-brand-google-filled icon-20px"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>
</div>
@endsection



@section('scripts')
<script>
$(document).ready(function() {
  $("#loginForm").validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        equalTo: "#password"
      }
    },
    messages: {
      name: {
        required: "Please enter your name",
        minlength: "Name must be at least 2 characters"
      },
      email: {
        required: "Please enter your email",
        email: "Enter a valid email"
      },
      password: {
        required: "Please enter a password",
        minlength: "Password must be at least 6 characters"
      },
      confirm_password: {
        required: "Please confirm your password",
        equalTo: "Passwords do not match"
      }
    },
    submitHandler: function(form) {
      form.submit(); // Submit form via default action
    }
  });
});
</script>
@endsection