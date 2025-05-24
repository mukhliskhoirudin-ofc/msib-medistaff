@extends('layouts.main')

@section('title', 'Show Data Doctor')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ol class="breadcrumb fs-5 mb-4">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}" class="fw-bold">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('doctor.index') }}">Data Doctor</a>
                        </li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Doctor Details Card -->
        <div class="card shadow-sm rounded mb-4">
            <div class="card-header bg-primary">
                <h4 class="card-title text-white mb-0">
                    <i class="bi bi-person-vcard"></i> Detail : {{ $doctor->name }}
                </h4>
            </div>
            <div class="card-body">
                <div class="row g-4 mt-1">

                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted"><i class="bi bi-person "></i> Full Name</label>
                        <p class="form-control-plaintext fs-6">{{ $doctor->name }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted"><i class="bi bi-envelope "></i> Email</label>
                        <p class="form-control-plaintext fs-6">{{ $doctor->email }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted"><i class="bi bi-telephone "></i> Phone
                            No</label>
                        <p class="form-control-plaintext fs-6">{{ $doctor->phone }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted">
                            <i class="bi bi-gender-ambiguous"></i> Gender
                        </label>
                        <p class="form-control-plaintext fs-6">
                            @if ($doctor->gender === 'male')
                                <span class="badge rounded-pill bg-success">Male</span>
                            @else
                                <span class="badge rounded-pill bg-info">Female</span>
                            @endif
                        </p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted"><i class="bi bi-calendar-plus "></i> Created
                            At</label>
                        <p class="form-control-plaintext fs-6">{{ $doctor->created_at->format('d M Y, H:i') }}</p>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted"><i class="bi bi-calendar-check "></i> Updated
                            At</label>
                        <p class="form-control-plaintext fs-6">{{ $doctor->updated_at->format('d M Y, H:i') }}</p>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <a href="{{ route('doctor.index') }}" class="btn btn-primary">
                        <i class="bx bx-chevron-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
