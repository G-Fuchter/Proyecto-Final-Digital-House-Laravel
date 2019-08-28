@extends('layouts/default');

@section('content')

    <h1 style="text-align: center; margin-top: 1rem;">Products</h1>
    <div class="products-container">
        @if(Auth::check())
            @if(Auth::user()->roll === 'admin')
                <div class = "product-card">
                    <a href="{{ route('products.create') }}" class="btn border accent_border accent">¡Agregar Producto!</a>
                </div>
            @endif
        @endif
        @if(count($products) > 0)
            @foreach($products as $product)
                <div class = "product-card"> 
                    <img src={{$product->imageurl}}>
                    <div class="card-info">
                        <h5 class="accent gill">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text money">AR$ {{$product->price}}</p>
                        <a href="{{ route('products.show',['id' => $product->id]) }}" class="btn border accent_border accent">¡Ver más!</a>
                    </div>
                </div>
            @endforeach
        @else
            <p>No products found</p>
        @endif
    </div>

@endsection