

@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Update Course</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">update course</li>
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
                            <form class="form" action="{{ route('course.update', $courses->id) }}" method="post" id="common_form_university" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Select Category</label>
                                            <select class="form-control" name="category_id" id="category">
                                                <option disabled value="" selected>Choose a Category</option>
                                                @foreach ($cats as $cat)
                                                <option value="{{ $cat->id }}" @if($cat->id==$courses->category_id) selected @endif>{{ $cat->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Select Course program</label>
                                            <select class="form-control" name="program_id" id="subcategory">
                                                <option disabled value="" selected>Choose a Category</option>
                                                @foreach ($programs as $program)
                                                <option value="{{$program->id}}" @if($program->id==$courses->program_id) selected @endif>{{$program->program}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Course name</label>
                                            <input type="text" class="form-control" placeholder="Course Name" name="course_name" value="{{$courses->course_name}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">url</label>
                                            <input type="text" class="form-control" placeholder="City" name="url" value="{{$courses->url}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Duration</label>
                                            <input type="text" class="form-control" name="duration" placeholder="Country" value="{{$courses->duration}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Average Marks</label>
                                            <input type="text" class="form-control" name="average_fee" placeholder="Company" value="{{$courses->average_fee}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control mb-3" name="image" placeholder="Company">
                                            <span><img src="/{{$courses->image}}" style="width:100px;"> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Short content</label>
                                            <textarea class="form-control" name="short_content" placeholder="">{{$courses->short_content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" placeholder="">{{$courses->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Content</label>
                                            <textarea class="form-control" id="content" name="content" placeholder="">{{$courses->content}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#category').change(function() {
            var categoryId = $(this).val();
            if (categoryId) {
                $.ajax({
                    url: '/get-subcategories/' + categoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('#subcategory').empty();
                        $('#subcategory').append('<option value="">Select a subcategory</option>');
                        $.each(data, function(key, value) {
                            $('#subcategory').append('<option value="' + value['id'] + '">' + value['program'] + '</option>');
                        });
                    }
                });
            } else {
                $('#subcategory').empty();
            }
        });
    });
</script>
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
                        window.location.href= '/admin/course';
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
