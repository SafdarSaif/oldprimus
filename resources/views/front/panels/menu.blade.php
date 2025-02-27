<div class="head_menu_container">
   <header class="main-header" id="stickyHeader">
      <div class="main-brand-header">
         <div class="container brand-header-container">
            <div class="d-flex align-items-center">
               <div class="header-element me-1">
                  <a href="#" class="sidemenu-toggle1 header-link" data-bs-toggle="sidebar" aria-label="open side nav">
                     <span class="open-toggle">
                        <i class="bi bi-text-indent-left header-link-icon"></i>
                     </span>
                  </a>
               </div>
               <a href="/" class="brand-main">
                  <img src="/web-assets/images/main/logo.webp" loading="lazy" height="52" width="150" alt="primusvidya" class="desktop-logo logo-dark" style="width:150px;">
                  <img src="/web-assets/images/main/fav-color.ico" loading="lazy" height="41" width="35" alt="primusvidya" class="mobile-logo mobile-dark mx-3">
                  <img src="/web-assets/images/main/logo-dark.webp" loading="lazy" height="52" width="150" alt="primusvidya" class="desktop-logo logo-color" style="width:150px;">
                  <img src="/web-assets/images/main/logo-dark.webp" loading="lazy" height="41" width="35" alt="primusvidya" class="mobile-logo mobile-color">
               </a>
            </div>
            <ul class="nav list-unstyled align-items-center">
               <li class="d-flex align-items-center position-relative me-md-4 me-2">
                  <a href="tel:+9810508409" class="stretched-link" aria-label="phone number"></a>
                  <span class="avatar bg-white-1 border rounded-circle tx-15 border-white-2 me-2"><i class="bi bi-telephone text-white"></i></span>
                  <div class="d-none d-md-block">
                     <a href="#" class="nav-link tx-15 p-0">Call Us</a>
                     <a href="tel:9810508409" class="mb-0 nav-link p-0 tx-13 op-8 lh-sm"> +91 98 1050 8409</a>
                  </div>
               </li>
               <li class="d-flex align-items-center position-relative">
                  <a id="live-chat" href="https://api.whatsapp.com/send/?phone=919810508409&amp;text=I+am+interested+in+Distance+Courses+and+need+more+information+about+it.&amp;type=phone_number&amp;app_absent=0" rel="noopener noreferrer" target="_blank" class="stretched-link" aria-label="whatsapp chat"></a>
                  <span class="avatar bg-white-1 border rounded-circle tx-15 border-white-2 me-2"><i class="bi bi-chat-text text-white"></i></span>
                  <div class="d-none d-md-block">
                     <a href="https://api.whatsapp.com/send/?phone=919810508409&amp;text=I+am+interested+in+Distance+Courses+and+need+more+information+about+it.&amp;type=phone_number&amp;app_absent=0" rel="noopener noreferrer" target="_blank" class="nav-link tx-15 p-0">Live Chat</a>
                     <p class="mb-0 nav-link p-0 tx-13 op-8 lh-sm">Chat With Us</p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <div class="sticky">
      <aside class="app-sidebar" id="sidebar">
         <div class="app-toggle-header">
            <div class="header-element">
               <a href="#" class="sidemenu-toggle header-link" data-bs-toggle="sidebar" aria-label="side nav">
                  <span class="close-toggle">
                     <i class="bi bi-x header-link-icon"></i>
                  </span>
               </a>
            </div>
            <a href="/" class="brand-main" aria-label="mobile brand">
               <img src="/web-assets/images/main/logo-dark.webp" loading="lazy" height="52" width="150" alt="img" class="desktop-logo logo-dark">
               <img src="/web-assets/images/main/logo-dark.webp" loading="lazy" height="52" width="150" alt="img" class="desktop-logo logo-color">
            </a>
         </div>
         <div class="main-sidebar container" id="sidebar-scroll">
            <nav class="main-menu-container nav nav-pills sub-open">
               <ul class="main-menu">
                  <li class="slide">
                     <a href="/" class="side-menu__item">
                        <span class="side-menu__label">Home</span>
                     </a>
                  </li>

                  <li class="slide has-sub">
                     <a href="#" class="side-menu__item">
                        <span class="side-menu__label">Top University</span>
                        <i class="bi bi-chevron-down side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1 dd mega-slide-menu-threefr" style="height: 400px;
                     overflow: scroll;">
                        <div class="d-flex justify-content-center pt-3">
                           <a href="/universities" class="side-menu__item">
                              <div class="d-lg-flex align-items-center text-center">
                                 <div class="me-3">
                                    <span class="avatar header__dropavatar mb-2 bg-secondary-transparent rounded-circle">
                                       <i class="bi bi-building me-0 tx-secondary"></i>
                                    </span>
                                 </div>
                                 <div class="flex-grow-1">
                                    <h6 class="d-block mb-1">All Colleges and Universities</h6>
                           </a>
                        </div>
         </div>
         </a></a>
   </div>
   <li class="mega-menu-threefr">
      @php
      $ut = DB::select('select uni_category_name,slug,id from university_categories');
      @endphp
      @foreach ($ut as $u)
      <div class="">
         <ul>
            <li>
               <p class="mb-3 d-flex align-items-center menu-label">
                  <i class="bi bi-journal-text tx-primary tx-18 me-2"></i>
                  <span class="tx-14 tx-primary">{{$u->uni_category_name}}</span>
               </p>
            </li>
            @php
            $unih = DB::select("select name,slug,id from universities where university_type = '$u->id'");
            @endphp
            @foreach ($unih as $uni)
            <li class="slide">
               <a href="/top-universities-colleges/{{$uni->slug}}" class="side-menu__item">
                  <div class="d-lg-flex align-items-start">
                     <div class="me-3">
                        <span class="avatar header__dropavatar mb-2 bg-secondary-transparent rounded-circle">
                           <i class="bi bi-building me-0 tx-secondary"></i>
                        </span>
                     </div>
                     <div class="flex-grow-1">
                        <h6 class="d-block mb-1">{{$uni->name}}</h6>

               </a>
      </div>
