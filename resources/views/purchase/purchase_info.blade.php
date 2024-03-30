@extends('layouts.admin')
@section('main')
    <div class="container mt-3">
        <h4 class="mb-2">Purchased Products</h4>
        <div class="table-responsive ">
            <table class="table">
                <thead>
                    <tr>
                        <th class="">Image</th>
                        <th class="">Name</th>
                        <th class="">Price</th>
                        <th class="">Quantity</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($purchase->products as $product)
                        <tr>
                            <td>
                                <img style="width:150px;" src='{{ $product->product->image }}' alt="#">
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4>{{ Str::limit($product->product->name, 30) }}</h4>
                            </td>
                            <td class="cart_price">
                                <p>{{ $product->product->price }}</p>
                            </td>
                            <td class="cart_quantity">
                                {{ $product->quantity }}
                            </td>
                        </tr>
                        @php
                            $total = $total + $product->price;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row m-1">
            <h4 class="mb-2">Buyers Personal Information</h4>

            <table class="table ">
                <thead>
                    <th>First Name</th>
                    <th>E-mail</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Total</th>
                </thead>
                <tbody>

                    <td>{{ $purchase->first_name }}</td>
                    <td>{{ $purchase->email }}</td>
                    <td>{{ $purchase->address1 }}</td>
                    <td>{{ $purchase->phone }}</td>
                    <td>{{ $total }}</td>
                </tbody>
            </table>
        </div>
    </div>
@endsection
