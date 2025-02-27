<?php

namespace App\Http\Controllers;

use App\Models\Blogtype;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blogtypes = Blogtype::all();
        return view('admin.content.blogs.blogtype', compact('Blogtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'type' => 'required|string',
        ]);
        try {
            $Blogtype = new Blogtype;
            $Blogtype->type = $validated['type'];
            $Blogtype->slug = Str::slug($validated['type']);

            $Blogtype->save();
            return ['status'=>'200', 'msg'=>'Blogtype saved successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogtype  $blogtype
     * @return \Illuminate\Http\Response
     */
    public function show(Blogtype $blogtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogtype  $blogtype
     * @return \Illuminate\Http\Response
     */
    public function edit($blogtype)
    {
        $blogtype = Blogtype::findOrFail($blogtype);
        return view('admin.content.blogs.blogtypeedit', compact('blogtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogtype  $blogtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogtype $blogtype)
    {
        $validated = $request->validate([
            'type' => 'required|string',
        ]);
        try {
            $blogtype->type = $validated['type'];
            $blogtype->slug = Str::slug($validated['type']);

            $blogtype->save();
            return ['status'=>'200', 'msg'=>'category Update successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogtype  $blogtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogtype $blogtype)
    {
        {
            try {
                $blogtype->deleteOrFail();
                return ['status'=>200, 'message'=>'category deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status'=>$e, 'message'=>$e->getMessage()]);
            }
        }
    }
}
