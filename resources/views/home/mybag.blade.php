@extends('layouts.css')
<x-app-layout>

    <div class="container" style="margin-top: 100px">
        <h3 class="mt-5">My Bag</h3>

        <div class="row">
            <div class="col-md-9">
                <form method="post" action="{{ route('checkout') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-2">
                            <!-- Checkbox "Select All" -->
                            <input class="form-check-input custom-checkbox" type="checkbox" id="selectAllCheckbox">
                            <label class="form-check-label" for="selectAllCheckbox">Select All</label>
                        </div>
                    </div>

                    @forelse ($products as $key => $product)
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <input class="form-check-input custom-checkbox" type="checkbox"
                                    name="selected_products[]" value="{{ $product->id }}"
                                    id="defaultCheck{{ $key }}">
                                <label class="form-check-label" for="defaultCheck{{ $key }}">
                                    <img src="{{ asset('storage/uploads/' . $product->picture) }}"
                                        alt="Gambar Checkbox">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <div class="desc">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-3 d-grid gap-2">
                                <div class="price">
                                    <h5>{{ $product->price }}</h5>
                                </div>
                                <div class="trash">
                                    <a href="{{ route('removeFromBag', ['product_id' => $product->id]) }}">
                                        <img src="{{ asset('build/assets/icon/trash.png') }}" alt="Remove from Bag">
                                    </a>
                                </div>
                            </div>

                        </div>
                    @empty
                        <p>Your bag is empty</p>
                    @endforelse

                    <div class="col-md-3 pt-5 ps-5">
                        <div class="checkout">
                            <h5>Bag Summary</h5>
                            <div class="col border border-dark p-2" id="total-item-container">
                                <h5>Total Item (0)</h5>
                            </div>
                            <!-- Tambahkan ID pada elemen untuk menampilkan total harga -->
                            <div class="idr" id="total-price">
                                <h5>IDR.0.00</h5>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">CHECK OUT</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const checkboxes = document.querySelectorAll('.custom-checkbox');
                const selectAllCheckbox = document.getElementById('selectAllCheckbox');
                const totalItemElement = document.querySelector('.checkout .col h5');
                const totalPriceElement = document.getElementById('total-price');
                let totalItem = 0;
                let totalPrice = 0;

                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        const isChecked = this.checked;
                        const productPriceElement = this.closest('.row').querySelector('.price h5');
                        const productQuantity = 1; // Replace this with the actual quantity

                        if (productPriceElement) {
                            const productPrice = parseFloat(productPriceElement.innerText);

                            if (isChecked) {
                                totalItem++;
                                totalPrice += productQuantity * productPrice;
                            } else {
                                totalItem = Math.max(totalItem - 1,
                                0); // Ensure totalItem is non-negative
                                totalPrice = Math.max(totalPrice - productQuantity * productPrice,
                                0); // Ensure totalPrice is non-negative
                            }

                            // Update total item and total price display
                            totalItemElement.innerText = `Total Item (${totalItem})`;
                            totalPriceElement.innerHTML = `<h5>IDR.${totalPrice.toFixed(2)}</h5>`;
                        }
                    });
                });

                // Add an event listener for the "Select All" checkbox
                selectAllCheckbox.addEventListener('change', function() {
                    checkboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });

                    // Update total item and total price based on checked checkboxes
                    checkboxes.forEach(checkbox => {
                        const isChecked = checkbox.checked;

                        const productPriceElement = checkbox.closest('.row').querySelector('.price h5');
                        const productQuantity = 1; // Replace this with the actual quantity

                        if (productPriceElement) {
                            const productPrice = parseFloat(productPriceElement.innerText);

                            if (isChecked) {
                                totalItem++;
                                totalPrice += productQuantity * productPrice;
                            } else {
                                totalItem = Math.max(totalItem - 1,
                                0); // Ensure totalItem is non-negative
                                totalPrice = Math.max(totalPrice - productQuantity * productPrice,
                                0); // Ensure totalPrice is non-negative
                            }
                        }
                    });

                    // Update total item and total price display
                    totalItemElement.innerText = `Total Item (${totalItem})`;
                    totalPriceElement.innerHTML = `<h5>IDR.${totalPrice.toFixed(2)}</h5>`;
                });

            });
        </script>
    </div>

</x-app-layout>
