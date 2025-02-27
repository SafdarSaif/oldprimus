@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">University</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">University Approvals</li>
             </ul>
          </div>
          <div class="col-auto">
             <a href="#" onclick="add_uniapproval();"  class="btn btn-primary me-1">
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
                            <th>Approval logo</th>
                           <th>alt tag</th>
                           <th>Assign</th>
                           <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($UnicontentApprovals ?? '' as $index => $UnicontentApproval)
                        <tr>
                            <td><img src="/{{$UnicontentApproval->image}}" ></td>
                            <td>{{$UnicontentApproval->alttag}}</td>
                           <td><a href="#" onclick="uniapprovalassign('{{ $UnicontentApproval->id }}');">Assign</a></td>
                           <td class="text-end">
                            <a href="#" onclick="edit_uniapproval('{{ $UnicontentApproval->id }}');"  class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> </a>
                            <a href="javascript:void(0);" onclick="deleteapproval({{$UnicontentApproval->id}});" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i></a>
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
    function uniapprovalassign(id){
    $.ajax({
            url:'/uniapprovalassign/'+id,
            success: function(data){
                $('#add_modal_content').html(data);
                $('#add_modal').modal('show');
            }
        })
    }
</script>

<script>

    function add_uniapproval(){
    $.ajax({
            url:'/create_uniapproval',
            success: function(data){
                $('#add_modal_content').html(data);
                $('#add_modal').modal('show');
            }
        })
    }

    function edit_uniapproval(id){
    $.ajax({
            url:'/edit_uniapproval/'+id,
            success: function(data){
                $('#add_modal_content').html(data);
                $('#add_modal').modal('show');
            }
        })
    }

    </script>


  <script>
    function deleteapproval(id){
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
                url:'/deleteapproval/'+id,
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
