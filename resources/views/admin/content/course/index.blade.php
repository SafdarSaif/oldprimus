@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Courses</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Courses</li>
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
                            <th>Category</th>
                            <th>Program</th>
                           <th>Image</th>
                           <th>Name</th>
                           <th>Duration</th>
                           <th>Avg Fee</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($courses ?? '' as $index => $course)
                        <tr>
                        <td>
                            @php $categorys = DB::select("select category_name from categories where id = $course->category_id") @endphp
                            @foreach($categorys as $category)
                                <span>{{ $category->category_name }}</span>
                                @endforeach

                        </td>
                        <td>
                            @php $programs = DB::select("select program from programs where id = $course->program_id") @endphp
                            @foreach($programs as $program)
                                <span>{{ $program->program }}</span>
                                @endforeach

                        </td>
                           <td><img src="/{{$course->image}}" width="60px;"></td>
                           <td>{{$course->course_name}}</td>
                           <td>{{$course->duration}}</td>
                           <td>{{$course->average_fee}}</td>
                           <td class="text-end">
                            <a href="#" onclick="assign('{{ $course->id }}', 'course');"   class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Assign</a>
                            <a href="{{ route('course.edit',$course->id) }}"   class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> </a>
                            <a href="javascript:void(0);" onclick="destroy('{{ $course->id }}', 'course');" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i></a>
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
<script>
    function assign(id){
     $.ajax({
             url:'/admin/course/assign/'+id,
             success: function(data){
                 $('#add_modal_content').html(data);
                 $('#add_modal').modal('show');
             }
         })
     }
</script>
@endsection
