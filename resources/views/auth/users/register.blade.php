@extends('layouts.users.main')

@section('title', 'Kochaisa Kurmi Samaj - Preserving Culture, Uniting Community')
@section('description', 'Join Kochaisa Kurmi Samaj - a vibrant community dedicated to preserving Kurmi traditions, organizing cultural events, and supporting members. Explore membership benefits, upcoming events, and our rich heritage.')
@section('canonical', URL::current())

@section('bodyClass', 'bg-gray-200')



@section('layoutContent')

<section class="our-register">
  <div class="container">

    <form class="error-forms" method="POST" action="{{route('register')}}" autocomplete="off" novalidate>
    @csrf
    <div class="row wow fadeInRight" data-wow-delay="300ms">
      <div class="col-xl-6 mx-auto">
        <div class="log-reg-form search-modal form-style1 bgc-white p40 p30-sm default-box-shadow1 bdrs12">
          <div class="mb30">
            <h1 class="h3 text-center">Let's create your account!</h1>   
          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="mb25">
                <label class="form-label fw500 dark-color" for="first_name">First Name*</label>
                <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}"  class="form-control" required>
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

             <div class="col-md-6">
              <div class="mb25">
                <label class="form-label fw500 dark-color" for="last_name">Last Name*</label>
                <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}" class="form-control" required>
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
          </div>


          <div class="mb25">
            <label class="form-label fw500 dark-color" for="phone">Mobile No.</label>
            <input type="number" id="phone" name="phone" value="{{old('phone')}}" class="form-control" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="mb15">
            <label class="form-label fw500 dark-color" for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="*******" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="d-grid mb20 text-center">

            <div id="fm-spinner" class="fm-spinner spinner-border text-success text-center" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <button id="fm-button" class="ud-btn btn-thm fm-button default-box-shadow2" type="submit">Creat Account <i class="fal fa-arrow-right-long"></i></button>
          </div>

          <div class="d-md-flex justify-content-between">
            <p class="text mt20">Already have an account? <a href="{{route('login')}}" class="text-thm">Log In!</a></p>
          </div>

        </div>
      </div>
    </div>

    </form>

  </div>
</section>


@endsection


