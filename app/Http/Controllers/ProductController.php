<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(1); // 10 items per page
        return view('admin.products.index', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required',
            'percentage' => 'required',
            'category_id' => 'required|numeric',
            'description_uz' => 'nullable',
            'description_ru' => 'nullable',
            'description_en' => 'nullable',
        ]);

        $photoPath = '';
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('photos', $filename, 'public');
            $photoPath = 'storage/photos/' . $filename;
        }

        Product::create([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'photo' => $photoPath,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'percentage' => $request->percentage,
            'category_id' => $request->category_id,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required',
            'percentage' => 'required',
            'category_id' => 'required|numeric',
            'description_uz' => 'nullable',
            'description_ru' => 'nullable',
            'description_en' => 'nullable',
        ]);


        $product = Product::findOrFail($id);

        // Eski rasmni o'chirish va yangi rasmni yuklash
        if ($request->hasFile('photo')) {
            if ($product->photo) {
                Storage::disk('public')->delete(str_replace('storage/', '', $product->photo));
            }

            // Yangi rasmni yuklash
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('photos', $filename, 'public');
            $photoPath = 'storage/photos/' . $filename;
        } else {
            $photoPath = $product->photo;
        }

        $product->update([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'photo' => $photoPath,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'percentage' => $request->percentage,
            'category_id' => $request->category_id,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function product_page()
    {
        $products = Product::latest()->paginate(1); // 10 items per page
        return view('front.product.index', compact('products'));
    }

    public function product_details_page($id)
    {
        $product = Product::findOrFail($id);
        return view('front.product.show', compact('product'));
    }
}
