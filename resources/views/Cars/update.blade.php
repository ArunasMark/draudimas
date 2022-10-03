
@extends('layouts.main')
@section('content')
<h3 class="text-center mb-3">Redaguoti automobilio duomenis</h3>

<div class="m-auto border border-primary col-3 bg-info">

    <form class="text-center mx-3" action="{{ route('cars.update', $car->id) }}" method="post">

        @csrf
        @method('PUT')
        <label class="form-label mb-0 mt-3" for="reg_number">A/m reg. numeris: </label>
        <input class="form-control mb-3" type="text" name="reg_number" value="{{ $car->reg_number }}">
        <label class="form-label mb-0" for="brand">A/m markė: </label>
        <input class="form-control mb-3" type="text" name="brand" value="{{ $car->brand }}">
        <label class="form-label mb-0" for="model">A/m modelis: </label>
        <input class="form-control" type="text" name="model" value="{{ $car->model }}">
        <button class="btn btn-secondary my-3">Redaguoti</button>
    </form>

    <div class="text-center mb-2">
        <a href="{{route('cars.index')}}" class="btn btn-light border border-primary">Atgal</a>
    </div>
</div>

@endsection

