@extends('products.layout.app')
@section('main')
<div class="form-container">
    <h2>Add Product</h2>
    <form action="/products/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="Category">
                <option value="cd" {{ old('Category') == 'cd' ? 'selected' : '' }}>CD</option>
                <option value="book" {{ old('Category') == 'book' ? 'selected' : '' }}>BOOK</option>
            </select>
        </div>        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title')}}" placeholder="Title" required>
            @if($errors->has('title'))
            {{  $errors->first('title') }}
            @endif
        </div>

        <div class="form-group">
            <label for="firstname">First name </label>
            <input type="text" id="firstname" name="firstname" value="{{ old('firstname')}}" placeholder="Firstname">
            @if($errors->has('firstname'))
            {{  $errors->first('firstname') }}
            @endif
        </div>

        <div class="form-group">
            <label for="surname">Surname/Band</label>
            <input type="text" id="surname" name="surname" value="{{ old('surname')}}"  placeholder="Surname/Band" required>
            @if($errors->has('surname'))
            {{  $errors->first('surname') }}
            @endif
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" value="{{ old('price')}}"  placeholder="Price" required>
            @if($errors->has('price'))
            {{  $errors->first('price') }}
            @endif
        </div>

        <div class="form-group">
            <label for="length">Length/Number of pages</label>
            <input type="number" id="length" name="length" value="{{ old('length')}}"  placeholder="Pages/Playlength">
            @if($errors->has('price'))
            {{  $errors->first('price') }}
            @endif
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" value="{{ old('image')}}"  name="image" required>
            @if($errors->has('image'))
            {{  $errors->first('image') }}
            @endif
        </div>

        <button type="submit"   class="btn-submit">Add Product</button>
    </form>
</div>
<footer>
    <p>Account Role: Admin</p>
</footer>
@endsection