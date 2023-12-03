@extends ('layouts.mainlayout')
@section('page_title', 'Telufinds')
@section('content')
    <!-- photo product -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                {{-- <p>{{ $product->id}}</p> --}}
            </div>

            {{-- <div class="col-lg-6">
                <img src="{{ $product->picture }}" class="rounded mb-1" style="width: 450px" />
            </div> --}}
            <div class="col-lg-6">
                <div class="card-body mt-2">
                    <p class="card-title card2">
                        <b>{{ $product->name }}</b>
                    </p>
                    <!-- button -->
                    <p class="card2 price">{{ $product->price }}</p>
                    <p class="card4 mt-1">Product Details</p>
                    <p class="card1">
                        {{ $product->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    </body>



    <!-- end footer -->
@endsection

</html>
