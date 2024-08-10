<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photo.index', compact('photos'));
    }
    public function store(Request $request){
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $photoPath = '';
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('photos', $filename, 'public');
            $photoPath = 'storage/photos/' . $filename;
        }
        Photo::create([
            'photo' => $photoPath,
        ]);
        return redirect()->route('photos.index');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $photo = Photo::findOrFail($id);

        // Eski rasmni o'chirish va yangi rasmni yuklash
        if ($request->hasFile('photo')) {
            if ($photo->photo) {
                Storage::disk('public')->delete(str_replace('storage/', '', $photo->photo));
            }

            // Yangi rasmni yuklash
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('photos', $filename, 'public');
            $photoPath = 'storage/photos/' . $filename;
        } else {
            $photoPath = $photo->photo;
        }
        Photo::update([
            'photo' => $photoPath,
        ]);
        return redirect()->route('admin.photo.index');
    }

    public function destroy($id){
        $photo=Photo::findOrFail($id);
        Storage::disk('public')->delete(str_replace('storage/', '', $photo->photo));
        $photo->delete();
        return redirect()->route('photos.index');
    }
}
