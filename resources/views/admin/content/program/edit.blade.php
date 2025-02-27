<div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">Update Program</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form id="category_form" action="{{ route('program.update', $programs->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group pb-1">
                    <label for="heading">Select Course Category</label>
                    <select class="form-control" required name="category_id">
                        <option value="" disabled selected>Select Course Category</option>
                        @foreach ($Categorys as $Category)
                        <option value="{{ $Category->id }}" @if($Category->id==$programs->category_id) selected @endif>{{ $Category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group pb-1">
                    <label for="heading">Program</label>
                    <input type="text"  class="form-control" value="{{ $programs->program }}" name="program" placeholder="Choose the Right..." required/>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<script>
    $(function(){
    $("#category_form").on("submit", function(e){
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
                    // $('.modal').modal('hide');
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
