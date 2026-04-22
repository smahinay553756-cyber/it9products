<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
  <h1>Categories</h1>

  <form action="/categories123" method="POST" class="product-form">
    @csrf
    <div class="form-group">
      <label for="category_name123">Category Name:</label>
      <input type="text" id="category_name123" name="category_name123">
    </div>
    <button type="submit" class="btn-submit">Save</button>
  </form>

  <hr>

  <table class="product-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->category_name }}</td>
        <td>
          <a href="/categories/{{ $item->id }}/edit">Edit</a>
          <form action="/categories/{{ $item->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
