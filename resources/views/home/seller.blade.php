@extends('layouts.css')
<x-app-layout>
    <!-- banner -->
    <div class="text-center" style="margin-top: 70px;">
        <img src="{{ asset('build/assets/banner/banner3.png')}}" alt="..." width="100%">
    </div>

    <!-- button -->
    <div class="text-center">
        <a href="/add-product">
            <button type="button" class="btn btn-danger btn-lg btn-block mt-3" style="background-color: #A21608;">Sell
                With
                Us</button>
        </a>
    </div>

    <!-- card seller -->
    <div class="card-group card1-center mt-5">
        <div class="px-5 text-center">
            <a href="/sellerdetail">
                <img src="{{ asset('build/assets//seller/seller1.jpg')}}" width="200px" height="200px">
            </a>
            <div class="card-body">
                <h5 class="card-title card1"><b>Theresa Webb
                    </b></h5>
                <p class="card1">Information System (2022)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller2.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Ethan Turner
                    </b></h5>
                <p class="card1">Computer Science (2020)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller3.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Olivia Rodriguez
                    </b></h5>
                <p class="card1">Mechanical Engineering (2020)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller4.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Caleb Mitchell
                    </b></h5>
                <p class="card1">Business Administration (2021)</p>
            </div>
        </div>
    </div>

    <div class="card-group card1-center mt-5">
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller5.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Ava Reynolds
                    </b></h5>
                <p class="card1">Psychology (2021)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller6.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Benjamin Foster
                    </b></h5>
                <p class="card1">Electrical Engineering (2021)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller7.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Lily Patel
                    </b></h5>
                <p class="card1">Environmental Science (2022)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller8.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Isaac Hayes
                    </b></h5>
                <p class="card1">Political Science (2022)</p>
            </div>
        </div>
    </div>

    <div class="card-group card1-center mt-5">
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller9.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Mia Carter
                    </b></h5>
                <p class="card1">Economics (2020)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller10.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Logan Williams
                    </b></h5>
                <p class="card1">Biomedical Engineering (2020)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller11.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Jackson Davis
                    </b></h5>
                <p class="card1">Communications (2021)</p>
            </div>
        </div>
        <div class="px-5 text-center">
            <img src="{{ asset('build/assets//seller/seller12.jpg')}}" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title card1"><b>Emma Reed
                    </b></h5>
                <p class="card1">Chemistry (2022)</p>
            </div>
        </div>
    </div>

    <!-- paging -->
    <nav aria-label="..." class="mt-3 mb-5">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" style="color: #A21608;">
                    < </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#" style="background-color: #A21608; border-color: #A21608;">1</a>
            </li>
            <li class="page-item"> <a class="page-link" href="seller2.html" style="border: none; color:#A21608"> 2 </a>
            </li>
            <li class="page-item"><a class="page-link" href="#" style="border: none; color: #A21608;">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: #A21608;"> > </a>
            </li>
        </ul>
    </nav>

</x-app-layout>