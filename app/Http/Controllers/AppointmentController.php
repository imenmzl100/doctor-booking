<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor; // إضافة هذه السطر
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
        $doctors = Doctor::all(); // جلب الأطباء لصفحة الإنشاء
        return view('appointments.create', compact('doctors')); // تمريرهم للفيو
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'patient_phone' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'doctor_id' => 'required', // تأكدي من إضافة هذا التحقق
        ]);

        Appointment::create($request->all()); // يمكنك استخدام all() للاختصار إذا كانت الأسماء مطابقة

        return redirect()->route('appointments.index');
    }

    public function edit(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $doctors = Doctor::all(); // جلب الأطباء لصفحة التعديل
        return view('appointments.edit', compact('appointment', 'doctors')); // تمريرهم للفيو
    }

    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update([
            'patient_name' => $request->patient_name,
            'patient_phone' => $request->patient_phone,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'doctor_id' => $request->doctor_id, // لا تنسي تحديث حقل الطبيب
        ]);

        return redirect()->route('appointments.index');
    }

    public function destroy(string $id)
    {
        Appointment::destroy($id);
        return redirect()->route('appointments.index');
    }
}
