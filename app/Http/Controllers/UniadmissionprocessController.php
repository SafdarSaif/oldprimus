<?php

namespace App\Http\Controllers;

use App\Models\Uniadmissionprocess;
use Illuminate\Http\Request;

class UniadmissionprocessController extends Controller
{
    public function index()
    {
        $Uniadmissionprocess = Uniadmissionprocess::all();
        return view('admin.content.university.unicontent.admissionprocess', compact('Uniadmissionprocess'));
    }

    public function create(Request $request){
        $validated = $request->validate([
            'university_id'=> 'required|string',
            'content'=> 'required|string',
        ]);

        try {
            $Uniadmissionprocess = new Uniadmissionprocess;
            $Uniadmissionprocess->university_id = $validated['university_id'];
            $Uniadmissionprocess->content = $validated['content'];

            
            $Uniadmissionprocess->save();
            return ['status'=>'200', 'msg'=>'Uniadmissionprocess Created successfully!'];

        } catch (\Exception $e) {
            return response()->json(['status'=>$e, 'msg'=>$Uniadmissionprocess]);
        }
    }

    public function edit($Uniadmissionprocess)
    {
      $Uniadmissionprocess = Uniadmissionprocess::findOrFail($Uniadmissionprocess);
      return view('forms.admissionprocess.edit',compact('Uniadmissionprocess'));
    }


    public function update($Uniadmissionprocess_id, Request $request)
    {
    $validated = $request->validate([
        'university_id'=> 'required|string',
        'content'=> 'required|string',
  ]);

      try {
        $Uniadmissionprocess = Uniadmissionprocess::findOrFail($Uniadmissionprocess_id);
        $Uniadmissionprocess->university_id = $validated['university_id'];
        $Uniadmissionprocess->content = $validated['content'];
      $Uniadmissionprocess->save();
      return ['status'=>'200', 'msg'=>'Uniadmissionprocess Updated successfully!'];
    
      } catch (\Exception $e) {
          return response()->json(['status'=>$e, 'msg'=>$Uniadmissionprocess]);
      }
}
public function destroy($id){
    $Uniadmissionprocess = Uniadmissionprocess::find($id);
    $Uniadmissionprocess->delete($id);
    return ['status'=>'200', 'msg'=>'content deleted successfully!'];
  }
}
