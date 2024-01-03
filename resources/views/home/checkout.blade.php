@extends('layouts.css')
<x-app-layout>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Check Out</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwA=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <!-- Bagian kiri (Deliver to dan Ordered Items) -->
                <div class="col-md-6">
                    <h3 class="card2 mt-4 mb-3">Check Out</h3>
                    <!-- Deliver to Card -->
                    <div class="card">
                        <div class="card-header">Deliver to</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Michael Knight</b></h5>
                            <p class="card-text">123 Main Street Anytown, CA 12345</p>
                            <button class="btn btn-danger">Change</button>
                        </div>
                    </div>

                    <!-- Ordered Items Card -->
                    <div class="card mt-3">
                        <div class="card-header">Ordered Items</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Picture</th>
                                        <th>Product</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($selectedProducts as $product)
                                        <tr>
                                            <td><img src="{{ asset('storage/uploads/' . $product->picture) }}"
                                                    alt="Product Image" width="50"></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Bagian kanan (Payment Method dan Summary) -->
                <div class="col-md-6 mt-5">
                    <!-- Payment Method Card -->
                    <div class="card">
                        <div class="card-header">Payment Method</div>
                        <div class="card-body">
                            <div class="form-group">
                                <p>Select a payment method</p>
                                <select class="form-control" id="payment-method">
                                    <option value="cash-on-delivery">Cash on Delivery</option>
                                    <option value="credit-card">Credit Card</option>
                                    <option value="debit-card">Debit Card</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Summary Card -->
                    <div class="card mt-3">
                        <div class="card-header">Summary</div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Total Order</td>
                                        <td></td>
                                        <!-- Tampilkan total harga semua produk -->
                                        <td>IDR {{ number_format($selectedProducts->sum('price'), 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Pembayaran Berhasil</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Pembayaran Anda berhasil.
                    </div>
                    <div class="modal-footer">
                        <a href="index.html" type="button" class="btn btn-danger">Back to Home</a>
                        <a href="/account" type="button" class="btn btn-danger">Show Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>