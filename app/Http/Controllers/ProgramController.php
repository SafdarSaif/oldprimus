<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs= Program::all();
        $Categorys = Category::all();

        return view('admin.content.program.index', compact('programs','Categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|string',
            'program' => 'required|string',
        ]);
        try {
            $Program = new Program;
            $Program->category_id = $validated['category_id'];
            $Program->program = $validated['program'];
            $Program->slug = Str::slug($validated['program']);

            $Program->save();
            return ['status'=>'200', 'msg'=>'program saved successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($Program)
    {
        $programs = Program::findOrFail($Program);
        $Categorys= Category::all();
        return view('admin.content.program.edit', compact('programs','Categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $Program)
    {
        $validated = $request->validate([
            'category_id' => 'required|string',
            'program' => 'required|string',
        ]);
        try {
            $Program->program = $validated['program'];
            $Program->category_id = $validated['category_id'];
            $Program->slug = Str::slug($validated['program']);

            $Program->save();
            return ['status'=>'200', 'msg'=>'Program Update successfully!'];

        } catch (\Exception $e) {

            return response()->json(['status'=>$e, 'msg'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        {
            try {
                $program->deleteOrFail();
                return ['status'=>200, 'message'=>'program deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status'=>$e, 'message'=>$e->getMessage()]);
            }
        }
    }
}
