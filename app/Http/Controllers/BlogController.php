<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
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
                'title' => $request->title,
                'photos' => $fileNames, // Avtomatik ravishda JSON formatga o'giradi
                'description' => $request->description,
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
            'title' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        $data = [
            'title' => $request['title'],
            'description' => $request['description'],
        ];

        if ($request->hasFile('photo')) {
            if ($blog->photo && file_exists(public_path('uploads/' . $blog->photo))) {
                unlink(public_path('uploads/' . $blog->photo));
            }

            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);

            $data['photo'] = $filename;
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
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
