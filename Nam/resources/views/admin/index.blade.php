@extends('layouts/default');

@section('content')
<div class="button-panel-container">
    <a class="btn btn_cta dark" id="users-button" href="{{ route('admin.users') }}"><i class="fas fa-users"></i><span>Usuarios</span></a>
    <a class="btn btn_cta dark" id="products-button" href="{{ route('admin.products') }}"><i class="fas fa-shopping-cart"></i><span>Productos</span></a>
</div>
@endsection