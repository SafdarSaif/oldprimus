<div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">Add University About</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
@php
       $colleges=DB::select("select * from universities order by id asc");

@endphp
<form action="/add_uniabout" method="post" id="add_banner" enctype="multipart/form-data" novalidate>
    @csrf
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">

            <div class="form-group row">
            <div class="col-md-12">
                <label for="basicInput">Select University/College</label>
                <select name="university_id" class="form-control">
                    <option value="" selected disabled>Select University/College</option>
                    @foreach ($colleges as $college)
                        <option value="{{$college->id}}">{{$college->name}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="basicInput">Facts</label>
                    <textarea id="facts" name="facts" cols="30" rows="5" class="form-control" placeholder="Content" required></textarea>
                    <p class="text-success">Use <span class="text-danger">@@@</span> in the end of break line</p>
                </div>
            </div>
            <div class="form-group row">
            <div class="col-md-12">
                <label for="basicInput">Content</label>
                <textarea id="content" name="content" cols="30" rows="5" class="form-control" placeholder="Content" required></textarea>
                <p class="text-success">Use <span class="text-danger">@@@</span> in the end of break line</p>
            </div>
        </div>    
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Add</button>
</div>
</form>

<script>
    $(function(){
    $("#add_banner").on("submit", function(e){
      e.preventDefault();
        var formData = new FormData(this);
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
                        window.location.reload();
                    }, 2000);
                }else{
                    toastr.error(data.errors);
                }
            }
        });
    });
});
</script>

