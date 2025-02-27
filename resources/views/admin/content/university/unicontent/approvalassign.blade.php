<div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">Assign Approval</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form id="assign_form_form" action="{{ route('uniapprovalassign.store') }}" method="POST" enctype="multipart/form-data">
    {{-- @method('PUT') --}}
    @csrf
    <input type="hidden" name="approval_id" value="@php echo $approval_id @endphp">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <p>Select College/University</p>
                @foreach ($universities as $university)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" @php if(in_array($university->id,$assignedIds)){echo 'checked';} @endphp name="college_id[]" value="{{$university->id}}"> {{$university->name}}
                    </label>
                @endforeach

                </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Assign Now</button>
    </div>
</form>

<script>
    $(function(){
    $("#assign_form_form").on("submit", function(e){
        var formData = new FormData(this);
       if($('input[type=checkbox]').is(':checked'))
       {

        $.ajax({
            url: this.action,
            type: 'post',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(data) {
                if(data.status){
                    $('.modal').modal('hide');
                    toastr.success(data.msg);
                    // setTimeout(() => {
                    //     window.location.reload();
                    // }, 2000);
                }else{
                    toastr.error(data.msg);
                }
            }
        });
    }else{
        toastr.error('Please Check at least one');
    }
        e.preventDefault();
    });
});
</script>
