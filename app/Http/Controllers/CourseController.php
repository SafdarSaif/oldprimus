<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Program;
use App\Models\Category;
use App\Models\Assign;
use App\Models\Coursefaq;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.content.course.index', compact('courses'));
    }


    public function assign($course_id)
    {
        $universities = University::all();
        $assignedIds = Assign::where('course_id', $course_id)->pluck('college_id')->toArray();
        return view('admin.content.course.assign', compact('assignedIds','universities','course_id'));
    }

    public function getSubcategories($categoryId)
    {
        $subcategories = Program::where('category_id', $categoryId)->get(['id', 'program'])->toArray();
        return $subcategories;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $cats = Category::all();
        $programs = Program::all();
        return view('admin.content.course.create', compact('courses','cats','programs'));
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
            'category_id' => 'required|string',
            'program_id' => 'required|string',
            'course_name' => 'required|string',
            'url'  => 'required|string',
            'duration'  => 'required|string',
            'average_fee'  => 'required|string',
            'short_content'  => 'required|string',
            'description'  => 'required|string',
            'content'  => 'required|string',
            'image'=>'required|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
        ]);
        try {
            $courses = new Course;
            $courses->category_id = $validated['category_id'];
            $courses->program_id = $validated['program_id'];
            $courses->course_name = $validated['course_name'];
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
            return ['status'=>'200', 'msg'=>'courses Added successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
        public function show($category, $course_name){
        $coursesmba = Course::where('courses.slug', $course_name)
                            ->where('categories.slug', 'like', $category)
                            ->leftJoin('categories', 'categories.id', '=', 'courses.category_id')
                            ->first([
                              'courses.course_name',
                              'courses.duration',
                              'courses.average_fee',
                              'courses.short_content',
                              'courses.description',
                              'courses.content',
                              'courses.image',
                              'courses.id'
                            ]);
        $assignedCollegeIds = Assign::where('course_id', $coursesmba->id)->pluck('college_id')->toArray();
        
        $universities = University::whereIn('id', $assignedCollegeIds)->get(['logo','name','slug','banner_content']);

        $unicourses = University::orderBy('id','DESC')->take(4)->get();
        $consideruniversits = University::get();
        // $coursefaq=Coursefaq::all();
        $coursefaq = Coursefaq::Where('course_id',$coursesmba->id)->get();
        return view('front.content.courses.details', compact('coursesmba','unicourses','universities','consideruniversits','coursefaq'));
      }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($course)
    {

        $courses = Course::findOrFail($course);
        $cats = Category::all();
        $programs = Program::all();
        return view('admin.content.course.edit', compact('courses','cats','programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'category_id' => 'required|string',
            'program_id' => 'required|string',
            'course_name' => 'required|string',
            'url'  => 'required|string',
            'duration'  => 'required|string',
            'average_fee'  => 'required|string',
            'short_content'  => 'required|string',
            'description'  => 'required|string',
            'content'  => 'required|string',
            'image'=>'image|mimes:jpg,jpeg,png,webp,svg|max:1048',
        ]);
        try {
            $course->category_id = $validated['category_id'];
            $course->program_id = $validated['program_id'];
            $course->course_name = $validated['course_name'];
            $course->url = $validated['url'];
            $course->duration = $validated['duration'];
            $course->average_fee = $validated['average_fee'];
            $course->short_content = $validated['short_content'];
            $course->description = $validated['description'];
            $course->content = $validated['content'];
            $course->slug = Str::slug($validated['url']);

            if($request->file('image')){
                $file = $request->file('image');
                $name = time().$file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path().'/new-assets/img/', $name);
                $course->image = 'new-assets/img/'. $name;
            }
            else{
                $course->image= $course->image;
            }

            $course->save();
            return ['status'=>'200', 'msg'=>'courses Added successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        {
            try {
                $course->deleteOrFail();
                return ['status'=>200, 'message'=>'course deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status'=>$e, 'message'=>$e->getMessage()]);
            }
        }
    }
}
