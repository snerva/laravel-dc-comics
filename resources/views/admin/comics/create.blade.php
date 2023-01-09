@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Comics</h2>

    <div class="container py-2">
        <h3>Add a new Comic</h3>
        @include('partials.errors')
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="title here" aria-describedby="helpId" value="{{old('title')}}">

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="description here" aria-describedby="helpId" value="{{old('description')}}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image path</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="image path here" aria-describedby="helpId" value="{{old('thumb')}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="price here" aria-describedby="helpId" value="{{old('price')}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="series here" aria-describedby="helpId" value="{{old('series')}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="sale date here" aria-describedby="helpId" value="{{old('sale_date')}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="type here" aria-describedby="helpId" value="{{old('type')}}">
            </div>
            <button type="submit" class="btn btn-primary my-3">Add Comic</button>
        </form>
    </div>

</div>
@endsection