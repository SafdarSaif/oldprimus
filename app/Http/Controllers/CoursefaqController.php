<?php

namespace App\Http\Controllers;

use App\Models\Coursefaq;
use App\Models\Course;

use Illuminate\Http\Request;


class CoursefaqController extends Controller
{


    public function coursefaq()
    {
        // Fetch coursefaqs with the course relationship eagerly loaded
        $coursefaqs = Coursefaq::with('course')->get();
        // debug
        // echo "<pre>";
        // print_r($coursefaqs); die;
        $courses = Course::all();
        return view('admin.content.course.coursefaq', compact('coursefaqs','courses'));
    }
  

    public function create(Request $request){
        $validated = $request->validate([
            'course_id'=> 'required|interger',
            'question'=> 'required|string',
            'answer'=> 'required|string',
        ]);

        try {
            $Coursefaq = new Coursefaq;
            $Coursefaq->course_id = $validated['course_id'];
            $Coursefaq->question = $validated['question'];
            $Coursefaq->answer = $validated['answer'];


            $Coursefaq->save();
            return ['status'=>'200', 'msg'=>'coursefaq Created successfully!'];

        } catch (\Exception $e) {
            return response()->json(['status'=>$e, 'msg'=>$Coursefaq]);
        }
    }

    // Logic for edit and update 



    public function edit($coursefaqId){
            $coursefaq = Coursefaq::findOrFail($coursefaqId);
            $courses = Course::all();
            return view('forms.coursefaq.edit', compact('coursefaq','courses'));
        }

        public function update($coursefaqId, Request $request)
        {
            $validated = $request->validate([
                'course_id' => 'required|integer',
                'question' => 'required|string',
                'answer' => 'required|string',
            ]);

            try {
                $coursefaq = Coursefaq::findOrFail($coursefaqId);
                $coursefaq->course_id = $validated['course_id'];
                $coursefaq->question = $validated['question'];
                $coursefaq->answer = $validated['answer'];

                $coursefaq->save();
                return ['status' => '200', 'msg' => 'Coursefaq Updated successfully!'];
            } catch (\Exception $e) {
                return response()->json(['status' => '500', 'msg' => $e->getMessage()]);
            }
        }


  

    public function destroy($id){
        $coursefaq = Coursefaq::find($id);
        $coursefaq->delete($id);
        return ['status'=>'200', 'msg'=>'content deleted successfully!'];
      }
    

}
