
@extends('layouts.main')
@section('content')
<h3 class="text-center mb-3">Redaguoti automobilio duomenis</h3>

<div class="m-auto border border-primary col-3 bg-info">

    <form class="text-center mx-3" action="{{ route('cars.update', $car->id) }}" method="post">

        @csrf
        @method('PUT')
        <label class="form-label mb-0 mt-3" for="reg_number">A/m reg. numeris: </label>
        <input class="form-control mb-3" type="text" name="reg_number" value="{{ $car->reg_number }}">
        @if($errors->has('reg_number'))
            @foreach($errors->get('reg_number') as $error)
                <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
            @endforeach
        @endif
        <label class="form-label mb-0" for="brand">A/m markė: </label>
        <input class="form-control mb-3" type="text" name="brand" value="{{ $car->brand }}">
        @if($errors->has('brand'))
            @foreach($errors->get('brand') as $error)
                <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
            @endforeach
        @endif
        <label class="form-label mb-0" for="model">A/m modelis: </label>
        <input class="form-control mb-3" type="text" name="model" value="{{ $car->model }}">
        @if($errors->has('model'))
            @foreach($errors->get('model') as $error)
                <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
            @endforeach
        @endif
        <label for="" class="form-label">Pasirinkti savininka: </label>
        <select class="form-control" name="owner_id">

            @foreach($owners as $owner)
                <option value="{{$owner->id}}" {{$car->owner_id == $owner->id ? 'selected' : ''}}>{{ $owner->name }} {{ $owner->surname }}</option>
            @endforeach
        </select>
        <button class="btn btn-secondary my-3">Redaguoti</button>
    </form>

    <div class="text-center mb-2">
        <a href="{{route('cars.index')}}" class="btn btn-light border border-primary">Atgal</a>
    </div>
</div>

@endsection

