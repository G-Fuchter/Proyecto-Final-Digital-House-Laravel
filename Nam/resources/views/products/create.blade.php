@extends('layouts/default');

@section('content')

    <h1>Create Post</h1>
    <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-sm-8 d-flex justify-content-center align-items-center">
                <form class="registro w-100" method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="fields white_bg p-3 p-sm-5 ">
                        <div class="form-group">
                            <label for="productName">Product Name: </label>
                            <input type="text" name="name" class="form-control" id="productName">
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea type="text" name="description" class="form-control" id="productDescription"> </textarea>
                        </div>
                        <div class="form-group">
                                <label for="imageUrl">Image URL: </label>
                                <input type="text" name="imageurl" class="form-control" id="imageUrl">
                        </div>
                        <div class="form-group">
                                <label for="priceARS">Price AR$: </label>
                                <input type="text" name="price" class="form-control" id="priceARS">
                        </div>
                        <div class="from-group">
                            <label for="promotedOptions">Promocionar el producto? </label>
                            <select name="promoted" id="promotedOptions" class="form-control">
                                <option value="false">No</option>
                                <option value="true">Sí</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn_cta dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection