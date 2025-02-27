@extends('admin.layouts.admin')
@section('title', 'Authorized Letter')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Blog</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Blog FAQ</li>
                    </ul>
                </div>
                <div class="col-auto">
                    <a href="#" onclick="add_blogfaq();" class="btn btn-primary me-1">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Blog Name</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogfaqs as $blogfaq)
                                        <tr>
                                            <td>
                                                <span>{{ $blogfaq->blog ? $blogfaq->blog->name : 'Blog data is not selected' }}</span>
                                            </td>
                                            <td>{!! substr($blogfaq->question, 0, 40) . '...' !!}</td>
                                            <td>{!! substr($blogfaq->answer, 0, 40) . '...' !!}</td>
                                            <td class="text-end">
                                                <a href="#" onclick="edit_blogfaq('{{ $blogfaq->id }}');"
                                                    class="btn btn-sm btn-white text-success me-2"><i
                                                        class="far fa-edit me-1"></i>Edit</a>
                                                <a href="javascript:void(0);" onclick="deleteblogfaq({{ $blogfaq->id }});"
                                                    class="btn btn-sm btn-white text-danger me-2"><i
                                                        class="far fa-trash-alt me-1"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function add_blogfaq() {
            $.ajax({
                url: '{{ route('create_blogfaq') }}',
                success: function(data) {
                    $('#lg_add_modal_content').html(data);
                    $('#lg_add_modal').modal('show');
                }
            })
        }

        function edit_blogfaq(id) {
            $.ajax({
                url: '/edit_blogfaq/' + id,
                success: function(data) {
                    $('#lg_add_modal_content').html(data);
                    $('#lg_add_modal').modal('show');
                }
            })
        }
    </script>

    <script>
        function deleteblogfaq(id) {
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
                        url: '/deleteblogfaq/' + id,
                        success: function(data) {
                            if (data.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000);
                            } else {
                                Swal.fire(
                                    'Oops!',
                                    'Something went wrong.',
                                    'error'
                                )
                            }
                        }
                    })

                }
            })
        }
    </script>
@endsection
