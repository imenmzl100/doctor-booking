<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Médecin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Ajouter Médecin</h1>

    <form action="{{ route('doctors.store') }}"
          method="POST">

        @csrf

        <div class="mb-3">
            <label>Nom</label>

            <input type="text"
                   name="name"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Spécialité</label>

            <input type="text"
                   name="speciality"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Téléphone</label>

            <input type="text"
                   name="phone"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>

            <input type="email"
                   name="email"
                   class="form-control">
        </div>

        <button class="btn btn-success">
            Enregistrer
        </button>

    </form>

</div>

</body>
</html>