@extends('products.layout.app')
@section('main')
    <div class="container">
        <div class="grid">
            @foreach ($products as $product)
                <div class="card">
                    <img src="/products/{{ $product->image }}" alt="Product">
                    <h3>{{ $product->firstname }}</h3>
                    <p>{{ $product->Category }}</p>
                    <p>{{ $product->surname }}</p>
                    <p>{{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </div>    
    <footer>
        <p>Account Role: Admin</p>
    </footer>
@endsection
