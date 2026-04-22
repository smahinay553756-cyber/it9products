<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Category</h1>
        <form action="/categories/{{ $item->id }}" method="POST" class="product-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Category Name:</label>
                <input type="text" name="category_name123" value="{{ $item->category_name }}">
            </div>
            <button type="submit" class="btn-submit">Update</button>
        </form>

        <br>
        <a href="/categories" class="btn-submit">Back</a>
    </div>
</body>
</html>
