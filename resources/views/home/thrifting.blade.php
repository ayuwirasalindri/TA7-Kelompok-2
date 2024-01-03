@extends('layouts.css')
<x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
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
        margin-top: 90px;
    }

    .card {
        position: relative;
        height: fit-content;
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

<body style="margin-top: 100px">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Image 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('build/assets/banner/banner1.png')}}" class="d-block w-100" alt="Image 1">
            </div>
            <!-- Image 2 -->
            <div class="carousel-item">
                <img src="{{ asset('build/assets/banner/banner2.png') }}" class="d-block w-100" alt="Image 2">
            </div>
            <!-- Add more images as needed -->
        </div>
        <div class="control mt-3">
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    

    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Sidebar -->
            {{-- <div class="col-5 sidebar">
                <div class="flex-shrink-0 p-3 sidebar" style="width: 280px; height: fit-content;">
                    <a href="#"
                        class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <svg class="bi me-2" width="30" height="24">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <span class="fs-5 fw-semibold text-white">Menu</span>
                    </a>
                    <ul class="list-unstyled ps-0 text-white">
                        <li class="mb-1">
                            <a href="index.html" class="btn btn-toggle align-items-center rounded collapsed text-white"
                                aria-expanded="true">
                                Home
                            </a>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed text-white"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Category
                            </button>
                            <div class="collapse text-white" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#"
                                            class="link-dark rounded text-white text-decoration-none">Furniture</a></li>
                                    <li><a href="#"
                                            class="link-dark rounded text-white text-decoration-none">Accessories</a>
                                    </li>
                                    <li><a href="#"
                                            class="link-dark rounded text-white text-decoration-none">Clothes</a></li>
                                    <li><a href="#"
                                            class="link-dark rounded text-white text-decoration-none">Electronic</a>
                                    </li>
                                    <li><a href="#" class="link-dark rounded text-white text-decoration-none">Shoes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed text-white"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Condition
                            </button>
                            <div class="collapse text-white" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded text-white text-decoration-none">Like
                                            New</a></li>
                                    <li><a href="#"
                                            class="link-dark rounded text-white text-decoration-none">Excellent</a></li>
                                    <li><a href="#" class="link-dark rounded text-white text-decoration-none">Good</a>
                                    </li>
                                    <li><a href="#" class="link-dark rounded text-white text-decoration-none">Poor</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed text-white"
                                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                        </li>
                    </ul>
                </div>
            </div> --}}

            <!-- Main Content -->

            
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
                <div class="my-5 row justify-content-between">
                    {{ $products->links() }}
                </div>
            </div>

            {{-- <div class="col-9 main-content">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="newarival/bloetooth.jpg" class="card-img-top" alt="..." width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Bluetooth Speaker</b></h5>
                                <p class="card-text">Deskripsi</p>
                                <h5 class="price">2.000.000</h5>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="detailproduct.html" class="btn btn-danger btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="newarival/hoodie.jpg" class="card-img-top" alt="..." width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Bluetooth Speaker</b></h5>
                                <p class="card-text">Deskripsi</p>
                                <h5 class="price">2.000.000</h5>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-danger btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="newarival/desk.jpg" class="card-img-top justify-content-center" alt="..."
                                width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Bluetooth Speaker</b></h5>
                                <p class="card-text">Deskripsi</p>
                                <h5 class="price">2.000.000</h5>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-danger btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="newarival/bloetooth.jpg" class="card-img-top" alt="..." width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Bluetooth Speaker</b></h5>
                                <p class="card-text">Deskripsi</p>
                                <h5 class="price">2.000.000</h5>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-danger btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="newarival/hoodie.jpg" class="card-img-top" alt="..." width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Bluetooth Speaker</b></h5>
                                <p class="card-text">Deskripsi</p>
                                <h5 class="price">2.000.000</h5>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-danger btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="newarival/desk.jpg" class="card-img-top" alt="..." width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Bluetooth Speaker</b></h5>
                                <p class="card-text">Deskripsi</p>
                                <h5 class="price">2.000.000</h5>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-danger btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- <!-- paging --> --}}
    {{-- <nav aria-label="..." class="mt-3 mb-5">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#">
                    < </a>
            </li>
            <li class="page-item active" style="background-color: #A21608;"><a class="page-link" href="#">1</a></li>
            <li class="page-item"> <a class="page-link" href="#"> 2 </a> </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#"> > </a>
            </li>
        </ul>
    </nav>  --}}


</body>
</html>
</x-app-layout>