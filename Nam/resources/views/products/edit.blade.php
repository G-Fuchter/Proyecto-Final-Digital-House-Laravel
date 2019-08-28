@extends('layouts/default');

@section('content')

    <h1>Create Post</h1>
    <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-sm-8 d-flex justify-content-center align-items-center">
                <form class="registro w-100" method="POST" action="{{ route('products.update', ['id' => $product->id]) }}">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="fields white_bg p-3 p-sm-5 ">
                        <div class="form-group">
                            <label for="productName">Product Name: </label>
                            <input type="text" name="name" class="form-control" id="productName" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea type="text" name="description" class="form-control" id="productDescription"> {{$product->description}} </textarea>
                        </div>
                        <div class="form-group">
                                <label for="imageUrl">Image URL: </label>
                                <input type="text" name="imageurl" class="form-control" id="imageUrl" value="{{$product->imageurl}}">
                        </div>
                        <div class="form-group">
                                <label for="priceARS">Price AR$: </label>
                                <input type="text" name="price" class="form-control" id="priceARS" value="{{$product->price}}">
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn_cta dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection