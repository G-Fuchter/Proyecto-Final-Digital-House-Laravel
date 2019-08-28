@extends('layouts/default');

@section('content')
<div class="cart-container">
    <h1>My Cart</h1>
    @if(count($cart) > 0)
        <div class="cart-table-container">
            <table>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
                @foreach($cart as $product)
                    <tr>
                        <td><img src={{$product->imageurl}}></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>No products found</p>
    @endif
</div>
@endsection