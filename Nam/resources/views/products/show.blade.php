@extends('layouts/default');

@section('content')

    @if (empty($product))
        <p>This product does not exist</p>
    @else
        <div class="product-show-container">
        <h2>{{$product->name}}</h2>
        <img src="{{$product->imageurl}}" alt="{{$product->name}}">
        <p>{{$product->description}}</p>
        <a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit Product</a>
        </div>
    @endif

@endsection