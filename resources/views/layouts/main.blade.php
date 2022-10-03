<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Draudimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills justify-content-around">
            <li class="nav-item">
                <a class="btn btn-outline-secondary border " href="{{route('owners.index')}}">A/m savininkai</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-secondary border " href="{{route('owners.create')}}">Pridėti naują a/m savininką</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-secondary border " href="{{route('cars.index')}}">Automobiliai</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-secondary border " href="{{route('cars.create')}}">Pridėti naują automobilį</a>
            </li>

        </ul>
    </div>
    <div class="card-body">
        @yield('content')
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
