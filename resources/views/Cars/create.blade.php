
@extends('layouts.main')
@section('content')
<h3 class="text-center mb-3">Įvesti automobilio duomenis</h3>

<div class="m-auto border border-primary col-3 bg-info">
    <form class="text-center mx-3" action="{{ route ('cars.store') }}" method="post">
        @csrf
        <br>
        <label class="form-label mb-0" for="reg_number">A/m reg. numeris: </label>
        <input class="form-control mb-2" type="text" name="reg_number" required>
        <label class="form-label mb-0" for="brand">A/m markė: </label>
        <input class="form-control mb-2" type="text" name="brand" required>
        <label class="form-label mb-0" for="model">A/m modelis: </label>
        <input class="form-control" type="text" name="model" required>
        <button class="btn btn-secondary my-2">Pridėti</button>
    </form>
    <div class="text-center mb-2">
        <a href="{{route('cars.index')}}" class="btn btn-light border border-primary">Atgal</a>
    </div>
</div>
@endsection
