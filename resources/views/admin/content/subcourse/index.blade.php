@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Sub Courses</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Sub Courses</li>
             </ul>
          </div>
       </div>
    </div>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <table class="table table-center table-hover datatable">
                     <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Sub Course</th>
                           <th>Image</th>
                           <th>Duration</th>
                           <th>Avg Fee</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($subcourses ?? '' as $index => $subcourse)
                        <tr>
                        <td>
                            @php $courses = DB::select("select course_name from courses where id = $subcourse->course_id") @endphp
                            @foreach($courses as $course)
                                <span>{{ $course->course_name }}</span>
                                @endforeach

                        </td>
                        <td>{{$subcourse->name}}</td>
                           <td><img src="/{{$subcourse->image}}" width="60px;"></td>
                           <td>{{$subcourse->duration}}</td>
                           <td>{{$subcourse->average_fee}}</td>
                           <td class="text-end">
                            <a href="{{ route('subcourse.edit',$subcourse->id) }}"   class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> </a>
                            <a href="javascript:void(0);" onclick="destroy('{{ $subcourse->id }}', 'subcourse');" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i></a>
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
               <!-- end card body-->
            </div>
            <!-- end card -->
         </div>
         <!-- end col-->
      </div>
      <!-- end row-->
   </div>
   <!-- container -->
<!-- content -->
@endsection
@section('scripts')

@endsection
