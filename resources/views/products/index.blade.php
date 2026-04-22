<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">

  <h1>Products</h1>

  <form action="/products123" method="POST" class="product-form">
    @csrf
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name123">
    </div>
    <div class="form-group">
      <label>Price:</label>
      <input type="text" name="price123">
    </div>
    <div class="form-group">
      <label>Category:</label>
      <div style="display:flex; gap:8px; align-items:center; max-width:300px;">
        <select name="category_id" style="flex:1;">
          <option value="">-- Select Category --</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
        <button type="button" class="btn-submit" onclick="document.getElementById('add-category-box').style.display='block'">+</button>
      </div>
    </div>
    <button type="submit" class="btn-submit">Save</button>
  </form>

  {{-- Category add form is OUTSIDE the product form --}}
  <div id="add-category-box" style="display:none; margin-top:8px;">
    <form action="/categories123" method="POST" style="display:flex; gap:8px; align-items:center;">
      @csrf
      <input type="text" name="category_name123" placeholder="New category" style="padding:10px; border:1px solid #ccc; border-radius:5px; font-size:14px;">
      <button type="submit" class="btn-submit">Add</button>
    </form>
  </div>

  <hr>

  <table class="product-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->category->category_name ?? 'N/A' }}</td>
        <td>
          <a href="/products/{{ $item->id }}/edit">Edit</a>
          <form action="/products/{{ $item->id }}" method="POST" style="display:inline;">
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
