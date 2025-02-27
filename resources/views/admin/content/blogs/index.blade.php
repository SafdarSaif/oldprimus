@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Blogs</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Blog category</li>
             </ul>
          </div>
          <div class="col-auto">
             <a href="/admin/blog/create" class="btn btn-primary me-1">
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
                           <th>S.N</th>
                            <th>Name</th>
                            <th>Image</th>
                           <th class="text-end">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($Blogs ?? '' as $index => $Blog)
                        <tr>
                           <td>{{$index+1}} </td>
                           <td>{{$Blog->name}}</td>
                           <td><img src="/{{$Blog->image}}" style="width:100px;"></td>
                           <td class="text-end">
                            <a href="{{ route('blog.edit',$Blog->id) }}"    class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a>
                            <a href="javascript:void(0);" onclick="destroy('{{ $Blog->id }}', 'blog');" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
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
    $(function(){
    $("#common_form_university").on("submit", function(e){
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            url: this.action,
            type: 'post',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(data) {
                if(data.status=='200'){
                    $('.modal').modal('hide');
                    toastr.success(data.message);
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }else{
                    toastr.error(data.message);
                }
            }
        });
        e.preventDefault();
    });
});
</script>
@endsection
