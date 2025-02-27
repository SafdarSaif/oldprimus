<?php

namespace App\Http\Controllers;

use App\Models\Unifaq;
use Illuminate\Http\Request;

class UnifaqController extends Controller
{
    public function index()
    {
        $Unifaqs = Unifaq::all();
        return view('admin.content.university.unicontent.faq', compact('Unifaqs'));
    }

    public function create(Request $request){
        $validated = $request->validate([
            'university_id'=> 'required|string',
            'question'=> 'required|string',
            'answer'=> 'required|string',
        ]);

        try {
            $Unifaq = new Unifaq;
            $Unifaq->university_id = $validated['university_id'];
            $Unifaq->question = $validated['question'];
            $Unifaq->answer = $validated['answer'];

            
            $Unifaq->save();
            return ['status'=>'200', 'msg'=>'Unifaq Created successfully!'];

        } catch (\Exception $e) {
            return response()->json(['status'=>$e, 'msg'=>$Unifaq]);
        }

    }

    public function edit($Unifaq)
    {
      $Unifaq = Unifaq::findOrFail($Unifaq);
      return view('forms.Unifaq.edit',compact('Unifaq'));
    }


    public function update($Unifaq_id, Request $request)
    {
    $validated = $request->validate([
        'university_id'=> 'required|string',
        'question'=> 'required|string',
            'answer'=> 'required|string',
  ]);

      try {
        $Unifaq = Unifaq::findOrFail($Unifaq_id);
        $Unifaq->university_id = $validated['university_id'];
        $Unifaq->question = $validated['question'];
            $Unifaq->answer = $validated['answer'];
      $Unifaq->save();
      return ['status'=>'200', 'msg'=>'Unifaq Updated successfully!'];
    
      } catch (\Exception $e) {
          return response()->json(['status'=>$e, 'msg'=>$Unifaq]);
      }
}
public function destroy($id){
    $Unifaq = Unifaq::find($id);
    $Unifaq->delete($id);
    return ['status'=>'200', 'msg'=>'content deleted successfully!'];
  }
}
