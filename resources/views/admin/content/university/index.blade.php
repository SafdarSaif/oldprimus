@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">University</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">university</li>
             </ul>
          </div>
          <div class="col-auto">
             <a href="/admin/university/create" class="btn btn-primary me-1">
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
                            <th>University Type</th>
                           <th>Name</th>
                           <th>Location</th>
                           <th>State</th>
                           <th>Average Fee</th>
                           <th>Image</th>
                           <th>Banner Content</th>
                           <th>Check for home</th>
                           <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($universities ?? '' as $index => $university)
                        <tr>
                            <td>
                            @php $unitypes = DB::select("select uni_category_name from university_categories where id = $university->university_type") @endphp
                            @foreach($unitypes as $unitype)
                            <span>{{ $unitype->uni_category_name }}</span>
                            @endforeach
                            </td>
                           <td>{{$university->name}}</td>
                           <td>{{$university->location}}</td>
                           <td>{{$university->state}}</td>
                           <td>{{$university->avgFee}}</td>
                           <td><img src="/{{$university->logo}}" width="60px;"></td>
                          
                           <td>{{$university->banner_content}}</td>
                           <td>
                              <input data-id="{{$university->id}}" @if($university->status == 1) checked @endif class="check_status" id="check_status_{{$university->id}}" type="checkbox">
                          </td>
                           <td class="text-end">
                              
                            <a href="{{ route('university.edit',$university->id) }}"   class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> </a>
                            <a href="javascript:void(0);" onclick="destroy('{{ $university->id }}', 'university');" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i></a>
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
    $(function() {
      $('.check_status').change(function(id) {
          var status = $(this).prop('checked') == true ? 1 : 0;
          var university_id = $(this).data('id');

          $.ajax({
              type: "POST",
              data: {_token:'{{ csrf_token() }}','status': status, 'university_id':university_id},
              url: '/changeStatus/'+id,
              success: function(data){
                console.log(data.success)
                Swal.fire(
                  'Good job!',
                  'Status Changed Sucessfully!',
                  'success'
                )
              }
          });
      })
    })
  </script>
@endsection
