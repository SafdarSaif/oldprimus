<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function store(Request $request)
    {
        try {
                if(!empty($request->course_id)){
                    
                    // Delete Previous Record
                    Assign::where('course_id',$request->course_id)->delete();

                    // Assign
                    foreach($request->college_id as $id){
                        $depart = new Assign;
                        $depart->college_id = $id;
                        $depart->course_id = $request->course_id;
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
