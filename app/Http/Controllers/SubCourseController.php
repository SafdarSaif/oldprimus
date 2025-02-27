<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SubCourse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SubCourseController extends Controller
{
    
    public function index()
    {
        $subcourses = SubCourse::all();
        return view('admin.content.subcourse.index', compact('subcourses'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('admin.content.subcourse.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|string',
            'name' => 'required|string',
            'url'  => 'required|string',
            'duration'  => 'required|string',
            'average_fee'  => 'required|string',
            'short_content'  => 'required|string',
            'description'  => 'required|string',
            'content'  => 'required|string',
            'image'=>'required|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
        ]);
        try {
            $courses = new SubCourse;
            $courses->course_id = $validated['course_id'];
            $courses->name = $validated['name'];
            $courses->url = $validated['url'];
            $courses->duration = $validated['duration'];
            $courses->average_fee = $validated['average_fee'];
            $courses->short_content = $validated['short_content'];
            $courses->description = $validated['description'];
            $courses->content = $validated['content'];
            $courses->slug = Str::slug($validated['url']);

            if($request->file('image')){
                $file = $request->file('image');
                $name = time().$file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path().'/new-assets/img/', $name);
                $courses->image = 'new-assets/img/'. $name;
            }

            $courses->save();
            return ['status'=>'200', 'msg'=>'Subcourses Added successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    public function edit($subcourse)
    {

        $subcourse = SubCourse::findOrFail($subcourse);
        $courses = Course::all();
        return view('admin.content.subcourse.edit', compact('courses','subcourse'));
    }


    public function update(Request $request, SubCourse $subcourse)
    {
        $validated = $request->validate([
            'course_id' => 'required|string',
            'name' => 'required|string',
            'url'  => 'required|string',
            'duration'  => 'required|string',
            'average_fee'  => 'required|string',
            'short_content'  => 'required|string',
            'description'  => 'required|string',
            'content'  => 'required|string',
            'image'=>'image|mimes:jpg,jpeg,png,webp,svg|max:1048',
        ]);
        try {
            $subcourse->course_id = $validated['course_id'];
            $subcourse->name = $validated['name'];
            $subcourse->url = $validated['url'];
            $subcourse->duration = $validated['duration'];
            $subcourse->average_fee = $validated['average_fee'];
            $subcourse->short_content = $validated['short_content'];
            $subcourse->description = $validated['description'];
            $subcourse->content = $validated['content'];
            $subcourse->slug = Str::slug($validated['url']);

            if($request->file('image')){
                $file = $request->file('image');
                $name = time().$file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path().'/new-assets/img/', $name);
                $subcourse->image = 'new-assets/img/'. $name;
            }
            else{
                $subcourse->image= $subcourse->image;
            }

            $subcourse->save();
            return ['status'=>'200', 'msg'=>'subcourse Update successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }
  
   public function show($category, $course_name , $subcourse_name){
        $subcourse = Course::select('courses.*','sub_courses.*')->leftJoin('courses','courses.id', '=', 'sub_courses.course_id')
                             ->where('courses.category_id',$category)
                             ->first();
     dd($subcourse);
        return view('front.content.subcourses.details', compact('subcourse'));
      }

    
}
