@extends('layouts.main')
@section('content')
<h3 class="text-center  mb-3">Įvesti a/m savininko duomenis</h3>

<div class="m-auto border border-primary col-3 bg-info">
    <form class="text-center mx-3" action="{{ route ('owners.store') }}" method="post">
        @csrf
        <br>
        <label class="form-label" for="name">A/m savininko vardas: </label>
        <input class="form-control mb-3 @error('name')  is-invalid @enderror" type="text" name="name"
               value="{{old('name')}}" required>
        @error('name')
            @foreach($errors->get('name') as $error)
                <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
            @endforeach
        @enderror
        <label class="form-label" for="surname">A/m savininko pavardė: </label>
        <input class="form-control mb-3 @error('surname')  is-invalid @enderror" type="text" name="surname"
               value="{{old('surname')}}" required>
        @error('surname')
            @foreach($errors->get('surname') as $error)
                <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
            @endforeach
        @enderror
        <label class="form-label" for="email">A/m savininko email: </label>
        <input class="form-control mb-3 @if($errors->has('email'))  is-invalid @endif" type="text" name="email"
               value="{{old('email')}}" required>
        @if($errors->has('email'))
            @foreach($errors->get('email') as $error)
                <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
            @endforeach
        @endif

        <button class="btn btn-secondary my-3">Pridėti</button>
    </form>
    <div class="text-center mb-2">
        <a href="{{route('owners.index')}}" class="btn btn-light border border-primary">Atgal</a>
    </div>
</div>

@endsection
