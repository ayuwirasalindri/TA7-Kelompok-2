@extends ('layouts.mainlayout')
@section ('page_title', 'Products Orders')
@section('content')
    <h3 style="margin-top: 150px">Hapus Product dari Bag</h3>
    <form method="post" action="/mybag/{{ $product->id}}">
        @csrf
        @method('delete')
        <div class="confirm" style="margin-bottom: 250px">
            <p>Are you sure you want to delete product data <b>{{ $product->name}}</b>?</p>
            <button type="submit" class="btn btn-danger mb-3">Yes</button>
            <a href="/mybag" class="btn btn-secondary mb-3">No</a>
        </div>
    </form>
@endsection
