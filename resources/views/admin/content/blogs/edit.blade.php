

@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Update Blog</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Update blog</li>
             </ul>
          </div>
       </div>
    </div>
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form" action="{{ route('blog.update', $blog->id) }}" method="post" id="common_form_university" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control" name="image">
                                            <span><img src="/{{$blog->image}}" style="width:100px;"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" value="{{$blog->name}}" placeholder=" Name" name="name" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">description</label>
                                            <textarea class="form-control" name="description" required>{{$blog->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Content</label>
                                            <textarea class="form-control" name="content" id="content" required>{{$blog->content}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end col -->


                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
      <!-- end row-->
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
                    toastr.success(data.msg);
                    setTimeout(() => {
                        window.location.href= '/admin/blog';
                    }, 2000);
                }else{
                    toastr.error(data.errors);
                }
            }
        });
        e.preventDefault();
    });
});
</script>
@endsection
