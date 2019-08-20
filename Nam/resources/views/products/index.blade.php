@extends('layouts/default');

@section('content')

    <h1>Product</h1>
    @if(count($products) > 1)
        @foreach($products as $product)
            <div class = "product-card"> 
                <h3>{{$product->name}}</h3>
            </div>
        @endforeach
    @else
        <p>No products found</p>
    @endif

@endsection