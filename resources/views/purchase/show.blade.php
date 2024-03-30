@extends('layouts.admin')
@section('main')
    <main>


        <div class="container-fluid px-4">
            <h1 class="mt-4">Purchase table </h1>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Purchases
                </div>
                <div class="card-body">

                    <table class="table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>E-mail</th>
                                <th>Index</th>
                                <th>Date</th>
                                <th>Purchase Info</th>
                                <th>Delete Purchase</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>First Name</th>
                                <th>E-mail</th>
                                <th>Index</th>
                                <th>Date</th>
                                <th>Purchase Info</th>
                                <th>Delete Purchase</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($purchases as $purchase)
                                <tr>
                                    <td>{{ $purchase->users->name }}</td>
                                    <td>{{ $purchase->users->email }}</td>
                                    <td>{{ $purchase->id }}</td>
                                    <td>{{ $purchase->created_at }}</td>
                                    <td>
                                        <a href="{{ route('purchase_info', $purchase) }}">
                                            <div class="col d-flex justify-content-center">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('destroy_purchase', $purchase) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <button class="btn btn-danger text-white" type="submit">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
