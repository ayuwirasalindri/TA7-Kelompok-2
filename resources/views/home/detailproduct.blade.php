<x-app-layout>
@extends('layouts.css')

                <div style="margin-top: 100px">
                    <a href="/thrifting" class="btn btn-dark" style="background-color: #A21608;">
                        Back
                    </a>
                </div>

    <!-- photo product -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('storage/uploads/' . $product->picture) }}" class="rounded mb-1" style="width: 500px" />
            </div>
            <div class="col-lg-6">
                <div class="card-body mt-2">
                    <p class="card-title card2">
                        <b>{{ $product->name }}</b>
                    </p>
                    <!-- button -->
                    <p class="card2 price">{{ $product->price }}</p>
                    <div>
                        <form action="{{ route('add.to.bag') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <button type="submit" class="btn btn-danger btn-lg btn-block mt-1" style="background-color: #a21608">ADD TO BAG</button>
                        </form>                        
                    </div>
                    <a href="https://wa.me/62885623212" class="navbar-text my-3">
                        <img src="{{asset('build/assets/icon/chat.png')}}" alt="Logo" width="20px" />
                        Chat With Seller
                    </a>
                    <p class="card3 mt-2">Information</p>
                    <p class="card1"><b>Seller</b></p>
                    <div class="card-group">
                        <div>
                            <a href="/sellerdetail">
                                <img src="{{asset('build/assets/seller/seller1.jpg')}}" alt="..." width="140px" height="140px" />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title card1"><b>Theresa Webb </b></h5>
                                <p class="card1">Information System (2022)</p>
                            </div>
                        </div>
                    </div>
                    <p class="card4 mt-1">Product Details</p>
                    <p class="card1"> {{ $product->condition }}</p>
                    <p class="card1">
                        {{ $product->description }}
                    </p>
                </div>
            </div>
        </div>

        <div>
            <p class="card2 text-center mt-4 mb-0">
                <b><u>Related Items</u></b>
            </p>
            <div class="container">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-3">
                        <div class="card-group card1-center py-5">
                            <div class="px-5">
                                <img src="{{asset('build/assets/products/ra1.jpg')}}" alt="..." width="170px" />
                                <div class="card-body">
                                    <h5 class="card-title card1"><b>Book Of The Journey</b></h5>
                                    <p class="card1">
                                        Book with thousands of jouney <br />
                                        
                                    </p>
                                    <h5 class="card1 price">IDR 150,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3">
                        <div class="card-group card1-center py-5">
                            <div class="px-5">
                                <img src="{{asset('build/assets/products/ra2.jpg')}}" alt="..." width="170px" />
                                <div class="card-body">
                                    <h5 class="card-title card1"><b>Buku Petualangan Istana </b></h5>
                                    <p class="card1">
                                        Perjalanan Kevin menemukan istana<br />
                                        
                                    </p>
                                    <h5 class="card1 price">IDR 100,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3">
                        <div class="card-group card1-center py-5">
                            <div class="px-5">
                                <img src="{{asset('build/assets/products/ra3.jpg')}}" alt="..." width="170px" />
                                <div class="card-body">
                                    <h5 class="card-title card1"><b>Buku Bekas</b></h5>
                                    <p class="card1">
                                        Beli ajalah, bagus <br />
                                        pokoknya!!
                                    </p>
                                    <h5 class="card1 price">IDR 120,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-3">
                        <div class="card-group card1-center py-5">
                            <div class="px-5">
                                <img src="{{asset('build/assets/products/ra4.jpg')}}" alt="..." width="170px" />
                                <div class="card-body">
                                    <h5 class="card-title card1"><b>Buku Otomotif</b></h5>
                                    <p class="card1">Pengen Belajar mobil ya beli ini</p>
                                    <h5 class="card1 price">IDR 200,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</x-app-layout>