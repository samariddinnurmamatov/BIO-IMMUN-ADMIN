<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use Illuminate\Http\Request;

class AdviceController extends Controller
{
    public function index()
    {
        $advices = Advice::all();
        return view('admin.advice.index', compact('advices'));
    }

    public function create()
    {
        return view('admin.advice.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal fayl o'lchamini 2MB qilib belgilash
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo'); // Faylni olish
            $filename = time() . '_' . $file->getClientOriginalName(); // Fayl nomini yaratish
            $file->storeAs('public/uploads', $filename); // Faylni saqlash

            // Advice modelini yaratish
            Advice::create([
                'title' => $request->title,
                'photo' => $filename, // Fayl nomini saqlash
                'description' => $request->description,
            ]);

            return redirect()->route('advices.index')->with('success', 'Advice created successfully.');
        } else {
            return redirect()->back()->withErrors(['photo' => 'Failed to upload photo.']);
        }
    }


    public function advice_page(){
        $advices = Advice::latest()->paginate(12);
        return view('front.advice.index', compact('advices'));
    }
    public  function advice_details_page($id)
    {
        $advice=Advice::findOrFail($id);
        return view('front.advice.show', compact('advice'));
    }

}
