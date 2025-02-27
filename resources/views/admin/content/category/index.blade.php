@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
   <!-- Start Content-->
   <div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Course Category</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">course category</li>
             </ul>
          </div>
       </div>
    </div>
      <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{ route('category.store') }}" method="post" id="common_form_university" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Add Category</label>
                            <input type="text" class="form-control" name="category_name" placeholder="category" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Update</button>
                        </div>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-center table-hover datatable">
                     <thead>
                        <tr>
                           <th>Course Category</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($Categorys ?? '' as $index => $Category)
                        <tr>
                           <td>{{$Category->category_name}}</td>
                           <td class="text-end">
                            <a href="#" onclick="edit('{{ $Category->id }}', 'category');"   class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a>
                            <a href="javascript:void(0);" onclick="destroy('{{ $Category->id }}', 'category');" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
   </div>
   <!-- container -->
<!-- content -->
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
