@extends('layouts.css')
<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell With Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap');

    /* /navbar css/  */
    .navbar {
        margin: auto
    }

    .logo_1 {
        margin-left: 50px;
    }

    .d-flex {
        margin-left: 80px;
        margin-right: 30px;
    }

    .card1 {
        font-family: 'League Spartan', sans-serif;
        font-size: 16px;
    }

    /* /timeline css/  */
    body {
        margin-top: 20px;
    }

    .timeline-steps {
        display: flex;
        justify-content: center;
        flex-wrap: wrap
    }

    .timeline-steps .timeline-step {
        align-items: center;
        display: flex;
        flex-direction: column;
        position: relative;
        margin: 1rem
    }

    @media (min-width:768px) {
        .timeline-steps .timeline-step:not(:last-child):after {
            content: "";
            display: block;
            border-top: solid #D9D9D9;
            width: 3.46rem;
            position: absolute;
            left: 7.5rem;
            top: .3125rem
        }

        .timeline-steps .timeline-step:not(:first-child):before {
            content: "";
            display: block;
            border-top: solid #D9D9D9;
            width: 3.8125rem;
            position: absolute;
            right: 7.5rem;
            top: .3125rem
        }
    }

    .timeline-steps .timeline-content {
        width: 10rem;
        text-align: center
    }

    .timeline-steps .timeline-content .inner-circle {
        border-radius: 1.5rem;
        height: 1rem;
        width: 1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #D9D9D9
    }

    .timeline-steps .timeline-content .inner-circle:before {
        content: "";
        background-color: #D9D9D9;
        display: inline-block;
        height: 3rem;
        width: 3rem;
        min-width: 3rem;
        border-radius: 6.25rem;
        opacity: .5
    }

    .button1 {
        justify-content: center;
        border-color: #707070;
        padding-bottom: 10px;
    }

    /* footer */
    .followus img {
        width: 30px;
    }

    .copy {
        background-color: #6f1109;
    }
</style>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="width: auto">
        <div class="container-fluid justify-content-center">
            <div class="logo_1">
                <img src="logo.png" alt="" width="200px">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item px-4 ms-2">
                        <a class="nav-link" href="thrifting.html">Thrifting</a>
                    </li>

                    <li class="nav-item seller">
                        <a class="nav-link" href="seller.html">Seller</a>
                    </li>

                    <form class="d-flex search" role="search" style="width: 400px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-sm btn-outline-secondary buttonsearch" type="submit">
                            <img src="icon/search.png" style="width: 20px;">
                        </button>
                    </form>

                    <li class="nav-item px-4 acc">
                        <a class="navbar-text d-flex align-items-center text-decoration-none" href="account.html">
                            <img src="icon/user.png" alt="Logo" height="20">
                            Account
                        </a>
                    </li>

                    <li class="nav-item px-4 bag">
                        <a class="navbar-text d-flex align-items-center text-decoration-none" href="mybag.html">
                            <img src="icon/shopping-bag.png" alt="Logo" height="20">
                            Bag
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Menghubungkan Bootstrap JavaScript (Popper.js dan Bootstrap.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- end navbar -->

    <div>
        <a href="#">Home /</a>
        <a href="#">Seller /</a>
        <a href="#">Sell with us</a>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="timeline-steps">
                    <div class="timeline-step">
                        <div class="timeline-content">
                            <a class="inner-circle" href="sellwithus.html"></a>
                            <p class="h6 text-muted mb-0 mb-lg-0">Information Detail</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content">
                            <a class="inner-circle" href="#"></a>
                            <p class="h6 text-muted mb-0 mb-lg-0">Photos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <h3 class="card2 mt-4 mx-5">Photos</h3>

    <div class="card5">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td><img src="newarival/bloetooth.jpg" width="150px" height="150px" />
                            <input class="form-control" type="file" id="photoFront">
                        </td>
                        <h5>Front *</h5>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card5">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td><img src="newarival/bloetooth.jpg" width="150px" height="150px" />
                            <input class="form-control" type="file" id="photoBack">
                        </td>
                        <h5>Back *</h5>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card5">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td><img src="newarival/bloetooth.jpg" width="150px" height="150px" />
                            <input class="form-control" type="file" id="photoRight">
                        </td>
                        <h5>Right *</h5>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card5">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td><img src="newarival/bloetooth.jpg" width="150px" height="150px" />
                            <input class="form-control" type="file" id="photoLeft">
                        </td>
                        <h5>Left *</h5>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="mt-4 mb-5">
        <a href="sellwithus.html" type="button" class="btn btn-outline-secondary">Previous</a>
        <a href="sellerdetail.html" type="button" class="btn btn-dark" style="background-color: #A21608;">Submit</a>
    </div>
    </form>
    </div>
    </div>


    <!-- footer -->
    <footer>
        <div class=" bg-secondary text-white">
            <div class="container py-2">
                <div class="row">
                    <div class="col">
                        <h5>TelU Finds</h5>
                        <ul class="list-unstyled">
                            <li><i>About TelU Fnds</i></li>
                            <li><i>Privacy Policy</i></li>
                            <li><i>Help Desk</i></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Popular Category</h5>
                        <ul class="list-unstyled hover:black">
                            <li><i>Accessories</i></li>
                            <li><i>Furniture</i></li>
                            <li><i>Clothes</i></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Sell With US</h5>
                        <ul class="list-unstyled">
                            <li><i>Seller Guideline</i> </li>
                            <li><i>Seller List</i></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Follow Us</h5>
                        <div class="followus">
                            <a href="instagram.com">
                                <img src="instagram.png" alt="">
                            </a>
                            <a href="#">
                                <img src="facebook.png" alt="">
                            </a>
                            <a href="#">
                                <img src="whatsapp (1).png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy text-center py-4">
                &copy;2023 TelUFinds. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- end footer -->


</body>

</html>
</x-app-layout>