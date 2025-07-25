@extends('layouts.admin.main')

@section('title', 'Dashboard')
@section('description', 'Dashboard')
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
                    <a href="#" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                        <span class="text-secondary fw-medium hover">Dashboard</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Extra Pages</span>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Blank Page</span>
                </li>
            </ol>
        </nav>
    </div>

<!-- Start Your Code -->

</div>

@endsection