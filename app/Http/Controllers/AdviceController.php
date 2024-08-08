<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdviceController extends Controller
{
    public function index()
    {
        $advices = Advice::latest()->paginate(8);
        return view('admin.advice.index', compact('advices'));
    }

    public function create()
    {
        return view('admin.advice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $filename);
        }

        Advice::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $filename,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('advices.index')->with('success', 'Blog post created successfully.');
    }


    public function show($id)
    {
        $advice = Advice::findOrFail($id);
        return view('admin.advice.show', compact('advice'));
    }


    public function edit($id)
    {
        $advice = Advice::findOrFail($id);
        return view('admin.advice.edit', compact('advice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Advice::findOrFail($id);

        if ($request->hasFile('photo')) {
            if ($blog->photo) {
                Storage::delete('public/uploads/' . $blog->photo);
            }
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $filename);
            $blog->photo = $filename;
        }

        $blog->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('advices.index')->with('success', 'Advices post updated successfully.');
    }

    public function destroy($id)
    {
        $advice = Advice::findOrFail($id);

        if ($advice->photos) {
            foreach ($advice->photos as $photo) {
                $oldFilePath = public_path('uploads/' . $photo);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
        }

        $advice->delete();
        return redirect()->route('advices.index')->with('success', 'Advice deleted successfully.');
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
