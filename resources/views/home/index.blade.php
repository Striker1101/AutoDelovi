@extends('layouts.app')
@section('main')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="color: black">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="600px" style="margin:auto" src="/img/slide1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="shadow-lg ">Toyota</h1>
                    <h3 class="shadow-lg">Lets Drive Your Way</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="600px" style="margin:auto" src="/img/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-bSvi kvalitetni delovi za Vaše vozilo sa samo jednim klikomlock">
                    <h1 class="shadow-lg">Chevelotti</h1>
                    <h3 class="shadow-lg">Lets Drive Your Way</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="600px" style="margin:auto" src="/img/slide3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="shadow-lg">Benz</h1>
                    <h3 class="shadow-lg">Lets Drive Your Way</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2 class="pt-5 pl-5">Review Our Top Products:</h2>

    <div class="container">

        @if (session('success'))
            <div id="success-alert"
                class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center"
                role="alert">
                <span>{{ session('success') }}</span>
                <button type="button" class="btn-close bg-danger text-light border-danger "
                    aria-label="Close">Close</button>
            </div>
        @endif

        {{-- @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">Close</button>
            </div>
        @endif --}}

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const closeButton = document.querySelector('#success-alert .btn-close');
                const successAlert = document.querySelector('#success-alert');

                if (closeButton) {
                    closeButton.addEventListener('click', function() {
                        successAlert.style.display = 'none';
                    });
                    console.log("here it is ")
                }
            });
        </script>

        <div class="card-deck p-5 d=flex justify-content-center">
            {{-- storage/app/public/uploads/{{ $product->image }} --}}
            @foreach ($products as $product)
                <a href="/product/{{ $product->id }}" class="text-dark">
                    <div class="card" style="min-width:320px; max-width:320px; min-height:430px; max-height:430px">
                        <img class="img-fluid" src={{ $product->image }} style="object-fit: cover; height: 200px; alt="Card
                            image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ Str::limit($product->name, 20) }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 20) }}</p>
                            <form action="{{ route('cart.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <input type="product_id" value="{{ $product->id }}" name="product_id" id="product_id"
                                    hidden>
                                <input type="number" value="1" name="quantity" hidden>
                                <input type="total" value="{{ $product->price }}" name="total" hidden>
                                @if (auth()->user() &&
                                        auth()->user()->cart->contains('product_id', $product->id))
                                    <button class="btn btn-outline-danger mt-3" disabled>
                                        Already in Cart
                                    </button>
                                @else
                                    @if (auth()->user())
                                        <button class="btn btn-outline-primary mt-3" type="submit">Add to Cart</button>
                                    @else
                                        <button class="btn btn-outline-primary mt-3" type="submit"><a href="/login">Add to
                                                Cart</a></button>
                                    @endif
                                @endif


                            </form>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $product->created_at }}</small>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

        <div style="display: flex; justify-content: flex-end; margin-top: 20px;">
            <a href="/all_products" class="text-dark" style="text-decoration: none;">See More Of Our
                Products</a>
        </div>
    </div>




    <hr>

    <h2 class="pt-5 pl-5">Popular Products</h2>

    <div class="container">
        <div class="card-deck p-5">

            @foreach ($popularProducts as $product)
                <a href="/product/{{ $product->id }}" class="text-dark">
                    <div class="card" style="min-width:320px; max-width:320px; min-height:430px; max-height:430px">
                        <img class="img-fluid" src="{{ $product->image }}"
                            style="object-fit: cover; height: 200px; alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ Str::limit($product->name, 20) }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 20) }}</p>
                            <form action="{{ route('cart.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <input type="product_id" value="{{ $product->id }}" name="product_id" id="product_id"
                                    hidden>
                                <input type="number" value="1" name="quantity" hidden>
                                <input type="total" value="{{ $product->price }}" name="total" hidden>
                                @if (auth()->user() &&
                                        auth()->user()->cart->contains('product_id', $product->id))
                                    <button class="btn btn-outline-danger mt-3" disabled>
                                        Already in Cart
                                    </button>
                                @else
                                    @if (auth()->user())
                                        <button class="btn btn-outline-primary mt-3" type="submit">Add to Cart</button>
                                    @else
                                        <button class="btn btn-outline-primary mt-3" type="submit"><a href="/login">Add
                                                to
                                                Cart</a></button>
                                    @endif
                                @endif
                            </form>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $product->created_at }}</small>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

        <div style="display: flex; justify-content: flex-end; margin-top: 20px;">
            <a href="/all_products" class="text-dark" style="text-decoration: none;">See More Popular
                Products</a>
        </div>
    </div>
    <hr>
    <h2 class="pt-5 pl-5">Our Partners:</h2>

    <div class="borderless">
        <ul class="list-group flex-md-row p-5" style="align-items: center; justify-content:space-between">
            <li class="list-group-item" style="border: none; "><img src="/img/partners/1.png" alt=""></li>
            <li class="list-group-item" style="border: none; "><img src="/img/partners/2.png" alt=""></li>
            <li class="list-group-item" style="border: none; "><img src="/img/partners/3.png" alt=""></li>
            <li class="list-group-item" style="border: none; "><img src="/img/partners/4.png" alt=""></li>
            <li class="list-group-item" style="border: none; "><img src="/img/partners/5.png" alt=""></li>
            <li class="list-group-item" style="border: none; "><img src="/img/partners/6.png" alt=""></li>
        </ul>
    </div>

    <hr>
    <h2 class="pt-5 pl-5">Join the Comments Section Today </h2>

    @foreach ($comments as $comment)
        <div class="card text-white bg-secondary ml-5 mr-5 mt-5">
            <div class="card-header">
                {{ $comment->user->name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $comment->product->name }}</h5>
                <p class="card-text">{{ $comment->comment }}</p>
            </div>
        </div>
    @endforeach

    <hr>

    <div class="borderless">
        <ul class="list-group flex-md-row p-5" style="align-items: center; justify-content:space-between">
            <li class="list-group-item" style="border: none; ">
                <h4>Lorem, ipsum.</h4><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, corporis!
                </p>
            </li>
            <li class="list-group-item" style="border: none; ">
                <h4>Lorem, ipsum.</h4><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, numquam?
                </p>
            </li>
            <li class="list-group-item" style="border: none; ">
                <h4>Lorem, ipsum.</h4><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, eum.</p>
            </li>
            <li class="list-group-item" style="border: none; ">
                <h4>Lorem, ipsum.</h4><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, impedit?
                </p>
            </li>

        </ul>
    </div>
@endsection
