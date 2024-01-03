@extends('layouts.css')
<x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- profile bar -->
    <div class="profilebar">
        <div class="cardprof card w-85 mx-4 mb-3">
            <div class="card-header text-center">
                <b>Seller Profile</b>
            </div>
            <div class="card-body top">
                <img src="{{ asset('build/assets/seller/seller1.jpg') }}" style="float: left; margin-right: 10px; width:150px ">
                <ul class="justify-content-end textul" style="list-style-type: none;">
                    <li>
                        <h2 class="card-title">Theresa Webb</h2>
                    </li>
                    <li>
                        <p class="card-text">Information System'22</p>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="#" class="btn btn-outline-danger">Hubungi Seller</a>
                    <a href="#" class="btn btn-outline-danger">Follow</a>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Proucts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/sellerrating">Rating</a>
        </li>
    </ul>
    <div class="button">
        <div class="offcanvas offcanvas-start w-10" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter Items By:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- <div>
                Filter By :
                </div> -->
                <div class="dropdown mt-2">
                    <button class="btn btn-outline-light button1 dropdown-toggle" type="button"
                        data-bs-toggle="dropdown">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Clothes</a></li>
                        <li><a class="dropdown-item" href="#">Shoes</a></li>
                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                    </ul>
                    <div class="dropdown mt-2">
                        <button class="btn btn-outline-light button1 dropdown-toggle" type="button"
                            data-bs-toggle="dropdown">
                            Condition
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Excellent</a></li>
                            <li><a class="dropdown-item" href="#">Very Good</a></li>
                            <li><a class="dropdown-item" href="#">Good</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end profile bar -->

    <div>
        <div class="my-3">
            <form method="get">
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control"
                        placeholder="input keyword pencarian berdasarkan nama product" name="keyword"
                        value="{{ request('keyword') }}">
                    <button type="submit" class="input-group-text" id="addon-wrapping">Cari</button>
                </div>
            </form>
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
                        <img src="{{ asset('storage/uploads/' . $product->picture) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $product->name }}</b></h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <h5 class="price">IDR.{{ $product->price }}</h5>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="/detailproduct/{{ $product->name }}" class="btn btn-danger btn-sm"
                                    style="width: 80px">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</html>
</x-app-layout>
