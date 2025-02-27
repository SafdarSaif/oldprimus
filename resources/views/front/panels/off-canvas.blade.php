<!--offcanvus area start-->
<div class="ofcanvus-menu">
    <button class="close-canvus"><i class="fa-solid fa-xmark"></i></button>
    <div class="megamenu">
        <h6 class="mb-20">Recommended Courses</h6>
        <div class="row g-3">
            @php
            $cu = DB::select('select category_name,slug,id from categories');
            @endphp
            @foreach ($cu as $c)
            @php
                $courseh = DB::select("select course_name,duration,url,slug,id from courses where category_id = '$c->id'");
                @endphp
                @foreach ($courseh as $course)
            <div class="col-lg-6">
                <a href="/course/{{$c->slug}}/{{$course->slug}}" class="mg-item">
                    <div class="mg-item-wrapper d-flex align-items-center">
                        <span class="icon-wrapper">
                            <img src="/web-assets/image/coursepop.png" class="img-fluid">
                        </span>
                        <div class="mg-item-content-right ms-2">
                            <h6 class="mb-0">{{$course->course_name}}</h6>
                            <span>{{$course->duration}}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endforeach
        </div>
        <h6 class="mb-20 mt-50">Top online/Distance Colleges/Universities</h6>
        <div class="row g-3">
            @php
            $unicanvas = DB::select("select name,uni_logo,uni_logo_tag ,url,slug,id from universities");
            @endphp
            @foreach ($unicanvas as $unicanva)
            <div class="col-lg-4">
                <a href="/online-distance-university/{{$unicanva->slug}}">
                    <div class="script-icon">
                        <span class="script-icon-wrapper">
                            <img src="/{{$unicanva->uni_logo}}" alt="{{$unicanva->uni_logo_tag}}" class="img-fluid">
                        </span>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>

</div>
<!--offcanvus area end-->
