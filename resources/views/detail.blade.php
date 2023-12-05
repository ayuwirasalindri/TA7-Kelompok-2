@extends ('layouts.mainlayout')
@section('page_title', 'Telufinds')
@section('content')
    <!-- photo product -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $product->picture) }}" class="rounded mb-1" style="width: 200px" />
                <div class="card-body mt-2">
                    <p class="card-title card2">
                        <b>{{ $product->name }}</b>
                    </p>
                    <p class="card1">
                        {{ $product->description }}
                    </p>
                    <p class="card2 price">{{ $product->price }}</p>
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
@endsection

</html>
