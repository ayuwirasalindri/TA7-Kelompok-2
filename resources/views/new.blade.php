@extends ('layouts.mainlayout')
@section('page_title', 'TelUFinds')
@section('content')
    <h3>Add Product</h3>
        <div class="row">
            <form action="/product" method="post">
                @csrf
                {{-- @method('PUT') --}}
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
                    <label for="name" class="col-2 col-form-label">Description</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <label for="name" class="col-2 col-form-label">Price</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                </div>
                <div class="mt-4 mb-5">
                    <a href="/products" class="btn btn-dark" style="background-color: #A21608;">
                        Back
                    </a>
                    <button type="submit" class="btn btn-outline-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
