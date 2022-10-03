@extends('layouts.main')
@section('content')

<h3 class="text-center mt-1 ">Automobiliai</h3>
<div class="col-10 m-auto">

<table class="table table-bordered border-dark mt-3 text-center">
    <thead>
    <tr class="bg-black bg-opacity-25">
        <th scope="col">Id</th>
        <th scope="col">Reg. number</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Owner id</th>
        <th scope="col">Created at</th>
        <th scope="col">Update at</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
    <tr>
        <th scope="row">{{$car->id}}</th>
        <td>{{$car->reg_number}}</td>
        <td>{{$car->brand}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->owner_id}}</td>
        <td>{{$car->created_at}}</td>
        <td>{{$car->updated_at}}</td>
        <td><a class="btn btn-warning" href="{{route('cars.edit', $car->id)}}">Redaguoti</a></td>
        <td>
            <form method="post" action="{{route('cars.destroy', $car->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Trinti</button>

            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
    </div>
@endsection


