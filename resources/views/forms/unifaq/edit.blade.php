

<style>
    .modal-content{
        background:#fff !important;
    }
</style>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">Update University EMI</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
@php
$colleges=DB::select("select * from universities order by id asc");
@endphp
<form action="/update_unifaq/{{$Unifaq->id}}" method="post" id="add_banner" enctype="multipart/form-data" novalidate>
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
                            <option value="{{$college->id}}" {{ $college->id==$Unifaq->university_id ? 'selected' : '' }}> {{$college->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <label for="basicInput">Question</label>
                    <textarea name="question" id="question" cols="30" class="form-control" rows="4">{{$Unifaq->question}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="basicInput">Answer</label>
                    <textarea name="answer" id="answer" cols="30" class="form-control" rows="4">{{$Unifaq->answer}}</textarea>
                </div>
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

<script>
    createCKEDITOR('content');
</script>


