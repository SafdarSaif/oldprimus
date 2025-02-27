<?php

namespace App\Http\Controllers;

use App\Models\UnicontentApproval;
use App\Models\University;
use App\Models\Approvalassign;
use Illuminate\Http\Request;

class UnicontentApprovalController extends Controller
{
    public function index()
    {
        $UnicontentApprovals = UnicontentApproval::all();
        return view('admin.content.university.unicontent.approval', compact('UnicontentApprovals'));
    }

    public function create(Request $request){
        $validated = $request->validate([
            'image'=>'required|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
        ]);

        try {
            $UnicontentApproval = new UnicontentApproval;
            $UnicontentApproval->alttag = $request->alttag;
            if($request->file('image')){
                $file = $request->file('image');
                $name = time().$file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path().'/new-assets/img/', $name);
                $UnicontentApproval->image = 'new-assets/img/'. $name;
            }

            
            $UnicontentApproval->save();
            return ['status'=>'200', 'msg'=>'UnicontentApproval Created successfully!'];

        } catch (\Exception $e) {
            return response()->json(['status'=>$e, 'msg'=>$UnicontentApproval]);
        }

    }

    public function edit($UnicontentApproval)
    {
      $UnicontentApproval = UnicontentApproval::findOrFail($UnicontentApproval);
      return view('forms.uniapproval.edit',compact('UnicontentApproval'));
    }


    public function update($UnicontentApproval_id, Request $request)
    {
    $validated = $request->validate([
        'image'=>'image|mimes:jpg,jpeg,png,webp,svg|max:1048',

  ]);

      try {
        $UnicontentApproval = UnicontentApproval::findOrFail($UnicontentApproval_id);
        $UnicontentApproval->alttag = $request->alttag;
        if($request->file('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $image['filePath'] = $name;
            $file->move(public_path().'/new-assets/img/', $name);
            $UnicontentApproval->image = 'new-assets/img/'. $name;
        }
        else{
            $UnicontentApproval->image= $UnicontentApproval->image;


        }
        $UnicontentApproval->save();

      return ['status'=>'200', 'msg'=>'UnicontentApproval Updated successfully!'];
    
      } catch (\Exception $e) {
          return response()->json(['status'=>$e, 'msg'=>$UnicontentApproval]);
      }
}
public function destroy($id){
    $UnicontentApproval = UnicontentApproval::find($id);
    $UnicontentApproval->delete($id);
    return ['status'=>'200', 'msg'=>'content deleted successfully!'];
  }

  public function uniapprovalassign($approval_id)
  {
      $universities = University::all();
      $assignedIds = Approvalassign::where('approval_id', $approval_id)->pluck('college_id')->toArray();
      return view('admin.content.university.unicontent.approvalassign', compact('assignedIds','universities','approval_id'));
  }
}
