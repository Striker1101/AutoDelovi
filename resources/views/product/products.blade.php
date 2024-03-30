@extends('layouts.app')
@section('categories')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h3 class="m-4">All Latest Products Available:</h3>
            </div>
        </div>
        <div class="row">
            <div class="alert ">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Products Available </strong> This are the Latest Products in our collection,
                    you can call our team to either inquire or add to the collection
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        @foreach ($products->chunk(3) as $products)
            <div class="card-deck m-5 mt-0">

                @foreach ($products as $product)
                    <a class="text-dark" href="{{ route('product', $product->id) }}">
                        <div class="card" style="min-width:300px; max-width:300px; min-height:400px; max-height:400px">
                            <img class="card-img-top" src="/storage/app/public/uploads/{{ $product->image }}"
                                style="object-fit: cover; height: 200px; width:100px alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ Str::limit($product->description, 40) }}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $product->created_at }}</small>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        @endforeach



    @endsection
