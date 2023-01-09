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
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="title here" aria-describedby="titleHelpId" value="{{old('title')}}">
                <small id="titleHelpId" class="text-muted">Add comic title here, min 4 characters and max 50 characters.</small>
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description here" aria-describedby="descriptionHelpId" value="{{old('description')}}">
                <small id="descriptionHelpId" class="text-muted">Add comic description here, min 20 characters.</small>
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="thumb" class="form-label">Image path</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="image path here" aria-describedby="thumbHelpId" value="{{old('thumb')}}">
                <small id="thumbHelpId" class="text-muted">Add comic image path here, max 255 characters.</small>
            </div>
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="price here" aria-describedby="priceHelpId" value="{{old('price')}}">
                <small id="priceHelpId" class="text-muted">Add comic price here, use numbers (ex. 12).</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="series here" aria-describedby="seriesHelpId" value="{{old('series')}}">
                <small id="seriesHelpId" class="text-muted">Add comic series here, max 255 characters.</small>
            </div>
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="sale date here" aria-describedby="saleDateHelpId" value="{{old('sale_date')}}">
                <small id="saleDateHelpId" class="text-muted">Add comic sale date here (yy-mm-dd).</small>
            </div>
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="type here" aria-describedby="typeHelpId" value="{{old('type')}}">
                <small id="typeHelpId" class="text-muted">Add comic title here, max 255 characters (ex. comic book, graphic novel, ...).</small>
            </div>
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary my-3">Add Comic</button>
        </form>
    </div>

</div>
@endsection