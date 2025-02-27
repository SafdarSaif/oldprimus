<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\UniversityCategory;
use App\Models\Course;
use App\Models\Assign;
use App\Models\UnicontentAbout;
use App\Models\Unicontentcertificate;
use App\Models\Unicontentemi;
use App\Models\Uniadmissionprocess;
use App\Models\Unifaq;
use App\Models\UnicontentApproval;
use App\Models\Approvalassign;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = University::all();
        return view('admin.content.university.index', compact('universities'));
    }

    public function changeStatus(Request $request)
    {
        $universitys = University::where('id', $request->university_id)->update(['status' => $request->status]);
        return response()->json(['success' => 'Status change successfully.']);
    }

    private function getApprovals($uniList)
    {
        $uniNameList = array();
        foreach ($uniList as $uni) {
            $uniNameList[] = $uni->name;
        }
        $appr = DB::table('universities')->leftJoin('approvalassigns', 'approvalassigns.college_id', '=', 'universities.id')
            ->leftJoin('unicontent_approvals', 'unicontent_approvals.id', '=', 'approvalassigns.approval_id')
            ->get();
        $appList = array();
        foreach ($uniNameList as $uniName) {
            $a = array();
            foreach ($appr as $ap) {
                if ($ap->name == $uniName) {
                    $a[] = $ap->alttag;
                }
            }
            $appList[] = $a;
        }
        return $appList;
    }

    public function uniindex()
    {
        $uniList = University::all();
        $appList = $this->getApprovals($uniList);
        $courseFilter = Course::all();
        $cats = Category::all();

        return view('front.content.university.university-list', compact('uniList', 'appList', 'courseFilter', 'cats'));
    }
    public function filter(Request $request)
    {

        if ($request->modOfStudy || $request->course || $request->price_range) {
            if ($request->modOfStudy) {
                $universites = University::where('university_type', $request->modOfStudy)->get();
                $appList = $this->getApprovals($universites);
            } else if ($request->course) {
                $ssign_courses = Assign::where('course_id', $request->course)->get();
                foreach ($ssign_courses as $course) {
                    $universites = University::where('university_type', $course->college_id)->get();
                    $appList = $this->getApprovals($universites);
                }
            } else if ($request->price_range) {
                $universites = University::where('avgFee', '<', $request->price_range)->get();
                $appList = $this->getApprovals($universites);
            }

            if (count($universites) > 0) {
                return view('front.content.university.ajax.get-university', compact('universites', 'appList'));
            } else {
                return view('front.content.university.ajax.get-no-university');
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universities = University::all();
        $Unicategorys = UniversityCategory::all();
        return view('admin.content.university.create', compact('universities', 'Unicategorys'));
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
            'university_type' => 'required|string',
            'name' => 'required|string',
            'location' => 'required|string',
            'state' => 'required|string',
            'avgFee' => 'required|numeric',
            'banner_content' => 'required|string',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
            'brochure' => 'image|mimes:jpg,jpeg,pdf,png,webp,svg|max:2048',
        ]);
        try {
            $Universitys = new University;
            $Universitys->university_type = $validated['university_type'];
            $Universitys->name = $validated['name'];
            $Universitys->location = $validated['location'];
            $Universitys->state = $validated['state'];
            $Universitys->avgFee = $validated['avgFee'];
            $Universitys->banner_content = $validated['banner_content'];
            $Universitys->slug = Str::slug($validated['name']);

            if ($request->file('logo')) {
                $file = $request->file('logo');
                $name = time() . $file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path() . '/new-assets/img/', $name);
                $Universitys->logo = 'new-assets/img/' . $name;
            }

            if ($request->file('brochure')) {
                $file = $request->file('brochure');
                $name = time() . $file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path() . '/new-assets/img/', $name);
                $Universitys->brochure = 'new-assets/img/' . $name;
            } else {
                $Universitys->brochure = $Universitys->brochure;
            }

            $Universitys->save();
            return ['status' => '200', 'msg' => 'University Added successfully!'];
        } catch (\Exception $e) {

            return response()->json(['status' => $e, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $universits = University::where('slug', $slug)->first();
        $uniabouts = UnicontentAbout::where('university_id', $universits->id)->take(1)->get();
        $unicertificates = Unicontentcertificate::where('university_id', $universits->id)->take(1)->get();
        $uniemis = Unicontentemi::where('university_id', $universits->id)->take(1)->get();
        $addprocess = Uniadmissionprocess::where('university_id', $universits->id)->take(1)->get();
        $Unifaqs = Unifaq::where('university_id', $universits->id)->get();
        $consideruniversits = University::all();
        // dd($consideruniversits);
        $assignedCourseIds = Assign::where('college_id', $universits->id)->pluck('course_id')->toArray();
        $course_count = count($assignedCourseIds);

        $UnicontentApproval = Approvalassign::where('college_id', $universits->id)->get();
        $aappimg = array();
        foreach ($UnicontentApproval as $Approval) {
            $appimag[] = UnicontentApproval::where('id', $Approval->approval_id)->get();
        }
        // dd($appimag);
        $courses = Course::whereIn('id', $assignedCourseIds)->get(['course_name', 'slug', 'duration', 'image', 'short_content', 'category_id']);
        return view('front.content.university.details', compact('universits', 'courses', 'uniabouts', 'unicertificates', 'uniemis', 'addprocess', 'Unifaqs', 'consideruniversits', 'UnicontentApproval', 'appimag', 'course_count'));
    }

    public function edit($university)
    {
        $universitys = University::findOrFail($university);
        $Unicategorys = UniversityCategory::all();

        return view('admin.content.university.edit', compact('universitys', 'Unicategorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        $validated = $request->validate([
            'university_type' => 'required|string',
            'name' => 'required|string',
            'location' => 'required|string',
            'state' => 'required|string',
            'avgFee' => 'required|numeric',
            'banner_content' => 'required|string',
            'logo' => 'image|mimes:jpg,jpeg,png,webp,svg|max:1048',
            'brochure' => 'image|mimes:jpg,jpeg,pdf,png,webp,svg|max:2048',
        ]);
        try {
            $university->university_type = $validated['university_type'];
            $university->name = $validated['name'];
            $university->location = $validated['location'];
            $university->state = $validated['state'];
            $university->avgFee = $validated['avgFee'];
            $university->banner_content = $validated['banner_content'];
            $university->slug = Str::slug($validated['name']);

            if ($request->file('logo')) {
                $file = $request->file('logo');
                $name = time() . $file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path() . '/new-assets/img/', $name);
                $university->logo = 'new-assets/img/' . $name;
            } else {
                $university->logo = $university->logo;
            }
            if ($request->file('brochure')) {
                $file = $request->file('brochure');
                $name = time() . $file->getClientOriginalName();
                $image['filePath'] = $name;
                $file->move(public_path() . '/new-assets/img/', $name);
                $university->brochure = 'new-assets/img/' . $name;
            } else {
                $university->brochure = $university->brochure;
            }

            $university->save();
            return ['status' => '200', 'msg' => 'University Update successfully!'];
        } catch (\Exception $e) {

            return response()->json(['status' => $e, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    { {
            try {
                $university->deleteOrFail();
                return ['status' => 200, 'message' => 'university deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status' => $e, 'message' => $e->getMessage()]);
            }
        }
    }
}
