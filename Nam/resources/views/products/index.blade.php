@extends('layouts/default');

@section('content')

    <h1>Product</h1>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class = "product-card"> 
                <h3>{{$product->name}}</h3>
                <img src={{$product->imageurl}}>
            <p>{{$product->description}}</p>
            </div>
        @endforeach
    @else
        <p>No products found</p>
    @endif

@endsection