@extends('layouts/default');

@section('content')
<div class="cart-container">
    <h1>Usuarios</h1>
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