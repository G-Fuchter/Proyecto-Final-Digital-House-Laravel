@extends('layouts/default');

@section('content')
<div class="cart-container">
    <div class="admin-page-title">
        <a href="{{route('admin.users')}}"><h1>Usuarios</h1></a>
    </div>
    <div class="search-container">
        <span> Nomber o Mail del Usuario: </span>
        <input type="text" id="search-text">
        <button onclick="searchTerm('{{route('admin.users.search','')}}')">Buscar</button>
    </div>
    @if(count($users) > 0)
        <div class="cart-table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Eliminar</th>
                </tr>
                @foreach($users as $user)
                <tr id="{{$user->id}}">
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->roll}}</td>
                        <td><i class="fas fa-times-circle remove-button" onclick="onRemoveClick({{$user->id}},'{{route('admin.users.remove', $user->id)}}')"></i></td>
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