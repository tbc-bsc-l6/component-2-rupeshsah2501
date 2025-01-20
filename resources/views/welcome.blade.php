<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Layout</title>
    {{-- <link rel="stylesheet" href="{{asset('Css/home.css')}}"> --}}

</head>
<body>
        <nav class="navbar">
            <a href="/" class="nav-link">Home</a>
            <a href="/"class="nav-link">Products</a>
            <a href="products/create" class="nav-link">AddProduct</a>
            <a href="Admin/login" class="nav-link">Login</a>
            <a href="#" class="nav-link">Register</a>
        </nav>

    <div class="container">
        <div class="filter">
            <select>
                <option>Price Ascending</option>
                <option>Price Descending</option>
                <option>Name Ascending</option>
                <option>Name Descending</option>
                <option>CD</option>
                <option>BOOK</option>
            </select>
            <button>Submit</button>
        </div>

        <div class="grid">
            {{-- @foreach (products as product) --}}
            <div class="card">
                {{-- <img src="products/{{ $product ->image }}" alt="Product"> --}}
                {{-- <h3>{{$product->firstname}}</h3> --}}
                {{-- <p>{{$product->Category}}</p> --}}
                {{-- <p>{{$product->surname}}</p> --}}
                {{-- <p>{{$product->price}}</p> --}}
                <button>Select</button>
                
            </div>
            {{-- @endforeach --}}
            {{-- <div class="card">
                <img src="https://via.placeholder.com/100" alt="Product">
                <h3>illo</h3>
                <p>CD</p>
                <p>Jonathan Cook</p>
                <p>&pound;598.26</p>
                <button>Select</button>
            </div> --}}

            
        </div>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">&raquo;</a>
        </div>
    </div>

    <footer>
        <p>Account Role: Admin</p>
    </footer>
</body>
</html>
-->