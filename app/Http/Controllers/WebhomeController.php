<?php

namespace App\Http\Controllers;
use App\Models\University;
use App\Models\Course;


class WebhomeController extends Controller
{
    public function webindex()
    {
        $courses = Course::orderBy('id','DESC')->take(10)->get();
        $webuniversities = University::where('status','1')->get();
        $secwebuniversities = University::orderBy('id','DESC')->get();
        return view('front.content.index', compact('webuniversities','courses','secwebuniversities'));
    }
}
