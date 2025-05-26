<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::latest()->select(['id', 'uuid', 'name', 'email', 'phone', 'gender'])->paginate(10);

        return view('doctor.index', [
            'doctors' => $doctors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => 'required|string|min:3|max:255',
            'email'  => 'required|email:dns|unique:doctors,email',
            'phone'  => 'required|digits_between:8,15',
            'gender' => 'required|in:male,female',
        ]);

        Doctor::create($validated);

        return redirect()->route('doctor.index')->with('success', 'Doctor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('doctor.show', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('doctor.edit', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $validated = $request->validate([
            'name'   => 'required|string|min:3|max:255',
            'email'  => 'required|email:dns|unique:doctors,email,' . $doctor->id,
            'phone'  => 'required|digits_between:8,15',
            'gender' => 'required|in:male,female',
        ]);

        $doctor->update($validated);

        return redirect()->route('doctor.index')->with('success', 'Doctor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
