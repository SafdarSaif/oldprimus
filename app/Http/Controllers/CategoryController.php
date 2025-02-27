<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categorys = Category::all();
        return view('admin.content.category.index', compact('Categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categorys = Category::all();
        // return view('admin.content.category.edit', compact('categorys'));
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
             'category_name' => 'required|string',
         ]);
         try {
             $category = new Category;
             $category->category_name = $validated['category_name'];
             $category->slug = Str::slug($validated['category_name']);

             $category->save();
             return ['status'=>'200', 'msg'=>'category saved successfully!'];

         } catch (\Exception $e) {

             return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
         }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $categorys = Category::findOrFail($category);
        return view('admin.content.category.edit', compact('categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => 'required|string',
        ]);
        try {
            $category->category_name = $validated['category_name'];
            $category->slug = Str::slug($validated['category_name']);

            $category->save();
            return ['status'=>'200', 'msg'=>'category Update successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        {
            try {
                $category->deleteOrFail();
                return ['status'=>200, 'message'=>'category deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status'=>$e, 'message'=>$e->getMessage()]);
            }
        }
    }
}
