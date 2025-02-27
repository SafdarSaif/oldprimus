

@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Update SubCourse</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">update SubCourse</li>
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
                            <form class="form" action="{{ route('subcourse.update', $subcourse->id) }}" method="post" id="common_form_university" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Select Course</label>
                                            <select class="form-control" name="course_id" id="course_id">
                                                <option disabled value="" selected>Choose a course</option>
                                                @foreach ($courses as $course)
                                                <option value="{{ $course->id }}" @if($course->id==$subcourse->course_id) selected @endif>{{ $course->course_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Sub Course name</label>
                                            <input type="text" class="form-control" placeholder="Course Name" name="name" value="{{$subcourse->name}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">url</label>
                                            <input type="text" class="form-control" placeholder="City" name="url" value="{{$subcourse->url}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Duration</label>
                                            <input type="text" class="form-control" name="duration" placeholder="Country" value="{{$subcourse->duration}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Average Marks</label>
                                            <input type="text" class="form-control" name="average_fee" placeholder="Company" value="{{$subcourse->average_fee}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control mb-3" name="image" placeholder="Company">
                                            <span><img src="/{{$subcourse->image}}" style="width:100px;"> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Short content</label>
                                            <textarea class="form-control" name="short_content" placeholder="">{{$subcourse->short_content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" placeholder="">{{$subcourse->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Content</label>
                                            <textarea class="form-control" id="content" name="content" placeholder="">{{$subcourse->content}}</textarea>
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
                        window.location.href= '/admin/subcourse';
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
