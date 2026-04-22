<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', [
            'items' => $products,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name123' => 'required',
            'price123' => 'required',
        ]);

        Product::create([
            'name' => $request->name123,
            'price' => $request->price123,
            'category_id' => $request->category_id ?: null,
        ]);

        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', [
            'item' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name123' => 'required',
            'price123' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name123,
            'price' => $request->price123,
            'category_id' => $request->category_id ?: null,
        ]);

        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products');
    }
}
