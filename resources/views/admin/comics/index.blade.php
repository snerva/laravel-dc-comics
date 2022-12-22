@extends('layouts.app')

@section('content')
<section class="comics py-4">
    <div class="container">
        <div class="heading d-flex justify-content-between">
            <h2>Comics</h2>
            <div><a href="{{route('comics.create')}}" class="btn btn-primary">Add Comics</a></div>
        </div>

        @if(session('message'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{session('message')}}</strong>
        </div>
        @endif

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
                            <a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary view"><i class="fa-regular fa-eye px-1"></i></a>
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary edit"><i class="fa-regular fa-pen-to-square px-1"></i></a>
                            <a href="" class="btn btn-danger delete"><i class="fa-solid fa-trash px-1"></i></a>

                            <div class="modal fade" id="deleteProduct-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{$comic->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{$comic->id}}">Delete Product</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to destroy it?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Confirm
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

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