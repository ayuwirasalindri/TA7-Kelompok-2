@extends ('layouts.mainlayout')
@section ('page_title', 'Products Orders')
@section('content')
    <h3>Hapus Data Product</h3>
    <form method="post" action="/product/{{ $product->id}}">
        @csrf
        @method('delete')
        <div class="mt-5">
            <p>Apakah Anda yakin akan menghapus data kategori <b>{{ $product->name}}</b>?</p>
            <button type="submit" class="btn btn-danger mb-3">Ya</button>
            <a href="/products" class="btn btn-secondary mb-3">Tidak</a>
        </div>
    </form>
@endsection
