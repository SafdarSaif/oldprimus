
</div>


<footer class="footer bg-primary mt-auto text-white position-relative">
    <div class="py-5">
       <div class="container">
          <div class="row">
            @php
                $cu = DB::select('select category_name,slug,id from categories');
                @endphp
                @foreach ($cu as $c)
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
               <p class="text-white h4">{{$c->category_name}} </p>
               <ul class="list-unstyled footer-icon">
                  @php
                  $courseh = DB::select("select course_name,url,slug,id from courses where category_id = '$c->id'");
                  @endphp
                  @foreach ($courseh as $course)
                  <li class="list-item mb-2"><a href="/course/{{$c->slug}}/{{$course->slug}}" class="footer-link">{{$course->url}}</a></li>
                  @endforeach
               </ul>
            </div>
            @endforeach

             <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <p class="text-white h4">Get in Touch With Us</p>
                <form action="#" class="form mb-4">
                   <div class="form-group custom-form-group">
                      <input type="text" class="form-control rounded-pill border-0" placeholder="Enter Your Email...">
                      <button class="custom-form-btn btn-icon btn btn-primary bg-primary-gradient rounded-circle border-0 right-0 me-1 py-2 px-2 shadow-none" type="button" aria-label="submit"><i class="bi bi-arrow-right"></i></button>
                   </div>
                </form>
                <p class="h4 text-white">Support</p>
                <ul class="list-unstyled footer-icon">
                   <li class="list-item mb-2"><a href="/blog" class="footer-link">Our Blog</a></li>
                   <li class="list-item mb-2"><a href="/contact-us" class="footer-link">Contact Support</a></li>
                   <li class="list-item mb-2"><a href="/about" class="footer-link">About Us</a></li>
                   <li class="list-item mb-2"><a href="/why-primusvidya" class="footer-link">Why Primusvidya</a></li>
                  <li class="list-item mb-2"><a href="/online-payments" class="footer-link">Pay Online</a></li>
                </ul>
                <p class="h4 text-white">Pay Us</p>
                <img src="/web-assets/pvqr.webp" class="img-fluid bg-body" alt="Payment QR code">
             </div>
          </div>
       </div>
    </div>
    <div class="py-3 border-top border-white-2">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-7">
                <div class="d-md-flex align-items-center">
                   <p class="mb-0 me-3 text-white">Follow us on :</p>
                   <div class="mt-3 mt-md-0">
                     <div class="footer-btn-list d-flex align-items-center">
                        <a href="https://www.facebook.com/primusvidya/" rel="noopener noreferrer" target="_blank" class="footer-btn btn btn-icon btn-info-dark rounded-circle me-2" aria-label="facebook"><i class="bi bi-facebook"></i></a> 
                        <a href="https://www.linkedin.com/company/primusvidya/" rel="noopener noreferrer" target="_blank" class="footer-btn btn btn-icon btn-info-dark rounded-circle me-2" aria-label="linkedin"><i class="bi bi-linkedin"></i></a> 
                        <a href="https://www.instagram.com/primusvidya/" rel="noopener noreferrer" target="_blank" class="footer-btn btn btn-icon btn-info-dark rounded-circle me-2" aria-label="instagram"><i class="bi bi-instagram"></i></a> 
                        <a href="https://twitter.com/primusvidya" rel="noopener noreferrer" target="_blank" class="footer-btn btn btn-icon btn-info-dark rounded-circle" aria-label="twitter"><i class="bi bi-twitter"></i></a> </div>
                  </div>
                </div>
             </div>
             <div class="col-lg-5">
                <ul class="list-unstyled d-sm-flex mb-0 justify-content-lg-end mt-3 mt-lg-0 ">
                   <li class="list-item"><a href="/term-conditions" class="footer-link px-3 border-end border-white-2 op-8">Terms of Service</a></li>
                   <li class="list-item"><a href="/disclaimer" class="footer-link px-3 border-end border-white-2 op-8">Disclaimer</a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <div class="py-3 border-top border-white-2 text-center">
      <div class="container">
         <span class="tx-14 op-8">
            The intend of Primusvidya is to provide unbiased precise information & comparative guidance on Universities and its Programs of Study to the Admission Aspirants. The contents of the Primusvidya Site, such as Texts, Graphics, Images, Blogs, Videos, University Logos, and other materials contained on Primusvidya Site (collectively, “Content”) are for information purpose only. The content is not intended to be a substitute for in any form on offerings of its Academia Partner. Infringing on intellectual property or associated rights is not intended or deliberately acted upon. The information provided by Primusvidya on www.Primusvidya.com or any of its mobile or any other applications is for general information purposes only. All information on the site and our mobile application is provided in good faith with accuracy and to the best of our knowledge, however, we make nor representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, completeness of any information on the Site or our mobile application. Primusvidya & its fraternity will not be liable for any errors or omissions and damages or losses resultant if any from the usage of its information.
         </span>
      </div>
   </div>
    <div class="py-3 border-top border-white-2 text-center">
       <div class="container">
          <span class="tx-14 op-8">
          Copyright &#169;
          <span id="year"></span> Primusvidya.
          All Rights Reserved
          </span>
       </div>
    </div>
 </footer>
@include('front.parts.modal')
<a href="https://api.whatsapp.com/send/?phone=919810508409&amp;text=I+am+interested+in+Distance+Courses+and+need+more+information+about+it.&amp;type=phone_number&amp;app_absent=0" rel="noopener noreferrer" target="_blank" style="position:fixed;bottom:60px;z-index:9999;">
    <img src="/web-assets/images/main/whatsapp.gif" alt="whastapp" title="tap to chat with us on whastapp" style="height:60px;width:60px;"></a>
</div>
@include('front.parts.applyModal')
@include('front.panels.script')


{{--   
//   <script>
//       window.addEventListener(
//             "contextmenu",
//             function (e) {
//                 e.preventDefault();
//             },
//             !1
//         ),
//         (document.onkeydown = function (e) {
//             return (
//                 123 != event.keyCode &&
//                 (!e.ctrlKey || !e.shiftKey || e.keyCode != "I".charCodeAt(0)) &&
//                 (!e.ctrlKey || !e.shiftKey || e.keyCode != "C".charCodeAt(0)) &&
//                 (!e.ctrlKey || !e.shiftKey || e.keyCode != "J".charCodeAt(0)) &&
//                 (!e.ctrlKey || e.keyCode != "U".charCodeAt(0)) &&
//                 (!e.ctrlKey || e.keyCode != "C".charCodeAt(0)) &&
//                 void 0
//             );
//         });
//   </script> --}}

