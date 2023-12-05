@extends('layouts.mainlayout')
@section('page_title', 'TelUFinds')
@section('content')
    <div>
        <div class="row justify-content-between my-3">
            <div class="col-3">
                <h2>My Products</h2>
            </div>
            <div class="col-2">
                <a href="/add-product" class="btn btn-primary">Add Product</a>
            </div>
        </div>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->picture) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $product->name }}</b></h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <h5 class="price">IDR.{{ $product->price }}</h5>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="/product/{{ $product->name }}" class="btn btn-danger btn-sm" style="width: 80px">Detail</a>
                                <a href="/edit-product/{{ $product->id }}" class="btn btn-danger btn-sm" style="width: 80px">Change</a>
                                <a href="/delete-product/{{ $product->id }}" class="btn btn-danger btn-sm" style="width: 80px">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="my-5 row justify-content-between">
            {{ $products->links() }}
        </div>
    </div>
    <!-- items -->
@endsection
