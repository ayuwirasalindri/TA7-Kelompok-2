@extends ('layouts.mainlayout')
@section ('page_title', 'Products Orders')
@section('content')
    <h3>Hapus Data Product</h3>
    <form method="post" action="/product/{{ $product->id}}">
        @csrf
        @method('delete')
        <div class="mt-5">
            <p>Are you sure you want to delete product data <b>{{ $product->name}}</b>?</p>
            <button type="submit" class="btn btn-danger mb-3">Yes</button>
            <a href="/products" class="btn btn-secondary mb-3">No</a>
        </div>
    </form>
@endsection
