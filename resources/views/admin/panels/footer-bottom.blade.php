<script>
     function add(value){
        $.ajax({
            url: "/admin/"+value+"/create",
            success: function(data){
                $('#add_modal_content').html(data);
                $('#add_modal').modal('show');
            }
        })
    }

    // Edit
    function edit(id, url){
        $.ajax({
            url:"/admin/"+url+"/"+id+"/edit",
            success: function(data){
                $('#edit_modal_content').html(data);
                $('#edit_modal').modal('show');
            }
        })
    }
</script>

{{-- Delete --}}
<script>
      function destroy(id, url){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/"+url+"/"+id,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    type: 'DELETE',
                    success: function(data) {
                        if(data.status==200){
                            Swal.fire('Deleted!',data.message,'success');
                            window.location.reload(true);
                        }else{
                            Swal.fire('Unable to delete!',data.message,'error');
                        }
                    }
                });
            }
        })
    }
</script>

</body>
</html>
