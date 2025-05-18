@extends('layouts.main')

@section('title', 'Data Doctor')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <ol class="breadcrumb fs-5 mb-4">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}" class="fw-bold">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('doctor') }}">Data Doctor</a>
            </li>
        </ol>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center px-4 py-4">
                <h5 class="mb-0">Daftar Doctor</h5>
                {{-- <a href="{{ url('doctor/create') }}">
                    <button type="button" class="btn btn-md rounded-pill btn-outline-primary px-4">Create</button>
                </a> --}}

                {{-- [modal] --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    Create
                </button>
                @include('doctor._create-modal')
                {{-- [endModal] --}}

            </div>
            {{-- [TblDoctor] --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td>Mukhlis Khoirudin</td>
                        <td>muklis@gmail.com</td>
                        <td>08568020203</td>
                        <td>Male</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            {{-- [endTblDoctor] --}}
        </div>
    </div>
@endsection
