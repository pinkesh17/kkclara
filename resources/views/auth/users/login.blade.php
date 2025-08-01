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
      </div>
  @endif
--}}
 


    <form class="error-forms" method="POST" action="{{route('login')}}" autocomplete="off" novalidate>
    @csrf
    <div class="row wow fadeInRight" data-wow-delay="300ms">
      <div class="col-xl-6 mx-auto">
        <div class="log-reg-form search-modal form-style1 bgc-white p40 p30-sm default-box-shadow1 bdrs12">
          <div class="mb30">
            <h2 class="h3 text-center">Log In</h2>

            @error('login_failed')
            <div class="alert alert-danger">
            {{ $message }}
            </div>
            @enderror
            
          </div>
          <div class="mb20">
            <label class="form-label fw600 dark-color" for="username">Username</label>
            <input type="text" id="username" name="username" {{--value="{{old('username')}}" --}} value="1234567900" class="form-control" required>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb15">
            <label class="form-label fw600 dark-color" for="email">Password</label>
            <input id="password" type="password" name="password" placeholder="*******" class="form-control" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb20">
            <label class="custom_checkbox fz14 ff-heading">Remember me
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <a class="fz14 ff-heading" href="#">Lost your password?</a>
          </div>
          <div class="d-grid mb20">
            <button class="ud-btn btn-thm" type="submit">Log In <i class="fal fa-arrow-right-long"></i></button>
          </div>


          <div class="d-md-flex justify-content-between">
            <p class="text">Don't have an account? <a href="{{route('register')}}" class="text-thm">Register!</a></p>
          </div>

        </div>
      </div>
    </div>
    </form>

  </div>
</section>




@endsection