@extends('layouts.css')
<x-app-layout>
    <h3 style="margin-top: 150px">Hapus Data Product</h3>
    <form method="post" action="/product/{{ $product->id}}">
        @csrf
        @method('delete')
        <div class="confirm" style="margin-bottom: 250px">
            <p>Are you sure you want to delete product data <b>{{ $product->name}}</b>?</p>
            <button type="submit" class="btn btn-danger mb-3">Yes</button>
            <a href="/products" class="btn btn-secondary mb-3">No</a>
        </div>
    </form>
</x-app-layout>
