@extends('products.layout.app')

@section('main')
    <div class="container">
        <h2>Edit Existing Product #{{$product->firstname }}</h2>
        <form action="/products/{{ $product -> id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="Category" value="{{ old('Category',$product-> Category)}}" >
                    <option name= "CD" value="cd" id="Category">CD</option>
                    <option name="Book" value="book" id= "Category" >BOOK</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title',$product-> title)}}" placeholder="Title" >
                @if($errors->has('title'))
                {{  $errors->first('title') }}
                @endif
            </div>
            <div class="form-group">
                 <label for="firstname">First name </label>
                <input type="text" id="firstname" name="firstname" value="{{ old('firstname',$product-> firstname)}}" placeholder="Firstname">
                @if($errors->has('firstname'))
                {{  $errors->first('firstname') }}
                @endif
            </div>
    
            <div class="form-group">
                <label for="surname">Surname/Band</label>
                <input type="text" id="surname" name="surname" value="{{ old('surname',$product-> surname)}}"  placeholder="Surname/Band" >
                @if($errors->has('surname'))
                {{  $errors->first('surname') }}
                @endif
            </div>
    
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="{{ old('price',$product-> price)}}"  placeholder="Price" >
                @if($errors->has('price'))
                {{  $errors->first('price') }}
                @endif
            </div>
    
            <div class="form-group">
                <label for="length">Length/Number of pages</label>
                <input type="number" id="length" name="length" value="{{ old('length',$product-> length)}}"  placeholder="Pages/Playlength">
                @if($errors->has('price'))
                {{  $errors->first('price') }}
                @endif
            </div>
    
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" value="{{ old('image',$product-> image)}}"  name="image">
                @if($errors->has('image'))
                {{  $errors->first('image') }}
                @endif
            </div>
    
            <button type="submit" class="btn-submit">Update Product</button>
        </form>
    </div>

    <footer>
        <p>Account Role: Admin</p>
    </footer>
@endsection
