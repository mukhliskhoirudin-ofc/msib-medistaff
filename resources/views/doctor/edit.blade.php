@extends('layouts.main')

@section('title', 'Edit Doctor')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
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
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('doctor.update', $doctor) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label" for="name">Full Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $doctor->name) }}" placeholder="John Doe" />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="email" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $doctor->email) }}" placeholder="john.doe" aria-label="john.doe"
                                aria-describedby="basic-default-email2" />
                        </div>
                        @error('email')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="phone">Phone</label>
                        <input type="text" id="phone" name="phone"
                            class="form-control phone-mask @error('phone') is-invalid @enderror" placeholder="081234567890"
                            value="{{ old('phone', $doctor->phone) }}" />
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender"
                            aria-label="Default select example">
                            <option value="" hidden>-- Select Gender --</option>
                            <option value="male" {{ old('gender', $doctor->gender) == 'male' ? 'selected' : '' }}>Male
                            </option>
                            <option value="female" {{ old('gender', $doctor->gender) == 'female' ? 'selected' : '' }}>
                                Female</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('doctor.index') }}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
