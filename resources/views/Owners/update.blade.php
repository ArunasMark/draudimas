
@extends('layouts.main')
@section('content')
<h3 class="text-center  mb-3">Redaguoti a/m savininko duomenis</h3>

<div class="m-auto border border-primary col-3 bg-info">

    <form class="text-center mx-3" action="{{ route('owners.update', $owner->id) }}" method="post">

        @csrf
        @method('PUT')
        <label class="form-label mb-0 mt-3" for="name">A/m savininko vardas: </label>
        <input class="form-control mb-3" type="text" name="name" value="{{ $owner->name }}">
        @error('name')
        @foreach($errors->get('name') as $error)
            <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
        @endforeach
        @enderror
        <label class="form-label mb-0" for="surname">A/m savininko pavardė: </label>
        <input class="form-control mb-3" type="text" name="surname" value="{{ $owner->surname }}">
        @error('surname')
        @foreach($errors->get('surname') as $error)
            <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
        @endforeach
        @enderror
        <label class="form-label mb-0" for="email">A/m savininko el. pastas: </label>
        <input class="form-control mb-3" type="text" name="email" value="{{ $owner->email }}">
        @error('email')
        @foreach($errors->get('email') as $error)
            <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
        @endforeach
        @enderror

        <button class="btn btn-secondary my-3">Redaguoti</button>
    </form>

    <div class="text-center mb-2">
        <a href="{{route('owners.index')}}" class="btn btn-light border border-primary">Atgal</a>
    </div>
</div>

@endsection


