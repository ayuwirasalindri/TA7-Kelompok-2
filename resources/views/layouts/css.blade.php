<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap');
    
    /* navbar css */
    .navbar {
        margin: auto;
    }

    .logo_1 {
        margin-left: 20px;
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
        margin-top: 20px;
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

    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap');

    /* navbar css */
    .navbar {
        margin: auto
    }

    .logo_1 {
        margin-left: 20px;
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


    /* header css */
    .bg-custom {
        background-image: url({{ asset('build/assets/bg.jpg') }});
        background-size: cover;
        background-position: center;
        width: 100%;
        padding-top: 180px;
        padding-bottom: 100px;
        padding-left: 50px;
    }

    .opening h1 {
        font-size: 96px;
        font-weight: bold;
        font-family: 'League Spartan', sans-serif;
    }

    .opening p {
        font-size: 30px;
        font-weight: bold;
        font-family: 'League Spartan', sans-serif;
        margin-bottom: -5px;
    }

    /* card css */
    .card1 {
        font-family: 'League Spartan', sans-serif;
        font-size: 16px;
    }

    .card1-center {
        justify-content: center;
    }

    .card2-center {
        justify-content: center;
        background-color: #6f1109;
    }

    .button1 {
        justify-content: center;
        background-color: #6f1109;
        padding-bottom: 20px;
    }

    .price {
        color: green;
    }

    /* seller */
    .card {
        border: 0px;
    }

    .cardsize {
        margin-left: 100px;
        margin-right: 100px;
    }

    .card img {
        width: 70%;
        margin: auto;
        background-color: #6f1109;
    }

    .px-5 img {
    border-radius: 15px;
}

    .card.bg-custom1 {
        background-color: #6f1109;
        color: white;
    }

    .carousel {
        background-color: #6f1109;
    }

    .custom-carousel {
    background-color: #ffffff;
}

    .newarrival {
        background-color: #ffffff;
    }

    .custom-prev-icon-second {
    filter: invert(100%);
}

    .shopna {
        background-color: #ffffff;
    }

    .under {
        background-color: #ffffff;
    }

    /* footer */
    .followus img {
        width: 30px;
    }

    .copy {
        background-color: #6f1109;
    }

    .button {
        width: 100px;
    }

    /* mybag */

    .fast {
        margin-top: 80px;
        margin-bottom: 20px;
        margin-left: 20px;
    }

    .fast a {
        text-decoration: none;
        color: black;
    }

    .fast a:hover {
        color: blue;
    }

    .container .row {
        margin-bottom: 50px;
    }

    .container .row1 {
        margin-right: 0px;
        margin-top: 20px;
    }


    .form-check-input {
        border: 1px solid black;
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .custom-checkbox {
        width: 20px;
        height: 20px;
        border: 1px solid black;
    }

    .link {
        margin: 20px 0;
    }

    .form-check-label img {
        width: 250px;
    }

    .desc {
        font-family: 'League Spartan', sans-serif;
        margin-right: 10px;
    }

    .desc h5 {
        font-size: 20px;

    }

    .desc p {
        font-size: 15px;
    }

    .price h5 {
        font-family: 'League Spartan', sans-serif;
        font-size: 20px;
        color: green;
        text-align: right;
    }

    .trash {
        padding-bottom: 25px;

    }

    .trash img {
        width: 20px;
        margin-left: 290px;
    }

    .checkout {
        width: 250px;
    }

    .checkout button {
        width: 250px;
    }

    .co {
        margin-left: 100px;
        font-family: 'League Spartan', sans-serif;
    }

    .co button {
        font-size: 20px;
    }

    .idr {
        color: green;
        font-size: 17px;
        text-align: right;
    }


    /* seller */
    .seller {
        margin-left: 30px;
    }

    .card1 {
        font-family: 'League Spartan', sans-serif;
        font-size: 16px;
    }

    .card1-center {
        justify-content: center;
    }

    .followus img {
        width: 30px;
    }

    .copy {
        background-color: #6f1109;
    }



    /* detail product */
    .card1 {
        font-family: "League Spartan", sans-serif;
        font-size: 16px;
    }

    .card2 {
        font-size: 25px;
        font-weight: bold;
        font-family: "League Spartan", sans-serif;
    }

    .card3 {
        font-family: "League Spartan", sans-serif;
        font-size: 22px;
    }

    .card4 {
        font-family: "League Spartan", sans-serif;
        font-size: 16px;
        font-weight: 600;
    }

    .price {
        color: green;
    }

    .followus img {
        width: 30px;
    }

    .copy {
        background-color: #6f1109;
    }


    /* sell with us */
    /* /timeline css/  */
    .card1 {
        font-family: 'League Spartan', sans-serif;
        font-size: 16px;
    }

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

    /* Footer */
    footer {
        margin-top: 50px;
        padding: 20px 0;
        color: white;
    }

    /* Follow Us */
    .followus img {
        width: 30px;
        margin-right: 10px;
    }

    /* title shop by */
    .shop h5 {
        font-size: 25px;
    }

    /* detail seller */


    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap');

    /* profile bar css */
    .profilebar {
        margin-top: 90px;
    }

    .button1 {
        background-color: #6f1109;
        color: white;
    }

    .textul {
        font-size: x-large;
    }

    .btn-outline-danger:hover {
        background-color: #6f1109;
    }

    /* card items */
    .price {
        color: green;
    }

    /* Footer */
    .followus img {
    width: 30px;
}

.copy {
    background-color: #6f1109;
}

.button {
    width: 100px;
}

.followus img {
    width: 30px;
}

.copy {
    background-color: #6f1109;
}

.list-unstyled li:hover {
    color: #f00;;
}
/* mybag */

.fast {
    margin-top: 80px;
    margin-bottom: 80px;
    margin-left: 20px;
}

.fast a {
    text-decoration: none;
    color: black;
}

.fast a:hover {
    color: blue;
}

.container .row {
    margin-bottom: 50px;
}

.container .row1 {
    margin-right: 0px;
    margin-top: 20px;
}


.form-check-input {
    border: 1px solid black;
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

.custom-checkbox {
    width: 20px;
    height: 20px;
    border: 1px solid black;
}

.link {
    margin: 20px 0;
}

.form-check-label img {
    width: 250px;
}

.desc {
    font-family: 'League Spartan', sans-serif;
    margin-right: 10px;
}

.desc h5 {
    font-size: 20px;

}

.desc p {
    font-size: 15px;
}

.price h5 {
    font-family: 'League Spartan', sans-serif;
    font-size: 20px;
    color: green;
    text-align: right;
}

.trash {
    padding-bottom: 25px;

}

.trash img {
    width: 20px;
    margin-left: 290px;
}

.checkout {
    width: 250px;
}

.checkout button {
    width: 250px;
}

.co {
    margin-left: 100px;
    font-family: 'League Spartan', sans-serif;
}

.co button {
    font-size: 20px;
}

.idr {
    color: green;
    font-size: 17px;
    text-align: right;
}
.footer {
    background-color: #716e6e;
}

.newarrival {
    background-color: #ffffff;
}

header.categories {
            width: 100%;
            height: 300px;
            margin: 0 auto;
            padding: 40px 60px;
            background-image: url({{ asset('build/assets/banner/bannercat.png') }});
        }
        
    @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap");
</style>

<body>
    @yield('content')
</body>
</html>