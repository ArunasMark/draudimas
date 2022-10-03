@extends('layouts.main')
@section('content')
<h3 class="text-center  mb-3">Įvesti a/m savininko duomenis</h3>

<div class="m-auto border border-primary col-3 bg-info">
    <form class="text-center mx-3" action="{{ route ('owners.store') }}" method="post">
        @csrf
        <br>
        <label class="form-label" for="name">A/m savininko vardas: </label>
        <input class="form-control mb-3" type="text" name="name" required>
        <label class="form-label" for="surname">A/m savininko pavardė: </label>
        <input class="form-control" type="text" name="surname" required>

        <button class="btn btn-secondary my-3">Pridėti</button>
    </form>
    <div class="text-center mb-2">
        <a href="{{route('owners.index')}}" class="btn btn-light border border-primary">Atgal</a>
    </div>
</div>

@endsection