</div>
</a>
</li>
@endforeach
</ul>
</div>
@endforeach
</li>
</ul>
</li>

{{-- @php
                  $ut = DB::select('select uni_category_name,slug,id from university_categories');
                  @endphp
                  <li class="slide has-sub">
                      <a href="#" class="side-menu__item">
                      <span class="side-menu__label">Top University</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                      </svg>
                      </a>
                      <ul class="slide-menu child1 mega-slide-menu-onefr without-icon">
                        @foreach ($ut as $u)
                         <li class="slide has-sub">
                            <a href="#" class="side-menu__item">
                               <div class="d-flex">                                                
                                  <i class="bi bi-files-alt"></i>
                                  <span class="fw-500 tx-15">{{$u->uni_category_name}}</span>
</div>
<span class="side-menu__angle">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
   </svg>
</span>
</a>
@php
$unih = DB::select("select name,slug,id from universities where university_type = '$u->id'");
@endphp
<ul class="slide-menu child2">
   @foreach ($unih as $uni)
   <li class="slide">
      <a href="/top-universities-colleges/{{$uni->slug}}" class="side-menu__item">
         <span class="fw-500 tx-15">{{$uni->name}}</span>
      </a>
   </li>
   @endforeach
</ul>
</li>
@endforeach
</ul>
</li> --}}


{{-- @php
                   $cu = DB::select('select category_name,slug,id from categories');
                   @endphp
                   @foreach ($cu as $c)
                   <li class="slide has-sub">
                       <a href="#" class="side-menu__item">
                       <span class="side-menu__label">{{$c->category_name}}</span>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
   <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
</svg>
@php
$programs = DB::select("select program,slug,id from programs where category_id = '$c->id'");
@endphp
<ul class="slide-menu child1 mega-slide-menu-onefr without-icon">
   @foreach ($programs as $program)
   <li class="slide has-sub">
      <a href="#" class="side-menu__item">
         <div class="d-flex">
            <i class="bi bi-files-alt"></i>
            <span class="fw-500 tx-15">{{$program->program}}</span>
         </div>
         <span class="side-menu__angle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
         </span>
      </a>
      @php
      $courseh = DB::select("select course_name,url,slug,id from courses where program_id = '$program->id'");
      @endphp
      <ul class="slide-menu child2">
         @foreach ($courseh as $course)
         <li class="slide">
            <a href="/course/{{$c->slug}}/{{$course->slug}}" class="side-menu__item">
               <span class="fw-500 tx-15">{{$course->course_name}}</span>
            </a>
         </li>
         @endforeach
      </ul>
   </li>
   @endforeach

</ul>
</li>
@endforeach --}}

