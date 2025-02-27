<div class="card">
    <div class="card-body">
        <p class="h5 mb-4 text-center">All Tools</p>
        <div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" src="/web-assets/images/tools/age-calculator.webp" alt="Age Calculator">
                <div>
                    <a href="/tool/age-calculator" class="fw-600">Age Calculator</a>
                    <p class="tx-muted mb-0">The Age Calculator is a simple tool that can be used to calculate...</p>
                </div>
            </div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" src="/web-assets/images/tools/emi-calculator.webp" alt="EMI Calculator">
                <div>
                    <a href="/tool/emi-calculator" class="fw-600">EMI Calculator</a>
                    <p class="tx-muted mb-0">An EMI calculator is a financial tool that can be used to calculate...</p>
                </div>
            </div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" src="/web-assets/images/tools/length-converter.webp" alt="Length Conveter">
                <div>
                    <a href="/tool/length-converter" class="fw-600">Length Conveter</a>
                    <p class="tx-muted mb-0">The Length Converter is a simple tool that can be used to convert lengths...</p>
                </div>
            </div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" src="/web-assets/images/tools/weight-converter.webp" alt="Weight Conveter">
                <div>
                    <a href="/tool/weight-converter">Weight Conveter</a>
                    <p class="tx-muted mb-0">This weight converter allows you to convert between different...</p>
                </div>
            </div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" src="/web-assets/images/tools/percentage-calculator.webp" alt="Percentage Calculator">
                <div>
                    <a href="/tool/percentage-calculator" class="fw-600">Percentage Calculator</a>
                    <p class="tx-muted mb-0">Are you a student or a teacher looking to calculate the percentage...</p>
                </div>
            </div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" src="/web-assets/images/tools/percentage-to-cgpa-converter.webp" alt="Percentage to CGPA converter">
                <div>
                    <a href="/tool/percentage-cgpa-converter" class="fw-600">Percentage to CGPA converter</a>
                    <p class="tx-muted mb-0">Our Percentage to CGPA Converter is specifically designed to help...</p>
                </div>
            </div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" img class="card-img-top" src="/web-assets/images/tools/bmi-calculator.webp" alt="bmi calculator">
                <div>
                    <a href="/tool/bmi-calculator" class="fw-600">BMI Calculator</a>
                    <p class="tx-muted mb-0">Understanding your body mass index is crucial when it comes to...</p>
                </div>
            </div>
            <div class="d-flex overflow-visible py-2">
                <img class="avatar rounded-circle avatar-lg me-3" img class="card-img-top" src="/web-assets/images/tools/image-resizer.webp" alt="image resizer">
                <div>
                    <a href="/tool/image-resizer" class="fw-600">Image Resizer</a>
                    <p class="tx-muted mb-0">Are you tired of struggling with large image files that take up too much space...</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card bg-primary overflow-hidden side_nav">
    <div class="card-body">
        <h5 class="fw-semibold text-white text-center">Have a Query?</h5>
        <p class="text-white">Fill out the form below &amp; we will get back to you.</p>
        <form class="form-horizontal" method="post" id="form_course">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3 text-start">
                        <input type="hidden" name="source" value="{{ URL::current() }}">
                        <label class="mb-2 fw-500 text-white">Name<span class="tx-danger ms-1">*</span></label>
                        <input class="form-control ms-0" type="text" name="name" onkeypress="return isNotNumberKey(event);" placeholder="Enter Full Name" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3 text-start">
                        <label class="mb-2 fw-500 text-white">Email<span class="tx-danger ms-1">*</span></label>
                        <input class="form-control ms-0" type="email" name="email" placeholder="Enter your Email" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3 text-start">
                        <label class="mb-2 fw-500 text-white">Mobile<span class="tx-danger ms-1">*</span></label>
                        <input class="form-control ms-0 disablecopypaste" name="phone" type="tel" maxlength="10" minlength="10" onkeypress="return isNumberKey(event);" placeholder="Enter Mobile Number" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3 text-start">
                        <label class="mb-2 fw-500 text-white">Select State<span class="tx-danger ms-1">*</span></label>
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
                        <input type="submit" class="btn btn-secondary" value="Free Inquiry">
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-success border"><i class="bi bi-shield"></i> Your personal information is secure with us</button>
                    </div>
                    <div class="d-grid mb-3">
                        <small class="text-white">By clicking, you agree to our <a class="text-decoration-none text-warning" href="/term-conditions">Privacy Policy,Terms of Use</a> & Disclaimers</small>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>