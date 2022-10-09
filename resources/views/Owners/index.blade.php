@extends('layouts.app')

@section('content')


<h3 class="text-center mb-3">A/m savininkai</h3>
<div class="col-12 m-auto">

        <ul class="nav ">

            <li class="nav-item">
                <a class="btn btn-outline-secondary border " href="{{route('owners.create')}}">Pridėti naują a/m savininką</a>
            </li>


        </ul>

    <table class="table table-bordered border-dark mt-3  text-center">
        <thead>
        <tr class="bg-black bg-opacity-25">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Savininko automobiliai</th>
            <th scope="col">Created at</th>
            <th scope="col">Update at</th>
            <th></th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        @foreach($owners as $owner)
            <tr>
                <th scope="row">{{$owner->id}}</th>
                <td>{{$owner->name}}</td>
                <td>{{$owner->surname}}</td>
                <td>{{$owner->email}} </td>


                    <td>
                       {{-- @foreach($owner->cars as $car)
                        {{$car->brand}} {{$car->model}}
                        @endforeach--}}
                    </td>
                <td>{{$owner->created_at}}</td>
                <td>{{$owner->updated_at}}</td>
                <td><a class="btn btn-warning" href="{{route('owners.edit', $owner->id)}}">Redaguoti</a></td>
                <td>
                    <form method="post" action="{{route('owners.destroy',$owner->id)}}">
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