@php
$cu = DB::select('select category_name,slug,id from categories');
@endphp
@foreach ($cu as $c)
<li class="slide has-sub">
   <a href="#" class="side-menu__item">
      <span class="side-menu__label">{{$c->category_name}}</span>
      <i class="bi bi-chevron-down side-menu__angle"></i>
   </a>
   <ul class="slide-menu child1 dd mega-slide-menu-threefr" style="height: 400px;
                     overflow: scroll;">
      <li class="mega-menu-threefr">
         @php
         $programs = DB::select("select program,slug,id from programs where category_id = '$c->id'");
         @endphp
         @foreach ($programs as $program)
         <div class="">
            <ul>
               <li>
                  <p class="mb-3 d-flex align-items-center menu-label">
                     <i class="bi bi-journal-text tx-primary tx-18 me-2"></i>
                     <span class="tx-14 tx-primary">{{$program->program}}</span>
                  </p>
               </li>
               @php
               $courseh = DB::select("select course_name,url,slug,id from courses where program_id = '$program->id'");
               @endphp
               @foreach ($courseh as $course)
               <li class="slide">
                  <a href="/course/{{$c->slug}}/{{$course->slug}}" class="side-menu__item">
                     <div class="d-lg-flex align-items-start">
                        <div class="me-3">
                           <span class="avatar header__dropavatar mb-2 bg-secondary-transparent rounded-circle">
                              <i class="bi bi-file me-0 tx-secondary"></i>
                           </span>
                        </div>
                        <div class="flex-grow-1">
                           <a href="/course/{{$c->slug}}/{{$course->slug}}">
                              <h6 class="d-block mb-1">{{$course->course_name}}</h6>
                           </a>
                        </div>
                     </div>
                  </a>
               </li>
               @endforeach
            </ul>
         </div>
         @endforeach
      </li>
   </ul>
</li>
@endforeach

<li class="slide has-sub">
   <a href="#" class="side-menu__item">
      <span class="side-menu__label">More</span>
      <i class="bi bi-chevron-down side-menu__angle"></i>
   </a>
   <ul class="slide-menu child1 mega-slide-menu-onefr without-icon">
      <li class="slide">
         <a href="/about" class="side-menu__item">
            <i class="bi bi-house"></i>
            <span class="fw-500 tx-15">About Us</span>
         </a>
      </li>
      <li class="slide">
         <a href="/why-primusvidya" class="side-menu__item">
            <i class="bi bi-question"></i>
            <span class="fw-500 tx-15">Why Primusvidya</span>
         </a>
      </li>
      <li class="slide">
         <a href="/contact-us" class="side-menu__item">
            <i class="bi bi-envelope"></i>
            <span class="fw-500 tx-15">Contact </span>
         </a>
      </li>
      <li class="slide">
         <a href="/blog" class="side-menu__item">
            <i class="bi bi-box"></i>
            <span class="fw-500 tx-15">Blogs</span>
         </a>
      </li>
      <li class="slide">
         <a href="/practical/bed/first-year" target="_blank" class="side-menu__item">
            <i class="bi bi-box"></i>
            <span class="fw-500 tx-15">knowledge bank</span>
         </a>
      </li>
   </ul>
</li>



</ul>
<div class="d-xl-flex d-lg-none d-grid gap-2 text-center">
   <a href="#" data-bs-toggle="modal" data-bs-target="#applypop" class="btn btn-secondary min-w-fit-content" aria-label="Free Enquiry">Talk to Our Expert</a>
   {{-- <a href="login.php.html" class="btn btn-outline-light login-btn min-w-fit-content">Login</a> --}}
</div>
</nav>

</div>
</aside>
</div>
</div>

<div class="main-content app-content">