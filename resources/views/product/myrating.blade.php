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
</style>

<body>
    <!-- profile bar and content -->
    <div class="profilebar">
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
            <a class="nav-link" aria-current="page" href="/products">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/myrating">Rating</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/mystatus">Status</a>
        </li>
    </ul>
    <!-- end profile bar -->
    <!-- Rating  -->
    <div class="reviews justify-content-center">
        <div class="col">
            <div class="card mb-3 card rounded-0 border-0 "
                style="width: 70rem; margin-left: 65px; height: 160px; border-bottom: 0;">
                <div class="row border-bottom">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/seller/seller10.jpg')}}" style="width: 130px;" class="rounded-circle shadow-5-strong"
                            alt="...">
                    </div>
                    <div class="col-md-8 justify-content-center">
                        <div class="card-body mt-1">
                            <h5 class="card-title">Kim Seok Jin</h5>
                            <h6 class="card-text" style="color: blue;">5/5</h6>
                            <p class="card-text">Pengirman cepat, barang berfungsi dengan baik. Terima kasih!</p>
                            <p class="card-text"><small class="text-body-secondary">2022-03-30 07:09 | AirPods Max
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 card rounded-0 border-0 "
                style="width: 70rem; margin-left: 65px; height: 160px; border-bottom: 0;">
                <div class="row border-bottom">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/seller/seller12.jpg')}}" style="width: 130px;" class="rounded-circle shadow-5-strong"
                            alt="...">
                    </div>
                    <div class="col-md-8 justify-content-center">
                        <div class="card-body mt-1">
                            <h5 class="card-title">Nezuko</h5>
                            <h6 class="card-text" style="color: blue;">5/5</h6>
                            <p class="card-text">Pengirman cepat, barang berfungsi dengan baik. Terima kasih!</p>
                            <p class="card-text"><small class="text-body-secondary">2022-03-26 09:09 | Macbook Pro
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 card rounded-0 border-0 "
                style="width: 70rem; margin-left: 65px; height: 160px; border-bottom: 0;">
                <div class="row border-bottom">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/seller/seller14.jpg')}}" style="width: 130px;" class="rounded-circle shadow-5-strong"
                            alt="...">
                    </div>
                    <div class="col-md-8 justify-content-center">
                        <div class="card-body mt-1">
                            <h5 class="card-title">Kim Seok Jin</h5>
                            <h6 class="card-text" style="color: blue;">5/5</h6>
                            <p class="card-text">Pengirman cepat, barang berfungsi dengan baik. Terima kasih!</p>
                            <p class="card-text"><small class="text-body-secondary">2022-03-30 07:09 | AirPods Max
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 card rounded-0 border-0 "
                style="width: 70rem; margin-left: 65px; height: 160px; border-bottom: 0;">
                <div class="row border-bottom">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/seller/seller6.jpg')}}" style="width: 130px;" class="rounded-circle shadow-5-strong"
                            alt="...">
                    </div>
                    <div class="col-md-8 justify-content-center">
                        <div class="card-body mt-1">
                            <h5 class="card-title">Kim Seok Jin</h5>
                            <h6 class="card-text" style="color: blue;">5/5</h6>
                            <p class="card-text">Pengirman cepat, barang berfungsi dengan baik. Terima kasih!</p>
                            <p class="card-text"><small class="text-body-secondary">2022-03-30 07:09 | AirPods Max
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 card rounded-0 border-0 "
                style="width: 70rem; margin-left: 65px; height: 160px; border-bottom: 0;">
                <div class="row border-bottom">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/seller/seller4.jpg')}}" style="width: 130px;" class="rounded-circle shadow-5-strong"
                            alt="...">
                    </div>
                    <div class="col-md-8 justify-content-center">
                        <div class="card-body mt-1">
                            <h5 class="card-title">Innosuke</h5>
                            <h6 class="card-text" style="color: blue;">5/5</h6>
                            <p class="card-text">Pengirman cepat, barang berfungsi dengan baik. Terima kasih!</p>
                            <p class="card-text"><small class="text-body-secondary">2022-03-30 07:09 | AirPods Max
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>


    </div>
    </div>
</body>
</html>
</x-app-layout>