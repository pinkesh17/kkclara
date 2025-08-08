@extends('layouts.admin.main')

@section('title', 'Add Address')
@section('description', 'Add Address')
@section('canonical', URL::current())



@section('variable_section')
    @php
        $activeMenu = 2;
        $activeMenuSub = 201;
    @endphp
@endsection

@section('layoutContent')

<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <h3 class="mb-0">Add Address for {{ $user->first_name }} {{ $user->last_name }}</h3>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="{{route('webadmin')}}" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                        <span class="text-secondary fw-medium hover">Dashboard</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{route('users')}}" class="d-flex align-items-center text-decoration-none">
                    <span class="text-secondary">Users</span>
                </a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Add Address</span>
                </li>

                
            </ol>
        </nav>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-3 mb-4">

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif


                <div class="card-body p-4">
                    <form id="userForm" class="error-forms" method="POST" action="{{route('users.add-address')}}" autocomplete="off" novalidate>
                        @csrf
                        <div class="row">

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4 select2-t1">
                                    <label class="label text-secondary" for="pincode">Select Pincode</label>
                                    <select class="form-select form-control js-select2" id="pincode-select" name="pincode">
                                        <option value="">Select</option>
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4 select2-t1">
                                    <label class="label text-secondary" for="state">State</label>
                                    <select class="form-select form-control js-select2" id="state" name="state">
                                        <option value="">Select</option>
                                        @foreach($states as $state)
                                        <option value="{{$state->state_id}}">{{$state->state_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4 select2-t1">
                                    <label class="label text-secondary" for="district">District</label>
                                    <select class="form-select form-control" id="district" name="district">
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4 select2-t1">
                                    <label class="label text-secondary" for="block">Block</label>
                                    <select class="form-select form-control js-select2" id="block" name="block">
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4 select2-t1">
                                    <label class="label text-secondary" for="city">Village/City</label>
                                    <select class="form-select form-control js-select2" id="city" name="city">
                                        <option value="">Select</option>
                                        @foreach($states as $state)
                                        <option value="{{$state->state_id}}">{{$state->state_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-5 col-sm-5">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary" for="first_name">First Name*</label>
                                    <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary" for="last_name">Last Name*</label>
                                    <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}" class="form-control" required>
                                </div>
                            </div>

                             <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary" for="phone">Mobile (Required)</label>
                                    <input type="number" id="phone" name="phone" value="{{old('phone')}}"  class="form-control" placeholder="10 Digit mobile no.">
                                </div>
                            </div>

                             <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary" for="email">Email Address</label>
                                    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter email address">
                                </div>
                            </div>



                           

                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary" for="date_of_birth">Date of Birth</label>
                                    <input type="text" class="form-control my-datepicker" id="date_of_birth"  name="date_of_birth" value="{{old('date_of_birth')}}">
                                </div>
                            </div>

                        

                            

                            

                            {{--

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group select2-t1  mb-4">
                                    <label class="label text-secondary">Location</label>
                                    <select class="form-select form-control js-select2" aria-label="Default select example">
                                        <option selected>Select</option>
                                        <option value="1">New Zealand</option>
                                        <option value="2">Germany</option>
                                        <option value="3">United States</option>
                                        <option value="4">Switzerland</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Add Some Info</label>
                                    <textarea rows="6" class="form-control" placeholder="Type here...."></textarea>
                                </div>
                            </div>

                            --}}



                            <div class="col-lg-12">
                                <div class="d-flex flex-wrap gap-3 justify-content-center">
                                    <a href="{{route('add-user')}}" class="btn btn-danger py-2 px-4 fw-medium fs-16 text-white">Cancel</a>
                                    <button type="submit" class="btn btn-primary py-2 px-4 fw-medium fs-16"> <i class="ri-add-line text-white fw-medium"></i> Add User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>



</div>

@endsection


@section('scripts')
<script>
$(document).ready(function() {
    $('.js-select2, #district, #block').select2({
        placeholder: 'Select an option'
    });
    $('.my-datepicker').datepicker({
        endDate:"0d",
       todayBtn: "linked",
       autoclose: true,
       todayHighlight: true,
       format: 'dd-mm-yyyy' 
    });

    $('#pincode-select').select2({
      placeholder: 'Select a user',
      minimumInputLength: 2,
      ajax: {
        url: "{{route('helpers.zipcode')}}",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term // search term
          };
        },
        processResults: function (data) {
          return {
            results: data.map(function (pincode) {
              return {
                id: pincode.id,
                text: `${pincode.office_name} (${pincode.pincode})`,
                office_name: pincode.office_name,
                pincode: pincode.pincode,
                district: pincode.district,
                state: pincode.state,
                latitude: pincode.latitude,
                longitude: pincode.longitude
              };
            })
          };
        },
        cache: true
      }
    });


    $('#state').on('change', function () {
        let state_id = $(this).val();
        $('#district').empty().trigger('change');
        $.ajax({
            url: "{{route('helpers.districts')}}?id="+ state_id,
            type: 'GET',
            success: function (districts) {
              $('#district').empty();

              districts.forEach(district => {

                const option = new Option(district.district_name, district.district_id, false, false);
                $('#district').append('<option value="">Select</option>');
                $('#district').append(option);
              });

              $('#district').trigger('change');
            }
          });
    });

    $('#district').on('change', function () {

        let district_id = $(this).val();

        if (!district_id) return;

        console.log(district_id);

        $('#blocks').empty().trigger('change');
        $.ajax({
            url: "{{route('helpers.blocks')}}?id="+ district_id,
            type: 'GET',
            success: function (blocks) {
              $('#blocks').empty();

              blocks.forEach(block => {

                const option = new Option(block.block_name, block.block_id, false, false);
                $('#blocks').append('<option value="">Select</option>');
                $('#blocks').append(option);
              });

              $('#blocks').trigger('change');
            }
          });
    });




  $("#userForm").validate({
    rules: {
      "first_name": {
        required: true,
        minlength: 2
      },
      "last_name": {
        required: true,
        minlength: 2
      },
      "email": {
        email: true
      },
      "phone": {
         required: {
          depends: function () {
            return $('input[name="isPrimary"]:checked').val() == 1;
          }
        },
        number: true,
        minlength:10,
        maxlength:10,
      },


      /*password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        equalTo: "#password"
      }*/


    },



    errorClass: "input-error",
    errorElement: "div",


    submitHandler: function(form) {
      form.submit(); // Submit form via default action
    }
  });
});


</script>

@endsection


