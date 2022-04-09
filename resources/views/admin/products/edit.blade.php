@extends('admin.layouts.app')
@section('title', 'Product Admin Dashboard | Olivepower')
@section('heading', 'Product - Dashboard')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-12 bg-white py-2">

            <h5 class="font-weight-bold">Edit Product</h5>
            <hr>

            @include('layouts.messages')

            <form method="POST" action="{{ route('admin.products.update', $product->id) }}" class="pt-3" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">Intro</label>

                    <div class="col-md-6">
                        <textarea class="form-control form-control-sm" name="description" id="description" cols="30" rows="10">{!! $product->description !!}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">€</span>
                            </div>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}" required autofocus>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amount" class="col-md-4 col-form-label text-md-right">Amount</label>

                    <div class="col-md-6">
                        <input id="amount" type="text" class="form-control" name="amount" value="{{ $product->amount }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection
