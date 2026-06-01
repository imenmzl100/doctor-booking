<!DOCTYPE html>
<html>
<head>
    <title>Modifier Rendez-vous</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Modifier Rendez-vous</h1>

    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Médecin</label>

            <select name="doctor_id" class="form-control">

                @foreach($doctors as $doctor)

                <option value="{{ $doctor->id }}"
                    {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>

                    {{ $doctor->name }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Nom du patient</label>

            <input
                type="text"
                name="patient_name"
                class="form-control"
                value="{{ $appointment->patient_name }}">

        </div>

        <div class="mb-3">

            <label>Téléphone</label>

            <input
                type="text"
                name="patient_phone"
                class="form-control"
                value="{{ $appointment->patient_phone }}">

        </div>

        <div class="mb-3">

            <label>Date</label>

            <input
                type="date"
                name="appointment_date"
                class="form-control"
                value="{{ $appointment->appointment_date }}">

        </div>

        <div class="mb-3">

            <label>Heure</label>

            <input
                type="time"
                name="appointment_time"
                class="form-control"
                value="{{ $appointment->appointment_time }}">

        </div>

        <button type="submit" class="btn btn-primary">
            Modifier
        </button>

        <a href="{{ route('appointments.index') }}"
           class="btn btn-secondary">
            Retour
        </a>

    </form>

</div>

</body>
</html>