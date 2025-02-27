<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\University;
use App\Models\Blogfaq;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blogs = Blog::all();
        return view('admin.content.blogs.index', compact('Blogs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Blogs = Blog::all();
        return view('admin.content.blogs.create', compact('Blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
        ]);
        try {
            $Universitys = new Blog;
            $Universitys->type_id = $request->type_id;
            $Universitys->name = $validated['name'];
            $Universitys->description = $validated['description'];
            $Universitys->content = $validated['content'];
            $Universitys->slug = Str::slug($validated['name']);

            if ($request->file('image')) {
                $file = $request->file('image');
                $name = time() . $file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path() . '/new-assets/img/', $name);
                $Universitys->image = 'new-assets/img/' . $name;
            }

            $Universitys->save();
            return ['status' => '200', 'msg' => 'Blog Added successfully!'];
        } catch (\Exception $e) {

            return response()->json(['status' => $e, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function miniindex()
    {
        $Blogs = Blog::orderBy('id', 'DESC')->get();
        return view('front.content.blog.index', compact('Blogs'));
    }



    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        $consideruniversits = University::get();
        $blogfaq = Blogfaq::Where('blog_id', $blog->id)->get();
        return view('front.content.blog.details', compact('blog', 'blogs', 'consideruniversits', 'blogfaq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        $blog = Blog::findOrFail($blog);
        return view('admin.content.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'image|mimes:jpg,jpeg,png,webp,svg|max:1048',
        ]);
        try {
            $blog->type_id = $request->type_id;
            $blog->name = $validated['name'];
            $blog->description = $validated['description'];
            $blog->content = $validated['content'];
            $blog->slug = Str::slug($validated['name']);

            if ($request->file('image')) {
                $file = $request->file('image');
                $name = time() . $file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path() . '/new-assets/img/', $name);
                $blog->image = 'new-assets/img/' . $name;
            } else {
                $blog->image = $blog->image;
            }

            $blog->save();

            return response()->json(['status' => '200', 'msg' => 'blog Updated successfully!']);
        } catch (\Exception $e) {

            return response()->json(['status' => $e, 'msg' => $e->getMessage()]);
        }
    }

    public function destroy(Blog $blog)
    { {
            try {
                $blog->deleteOrFail();
                return ['status' => 200, 'message' => 'Blog deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status' => $e, 'message' => $e->getMessage()]);
            }
        }
    }
}
