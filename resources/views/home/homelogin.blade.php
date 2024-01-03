@extends('layouts.loginlayout')
@section('page_title', 'TelUFinds')
@section('content')

<!-- header -->
<header class="bg-custom">
    <div class="opening text-white">
        <h1>Welcome to </h1>
        <h1>Tel-U Finds</h1>
        <p>Find what you need</p>
        <p>with cheap price and negotiable</p>
    </div>
</header>
<!-- end header -->

<!-- banner -->
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

<!-- end banner -->

<!-- card category -->
<div class="shop text-center py-3">
    <h5>Shop by Category</h5>
</div>
<div class="card-group card1-center py-4">
    <div class="px-4">
            <img src="{{ asset('build/assets/categories/furniture.jpg') }}" class="rounded-circle shadow-5-strong" alt="..." width="150px">
        <div class="card-body">
            <h5 class="card-title text-center card1">Furniture</h5>
        </div>
    </div>
    <div class="px-4">
        <a href="/shopbycategories">
            <img src="{{ asset('build/assets/categories/electronic.jpg') }}" class="rounded-circle shadow-5-strong" alt="..." width="150px">
        </a>
        <div class="card-body">
            <h5 class="card-title text-center card1">Electronic</h5>
        </div>
    </div>
    <div class="px-4">
        <img src="{{ asset('build/assets/categories/accessories.jpg') }}" class="rounded-circle shadow-5-strong" alt="..." width="150px">
        <div class="card-body">
            <h5 class="card-title text-center card1">Accessories</h5>
        </div>
    </div>
    <div class="px-4">
        <img src="{{ asset('build/assets/categories/clothes.jpg') }}" class="rounded-circle shadow-5-strong" alt="..." width="150px">
        <div class="card-body">
            <h5 class="card-title text-center card1">Clothes</h5>
        </div>
    </div>
    <div class="px-4">
        <img src="{{ asset('build/assets/categories/shoes.jpg') }}" class="rounded-circle shadow-5-strong" alt="..." width="150px">
        <div class="card-body">
            <h5 class="card-title text-center card1">Shoes</h5>
        </div>
    </div>
    <div class="px-4">
        <img src="{{ asset('build/assets/categories/books.jpg') }}" class="rounded-circle shadow-5-strong" alt="..." width="150px">
        <div class="card-body">
            <h5 class="card-title text-center card1">Books</h5>
        </div>
    </div>
</div>
<!-- card category end -->

<!-- card seller -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="shop py-4 text-center text-white">
        <h5>Shop by Seller</h5>
    </div>
    <div class="carousel-inner py-5 text-center">
        <!-- Slide 1 -->
        <div class="cardsize">
            <div class="carousel-item active">
                <div class="card-group">
                    <div class="card bg-custom1">
                        <a href="/sellerdetail">
                            <img src="{{ asset('build/assets/seller/seller1.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Theresa Web</h5>
                            <p class="card-text">Information System (2022)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller2.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Leslie Alexander</h5>
                            <p class="card-text">Graphic Design (2020)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller3.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Kristin Watson</h5>
                            <p class="card-text">Biochemistry (2021)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller4.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Robert Fox</h5>
                            <p class="card-text">Computer Science (2020)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller5.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">Physics (2020)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller6.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Jackson Reed</h5>
                            <p class="card-text">Psychology (2022)</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="cardsize">
                <div class="carousel-item active">
                    <div class="card-group">
                        @foreach ($sellers as $seller)
                            <div class="card bg-custom1">
                                <a href="/sellerdetail">
                                    <img src="{{ asset('build/assets/seller/' . $seller->image) }}" class="card-img-top" alt="..." style="width: 150px">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $seller->name }}</h5>
                                    <p class="card-text">{{ $seller->major }} ({{ $seller->year }})</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="card-group">
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller7.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Theresa Webb</h5>
                            <p class="card-text">iochemistry (2021)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller8.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Olivia Martinez</h5>
                            <p class="card-text">Civil Engineering (2021)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller9.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Ethan Turner</h5>
                            <p class="card-text">Information System (2022)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller10.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Caleb Mitchell</h5>
                            <p class="card-text">Physics (2020)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller11.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Mason Ross</h5>
                            <p class="card-text">Sociology (2021)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller12.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Dylan Ward</h5>
                            <p class="card-text">Political Science (2022)</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="card-group">
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller3.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Zoe Perry</h5>
                            <p class="card-text">Information System (2022)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller5.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Jordan Simmons</h5>
                            <p class="card-text">Political Science (2022)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller10.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Harper Price</h5>
                            <p class="card-text">Graphic Design (2020)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller2.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Lucas Evans</h5>
                            <p class="card-text">Chemistry (2021)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller4.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Lily Foster</h5>
                            <p class="card-text">Economics (2020)</p>
                        </div>
                    </div>
                    <div class="card bg-custom1">
                        <img src="{{ asset('build/assets/seller/seller6.jpg') }}" class="card-img-top" alt="..." style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title">Nolan Sanders</h5>
                            <p class="card-text">Linguistics (2021)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="button1 text-center py-3">
    <a href="/seller" type="button" class="btn btn-outline-light">View All</a>
</div>

<!-- New Arrival -->
<div class="newarrival">
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($products->chunk(4) as $key => $chunk)
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                    aria-label="Product Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="shopna py-4 text-center">
            <h5>New Arrivals</h5>
        </div>
        <div class="carousel-inner text-center">
            @foreach ($products->chunk(4) as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="card-group">
                        @foreach ($chunk as $product)
                            <div class="card bg-custom2">
                                <img src="{{ asset('storage/uploads/' . $product->picture) }}" alt="..."
                                    width="250px">
                                <div class="card-body">
                                    <h5 class="card-title card1"><b>{{ $product->name }}</b></h5>
                                    <p class="card1">{{ $product->description }}</p>
                                    <h5 class="card1 price">IDR {{ $product->price }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="under py-4">
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
</body>

</html>
@endsection
