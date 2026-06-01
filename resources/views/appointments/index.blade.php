<!DOCTYPE html>
<html>
<head>

<title>Rendez-vous</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Liste des rendez-vous</h1>

<a href="{{ route('appointments.create') }}"
class="btn btn-success mb-3">
Ajouter Rendez-vous
</a>

<a href="/dashboard"
class="btn btn-secondary mb-3">
Dashboard
</a>

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>ID</th>
<th>Patient</th>
<th>Téléphone</th>
<th>Date</th>
<th>Heure</th>
<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($appointments as $appointment)

<tr>

<td>{{ $appointment->id }}</td>

<td>{{ $appointment->patient_name }}</td>

<td>{{ $appointment->patient_phone }}</td>

<td>{{ $appointment->appointment_date }}</td>

<td>{{ $appointment->appointment_time }}</td>

<td>

<a href="{{ route('appointments.edit', $appointment->id) }}"
class="btn btn-warning btn-sm">
Modifier
</a>

<form action="{{ route('appointments.destroy',$appointment->id) }}"
method="POST"
style="display:inline-block;">

@csrf
@method('DELETE')

<button type="submit"
class="btn btn-danger btn-sm"
onclick="return confirm('Supprimer ce rendez-vous ?')">
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