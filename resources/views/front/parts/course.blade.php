

<section class="section bg-pattern-1 bg-gray-100" id="domain">
               <div class="container">
                  <div class="row text-center justify-content-center">
                     <div class="heading-section">
                        <div class="heading-title">Looking For a Perfect Regular,Online & Distance <br><span class="tx-primary">Courses for growing careers?</span> </div>
                        <div class="heading-description">Your search ends here !</div>
                     </div>
                     <div class="col-xl-12">
                        <div class="card-body text-center">
                           <img src="/web-assets/images/patterns/7.webp" alt="img" class="patterns-7">
                           <img src="/web-assets/images/patterns/24.webp" alt="img" class="patterns-8 sub-pattern-1 op-1 z-index-1">
                           <img src="/web-assets/images/patterns/24.webp" alt="img" class="patterns-3 sub-pattern-1 op-1 z-index-1">
                           <div class="row text-center justify-content-center">
                              @php
                              $cu = DB::select('select category_name,slug,id from categories');
                              @endphp
                              @foreach ($cu as $c)
                                 @php
                                $courses = DB::select("select course_name,duration,url,slug,id from courses where category_id = '$c->id' LIMIT 8");
                                @endphp
                                @foreach ($courses as $course)
                              <div class="col-lg-2 col-md-4 col-sm-6">
                                <a href="/course/{{$c->slug}}/{{$course->slug}}">
                                 <div  class="domain-names mb-3 bg-primary-gradient text-white" style="min-height: 95px;">
                                    <p class="mb-0 tx-15 fw-600">{{$course->course_name}}</p>
                                    <p class="tx-13 op-8 mb-0">{{$course->duration}}</p>
                                 </div>
                                </a>
                              </div>
                             @endforeach
                             @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>