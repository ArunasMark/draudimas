@extends('layouts.main')
@section('content')
    <h3 class="text-center mb-3">Įvesti automobilio duomenis</h3>


    <div class="m-auto border border-primary col-3 bg-info">
        <form class="text-center mx-3" action="{{ route ('cars.store') }}" method="post">
            @csrf
            <br>
            <label class="form-label mb-0" for="reg_number">A/m reg. numeris: </label>
            <input class="form-control mb-2 @if($errors->has('reg_number'))  is-invalid @endif" type="text"
                   name="reg_number" value="{{old('reg_number')}}" required>
            @if($errors->has('reg_number'))
                @foreach($errors->get('reg_number') as $error)
                    <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
                @endforeach
            @endif
            <label class="form-label mb-0" for="brand">A/m markė: </label>
            <input class="form-control mb-2 @if($errors->has('brand'))  is-invalid @endif" type="text" name="brand"
                   value="{{old('brand')}}" required>
            @if($errors->has('brand'))
                @foreach($errors->get('brand') as $error)
                    <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
                @endforeach
            @endif
            <label class="form-label mb-0" for="model">A/m modelis: </label>
            <input class="form-control mb-2 @if($errors->has('model'))  is-invalid @endif" type="text" name="model"
                   value="{{old('model')}}" required>
            @if($errors->has('model'))
                @foreach($errors->get('model') as $error)
                    <div class="text-danger fw-bold bg-warning  text-center">{{$error}}</div>
                @endforeach
            @endif

            <label class="form-label mb-0" for="img">A/m foto: </label>
            <input class="form-control mb-3" type="file" name="img" multiple>



            <label class="form-label mb-0" for="model">Savininko duomenys: </label>
            <select class="form-select mb-2" name="owner_id" required>
                <option selected>Pasirinkti</option>
                @foreach($owners as $owner)
                    <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                @endforeach
            </select>

            <button class="btn btn-secondary my-2">Pridėti</button>
        </form>
        <div class="text-center mb-2">
            <a href="{{route('cars.index')}}" class="btn btn-light border border-primary">Atgal</a>
        </div>
    </div>
@endsection
