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
                <li class="breadcrumb-item active">Course FAQ</li>
             </ul>
          </div>
          <div class="col-auto">
             <a href="#" onclick="add_coursefaq();"  class="btn btn-primary me-1">
             <i class="fas fa-plus"></i>
             </a>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
           <div class="card card-table">
              <div class="card-body">
                 <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                     <thead class="thead-light">
                        <tr>
                            <th>Course Name</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coursefaqs as $coursefaq)
                        <tr>
                            <td>  
                                                       
                              <span>{{ $coursefaq->course ? $coursefaq->course->course_name : 'Course data is not selected' }}</span>
         
                            </td>
                            <td>{!! substr($coursefaq->question, 0, 40).'...' !!}</td>
                            <td>{!! substr($coursefaq->answer, 0, 40).'...' !!}</td>
                            <td class="text-end">
                                <a href="#" onclick="edit_coursefaq('{{ $coursefaq->id }}');" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i>Edit</a>
                                <a href="javascript:void(0);" onclick="deletecoursefaq({{$coursefaq->id}});" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>
 </div>
@endsection
@section('scripts')


<script>

    function add_coursefaq(){
    $.ajax({
            url:'{{ route("create_coursefaq") }}',
            success: function(data){
                $('#lg_add_modal_content').html(data);
                $('#lg_add_modal').modal('show');
            }
        })
    }

    function edit_coursefaq(id){
    $.ajax({
            url:'/edit_coursefaq/'+id,
            success: function(data){
                $('#lg_add_modal_content').html(data);
                $('#lg_add_modal').modal('show');
            }
        })
    }

    </script>


  <script>
    function deletecoursefaq(id){
      Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
                url:'/deletecoursefaq/'+id,
                success: function(data){
                  if(data.status==200){
                    Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )
                    setTimeout(() => {
                          window.location.reload();
                      }, 1000);
                  }else{
                    Swal.fire(
                        'Oops!',
                        'Something went wrong.',
                        'error'
                      )
                  }
                }
            })
      
    }
  })
    }
  </script>
@endsection
