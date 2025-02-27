<?php

namespace App\Http\Controllers;

use App\Models\Blogfaq;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogfaqController extends Controller
{
    public function blogfaq()
    {
        $blogfaqs = Blogfaq::with('blog')->get();
        $blogs = Blog::all();
        return view('admin.content.blogs.blogfaq', compact('blogfaqs', 'blogs'));
    }

    
    public function create(Request $request){
        $validated = $request->validate([
            'blog_id'=> 'required|string',
            'question'=> 'required|string',
            'answer'=> 'required|string',
        ]);

        try {
            $Blogfaq = new Blogfaq;
            $Blogfaq->blog_id = $validated['blog_id'];
            $Blogfaq->question = $validated['question'];
            $Blogfaq->answer = $validated['answer'];


            $Blogfaq->save();
            return ['status'=>'200', 'msg'=>'blogfaq Created successfully!'];

        } catch (\Exception $e) {
            return response()->json(['status'=>$e, 'msg'=>$Blogfaq]);
        }
    }


    public function edit($blogfaqId){
        $blogfaq = Blogfaq::findOrFail($blogfaqId);
        $blogs = Blog::all();
        return view('forms.blogfaq.editblog', compact('blogfaq','blogs'));
    }



    public function update($blogfaqId, Request $request)
    {
        $validated = $request->validate([
            'blog_id' => 'required|string',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        try {
            $blogfaq = Blogfaq::findOrFail($blogfaqId);
            $blogfaq->blog_id = $validated['blog_id'];
            $blogfaq->question = $validated['question'];
            $blogfaq->answer = $validated['answer'];

            $blogfaq->save();
            return ['status' => '200', 'msg' => 'blogfaq Updated successfully!'];
        } catch (\Exception $e) {
            return response()->json(['status' => '500', 'msg' => $e->getMessage()]);
        }
    }
      

    public function destroy($id){
        $blogfaq = Blogfaq::find($id);
        $blogfaq->delete($id);
        return ['status'=>'200', 'msg'=>'content deleted successfully!'];
      }
    


}
