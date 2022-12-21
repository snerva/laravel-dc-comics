@extends('layouts.app')

@section('content')
<section class="comics py-4">
    <div class="container">
        <div class="heading d-flex justify-content-between">
            <h2>Comics</h2>
            <div><a href="" class="btn btn-primary">Add Comics</a></div>
        </div>

        <div class="table-responsive-md">
            <table class="table table-striped table-primary align-middle table-hover table-borderless">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Prices</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($comics as $comic)
                    <tr class="table-primary">
                        <td scope="row">{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td><img class="thumb" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->price}} $</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td class="d-flex flex-column gap-2">
                            <a href="{{route('show',$comic->id)}}" class="btn btn-primary view"><i class="fa-regular fa-eye px-1"></i></a>
                            <a href="" class="btn btn-secondary edit"><i class="fa-regular fa-pen-to-square px-1"></i></a>
                            <a href="" class="btn btn-danger delete"><i class="fa-solid fa-trash px-1"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr class="table-primary">
                        <td scope="row">No comics to show yet</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection