@extends('products.layout.app')

@section('main')
    <div class="container">
        <div class="grid">
            @foreach ($products as $product)
                <div class="card">
                    {{-- <a herf="products/{{ $product->id }}/edit"> --}}
                        <img src="/products/{{ $product->image }}" alt="Product">
                        <h3>First Name: {{ $product->firstname }}</h3>
                        <p>Category: {{ $product->Category }}</p>
                        <p>SurName: {{ $product->surname }}</p>
                        <p>Product Price: {{ $product->price }}</p>
                        <a href = "/products/{{ $product->id }}/edit">
                            <button class="green-button">Edit</button>
                        </a>
                        
                        <a href = "/products/{{ $product->id }}/delete">
                            <button class="red-button">Delete</button>
                        </a>
                        <a href = "/products/{{ $product->id }}/show">
                            <button class="blue-button">Show</button>
                        </a>
                    {{-- </a> --}}
                </div>
            @endforeach
        </div>

    </div>
    <footer>
        <p>Account Role: Admin</p>
    </footer>
@endsection