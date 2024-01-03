@extends('layouts.css')
<x-app-layout>
    <!-- photo product -->
    <div class="container pt-5" >
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('storage/uploads/' . $product->picture) }}" class="rounded mb-1" style="width: 200px" />
                <div class="card-body mt-2">
                    <p class="card-title card2">
                        <b>{{ $product->name }}</b>
                    </p>
                    <p class="card2 price">{{ $product->price }}</p>
                    <p class="card1">
                        {{ $product->description }}
                    </p>
                    <p class="card1">
                        {{ $product->categories }}
                    </p>
                    <p class="card1">
                        {{ $product->condition }}
                    </p>

                </div>
                <div class="mt-4 mb-5">
                    <a href="/products" class="btn btn-dark" style="background-color: #A21608;">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
    </body>

    <!-- end footer -->
</x-app-layout>

</html>
