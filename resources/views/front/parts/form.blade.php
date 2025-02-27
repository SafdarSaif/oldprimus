<form id="all_form" action="/add_lead" method="post" class="contact-us-form">
    @csrf

    <div class="row g-4">
    <div class="col-md-6">
       <div class="input-field">
          <label for="name">Name</label>
          <input type="hidden" class="form-control" name="source" value="{{ URL::current() }}">

          <input type="text" placeholder="Enter Full name" id="name" name="name" onkeypress="return isNotNumberKey(event);" required>

       </div>
    </div>
    <div class="col-md-6">
       <div class="input-field">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter email" required="required">
       </div>
    </div>
    <div class="col-md-12">
       <div class="input-field">
          <label for="phone">Phone</label>
          <input type="tel" placeholder="Enter Phone Number" maxlength="10" minlength="10" onkeypress="return isNumberKey(event);" id="phone" name="phone" class="disablecopypaste" required>

       </div>
    </div>
    @php
        $coursepops = DB::select("select course_name from courses");
    @endphp
    <div class="col-md-6">
       <div class="input-field">
          <label for="subject">Course</label>
          <select required="required" name="course" id="course">
            <option value="" disabled selected>Choose Course</option>
            @foreach ($coursepops as $coursepop)
            <option value="{{$coursepop->course_name}}">{{$coursepop->course_name}}</option>
            @endforeach
          </select>
       </div>
    </div>
    <div class="col-md-6">
       <div class="input-field">
          <label for="subject">State</label>
          <select required="required" name="state" id="state">
             <option value="" selected="" disabled="">Select State</option>
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
    <div class="submit-btn text-center mt-4">
       <button type="submit" class="template-btn primary-btn border-0 rounded-pill">Send Message<i class="fa-solid fa-chevron-right ms-2"></i></button>
    </div>
    </div>
 </form>
