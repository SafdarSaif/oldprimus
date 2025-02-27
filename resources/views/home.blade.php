@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
   <div class="page-header">
      <div class="row align-items-center">
         <div class="col">
            <h3 class="page-title">Dashboard</h3>
            <ul class="breadcrumb">
               <li class="breadcrumb-item"><a href="/home">Dashboard</a>
               </li>
               <li class="breadcrumb-item active">Customers</li>
            </ul>
         </div>
         <div class="col-auto">
            <a href="javascript:void(0);" class="btn btn-primary me-1">
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
                           <th>Email</th>
                           <th>Amount Due</th>
                           <th>Registered On</th>
                           <th>Status</th>
                           <th class="text-end">Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><a href="#">demo@gmail.com</a></td>
                           <td>$295</td>
                           <td>16 Nov 2020</td>
                           <td><span class="badge badge-pill bg-success-light">Active</span></td>
                           <td class="text-end">
                              <a href="javascript:void(0);" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i></a>
                              <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i></a>
                           </td>
                        </tr>
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
@endsection
