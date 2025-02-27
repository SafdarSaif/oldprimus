<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UniversityCategoryController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubCourseController;

use App\Http\Controllers\BlogtypeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebhomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\AssignController;
use App\Http\Controllers\UnicontentAboutController;
use App\Http\Controllers\UnicontentApprovalController;
use App\Http\Controllers\ApprovalassignController;
use App\Http\Controllers\UnicontentcertificateController;
use App\Http\Controllers\UnicontentemiController;
use App\Http\Controllers\UniadmissionprocessController;
use App\Http\Controllers\UnifaqController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CoursefaqController;
use App\Http\Controllers\BlogfaqController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebhomeController::class, 'webindex'])->name('index');
Route::view('/about', 'front.content.about.about')->name('about');
Route::view('/online-payments', 'front.content.payments.payment')->name('online-payments');
Route::post('/add-payments', [PaymentController::class, 'phonePe'])->name('add-payments');
Route::any('phonepe-response', [PaymentController::class, 'response'])->name('response');
Route::view('/bosse', 'front.content.bosse')->name('bosse');
Route::view('/pay-online', 'front.content.phonepay.pay-online')->name('pay-online');
Route::view('/phonepay', 'front.content.phonepay.phonepay')->name('phonepay');
Route::view('/contact-us', 'front.content.contact')->name('contact-us');
Route::view('/practical/bed/first-year', 'front.content.courses.bed.first-year')->name('first-year');

// why primusvidya
Route::view('/why-primusvidya', 'front.content.primusvidya.why-primusvidya')->name('why-primusvidya');
Route::get('/universities', [UniversityController::class, 'uniindex'])->name('universities');
Route::get('course/{category}/{course_url}', [CourseController::class, 'show'])->name('{category}/{course_url}');
Route::get('course/{category}/{course_url}/{subcourse_url}', [SubCourseController::class, 'show'])->name('{category}/{course_url}/{subcourse_url}');
Route::get('/top-universities-colleges/{slug}', [UniversityController::class, 'show'])->name('university');
Route::view('/country/study-in-usa/', 'front.content.abroad.usa')->name('study-in-usa');
Route::view('/country/study-in-canada/', 'front.content.abroad.canada')->name('study-in-canada');
Route::view('/country/study-in-uk/', 'front.content.abroad.uk')->name('study-in-usa');
Route::view('/country/study-in-australia/', 'front.content.abroad.australia')->name('study-in-australia');
Route::view('/country/study-in-new-zealand/', 'front.content.abroad.new-zealand')->name('study-in-new-zealand');
Route::view('/country/study-in-ireland/', 'front.content.abroad.ireland')->name('study-in-ireland');

