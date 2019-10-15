@extends('layouts/default');

@section('content')
<div class="cart-container">
    <div class="admin-page-title">
        <a href="{{route('admin.products')}}"><h1>Productos</h1></a>
    </div>
    <div class="search-container">
        <span> Producto: </span>
        <input type="text" id="search-text">
        <button onclick="searchTerm('{{route('admin.products.search','')}}')">Buscar</button>
    </div>
    <div class="admin-toolbar">
        <a href="{{route('products.create')}}">Crear producto<i class="fas fa-plus-circle"></i></a>
    </div>
    @if(count($products) > 0)
        <div class="cart-table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Promocionado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                @foreach($products as $product)
                    <tr id="{{$product->id}}">
                        <td>{{$product->id}}</td>
                        <td><img src="{{$product->imageurl}}"/></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                        @if($product->promoted)
                            Sí
                        @else
                            No
                        @endif
                        </td>
                        <td><a href="{{route('products.edit',$product->id)}}"><i class="fas fa-edit"></i></a></td>
                        <td><i class="fas fa-times-circle remove-button" onclick="onRemoveClick({{$product->id}},'{{route('products.destroy', $product->id)}}')"></i></td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>No hay usuarios!</p>
    @endif
</div>
<script>
    
</script>
@endsection