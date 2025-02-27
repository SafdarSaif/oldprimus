

@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Add Course</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">add course</li>
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
                            <form class="form" action="{{ route('course.store') }}" method="post" id="common_form_university" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Select Course Category</label>
                                            <select class="form-control" name="category_id" id="category">
                                                <option disabled value="" selected>Choose a Category</option>
                                                @foreach ($cats as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Select Course program</label>
                                            <select class="form-control" name="program_id" id="subcategory">
                                                <option disabled value="" selected>Choose a Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">course name</label>
                                            <input type="text" class="form-control" placeholder="Course Name" name="course_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">url</label>
                                            <input type="text" class="form-control" placeholder="City" name="url" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">duration</label>
                                            <input type="text" class="form-control" name="duration" placeholder="Country" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">average_fee</label>
                                            <input type="text" class="form-control" name="average_fee" placeholder="Company" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">image</label>
                                            <input type="file" class="form-control" name="image" placeholder="Company" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">short_content</label>
                                            <textarea class="form-control" name="short_content" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">description</label>
                                            <textarea class="form-control" name="description" placeholder=""></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">content</label>
                                            <textarea class="form-control " id="content" name="content" placeholder=""></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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
