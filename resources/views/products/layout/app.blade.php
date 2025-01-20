<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Layout</title>
    <link rel="stylesheet" href="{{ asset('Css/home.css') }}">

</head>

<body>
    <nav class="navbar">
        <a href="/products/home" class="nav-link">Home</a>
        <a href="/products/products"class="nav-link">Products</a>
        <a href="/products/create" class="nav-link">AddProduct</a>
        <a href="/" class="nav-link">Logout</a>
    </nav>
    @yield('main')

</body>

</html>
