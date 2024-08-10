<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Say;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SayController extends Controller
{
   public function index()
   {
       $says=Say::latest()->paginate(4);
       return view('admin.say.index',compact('says'));
   }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position_uz' => 'required|string|max:255',
            'position_ru' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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

        Say::create([
            'name' => $request->name,
            'position_uz'=>$request->position_uz,
            'position_ru'=>$request->position_ru,
            'position_en'=>$request->position_en,
            'photo' => $photoPath,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('says.index')->with('success', 'Client created successfully.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position_uz' => 'required|string|max:255',
            'position_ru' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description_uz' => 'nullable',
            'description_ru' => 'nullable',
            'description_en' => 'nullable',
        ]);


        $say = Say::findOrFail($id);

        if ($request->hasFile('photo')) {
            if ($say->photo) {
                Storage::disk('public')->delete(str_replace('storage/', '', $say->photo));
            }

            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('photos', $filename, 'public');
            $photoPath = 'storage/photos/' . $filename;
        } else {
            $photoPath = $say->photo;
        }

        $say->update([
            'name' => $request->name,
            'position_uz'=>$request->position_uz,
            'position_ru'=>$request->position_ru,
            'position_en'=>$request->position_en,
            'photo' => $photoPath,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('says.index')->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
        $say=Say::findOrFail($id);
        $say->delete();
        return redirect()->route('says.index')->with('success', 'Client  deleted successfully.');
    }

}
