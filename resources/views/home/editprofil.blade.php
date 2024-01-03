<x-app-layout>
    @extends('layouts.css')

<div class="form-group">
    <label for="profile_image">Profile Image</label>
    <input type="file" id="profile_image" name="profile_image">
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>
</div>

<div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan', auth()->user()->jurusan) }}">
</div>

</x-app-layout>