@extends ('layouts.mainlayout')
@section('page_title', 'TelUFinds')
@section('content')

<h3>Edit Product</h3>
<div class="container">
    <div class="row">
        <form action="/product/{{ $product->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row mt-4">
                <label for="name" class="col-2 col-form-label">Product's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="productName" name="name" value="{{ old('name', $product->name) }}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="text" class="col-2 col-form-label">Deskripsi</label>
                <div class="col-sm-5">
                    <input type="name" class="form-control" id="productName" name="description" value="{{ old('name', $product->description)}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="text" class="col-2 col-form-label">Price</label>
                <div class="col-sm-5">
                    <input type="name" class="form-control" id="productName" name="price" value="{{ old('name', $product->price)}}">
                </div>
            </div>
            <div class="mt-4 mb-5">
                <button type="submit" class="btn btn-outline-secondary">Perbarui</button>
                <a href="/products" class="btn btn-dark" style="background-color: #A21608;">
                    Kembali
                </a>
                
            </div>
        </form>
    </div>
</div>
@endsection
