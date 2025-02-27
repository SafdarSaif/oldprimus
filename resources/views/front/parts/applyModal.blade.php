<div class="modal fade" id="applypop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content border rounded">
            <div class="container">
                <div class="row order-sm-last order-md-0">
                    <div class="col-md-4 col-sm-12 orange_bg border rounded order-md-1">
                        <div class="p-4">
                            <h5 class="mb-4 text-center">Simple Steps To get Enrolled:</h5>
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-bold d-flex align-items-center"><span><i class="bi bi-book tx-danger tx-22 me-2"></i></span> Choose Your desired Course</p>
                                    <p class="fw-bold d-flex align-items-center"><span><i class="bi bi-file-earmark-check tx-warning tx-22 me-2"></i></span> Fill Basic Details</p>
                                    <p class="fw-bold d-flex align-items-center"><span><i class="bi bi-chat-left-text-fill tx-primary tx-22 me-2"></i></span> Get Free Counselling</p>
                                    <p class="fw-bold d-flex align-items-center"><span><i class="bi bi-check-circle-fill tx-success tx-22 me-2"></i></span>Get Enrolled</p>
                                </div>
                                <div class="col-12">
                                    <h5 class="text-center">Our Counsellors:</h5>
                                    <div class="pt-4 swiper counsellorSlider w-75">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card bordeprimary counsellor_card mb-4 text-center">
                                                    <div class="card-body p-3">

                                                        <img src="/web-assets/images/testimonial/4.webp" loading="lazy" alt="img" class="counsellor_img rounded img-fluid mb-2">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0 tx-black">Ruby Choudhary</h6>
                                                            <span class="tx-11 light_round_bg">Counsellor</span>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                      
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 bg-body border rounded order-1">
                        <div class="p-4">
                            <span class="float-end"><i class="bi bi-x-circle-fill tx-24 tx-secondary" type="button" data-bs-dismiss="modal"></i></span>
                            <h4 class="mb-1">Register Now!!</h4>
                            <p class="mb-4 tx-muted">Fill The Below Form !</p>
                            <form class="form-horizontal" method="post" id="pop">
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
                                    <div class="col-sm-12">
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
                                    <div class="col-xl-12">
                                        <div class="d-grid mb-3">
                                            <input type="submit" class="btn btn-primary" value="Talk to Our Expert">
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
            </div>
        </div>
    </div>
</div>