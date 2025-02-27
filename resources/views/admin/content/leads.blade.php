@extends('admin.layouts.admin')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
       <div class="row align-items-center">
          <div class="col">
             <h3 class="page-title">Leads</h3>
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">leads</li>
             </ul>
          </div>
       </div>
    </div>

    <div class="row">
       <div class="col-sm-12">
          <div class="card card-table">
             <div class="card-body">
                <div class="table-responsive">
                   <table class="datatable table table-stripped">
                      <thead class="thead-light">
                         <tr>
                            <th>S.no</th>
                            <th>Name</th>
                           <th>Phone</th>
                           <th>Email</th>
                           <th>Applied course</th>
                           <th>State</th>
                           <th>Source</th>
                           <th>Date</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($leadpages as $index => $leadpage)
                        <td>{{$index+1}} </td>
                        <td>{{$leadpage->name}}</td>
                        <td>{{$leadpage->phone}}</td>
                        <td>{{$leadpage->email}}</td>
                        <td>{{$leadpage->course}}</td>
                        <td>{{$leadpage->state}}</td>
                        <td>{{$leadpage->source}}</td>
                        <td>{{$leadpage->created_at}}</td>
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
@endsection
