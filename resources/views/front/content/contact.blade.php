@extends('front.layouts.main')
@section('title', 'contact us')
@section('description', 'Secure Your Career - Contact Primus Vidya Now')
@section('styles')
<link href="/web-assets/css/styles-contact.css" rel="stylesheet" rel="preload" as="style">
@endsection
@section('content')
<section>
    <div class="section banner-1 banner-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="">
                        <h1 class="mb-3 content-1 h5 text-white">Contact <span class="tx-info-dark">Us</span></h1>
                        <p class="mb-0 tx-28">Easily accessible customer service is crucial in today's 24-hour</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section bg-pattern-1 bg-image3">
    <div class="container">
        <div class="heading-section mb-0">
            <h2 class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Contact Us</span></h2>
            <div class="heading-title">Get In Touch <span class="tx-primary">With Us</span></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="my-5">
                    <div class="row text-center">
                        <div class="col-xl-3 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="avatar avatar-lg bg-secondary-gradient text-white tx-24 br-style"><i class="bi bi-geo-alt"></i></span>
                                    </div>
                                    <h5 class="mb-1">Main Branch</h5>
                                    <p class="mb-0">Backside Basement, 54, National Park Rd, Lajpat Nagar IV, New Delhi 110024 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="avatar avatar-lg bg-purple-gradient br-style text-white tx-24"><i class="bi bi-envelope"></i></span>
                                    </div>
                                    <h5 class="mb-1">Email</h5>
                                    <p class="mb-0">admission@primusvidya.com </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="avatar avatar-lg bg-pink-gradient br-style text-white tx-24"><i class="bi bi-telephone"></i></span>
                                    </div>
                                    <h5 class="mb-1">Phone</h5>
                                    <p class="mb-0">+91 98 1050 8409</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="avatar avatar-lg bg-teal-gradient br-style text-white tx-24"><i class="bi bi-clock-history"></i></span>
                                    </div>
                                    <h5 class="mb-1">Call Carrier</h5>
                                    <p class="mb-0">Mon - Fri : 9am - 6pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-11">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="card feature-client-bg shadow-none">
                                    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-9 sub-pattern-2 filter-invert op-1 z-index--1">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-4">Drop a Message To Us</h4>
                                        <form class="form-horizontal" method="post" id="con">
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
                                                        <label class="mb-2 fw-500">Select Course<span class="tx-danger ms-1">*</span></label>
                                                        @php
                                                        $coursepops = DB::select("select course_name from courses");
                                                        @endphp
                                                        <select class="form-control ms-0" required name="course">
                                                            <option value="" selected disabled>Select Course</option>
                                                            @foreach ($coursepops as $coursepop)
                                                            <option value="{{$coursepop->course_name}}">{{$coursepop->course_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3 text-start">
                                                        <label class="mb-2 fw-500">Select State<span class="tx-danger ms-1">*</span></label>
                                                        <select class="form-control ms-0" required name="state">
                                                            <option value="" selected disabled>Select State</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                            <option value="Uttarakhand">Uttarakhand</option>
                                                            <option value="West Bengal">West Bengal</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                                            <option value="Telangana">Telangana</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                            <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Orissa">Orissa</option>
                                                            <option value="Puducherry">Puducherry</option>
                                                            <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                                                            <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                                            <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3 text-start">
                                                        <label class="mb-2 fw-500">DOB<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="date" name="dob" placeholder="Enter Last Name" required>

                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="d-grid mb-3">
                                                        <input type="submit" class="btn btn-primary" value="Free Inquiry">
                                                    </div>
                                                    <div class="d-grid mb-3">
                                                        <button type="submit" class="btn btn-white border"><i class="bi bi-shield"></i> Your personal information is secure with us</button>
                                                    </div>
                                                    <div class="d-grid mb-3">
                                                        <small>By clicking, you agree to our <a class="text-decoration-none" href="/term-conditions">Privacy Policy,Terms of Use</a> & Disclaimers</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card bg-transparent shadow-none ">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-4">Looking for a Support?</h4>
                                        <p class="mb-4">Day or night, rain or shine, anytime 24 / 7 / 365 our team is here for you!</p>
                                        <ul class="list-unstyled">
                                            <li class="list-item mb-4">
                                                <div class="d-flex">
                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-geo-alt"></i></span>
                                                    <div>
                                                        <h6 class="mb-0">Main Branch</h6>
                                                        <p class="mb-0">Backside Basement, 54, National Park Rd, Lajpat Nagar IV, New Delhi 110024
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-item mb-4">
                                                <div class="d-flex">
                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-headset"></i></span>
                                                    <div>
                                                        <h6 class="mb-0">Phone</h6>
                                                        <p class="mb-0">+91 98 1050 8409 </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-item mb-4">
                                                <div class="d-flex">
                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-envelope"></i></span>
                                                    <div>
                                                        <h6 class="mb-0">Email</h6>
                                                        <p class="mb-0">admission@primusvidya.com </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="d-flex">
                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-graduation-cap"></i></span>
                                                    <div>
                                                        <h6 class="mb-0">Call Carrier Counsellor</h6>
                                                        <p class="mb-0"><span class="fw-bold">Ruby choudhary</span> +91 7701899147</p>
                                                        <p class="mb-0"><span class="fw-bold">Rajeswari </span> +91 9311300822</p>
                                                        <p class="mb-0"><span class="fw-bold">Sargam </span> +91 9311300922</p>
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="">
                                    <img src="/web-assets/images/patterns/7.webp" alt="img" class="patterns-8 sub-pattern-3 z-index-0 op-1">
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
@endsection