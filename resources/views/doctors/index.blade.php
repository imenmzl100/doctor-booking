<!DOCTYPE html>
<html>
<head>
    <title>Liste des médecins</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Liste des médecins</h1>

    <a href="{{ route('doctors.create') }}"
       class="btn btn-success mb-3">
        Ajouter Médecin
    </a>

    <a href="/dashboard"
       class="btn btn-secondary mb-3">
        Dashboard
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Spécialité</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        @foreach($doctors as $doctor)

        <tr>

            <td>{{ $doctor->id }}</td>

            <td>{{ $doctor->name }}</td>

            <td>{{ $doctor->speciality }}</td>

            <td>{{ $doctor->phone }}</td>

            <td>{{ $doctor->email }}</td>

            <td>

                <a href="{{ route('doctors.edit',$doctor->id) }}"
                   class="btn btn-warning">
                    Modifier
                </a>

                <form action="{{ route('doctors.destroy',$doctor->id) }}"
                      method="POST"
                      style="display:inline-block;">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">
                        Supprimer
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

        </tbody>

    </table>

</div>

</body>
</html>