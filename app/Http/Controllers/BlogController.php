<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(8);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
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
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('photos')) {
            $fileNames = [];
            foreach ($request->file('photos') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/uploads', $filename);
                $fileNames[] = $filename;
            }

            Blog::create([
                'title_uz' => $request->title_uz,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'photos' => $fileNames, // Avtomatik ravishda JSON formatga o'giradi
                'description_uz' => $request->description_uz,
                'description_ru' => $request->description_ru,
                'description_en' => $request->description_en,
            ]);

            return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
        } else {
            return redirect()->back()->withErrors(['photos' => 'Failed to upload photos.']);
        }
    }


    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
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
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $blog = Blog::findOrFail($id);

        $fileNames = $blog->photos ?? [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/uploads', $filename);
                $fileNames[] = $filename;
            }
        }

        $blog->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photos' => $fileNames, // Avtomatik ravishda JSON formatga o'giradi
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->photo) {
            $oldFilePath = public_path('uploads/' . $blog->photo);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }

    public function blogs_page()
    {
        $blogs = Blog::latest()->paginate(12);
        return view('front.blog.index', compact('blogs'));
    }
    public function blog_details_page($id)
    {
        $blog=Blog::findOrFail($id);
        return view('front.blog.show', compact('blog'));

    }

}
