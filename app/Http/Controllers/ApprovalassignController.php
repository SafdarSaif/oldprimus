<?php

namespace App\Http\Controllers;

use App\Models\Approvalassign;
use Illuminate\Http\Request;

class ApprovalassignController extends Controller
{
    public function store(Request $request)
    {
        try {
                if(!empty($request->approval_id)){
                    
                    // Delete Previous Record
                    Approvalassign::where('approval_id',$request->approval_id)->delete();

                    // Assign
                    foreach($request->college_id as $id){
                        $depart = new Approvalassign;
                        $depart->college_id = $id;
                        $depart->approval_id = $request->approval_id;
                        $depart->save();
                    }
                    return ['status'=>true, 'msg'=>'Assigned successfully!'];
                }else{
                    return ['status'=>false, 'msg'=>'Mandatory field missing!'];
                }

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }
}
