<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">
        Dashboard Cabinet Médical
    </h1>

    <div class="row">

        <div class="col-md-6">

            <div class="card">

                <div class="card-body text-center">

                    <h3>Médecins</h3>

                    <a href="/doctors"
                       class="btn btn-primary">
                        Gérer les Médecins
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card">

                <div class="card-body text-center">

                    <h3>Rendez-vous</h3>

                    <a href="/appointments"
                       class="btn btn-success">
                        Gérer les Rendez-vous
                    </a>

                </div>

            </div>

        </div>

    </div>

    <br>

    <div class="row">

        <div class="col-md-6">

            <a href="/doctors/create"
               class="btn btn-primary w-100">
               Ajouter Médecin
            </a>

        </div>

        <div class="col-md-6">

            <a href="/appointments/create"
               class="btn btn-success w-100">
               Ajouter Rendez-vous
            </a>

        </div>

    </div>

</div>

</body>
</html>