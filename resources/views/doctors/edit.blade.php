<!DOCTYPE html>
<html>
<head>
    <title>Modifier Médecin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Modifier Médecin</h1>

    <form action="{{ route('doctors.update',$doctor->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nom</label>

            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $doctor->name }}">
        </div>

        <div class="mb-3">

            <label>Spécialité</label>

            <input type="text"
                   name="speciality"
                   class="form-control"
                   value="{{ $doctor->speciality }}">
        </div>

        <div class="mb-3">

            <label>Téléphone</label>

            <input type="text"
                   name="phone"
                   class="form-control"
                   value="{{ $doctor->phone }}">
        </div>

        <div class="mb-3">

            <label>Email</label>

            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ $doctor->email }}">
        </div>

        <button class="btn btn-primary">
            Modifier
        </button>

    </form>

</div>

</body>
</html>