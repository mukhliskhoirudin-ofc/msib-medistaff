@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h2 class="card-title text-primary">Wallcome Back - Dr. Mukhlis Khoirudin 🎉</h2>
                                <p class="mb-4">
                                    You have done <span class="fw-bold">72%</span> more sales today.
                                    Check your new badge in
                                    your profile.
                                </p>

                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View
                                    Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row-md-8 row-lg-4 order-3 order-md-2">
                <div class="row">
                    <!-- Card 1: Dokter -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center bg-primary text-white me-3"
                                    style="width: 60px; height: 60px; border-radius: 15%">
                                    <i class="bx bx-user bx-lg"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Jumlah Dokter</small>
                                    <h3 class="fw-bold mb-0">{{ $totalDoctors ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Pasien -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center bg-success text-white me-3"
                                    style="width: 60px; height: 60px; border-radius: 15%">
                                    <i class="bx bx-group bx-lg"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Jumlah Pasien</small>
                                    <h3 class="fw-bold mb-0">{{ $totalPatients ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Admin -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center bg-warning text-white me-3"
                                    style="width: 60px; height: 60px; border-radius: 15%">
                                    <i class="bx bx-shield-quarter bx-lg"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Jumlah Admin</small>
                                    <h3 class="fw-bold mb-0">{{ $totalAdmins ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Jadwal -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center bg-info text-white me-3"
                                    style="width: 60px; height: 60px; border-radius: 15%">
                                    <i class="bx bx-calendar bx-lg"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Jadwal Hari Ini</small>
                                    <h3 class="fw-bold mb-0">{{ $todaySchedules ?? 0 }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
@endsection
