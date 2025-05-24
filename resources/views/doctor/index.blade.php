@extends('layouts.main')

@section('title', 'Data Doctor')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <ol class="breadcrumb fs-5 mb-4">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}" class="fw-bold">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('doctor.index') }}">Data Doctor</a>
            </li>
        </ol>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center px-4 py-4">
                <h5 class="mb-0">Daftar Doctor</h5>

                {{-- [Modalcreate dan edit] --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createDropModal">
                    Create
                </button>
                @include('doctor._create-modal')
                @include('doctor._edit-modal')
                {{-- [endModal] --}}

            </div>
            {{-- [TblDoctor] --}}
            <div class="table-responsive">
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
                        @forelse ($doctors as $doctor)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>
                                    @if ($doctor->gender === 'male')
                                        <span class="badge rounded-pill bg-success">Male</span>
                                    @else
                                        <span class="badge rounded-pill bg-info">Female</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown position-static">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('doctor.show', $doctor) }}">
                                                <i class="bx bx-show me-1"></i> Show
                                            </a>
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#editDropModal"><i class="bx bx-edit-alt me-1"></i>
                                                Edit
                                            </button>

                                            <form action="#" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item"><i
                                                        class="bx bx-trash me-1"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data Tidak Ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- [endTblDoctor] --}}
        </div>
    </div>
@endsection
