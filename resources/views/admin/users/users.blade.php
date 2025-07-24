@extends('layouts.admin.main')

@section('title', 'User List')
@section('description', 'User List')
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
        <h3 class="mb-0">Blank Page</h3>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="{{route('webadmin')}}" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                        <span class="text-secondary fw-medium hover">Dashboard</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Users</span>
                </li>
            </ol>
        </nav>
    </div>

    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 p-4">
                <form class="position-relative table-src-form me-0">
                    <input type="text" class="form-control" placeholder="Search here">
                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                </form>
                <a href="add-user.html" class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line d-none d-sm-inline-block"></i>
                        <span>Add New User</span>
                    </span>
                </a>
            </div>

            <div class="default-table-area style-two all-products">
                <div class="table-responsive">


                    {{-- 
                    @php
                        print_r($totalUser);
                        echo "<hr>";
                        print_r($verified);
                        echo "<hr>";
                        print_r($notVerified);
                        echo "<hr>";
                        print_r($userDuplicates);

                        echo "<hr>";
                        print_r($data);

                        

                    @endphp

                    [id] => 1234567916 [fake_id] => 1 [username] => 1234567916 [prefix] => 11 [first_name] => Pinko [last_name] => Ji [dp_name] => PJ [dp_name_first] => p [phone] => 9953122222 [phone_verified_at] => 2025-07-06 16:31:29 [email] => [email_verified_at] => [dob] => 2009-01-01 [gender] => 1 [profile_picture] => [role] => 31 [status] => 1 [role_name] => sadmin [rolem] => S Admin [gender_name] => Male [created_at] => 06 Jul, 2025 [updated_at] => 07 Jul, 2025 )
                --}}


                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">User</th>
                                <th scope="col">User ID</th>

                                <th scope="col">F. Name</th>
                                <th scope="col">L. Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Role</th> 
                                <th scope="col">Join Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $dt)


                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">

                                        @if(!empty($dt['profile_picture']))
                                            <img src="assets/images/user-6.jpg" class="wh-40 rounded-3" alt="user">
                                        @else
                                        <div class="name-logo d-inline-block avatar-{{$dt['dp_name_first']}}">{{$dt['dp_name']}}</div>
                                        @endif

                                    </div>
                                </td>
                                <td class="text-body">{{$dt['id']}}</td>

                                <td class="text-body">{{$dt['first_name']}}</td>
                                <td class="text-body">{{$dt['last_name']}}</td>
                                <td class="text-body">{{$dt['gender_name']}}</td>

                                <td class="text-secondary">{{$dt['phone']}}</td>
                                <td class="text-secondary">{{$dt['email']}}</td>
                                <td class="text-body">{{$dt['dob']}}</td>
                                <td class="text-body">{{$dt['rolem']}}</td>
 
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                        </button>
                                    </div>
                                </td> 

                                <td class="text-secondary">{{$dt['created_at']}}</td>
                            </tr>
                             
                            @endforeach 

                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap p-4">
                    <span class="fs-13 fw-medium">Items per pages: 10</span>

                    <div class="d-flex align-items-center">
                        <span class="fs-13 fw-medium me-2">1 - 10 of 12</span>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 justify-content-center">
                                <li class="page-item">
                                    <a class="page-link icon" href="users-list.html" aria-label="Previous">
                                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link icon" href="users-list.html" aria-label="Next">
                                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection