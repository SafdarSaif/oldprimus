@extends('front.layouts.main')
@section('title', 'contact us')
@section('description', 'Secure Your Career - Contact Primus Vidya Now')
@section('styles')
<link href="/web-assets/css/styles-contact.css" rel="stylesheet" rel="preload" as="style">
@endsection
@section('content')
<section class="section bg-pattern-1 bg-image3">
    <div class="container">
        <div class="heading-section mb-0">
            <h2 class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Add payment details</span></h2>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-11">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                           <div class="col-lg-12" id="payments_id">
                             </div>
                            <div class="col-lg-12">
                                <div class="card feature-client-bg shadow-none">
                                    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-9 sub-pattern-2 filter-invert op-1 z-index--1">
                                    <div class="card-body pb-0">
                                        <form class="form-horizontal" action="{{ route('add-payments') }}" method="post" id="payment_form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3 text-start">
                                                        <input type="hidden" name="source" value="{{ URL::current() }}">
                                                        <label class="mb-2 fw-500">Name<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="text" name="name" onkeypress="return isNotNumberKey(event);" placeholder="Enter Full Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3 text-start">
                                                        <label class="mb-2 fw-500">Email<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="email" name="email" placeholder="Enter your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3 text-start">
                                                        <label class="mb-2 fw-500">Mobile<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0 disablecopypaste" name="phone" type="tel" maxlength="10" minlength="10" onkeypress="return isNumberKey(event);" placeholder="Enter Mobile Number" required>
                                                    </div>
                                                </div>
                                             	<div class="col-sm-6">
                                                    <div class="mb-3 text-start">
                                                        <label class="mb-2 fw-500">Amount<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0 disablecopypaste" name="amount" type="tel" placeholder="Please enter amount" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="d-grid mb-3">
                                                        <button type="submit" class="btn btn-primary"><i class="bi bi-shield"></i> Pay Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
  function addPaments(){
    $.ajax({
      url:'/add-payments',
      success: function(data){
        $('#payments_id').html(data);
        //$('#add_modal').modal('show');
      }
    })
  }
</script>
@endsection