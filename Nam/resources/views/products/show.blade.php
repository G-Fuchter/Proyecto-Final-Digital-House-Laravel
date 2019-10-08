@extends('layouts/default');

@section('content')

    @if (empty($product))
        <p>This product does not exist</p>
    @else
        <div class="product-show-container">
            <div class="product-specs">
                <h2>{{$product->name}}</h2>
                <div class="product-image-description">
                    <img src="{{$product->imageurl}}" alt="{{$product->name}}">
                    <div class="product-spec-description">
                        <p>{{$product->description}}</p>
                        <p class="money">ARS$ {{$product->price}}</p>
                </div>
                </div>
                <div class="action-row">
                <a onclick="onAddToCartClick('{{route('cart.item.add',$product->id)}}')" class="btn btn_cta dark">Agregar al carro</a>
                @if(Auth::check())
                    @if(Auth::user()->roll === 'admin')
                        <a href="/products/{{$product->id}}/edit" class="btn btn_cta dark">Edit Product</a>
                        <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" name="Delete" value="Delete" class="btn btn-danger" />
                        </form>
                    @endif
                @endif
                </div>
            </div>
        </div>
    @endif

@endsection