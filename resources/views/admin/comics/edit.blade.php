@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Comics</h2>

    <div class="container py-2">
        <h3>Update: {{$comic->title}}</h3>
        @include('partials.errors')
        <form action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control  @error('title') is-invalid @enderror" placeholder="title here" aria-describedby="helpId" value="{{old('title', $comic->title)}}">

            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description here" aria-describedby="helpId" value="{{old('description', $comic->description)}}">
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="d-flex">
                <div class="image_preview">
                    <img src="{{$comic->thumb}}" width="100" alt="">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image path</label>
                    <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="image path here" aria-describedby="helpId" value="{{old('thumb', $comic->thumb)}}">
                </div>
            </div>
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="price here" aria-describedby="helpId" value="{{old('price', $comic->price)}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="series here" aria-describedby="helpId" value="{{old('series', $comic->series)}}">
            </div>
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="sale date here" aria-describedby="helpId" value="{{old('sale_date', $comic->sale_date)}}">
            </div>
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="type here" aria-describedby="helpId" value="{{old('type', $comic->type)}}">
            </div>
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary my-3">Add Comic</button>
        </form>
    </div>

</div>
@endsection