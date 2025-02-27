<?php

namespace App\Http\Controllers;

use App\Models\Unicontentcertificate;
use Illuminate\Http\Request;

class UnicontentcertificateController extends Controller
{
    public function index(){
    $Unicontentcertificates = Unicontentcertificate::all();
    return view('admin.content.university.unicontent.certificate', compact('Unicontentcertificates'));
}

public function create(Request $request){
    $validated = $request->validate([
        'university_id'=> 'required|string',
        'para'=> 'required|string',
        'content'=> 'required|string',
        'image'=>'required|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
    ]);

    try {
        $Unicontentcertificate = new Unicontentcertificate;
        $Unicontentcertificate->university_id = $validated['university_id'];
        $Unicontentcertificate->para = $validated['para'];
        $Unicontentcertificate->content = $validated['content'];

        if($request->file('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $image['filePath'] = $name;
            $file->move(public_path().'/new-assets/img/', $name);
            $Unicontentcertificate->image = 'new-assets/img/'. $name;
        }

        $Unicontentcertificate->save();
        return ['status'=>'200', 'msg'=>'Unicontentcertificate Created successfully!'];

    } catch (\Exception $e) {
        return response()->json(['status'=>$e, 'msg'=>$Unicontentcertificate]);
    }

}

public function edit($Unicontentcertificate)
{
  $Unicontentcertificate = Unicontentcertificate::findOrFail($Unicontentcertificate);
  return view('forms.unicertificate.edit',compact('Unicontentcertificate'));
}


public function update($Unicontentcertificate_id, Request $request)
{
$validated = $request->validate([
    'university_id'=> 'required|string',
        'para'=> 'required|string',
        'content'=> 'required|string',
        'image'=>'image|mimes:jpg,jpeg,png,webp,svg|max:1048',

]);

  try {
    $Unicontentcertificate = Unicontentcertificate::findOrFail($Unicontentcertificate_id);
    $Unicontentcertificate->university_id = $validated['university_id'];
        $Unicontentcertificate->para = $validated['para'];
        $Unicontentcertificate->content = $validated['content'];
    if($request->file('image')){
        $file = $request->file('image');
        $name = time().$file->getClientOriginalName();
        $image['filePath'] = $name;
        $file->move(public_path().'/new-assets/img/', $name);
        $Unicontentcertificate->image = 'new-assets/img/'. $name;
    }
    else{
        $Unicontentcertificate->image= $Unicontentcertificate->image;


    }
    $Unicontentcertificate->save();

  return ['status'=>'200', 'msg'=>'Unicontentcertificate Updated successfully!'];

  } catch (\Exception $e) {
      return response()->json(['status'=>$e, 'msg'=>$Unicontentcertificate]);
  }
}
public function destroy($id){
$Unicontentcertificate = Unicontentcertificate::find($id);
$Unicontentcertificate->delete($id);
return ['status'=>'200', 'msg'=>'content deleted successfully!'];
}
}