//blogs
Route::get('/blog', [BlogController::class, 'miniindex'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog');

//tools
Route::view('/tool', 'front.content.tool.index')->name('tool');
Route::view('/tool/age-calculator', 'front.content.tool.age-calculator')->name('age-calculator');
Route::view('/tool/emi-calculator', 'front.content.tool.emi-calculator')->name('emi-calculator');
Route::view('/tool/length-converter', 'front.content.tool.length-converter')->name('length-converter');
Route::view('/tool/weight-converter', 'front.content.tool.weight-converter')->name('weight-converter');
Route::view('/tool/percentage-calculator', 'front.content.tool.percentage-calculator')->name('percentage-calculator');
Route::view('/tool/percentage-cgpa-converter', 'front.content.tool.percentage-cgpa-converter')->name('percentage-cgpa-converter');
Route::view('/tool/bmi-calculator', 'front.content.tool.bmi-calculator')->name('bmi-calculator');
Route::view('/tool/image-resizer', 'front.content.tool.picture-resizer')->name('picture-resizer');

// Route::view('/blog', 'front.content.blog.index')->name('blog');
Route::view('/term-conditions', 'front.content.term.term-conditions')->name('term-conditions');
Route::view('/disclaimer', 'front.content.term.disclaimer')->name('disclaimer');

Route::post('add_lead', [LeadController::class, 'create'])->name('add_lead');

// Filter
Route::post('/filter', [UniversityController::class, 'filter'])->name('filter');
Route::get('/add-payments', [PaymentController::class, 'initiatePayment'])->name('add-payments');



Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
  Route::resource('roles', RoleController::class);
  Route::resource('users', UserController::class);
  Route::resource('products', ProductController::class);
  Route::resource('/admin/universitycategory', UniversityCategoryController::class);
  Route::resource('/admin/university', UniversityController::class);
  Route::post('changeStatus/{id}', [UniversityController::class, 'changeStatus'])->name('changeStatus');

  //university content about
  Route::get('/admin/unicontent/about', [UnicontentAboutController::class, 'index'])->name('unicontent/about');
  Route::view('create_uniabout', 'forms.uniabout.create')->name('create_uniabout');
  Route::post('add_uniabout', [UnicontentAboutController::class, 'create'])->name('add_uniabout');
  Route::get('edit_uniabout/{id}', [UnicontentAboutController::class, 'edit'])->name('edit_uniabout');
  Route::post('update_uniabout/{id}', [UnicontentAboutController::class, 'update'])->name('update_uniabout');
  Route::get('deleteuniabout/{id}', [UnicontentAboutController::class, 'destroy'])->name('deleteuniabout');

  //university content approvals
  Route::get('/admin/unicontent/approval', [UnicontentApprovalController::class, 'index'])->name('unicontent/about');
  Route::view('create_uniapproval', 'forms.uniapproval.create')->name('create_uniapproval');
  Route::post('add_uniapproval', [UnicontentApprovalController::class, 'create'])->name('add_uniapproval');
  Route::get('edit_uniapproval/{id}', [UnicontentApprovalController::class, 'edit'])->name('edit_uniapproval');
  Route::post('update_uniapproval/{id}', [UnicontentApprovalController::class, 'update'])->name('update_uniapproval');
  Route::get('deleteapproval/{id}', [UnicontentApprovalController::class, 'destroy'])->name('deleteapproval');

  //approvalassign
  Route::get('uniapprovalassign/{id}', [UnicontentApprovalController::class, 'uniapprovalassign'])->name('uniapprovalassign');
  Route::resource('/uniapprovalassign', ApprovalassignController::class);

  //university content certificate
  Route::get('/admin/unicontent/certificate', [UnicontentcertificateController::class, 'index'])->name('unicontent/certificate');
  Route::view('create_unicertificate', 'forms.unicertificate.create')->name('create_unicertificate');
  Route::post('add_unicertificate', [UnicontentcertificateController::class, 'create'])->name('add_unicertificate');
  Route::get('edit_unicertificate/{id}', [UnicontentcertificateController::class, 'edit'])->name('edit_unicertificate');
  Route::post('update_unicertificate/{id}', [UnicontentcertificateController::class, 'update'])->name('update_unicertificate');
  Route::get('deletecertificate/{id}', [UnicontentcertificateController::class, 'destroy'])->name('deletecertificate');


  //university content emi
  Route::get('/admin/unicontent/emi', [UnicontentemiController::class, 'index'])->name('admin/unicontent/emi');
  Route::view('create_uniemi', 'forms.unicontentemi.create')->name('create_uniemi');
  Route::post('add_uniemi', [UnicontentemiController::class, 'create'])->name('add_uniemi');
  Route::get('edit_uniemi/{id}', [UnicontentemiController::class, 'edit'])->name('edit_uniemi');
  Route::post('update_uniemi/{id}', [UnicontentemiController::class, 'update'])->name('update_uniemi');
  Route::get('deleteuniemi/{id}', [UnicontentemiController::class, 'destroy'])->name('deleteuniemi');

  //university content admission process
  Route::get('/admin/unicontent/admissionprocess', [UniadmissionprocessController::class, 'index'])->name('admin/unicontent/emi');
  Route::view('create_uniadmissionprocess', 'forms.admissionprocess.create')->name('create_uniadmissionprocess');
  Route::post('add_uniadmissionprocess', [UniadmissionprocessController::class, 'create'])->name('add_uniadmissionprocess');
  Route::get('edit_uniadmissionprocess/{id}', [UniadmissionprocessController::class, 'edit'])->name('edit_uniadmissionprocess');
  Route::post('update_uniadmissionprocess/{id}', [UniadmissionprocessController::class, 'update'])->name('update_uniadmissionprocess');
  Route::get('deleteuniadmissionprocess/{id}', [UniadmissionprocessController::class, 'destroy'])->name('deleteuniadmissionprocess');



  // FAQ university content admission process
  Route::get('/admin/unicontent/faq', [UnifaqController::class, 'index'])->name('admin/unicontent/emi');
  Route::view('create_unifaq', 'forms.unifaq.create')->name('create_unifaq');
  Route::post('add_unifaq', [UnifaqController::class, 'create'])->name('add_unifaq');
  Route::get('edit_unifaq/{id}', [UnifaqController::class, 'edit'])->name('edit_unifaq');
  Route::post('update_unifaq/{id}', [UnifaqController::class, 'update'])->name('update_unifaq');
  Route::get('deleteunifaq/{id}', [UnifaqController::class, 'destroy'])->name('deleteunifaq');

  Route::resource('/admin/program', ProgramController::class);
  Route::resource('/admin/category', CategoryController::class);
  Route::resource('/admin/course', CourseController::class);
  // Route::get('/get-subcategories/{categoryId}', 'CourseController@getSubcategories');
  Route::get('/get-subcategories/{categoryId}', [CourseController::class, 'getSubcategories'])->name('getSubcategories');

  Route::get('/admin/course/assign/{id}', [CourseController::class, 'assign'])->name('assign');
  Route::resource('/assign', AssignController::class);
  Route::resource('/admin/blogtype', BlogtypeController::class);
  Route::resource('/admin/blog', BlogController::class);
  Route::get('/admin/leads', [LeadController::class, 'index'])->name('lead-page');

  Route::resource('/admin/subcourse', SubCourseController::class);




  // Route::view('/admin/university', 'admin.content.university')->name('university');
  // courses FAQ

  Route::get('/admin/coursefaq', [CoursefaqController::class, 'coursefaq'])->name('coursefaq');
  Route::post('/add_coursefaq', [CoursefaqController::class, 'create'])->name('add_coursefaq');
  Route::view('/create_coursefaq', 'forms.coursefaq.create')->name('create_coursefaq');
  Route::get('edit_coursefaq/{id}', [CoursefaqController::class, 'edit'])->name('edit_coursefaq');
  Route::post('update_coursefaq/{id}', [CoursefaqController::class, 'update'])->name('update_coursefaq');
  Route::get('deletecoursefaq/{id}', [CoursefaqController::class, 'destroy'])->name('deletecoursefaq');
  // Route::get('/coursefaq', [CoursefaqController::class, 'show'])->name('coursefaq');

   // FAQ   FOR BLOGS 
   Route::get('/admin/blogfaq', [BlogfaqController::class, 'blogfaq'])->name('blogfaq');
   Route::view('/create_blogfaq', 'forms.blogfaq.createblog')->name('create_blogfaq');
   Route::post('/add_blogfaq', [BlogfaqController::class, 'create'])->name('add_blogfaq');
   Route::get('edit_blogfaq/{id}', [BlogfaqController::class, 'edit'])->name('edit_blogfaq');
   Route::post('update_blogfaq/{id}', [BlogfaqController::class, 'update'])->name('update_blogfaq');
   Route::get('deleteblogfaq/{id}', [BlogfaqController::class, 'destroy'])->name('deleteblogfaq');
 
  
   

});
