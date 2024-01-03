@extends('layouts.css')
<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shop by Categories</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap");

        .container {
            position: relative;
        }

        /* navbar css */
        .navbar {
            margin: auto;
            width: auto;
            justify-content: center;
        }

        .logo_1 {
            margin-left: 20px;
            justify-content: center;
        }

        .seller {
            margin-left: 20px;
            margin-right: 30px;
            padding-right: 30px;
        }

        .search {
            margin-right: 30px;
            margin-left: 20px;
        }

        .acc {
            margin-right: 10px;
            margin-left: 20px;
        }

        .bag {
            margin-right: 10px;
            margin-left: 10px;
        }

        /* header */
        header {
            width: 100%;
            height: 300px;
            margin: 0 auto;
            padding: 40px 60px;
            background-color: #A21608;
        }

        /* sidebar and maincontent css */
        .sidebar {
            margin-top: 55px;
            background-color: #A21608;
            color: white;
            width: 200px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 100;
            margin-left: 20px;
        }

        .main-content {
            margin-left: 310px;
            padding: 20px;
            margin-top: 5px;
        }

        .card {
            position: relative;
            height: fit-content;
        }

        .text-category {
            font-size: 40px;
            font-weight: bold;
            font-family: "League Spartan", sans-serif;
        }

        .card-img-top {
            max-width: 100%;
            height: auto;
        }

        .card-body {
            padding: 1rem;
        }

        /* main content*/
        .price {
            color: green;
        }

        /* footer */
        .followus img {
            width: 30px;
        }

        .copy {
            background-color: #A21608;
        }

        .list-unstyled li:hover {
            color: #f00;
            ;
        }
    </style>

        <!-- Header -->
        <header class="categories" style="margin-top: 50px;">
            <p class="text-category" style="color: white;">Electronic</p>
        </header>
            <div class="row ">
                @foreach ($products->where('categories', 'Electronic')->chunk(4) as $chunk) <!-- Membagi array produk menjadi kelompok 3 -->
                    <div class="col">
                        <div class="card-group">
                            @foreach ($chunk as $product)
                                <div class="card">
                                    <img src="{{ asset('storage/uploads/' . $product->picture) }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ $product->name }}</b></h5>
                                        <p class="price">IDR.{{ $product->price }}</p>
                                        <p class="card-text">{{ $product->description }}</p>
                                        <p class="card-title">Categories : <b>{{ $product->categories }}</b></p>
                                        <p class="card-title">Condition:<b>{{ $product->condition }}</b></p>
                                        <div class="d-flex justify-content-between mt-3">
                                            <a href="/product/{{ $product->name }}" class="btn btn-danger btn-sm"
                                                style="width: 80px">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        
    </html>
</x-app-layout>
