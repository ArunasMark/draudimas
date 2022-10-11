@extends('layouts.app')
@section('content')

    <h3 class="text-center mt-1 ">Automobiliai</h3>
    <div class="col-12 m-auto px-3">
        @can('create')
            <ul class="nav">
                <li class="nav-item">
                    <a class="btn btn-outline-secondary border " href="{{route('cars.create')}}">Pridėti naują
                        automobilį</a>
                </li>
            </ul>
        @endcan
        {{--<img src="{{asset('storage/carsfoto/MazdaCX6.jpg')}}">--}}
        <table class="table table-bordered border-dark mt-3 text-center">
            <thead>
            <tr class="bg-black bg-opacity-25">
                <th scope="col">Id</th>
                <th scope="col">Reg. number</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Cars foto</th>
                <th scope="col">Owner name</th>
                <th scope="col">Owner surname</th>
                <th scope="col">Created at</th>
                <th scope="col">Update at</th>
                @can ('edit')
                    <th></th>
                @endcan
                @can('delete')
                    <th></th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <th scope="row">{{$car->id}}</th>
                    <td>{{$car->reg_number}}</td>
                    <td>{{$car->brand}}</td>
                    <td>{{$car->model}}</td>
                    <td>


                        @if($car->images != null)
                            <img alt="cars foto" src="{{ asset('storage/carsfoto/'.$car->images) }}"
                                 style="width: 150px">
                        @endif
                    </td>
                    <td>{{$car->owner->name}}</td>
                    <td>{{$car->owner->surname}}</td>
                    <td>{{$car->created_at}}</td>
                    <td>{{$car->updated_at}}</td>
                    @can('edit')
                        <td><a class="btn btn-warning" href="{{route('cars.edit', $car->id)}}">Redaguoti</a></td>
                    @endcan

                    @can('delete')
                        <td>
                            <form method="post" action="{{route('cars.destroy', $car->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Trinti</button>

                            </form>
                        </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


