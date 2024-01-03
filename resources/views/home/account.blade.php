@extends('layouts.css')
<x-app-layout>


    <body>
        <!-- profile bar and content -->
        <div class="justify-content-center content">
            <div class="profilebar">
                <div class="cardprof card w-85 mx-4 mb-3">
                    <div class="card-body top">
                        <img src="{{ asset('build/assets/seller/seller19.jpg') }}" wi style="float: left; margin-right: 10px; width: 150px">
                        <ul class="justify-content-end textul" style="list-style-type: none;">
                            <li>
                                <h2 class="card-title">{{ auth()->user()->name }}</h2>
                            </li>
                            <li>
                                <p class="card-text">Information System'22</p>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="editprofil" class="btn btn-outline-danger button" style="width: max-content">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">My Order</a>
                </li>
            </ul>
            <div class="button">
                <div class="text-center">
                    <a class="btn btn-danger button1 mt-3 mb-5 text-center" type="button" style="width: 150px;"
                        href="/products">
                        My Store
                    </a>
                </div>
            </div>
        </div>
        </div>
        <!-- end profile bar -->
        <!-- Order  -->
        <div class="reviews justify-content-center">
            <div class="card mb-3 card rounded-0" style="width: 70rem; margin-left: 65px; height: 160px;">
                <div class="row">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/products/iron1.jpg')}}" style="width: 130px;" class="" alt="...">
                    </div>

                    <div class="col-md-5 justify-content-center">
                        <div class="card-body mt-1">
                            <h5 class="card-title">Efficient Steam Iron</h5>
                            <p class="card-text"><small class="text-body-secondary">2022-03-30 07:09 | IDR.60.000
                                </small></p>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5" style="text-align: right; color:#A21608">
                        <p class="card-text">Paid</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 card rounded-0" style="width: 70rem; margin-left: 65px; height: 160px;">
                <div class="row g-0">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/products/shoes1.jpg')}}" style="width: 130px;" class="" alt="...">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title">Vintage Leather Boots</h5>
                            <p class="card-text"><small class="text-body-secondary">2022-03-26 09:09 | IDR.100.000
                                </small></p>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5" style="text-align: right; color:#A21608">
                        <p class="card-text">Shipped</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 card rounded-0" style="width: 70rem; margin-left: 65px; height: 160px;">
                <div class="row g-0">
                    <div class="col-md-2 mt-3  ms-3">
                        <img src="{{ asset('build/assets/products/kettle2.jpg')}}" style="width: 130px;" class=""" alt=" ...">
                    </div>
                    <div class="col-md-5 justify-content-center">
                        <div class="card-body mt-1">
                            <h5 class="card-title">Vintage Kettle</h5>
                            <p class="card-text"><small class="text-body-secondary">2022-03-30 07:09 | IDR.150.000</small>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5" style="text-align: right; color:#A21608">
                        <p class="card-text">Shipped</p>
                    </div>

                </div>
            </div>
        </div>    
    </body>

    </html>

</x-app-layout>
