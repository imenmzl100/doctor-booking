<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Rendez-vous</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Ajouter Rendez-vous</h1>

    <a href="{{ route('appointments.index') }}"
       class="btn btn-secondary mb-3">
       Retour
    </a>

    <form action="{{ route('appointments.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label">
                Nom du patient
            </label>

            <input
                type="text"
                name="patient_name"
                class="form-control"
                placeholder="Nom du patient"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Téléphone
            </label>

            <input
                type="text"
                name="patient_phone"
                class="form-control"
                placeholder="Téléphone"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Date
            </label>

            <input
                type="date"
                name="appointment_date"
                class="form-control"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Heure
            </label>

            <input
                type="time"
                name="appointment_time"
                class="form-control"
                required>

        </div>

        <button type="submit" class="btn btn-success">
            Enregistrer
        </button>

    </form>

</div>

</body>
</html>