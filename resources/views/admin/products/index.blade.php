@extends('admin.layouts.app')
@section('title', 'Products Admin Dashboard | Olive')
@section('heading', 'Products - Dashboard')

@section('content')

    <div class="row">
        <div class="col-sm-12 mb-2">
            @include('layouts.messages')
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-12 mb-2">
            <div class="bg-white p-3 d-flex justify-content-between">
                <span class="font-weight-bold">
                    Product
                </span>
{{--                <a href="{{ route('admin.products.create') }}" class="btn-sm btn btn-success"><i class="fas fa-plus"></i> Add Product</a>--}}
            </div>
        </div>

        <div class="col-sm-12">

            <div class="table-responsive bg-white p-3">

                <table id="datatable" class="table w-100">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Created</th>
                        <th><i class="fas fa-cog"></i></th>
                    </tr>
                    </thead>
                    <tbody class="mb-3">
                        @foreach($products as $product)
                            <tr>
                                <td class="font-weight-bold">{{ $product->id }}</td>
                                <td class="font-weight-bold text-primary">{{ $product->name }}</td>
                                <td>{{ $product->amount }}</td>
                                <td>
                                    <div>
                                        <span>£{{ $product->price_el }}</span>/
                                        <span>€{{ $product->price_en }}</span>/
                                        <span>₽{{ $product->price_ru }}</span>
                                    </div>
                                </td>
                                <td>{{ $product->created_at->format('d M Y') }}</td>
                                <td class="d-flex">
                                    <a title="Edit" href="{{ route('admin.products.edit', $product->id) }}" class="fas fa-pen text-primary mr-3"></a>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
