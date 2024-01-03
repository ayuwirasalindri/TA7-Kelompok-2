@extends('layouts.css')
<x-app-layout>
    <!-- profile bar -->
    <div class="profilebar px-5">
        <div class="cardprof card w-85 mx-4 mb-3">
            <div class="card-header text-center">
                <b>Seller Profile</b>
            </div>
            <div class="card-body top">
                <img src="{{ asset('build/assets/seller/seller1.jpg')}}" style="float: left; margin-right: 10px; width: 150px">
                <ul class="justify-content-end textul" style="list-style-type: none;">
                    <li>
                        <h2 class="card-title">Theresa Webb</h2>
                    </li>
                    <li>
                        <p class="card-text">Information System'22</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/myrating">Rating</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/mystatus">Status</a>
        </li>
    </ul>
    <div>
        <div class="row justify-content-between px-3 py-4">
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
        <div class="row row-cols-1 row-cols-md-4 g-4 px-5">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/uploads/' . $product->picture) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $product->name }}</b></h5>
                            <p class="price">IDR.{{ $product->price }}</p>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-title">Categories : <b>{{ $product->categories }}</b></p>
                            <p class="card-title">Condition:<b>{{ $product->condition}}</b></p>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="/product/{{ $product->name }}" class="btn btn-danger btn-sm"
                                    style="width: 100px">Detail</a>
                                <a href="/edit-product/{{ $product->id }}" class="btn btn-danger btn-sm"
                                    style="width: 100px">Change</a>
                                <a href="/delete-product/{{ $product->id }}" class="btn btn-danger btn-sm"
                                    style="width: 100px">Delete</a>
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
</x-app-layout>
