@extends ('layouts.mainlayout')
@section('page_title', 'TelUFinds')
@section('content')
    <div>
<div>
    <div class="row justify-content-between my-3">
        <div class="col-3">
            <h2>Daftar Product</h2>
        </div>
        <div class="col-2">
            <a href="/add-product" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
</div>
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <table class="table">
            <tbody>
                @foreach ($products as $product)
                    <div>
                        <div class="card-group card1-center py-2 justify-content-center">
                            <div class="px-3">
                                <img src="{{ $product->picture }}" alt="..." width="200px">
                                <div class="card-body">
                                    <h5 class="card-title card1"><b>{{ $product->name }}</b></h5>
                                    <p class="card1">{{ $product->description }}</p>
                                    <h5 class="card1 price">{{ $product->price }}</h5>
                                </div>
                                <button class="btn btn-danger button1 mt-3 mb-5 text-center" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                aria-controls="offcanvasExample" style="width: 150px;"><a
                                    href="/product/{{ $product->name }}"
                                    class="btn btn-sm">Detail</a>
                                </button>
                                <button class="btn btn-danger button1 mt-3 mb-5 text-center" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                aria-controls="offcanvasExample" style="width: 150px;"><a
                                    href="/edit-product/{{ $product->id }}"
                                    class="btn  btn-sm">Ubah</a>
                                </button>
                                <button class="btn btn-danger button1 mt-3 mb-5 text-center" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                    aria-controls="offcanvasExample" style="width: 150px;"> <a
                                        href="/delete-product/{{ $product->id }}"
                                        class="btn  btn-sm">Hapus</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
        <div class="my-5 row justify-content-between">
            {{ $products->links() }}
        </div>
    </div>
    <!-- items -->
@endsection
