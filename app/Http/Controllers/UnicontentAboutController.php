<?php

namespace App\Http\Controllers;

use App\Models\UnicontentAbout;
use Illuminate\Http\Request;

class UnicontentAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UnicontentAbouts = UnicontentAbout::all();
        return view('admin.content.university.unicontent.about', compact('UnicontentAbouts'));
    }

    public function create(Request $request){
        $validated = $request->validate([
            'university_id'=> 'required|string',
            'facts'=> 'required|string',
            'content'=> 'required|string',
        ]);

        try {
            $UnicontentAbout = new UnicontentAbout;
            $UnicontentAbout->university_id = $validated['university_id'];
            $UnicontentAbout->facts = $validated['facts'];
            $UnicontentAbout->content = $validated['content'];

            
            $UnicontentAbout->save();
            return ['status'=>'200', 'msg'=>'UnicontentAbout Created successfully!'];

        } catch (\Exception $e) {
            return response()->json(['status'=>$e, 'msg'=>$UnicontentAbout]);
        }

    }

    public function edit($UnicontentAbout)
    {
      $UnicontentAbout = UnicontentAbout::findOrFail($UnicontentAbout);
      return view('forms.uniabout.edit',compact('UnicontentAbout'));
    }


    public function update($UnicontentAbout_id, Request $request)
    {
    $validated = $request->validate([
        'university_id'=> 'required|string',
        'facts'=> 'required|string',
        'content'=> 'required|string',
  ]);

      try {
        $UnicontentAbout = UnicontentAbout::findOrFail($UnicontentAbout_id);
        $UnicontentAbout->university_id = $validated['university_id'];
        $UnicontentAbout->facts = $validated['facts'];
        $UnicontentAbout->content = $validated['content'];
      $UnicontentAbout->save();
      return ['status'=>'200', 'msg'=>'UnicontentAbout Updated successfully!'];
    
      } catch (\Exception $e) {
          return response()->json(['status'=>$e, 'msg'=>$UnicontentAbout]);
      }
}
public function destroy($id){
    $UnicontentAbout = UnicontentAbout::find($id);
    $UnicontentAbout->delete($id);
    return ['status'=>'200', 'msg'=>'content deleted successfully!'];
  }
}
