<?php

namespace App\Http\Controllers;

use App\Models\UniversityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UniversityCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UniversityCategorys = UniversityCategory::all();
        return view('admin.content.university.unicatgory.universitycategory', compact('UniversityCategorys'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'uni_category_name' => 'required|string',
        ]);
        try {
            $unicategory = new UniversityCategory;
            $unicategory->uni_category_name = $validated['uni_category_name'];
            $unicategory->slug = Str::slug($validated['uni_category_name']);

            $unicategory->save();
            return ['status'=>'200', 'msg'=>'unicategory saved successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }


    public function edit($universityCategory)
    {
        $unicategory = UniversityCategory::findOrFail($universityCategory);
        return view('admin.content.university.unicatgory.edit', compact('unicategory'));
    }


    public function update(Request $request, UniversityCategory $unicategory)
    {
        $validated = $request->validate([
            'uni_category_name' => 'required|string',
        ]);
        try {
            $unicategory->uni_category_name = $validated['uni_category_name'];
            $unicategory->slug = Str::slug($validated['uni_category_name']);

            $unicategory->save();
            return ['status'=>'200', 'msg'=>'unicategory Update successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }


    public function destroy(UniversityCategory $universityCategory)
    {
        {
            try {
                $universityCategory->deleteOrFail();
                return ['status'=>200, 'message'=>'unicategory deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status'=>$e, 'message'=>$e->getMessage()]);
            }
        }
    }
}
