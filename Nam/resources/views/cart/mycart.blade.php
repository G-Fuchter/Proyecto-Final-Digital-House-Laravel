@extends('layouts/default');

@section('content')
<div class="cart-container">
    <h1>Mi Carrito</h1>
    @if(count($cart->cart_item) > 0)
        <div class="cart-table-container">
            <table>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th></th>
                </tr>
                @foreach($cart->cart_item as $single_cart_item)
                <tr id="{{$single_cart_item->id}}">
                        <td><img src={{$single_cart_item->product->imageurl}}></td>
                        <td>{{$single_cart_item->product->name}}</td>
                        <td>{{$single_cart_item->product->description}}</td>
                        <td>{{$single_cart_item->quantity}}</td>
                        <td>{{$single_cart_item->product->price * $single_cart_item->quantity}}</td>
                        <td><i class="fas fa-times-circle remove-button" onclick="onRemoveClick({{$single_cart_item->id}},'{{route('cart.item.remove', $single_cart_item->id)}}')"></i></td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>El carrito esta vacio!</p>
    @endif
</div>
<script>
    
</script>
@endsection