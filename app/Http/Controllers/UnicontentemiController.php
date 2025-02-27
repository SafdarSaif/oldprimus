<?php

namespace App\Http\Controllers;

use App\Models\Unicontentemi;
use Illuminate\Http\Request;

class UnicontentemiController extends Controller
{
    public function index()
    {
        $Unicontentemis = Unicontentemi::all();
        return view('admin.content.university.unicontent.emi', compact('Unicontentemis'));
    }

    public function create(Request $request){
        $validated = $request->validate([
            'university_id'=> 'required|string',
            'para'=> 'required|string',
        ]);

        try {
            $Unicontentemi = new Unicontentemi;
            $Unicontentemi->university_id = $validated['university_id'];
            $Unicontentemi->para = $validated['para'];
            $Unicontentemi->content = $request->content;

            
            $Unicontentemi->save();
            return ['status'=>'200', 'msg'=>'Unicontentemi Created successfully!'];

        } catch (\Exception $e) {
            return response()->json(['status'=>$e, 'msg'=>$Unicontentemi]);
        }

    }

    public function edit($Unicontentemi)
    {
      $Unicontentemi = Unicontentemi::findOrFail($Unicontentemi);
      return view('forms.unicontentemi.edit',compact('Unicontentemi'));
    }


    public function update($Unicontentemi_id, Request $request)
    {
    $validated = $request->validate([
        'university_id'=> 'required|string',
        'para'=> 'required|string',
  ]);

      try {
        $Unicontentemi = Unicontentemi::findOrFail($Unicontentemi_id);
        $Unicontentemi->university_id = $validated['university_id'];
        $Unicontentemi->para = $validated['para'];
        $Unicontentemi->content = $request->content;
      $Unicontentemi->save();
      return ['status'=>'200', 'msg'=>'Unicontentemi Updated successfully!'];
    
      } catch (\Exception $e) {
          return response()->json(['status'=>$e, 'msg'=>$Unicontentemi]);
      }
}
public function destroy($id){
    $Unicontentemi = Unicontentemi::find($id);
    $Unicontentemi->delete($id);
    return ['status'=>'200', 'msg'=>'content deleted successfully!'];
  }
}
