@extends('layouts.admin.main')

@section('title', 'User List')
@section('description', 'User List')
@section('canonical', URL::current())



@section('variable_section')
    @php
        $activeMenu = 3;
        $activeMenuSub = 301;
    @endphp
@endsection

@section('layoutContent')

 <div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <h3 class="mb-0">Profile</h3>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="#" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                        <span class="text-secondary fw-medium hover">Dashboard</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Profile</span>
                </li>
            </ol>
        </nav>
    </div>


    <div class="row">
        <div class="col-lg-4">


            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <h3 class="mb-4">Profile Intro</h3>

                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <img src="{{asset('admin/assets/images/user-68.jpg')}}" class="rounded-circle border border-2 wh-75" alt="user">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="fs-17 mb-1 fw-semibold">Alice Johnson</h4>
                            <span class="fs-14">Product designer</span>
                        </div>
                    </div>

                    <h4 class="fw-semibold fs-14 mb-2">About Me</h4>
                    <p>Molestie tincidunt ut consequat a urna tortor. Vitae velit ac nisl velit mauris placerat nisi placerat. Pellentesque viverra lorem malesuada nunc tristique sapien. Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.</p>
                    <h4 class="fw-semibold fs-14 mb-2 pb-1">Social Profile</h4>
                    <ul class="ps-0 mb-0 list-unstyled d-flex flex-wrap gap-2">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #3a559f;">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #03a9f4;">
                                <i class="ri-twitter-x-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #007ab9;">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #2196f3;">
                                <i class="ri-mail-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <h3 class="fs-18 mb-3">Personal Information</h3>
                    <ul class="ps-0 mb-0 list-unstyled last-child-none">
                        <li class="mb-2">
                            <p>Patient ID: <span class="text-secondary">#P3214</span></p>
                        </li>
                        <li class="mb-2">
                            <p>Full Name: <span class="text-secondary">Micheal collins</span></p>
                        </li>
                        <li class="mb-2">
                            <p>Occupation: <span class="text-secondary">Teacher</span></p>
                        </li>
                        <li class="mb-2">
                            <p>Age: <span class="text-secondary">65 Years</span></p>
                        </li>
                        <li class="mb-2">
                            <p>Admitted On: <span class="text-secondary">21 October, 2024</span></p>
                        </li>
                        <li class="mb-2">
                            <p>Bed No: <span class="text-secondary">L2 - 205</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img src="assets/images/email.png" alt="email">
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <span class="d-block">Email</span>
                            <a href="mailto:walter32@gmail.com" class="fs-16 fw-bold text-body-color-50 text-decoration-none">walter32@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img src="assets/images/phone.png" alt="phone">
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <span class="d-block">Phone No</span>
                            <a href="tel:+14442665599" class="fs-16 fw-bold text-body-color-50 text-decoration-none">+1 444 266 5599</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img src="assets/images/map.png" alt="map">
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <span class="d-block">Address</span>
                            <div class="fs-16 fw-bold text-body-color-50 text-decoration-none">S. Arrowhead Court Branford9</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div style="margin-bottom: 30px;">
                        <h3 class="fs-18 mb-3">Disease History</h3>
                        <p style="line-height: 1.44;">Molestie tincidunt ut consequat a urna tortor. Vitae velit ac nisl velit mauris placerat nisi placerat. Pellentesque viverra lorem malesuada nunc tristique sapien. Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.</p>
                    </div>
                    <div>
                        <h3 class="fs-18 mb-3">Key Symptoms</h3>
                        <ul class="ps-0 mb-0 list-unstyled last-child-none">
                            <li class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <span style="width: 8px; height: 8px; background-color: #796DF6;" class="rounded-circle d-inline-block"></span>
                                </div>
                                <div class="flex-grow-1 ms-10">
                                    <p class="mb-0">Molestie tincidunt ut consequat a urna tortor.</p>
                                </div>
                            </li>
                            <li class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <span style="width: 8px; height: 8px; background-color: #796DF6;" class="rounded-circle d-inline-block"></span>
                                </div>
                                <div class="flex-grow-1 ms-10">
                                    <p class="mb-0">Vitae velit ac nisl velit mauris placerat nisi placerat. Pellentesque viverra lorem malesuada nunc tristique sapien. Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.</p>
                                </div>
                            </li>
                            <li class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <span style="width: 8px; height: 8px; background-color: #796DF6;" class="rounded-circle d-inline-block"></span>
                                </div>
                                <div class="flex-grow-1 ms-10">
                                    <p class="mb-0">Ad minim veniam, quis nostrud exercitation ullamco laboris nis</p>
                                </div>
                            </li>
                            <li class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <span style="width: 8px; height: 8px; background-color: #796DF6;" class="rounded-circle d-inline-block"></span>
                                </div>
                                <div class="flex-grow-1 ms-10">
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum accusantium doloremque laudantium.</p>
                                </div>
                            </li>
                            <li class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <span style="width: 8px; height: 8px; background-color: #796DF6;" class="rounded-circle d-inline-block"></span>
                                </div>
                                <div class="flex-grow-1 ms-10">
                                    <p class="mb-0">Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed  quia consequuntur magni dolores eos qui ratione voluptate.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div style="margin-bottom: 30px;">
                        <h3 class="fs-18 mb-3">Note For Patient</h3>
                        <p style="line-height: 1.44;">Molestie tincidunt ut consequat a urna tortor. Vitae velit ac nisl velit mauris placerat nisi placerat. Pellentesque viverra lorem malesuada nunc tristique sapien. Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.</p>
                    </div>
                    <div>
                        <h3 class="fs-18 mb-3">Advice:</h3>
                        <ul class="ps-0 mb-0 list-unstyled last-child-none">
                            <li class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <span style="width: 8px; height: 8px; background-color: #796DF6;" class="rounded-circle d-inline-block"></span>
                                </div>
                                <div class="flex-grow-1 ms-10">
                                    <p class="mb-0">Molestie tincidunt ut consequat a urna tortor.</p>
                                </div>
                            </li>
                            <li class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <span style="width: 8px; height: 8px; background-color: #796DF6;" class="rounded-circle d-inline-block"></span>
                                </div>
                                <div class="flex-grow-1 ms-10">
                                    <p class="mb-0">Vitae velit ac nisl velit mauris placerat nisi placerat. Pellentesque viverra lorem malesuada nunc tristique sapien. Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('admin/assets/js/sweetalert2.js')}}"></script>

<script>

   /* Swal.fire({
      title: "Good job!",
      text: "You clicked the button!",
      icon: "success"
    }); */

</script>

@endsection
