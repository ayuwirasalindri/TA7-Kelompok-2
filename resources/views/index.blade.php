@extends ('layouts.mainlayout')
@section('page_title', 'TelUFinds')
@section('content')

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
     <h3 class="py-5">Add Product</h3>
     <div class="row">
         <form action="{{ url('/product') }}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="container">
                 <div class="row">
                     <div>
                         <div class="form-group row mt-4">
                             <label for="category_id" class="col-2 col-form-label">Categories</label>
                             <div class="col-sm-3">
                                 <select class="form-control" id="category_id" name="category_id">
                                     @foreach ($categories as $category)
                                         <option value=>{{ $category->name }}</option>
                                     @endforeach
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row mt-4">
                             <label for="name" class="col-2 col-form-label">Product's Name</label>
                             <div class="col-sm-5">
                                 <input type="text" class="form-control" id="name" name="name">
                             </div>
                         </div>
                         <div class="form-group row mt-4">
                             <label for="picture" class="col-2 col-form-label">Product's Picture</label>
                             <div class="col-sm-5">
                                 <input type="file" class="form-control-file" id="picture" name="picture">
                             </div>
                         </div>
                         <div class="form-group row mt-4">
                             <label for="description" class="col-2 col-form-label">Description</label>
                             <div class="col-sm-5">
                                 <input type="text" class="form-control" id="description" name="description">
                             </div>
                         </div>
                         <div class="form-group row mt-4">
                             <label for="condition" class="col-2 col-form-label">Condition</label>
                             <div class="col-sm-3">
                                 <select class="form-control" id="condition" name="condition">
                                     <option value="Likenew">Like New</option>
                                     <option value="Excellent">Excellent</option>
                                     <option value="Good">Good</option>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row mt-4">
                             <label for="price" class="col-2 col-form-label">Price</label>
                             <div class="col-sm-5">
                                 <input type="text" class="form-control" id="price" name="price">
                             </div>
                         </div>
                         <div class="mt-4 mb-5">
                             <a href="{{ url('/products') }}" class="btn btn-dark" style="background-color: #A21608;">
                                 Back
                             </a>
                             <button type="submit" class="btn btn-outline-primary">Add</button>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 </div>
 @endsection
