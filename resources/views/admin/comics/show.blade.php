@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h2>Comics</h2>
    <div class="d-flex gap-4">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="details">
            <h1>{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>

            <div class="meta">
                <div class="price">
                    Price: {{$product->price}}
                </div>
                <div class="series">
                    Series: {{$comic->series}}
                </div>
                <div class="sale_date">
                    Sale Date: {{$comic->sale_date}}
                </div>
                <div class="price">
                    Type: {{$comic->type}}
                </div>

            </div>

        </div>
    </div>
</div>


@endsection