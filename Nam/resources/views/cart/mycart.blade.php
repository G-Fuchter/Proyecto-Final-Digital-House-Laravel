@extends('layouts/default');

@section('content')
<div class="cart-container">
    <h1>My Cart</h1>
    @if(count($cart->cart_item) > 0)
        <div class="cart-table-container">
            <table>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
                @foreach($cart->cart_item as $product)
                <tr id="{{$product->id}}">
                        <td><img src={{$product->imageurl}}></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td><i class="fas fa-times-circle" onclick="onRemoveClick({{$product->id}},'{{route('cart.item.remove', $product->id)}}')"></i></td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>No products found</p>
    @endif
</div>
<script>
    function onRemoveClick(id, theUrl) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", theUrl, true); // true for asynchronous 
        xmlHttp.send(null);
        let row = document.getElementById(id);
        row.parentNode.removeChild(row);
    }
</script>
@endsection