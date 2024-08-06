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
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileNames = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/uploads', $filename);
                $fileNames[] = $filename;
            }
        }

        Advice::create([
            'title' => $request->title,
            'photos' => $fileNames,
            'description' => $request->description,
        ]);

        return redirect()->route('advices.index')->with('success', 'Advice created successfully.');
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
            'title' => 'required',
            'description' => 'required',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $advice = Advice::findOrFail($id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('photos')) {
            $fileNames = [];
            foreach ($request->file('photos') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/uploads', $filename);
                $fileNames[] = $filename;
            }
            $data['photos'] = $fileNames;
        }

        $advice->update($data);

        return redirect()->route('advices.index')->with('success', 'Advice updated successfully.');

    public function advice_page(){
        $advices = Advice::latest()->paginate(12);
        return view('front.advice.index', compact('advices'));

    }
    public  function advice_details_page($id)
    {
        $advice=Advice::findOrFail($id);
        return view('front.advice.show', compact('advice'));
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
}
