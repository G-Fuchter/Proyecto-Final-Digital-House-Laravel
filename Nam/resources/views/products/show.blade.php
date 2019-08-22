@extends('layouts/default');

@section('content')

    @if (empty($product))
        <p>This product does not exist</p>
    @else
        <div class="product-show-container">
        <h2>{{$product->name}}</h2>
        <img src="{{$product->imageurl}}" alt="{{$product->name}}">
        <p>{{$product->description}}</p>
        <a href="/products/{{$product->id}}/edit" class="btn btn_cta dark">Edit Product</a>
        <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post">
            {{ method_field('DELETE') }}
            <input type="submit" name="Delete" value="Delete" class="btn btn-danger" />
        </form>
        </div>
    @endif

@endsection