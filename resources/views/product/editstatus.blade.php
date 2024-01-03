@extends('layouts.css')
<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap");

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

        /* profile bar css */
        .profilebar {
            margin-top: 90px;
        }

        .button1 {
            background-color: #A21608;
            color: white;
        }

        .textul {
            font-size: x-large;
        }

        .btn-outline-danger:hover {
            background-color: #A21608;
        }

        /* card items */
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

        a,
        p,
        h5,
        h3,
        h2,
        button {
            font-family: 'League Spartan', sans-serif;
        }

        /* .status{
            text-align: end;
        } */
    </style>

    <body>
        <!-- profile bar and content -->
        <div class="profilebar">
            <div class="cardprof card w-85 mx-4 mb-3">
                <div class="card-header text-center">
                    <b>Seller Profile</b>
                </div>
                <div class="card-body top">
                    <img src="{{ asset('build/assets/seller/seller1.jpg') }}"
                        style="float: left; margin-right: 10px; width: 150px">
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
                <a class="nav-link" aria-current="page" href="/products">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/myrating">Rating</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/mystatus">Status</a>
            </li>
        </ul>
        </div>
        <!-- end profile bar -->

        <!-- Edit Status  -->
        <form action="{{ route('editstatus.update', ['id' => $product->id]) }}" method="POST">
            <!-- tambahkan atribut action dan method -->
            @csrf <!-- tambahkan csrf token -->
            @method('PUT')
            <div class="editstatus py-4">
                <div class="row">
                    <div class="col-md-3 border-bottom">
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <img src="{{ asset('storage/uploads/' . $product->picture) }}" alt="Gambar Checkbox">
                            </label>
                            <div>
                                <a href="/mystatus" type="button" class="btn btn-outline-secondary mt-3">Kembali</a>
                                <a href="/mystatus" type="button" class="btn btn-danger mt-3">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-bottom">
                        <div class="desc">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p>{{ $product->description }}</p>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <select class="form-control" id="status" name="status">

                                        <!-- Tambahkan atribut selected berdasarkan status produk -->
                                        <option value="status-new"
                                            {{ $product->status == 'New Order' ? 'selected' : '' }}>
                                            New Order</option>
                                        <option value="status-pack"
                                            {{ $product->status == 'Packing' ? 'selected' : '' }}>
                                            Packing</option>
                                        <option value="status-ship"
                                            {{ $product->status == 'Shipping' ? 'selected' : '' }}>
                                            Shipping</option>
                                        <option value="status-deliv"
                                            {{ $product->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                        <option value="status-complete"
                                            {{ $product->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>

    </html>
</x-app-layout>
