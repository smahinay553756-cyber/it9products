<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
    <h1>Edit Product</h1>
        <form action="/products/{{ $item->id }}" method="POST" class="product-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <LABEL>Name:</LABEL>
                <input type="text" name="name123" value="{{ $item->name }}">
            </div>

            <div class="form-group">
                <LABEL>Price:</LABEL>
                <input type="text" name="price123" value="{{ $item->price }}">
            </div>

            <div class="form-group">
                <label>Category:</label>
                <select name="category_id">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <button type = "submit" class="btn-submit">Update</button>
        </form>

        <br>
        <a href="/products" class="btn-submit" style="font-display=">Back</a>
    </div>
    
</body>
</html>