@extends('layouts.admin.main')

@section('title', 'Add Usert')
@section('description', 'Add User')
@section('canonical', URL::current())



@section('variable_section')
    @php
        $activeMenu = 2;
        $activeMenuSub = 202;
    @endphp
@endsection

@section('layoutContent')

<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <h3 class="mb-0">Add User</h3>

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
                    <span class="fw-medium">Add User</span>
                </li>

                
            </ol>
        </nav>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <form class="error-forms" method="POST" action="{{route('register')}}" autocomplete="off" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">User IDe</label>
                                    <input type="text" class="form-control h-55" placeholder="Enter user id">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">User Name</label>
                                    <input type="text" class="form-control h-55" placeholder="Enter user name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Email Address</label>
                                    <input type="email" class="form-control h-55" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Location</label>
                                    <select class="form-select form-control h-55" aria-label="Default select example">
                                        <option selected>Select</option>
                                        <option value="1">New Zealand</option>
                                        <option value="2">Germany</option>
                                        <option value="3">United States</option>
                                        <option value="4">Switzerland</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Phone Number</label>
                                    <input type="text" class="form-control h-55" placeholder="+1 444 555 6699">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Projects</label>
                                    <input type="text" class="form-control h-55" placeholder="Enter Projects">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Add Some Info</label>
                                    <textarea rows="6" class="form-control" placeholder="Type here...."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Facebook</label>
                                    <input type="text" class="form-control h-55" placeholder="https://www.facebook.com/">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">X</label>
                                    <input type="text" class="form-control h-55" placeholder="https://x.com/">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Linkedin</label>
                                    <input type="text" class="form-control h-55" placeholder="https://www.linkedin.com/">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">GitHub</label>
                                    <input type="text" class="form-control h-55" placeholder="https://www.github.com/">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4 only-file-upload">
                                    <label class="label text-secondary">Upload Your Image</label>
                                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                        <div class="product-upload">
                                            <label for="file-upload" class="file-upload mb-0">
                                                <i class="ri-folder-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary"></i>
                                                <span class="d-block text-body fs-14">Drag and drop an image or <span class="text-primary text-decoration-underline">Browse</span></span>
                                            </label>
                                            <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor" id="upload-container">
                                                <input class="form__file bottom-0" id="upload-files" type="file" multiple="multiple">
                                            </label>
                                        </div>
                                    </div>
                                    <div id="files-list-container"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex flex-wrap gap-3">
                                    <button class="btn btn-danger py-2 px-4 fw-medium fs-16 text-white">Cancel</button>
                                    <button class="btn btn-primary py-2 px-4 fw-medium fs-16"> <i class="ri-add-line text-white fw-medium"></i> Add User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <h3 class="mb-lg-4 mb-3">Privacy Policy</h3>

                    <div class="mb-4">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Allow users to show your email
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                            <label class="form-check-label" for="flexCheckChecked2">
                                Allow users to show your experiences
                            </label>
                        </div>
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                            <label class="form-check-label" for="flexCheckChecked3">
                                Allow users to show your followers
                            </label>
                        </div>
                    </div>
                    
                    <label class="label text-secondary">Select Your Skills</label>
                    <select class="form-select form-control h-55" aria-label="Default select example">
                        <option selected>Select</option>
                        <option value="1">Data Analysis</option>
                        <option value="2">Project Management</option>
                        <option value="3">Teamwork</option>
                        <option value="4">Leadership</option>
                    </select>
                </div>
            </div>
        </div>
    </div>



</div>

@endsection