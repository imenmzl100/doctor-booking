<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::latest()->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create'); // بدون تمرير $doctors
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'patient_phone' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
        ]);

        Appointment::create([
            'patient_name' => $request->patient_name,
            'patient_phone' => $request->patient_phone,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
        ]);

        return redirect()->route('appointments.index');
    }

    public function edit(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.edit', compact('appointment')); // بدون تمرير $doctors
    }

    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update([
            'patient_name' => $request->patient_name,
            'patient_phone' => $request->patient_phone,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
        ]);

        return redirect()->route('appointments.index');
    }

    public function destroy(string $id)
    {
        Appointment::destroy($id);
        return redirect()->route('appointments.index');
    }
}
