@extends('layouts.admin')
@section('main')
    <div class="containter">
        <form action="{{ route('update_product', $product->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')


            <div class="row m-3">
                <h3>Edit Product</h3>
            </div>
            <div class="row border">

                <div class="col-8 offset-2">
                    <div class="row m-4 ">

                        <h4>Update Product: <strong>{{ $product->name }}</strong></h4>

                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Name</label>


                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $product->name }}" autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Description</label>


                        <input id="description" type="description"
                            class="form-control @error('description') is-invalid @enderror" name="description"
                            value="{{ $product->description }}" autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label">Price</label>


                        <input id="price" type="price" class="form-control @error('price') is-invalid @enderror"
                            name="price" value="{{ $product->price }}" autocomplete="price" autofocus>

                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="col pt-2">
                        <label for="category_id">Categorie</label>

                        <select name="category_id" style="height:40px;"
                            class="form-select @error('category_id') is-invalid @enderror">

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col pt-2">
                        <label for="brand_id">Brand</label>

                        <select name="brand_id" style="height:40px;"
                            class="form-select @error('brand_id') is-invalid @enderror">

                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col pt-2">
                        <label for="vehicle_type">Vechicle</label>
                        <select name="vehicle_type" style="height:40px;"
                            class="form-select @error('vehicle_type') is-invalid @enderror">

                            @foreach ($vehicle_type as $vt)
                                <option value="{{ $vt }}" selected="">{{ $vt }}</option>
                            @endforeach

                        </select>
                    </div>



                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Image Of Product</label>

                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button type="submit" class="btn btn-outline-dark">Update Product</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
