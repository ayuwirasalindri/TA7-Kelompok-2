@extends('layouts.css')
<x-app-layout>

<h3 class="py-5">Edit Product</h3>
<div class="container">
    <div class="row">
        <form action="/product/{{ $product->id }}" method="post" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
            <div class="form-group row mt-4">
                <label for="categories" class="col-2 col-form-label">Categories</label>
                <div class="col-sm-3">
                    <select class="form-control" id="categories" name="categories">
                        <option value="Furniture" {{ $product->categories == 'Furniture' ? 'selected' : '' }}>Furniture</option>
                        <option value="Electronic" {{ $product->categories == 'Electronic' ? 'selected' : '' }}>Electronic</option>
                        <option value="Accessories" {{ $product->categories == 'Accessories' ? 'selected' : '' }}>Accessories</option>
                        <option value="Clothes" {{ $product->categories == 'Clothes' ? 'selected' : '' }}>Clothes</option>
                        <option value="Shoes" {{ $product->categories == 'Shoes' ? 'selected' : '' }}>Shoes</option>
                        <option value="Books" {{ $product->categories == 'Books' ? 'selected' : '' }}>Books</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="name" class="col-2 col-form-label">Product's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="productName" name="name" value="{{ old('name', $product->name) }}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="picture" class="col-2 col-form-label">Product's Picture</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control-file" id="picture" name="picture" value="{{ old('name', $product->picture)}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="text" class="col-2 col-form-label">Description</label>
                <div class="col-sm-5">
                    <input type="name" class="form-control" id="productName" name="description" value="{{ old('name', $product->description)}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="condition" class="col-2 col-form-label">Condition</label>
                <div class="col-sm-3">
                    <select class="form-control" id="condition" name="condition">
                        <option value="Like New" {{ $product->condition == 'Like New' ? 'selected' : '' }}>Like New</option>
                        <option value="Excellent" {{ $product->condition == 'Excellent' ? 'selected' : '' }}>Exellent</option>
                        <option value="Good" {{ $product->condition == 'Good' ? 'selected' : '' }}>Good</option>
                    </select>            
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="text" class="col-2 col-form-label">Price</label>
                <div class="col-sm-5">
                    <input type="name" class="form-control" id="productName" name="price" value="{{ old('name', $product->price)}}">
                </div>
            </div>
            <div class="mt-4 mb-5">
                <a href="/products" class="btn btn-dark" style="background-color: #A21608;">
                    Back
                </a>
                <button type="submit" class="btn btn-outline-primary">Update</button>   
            </div>
        </form>
    </div>
</div>
</x-app-layout>
