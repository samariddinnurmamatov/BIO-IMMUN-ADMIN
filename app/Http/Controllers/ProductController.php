<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products', 'categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric', // Changed to 'numeric'
            'quantity' => 'required|numeric', // Changed to 'numeric'
            'status' => 'required',
            'percentage' => 'required',
            'category_id' => 'required|numeric',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('photos', $filename, 'public');
            $photoPath = 'storage/photos/' . $filename;
        }

        Product::create([
            'name' => $request->name,
            'photo' => $photoPath,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'percentage' => $request->percentage,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Update an existing category
    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required',
            'percentage' => 'required',
            'category_id' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $data = $request->only(['name', 'price', 'quantity', 'status', 'percentage', 'category_id', 'description']);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('photos', $filename, 'public');
            $data['photo'] = 'storage/photos/' . $filename;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }



}
