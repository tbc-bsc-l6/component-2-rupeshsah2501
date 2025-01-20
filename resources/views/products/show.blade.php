@extends('products.layout.app')
@section('main')
    <div class="container">
        <div class="grid">
            <div class="card">
            <img src="/products/{{ $product->image }}"  height="200px" width="200px" alt="Product">
            <p>First Name : {{ $product->firstname }}<p>
            <p>Category:{{ $product->Category }}</p>
            <p>Title:{{ $product->title }}</p>
            <p>Surname:{{ $product->surname }}</p>
            <p>Price{{ $product->price }}</p>
            <p>length:{{ $product->length }}</p>
            </div>
        </div>
    </div>
    <footer>
        <p>Account Role: Admin</p>
    </footer>
@endsection
