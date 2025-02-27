@extends('front.layouts.main')

@section('title', $universits->name)
@section('description', substr($universits->banner_content, 0, 120))

@section('scripts-top')
@section('styles')
<link href="/web-assets/css/styles-uni-details.css?=1.1" rel="stylesheet" rel="preload" as="style">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Primus Vidya - Most Trusted Education Consultancy in Regular/Online higher education",
            "item": "https://www.primusvidya.com/"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "{{$universits->name}}",
            "item": "{{ URL::current() }}"
        }]
    }
</script>
@endsection

@section('content')
<section>
    <div class="banner-1 banner-section section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="mb-4">
                        <img src="/{{$universits->logo}}" class="mb-3 uni_logo_bg" width="" alt="{{$universits->name}}" style="width: 100px;">
                        <h1 class="mb-3 content-1 h5 text-white">{{$universits->name}}</h1>
                        <p class="mb-4 content-2 tx-16 text-white">{{$universits->banner_content}}</p>
                    </div>
                    <button data-bs-toggle="modal" data-bs-target="#mypop" class="btn btn-lg btn-secondary" aria-label="enquiry"><i class="bi bi-arrow-right me-2"></i> Get free Counselling</button>
                </div>
                <div class="col-lg-5">
                    <div class="banner-bg mt-5 mt-lg-0 rounded">
                        <img src="/web-assets/images/main/university-page.webp" width="400" height="300" class="reseller-img " alt="primusvidya">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section uni-section">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body pt-3">
                        @foreach ($uniabouts as $uniabout)
                        <div class="pb-2" id="about">
                            <h2 class="heading-title h4 text-center">About <span class="tx-primary">{{$universits->name}} </span></h2>
                            @php $abouts = explode('@@@', $uniabout->content) @endphp
                            @foreach ($abouts as $about)
                            <p class="card-text">{{$about}}</p>
                            @endforeach

                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="card bg-primary-transparent feature-card-14 overflow-hidden mh-195">
                                        <div class="card-body">
                                            <p class="fw-semibold h5 text-white">Placement Assistance <i class="bi bi-arrow-right"></i> </p>
                                            <p class="text-white">There are several career assistance services including CV workshops and mock interviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="card bg-primary-transparent feature-card-14 overflow-hidden mh-195">
                                        <div class="card-body">
                                            <p class="fw-semibold h5 text-white">Latest Curriculum <i class="bi bi-arrow-right"></i></p>
                                            <p class="text-white">The curriculum is industry-aligned and according to the latest trends</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="card bg-primary-transparent feature-card-14 overflow-hidden mh-195">
                                        <div class="card-body">
                                            <p class="fw-semibold h5 text-white">Incubation Centres <i class="bi bi-arrow-right"></i> </p>
                                            <p class="text-white">To help entrepreneurial avenues, there are incubation centres for seed capital and technology support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="heading-title h4">University Facts</p>
                                <ul class="list-unstyled">
                                    @php $fcts = explode('@@@', $uniabout->facts) @endphp
                                    @foreach ($fcts as $fct)
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>{{$fct}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <div class="pb-2" id="approval">
                            <p class="h4 heading-title">Approvals</p>
                            <div class="pt-4 swiper companySwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($appimag as $apps)
                                    @foreach ($apps as $app)
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle text-white tx-24">
                                                        <img height="100" width="100" class="img-fluid" loading="lazy" src="/{{$app->image}}" alt="{{$app->alttag}}">
                                                    </span>
                                                </div>
                                                <p class="rounded">{{$app->alttag}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="pb-2" id="courses">
                            <p class="heading-title h4">Courses <span class="tx-primary">({{$course_count}} courses)</span></p>
                            <div class="swiper courseswiper">
                                <div class="swiper-wrapper">
                                    @foreach ($courses as $course)
                                    @php $programs = App\Models\Category::where('id', $course->category_id)->first();
                                    @endphp

                                    <div class="swiper-slide">
                                        <div class="card mb-4 mx-2">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <a href="/course/{{$programs->slug}}/{{$course->slug}}" aria-label="{{$course->course_name}}"> <img src="/{{$course->image}}" alt="{{$course->course_name}}" loading="lazy" width="291" height="218" class="img-fliud w-100 rounded border"></a>
                                                </div>
                                                <div class="p-4">
                                                    <a href="/course/{{$programs->slug}}/{{$course->slug}}">
                                                        <p class="tx-16 mb-0 tx-primary">{{$universits->name}}</p>
                                                    </a>
                                                    <a href="/course/{{$programs->slug}}/{{$course->slug}}">
                                                        <p class="tx-22 fw-bold tx-color-default mb-1">{{$course->course_name}}</p>
                                                    </a>
                                                    <a href="/course/{{$programs->slug}}/{{$course->slug}}">
                                                        <p>{{substr($course->short_content,0,60).'...' }}</p>
                                                    </a>
                                                    <a href="/course/{{$programs->slug}}/{{$course->slug}}">
                                                        <p class="tx-primary">Read More <i class="bi bi-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @foreach ($unicertificates as $unicertificate)
                        <div class="pb-2" id="certificate">
                            <p class="h4 heading-title">Sample Certificate from {{$universits->name}}</p>
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <p>{{$unicertificate->para}}</p>
                                    <ul class="list-unstyled">
                                        @php $certis = explode('@@@', $unicertificate->content) @endphp
                                        @foreach ($certis as $certi)
                                        <li class="mb-3"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> {{$certi}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="img_div">
                                        <button data-bs-toggle="modal" data-bs-target="#galleryModal" class="border-0" aria-label="sample certificate">
                                            <img src="/{{$unicertificate->image}}" loading="lazy" class="img-fluid w-100 certi_img" alt="Sample Certificate">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="/{{$unicertificate->image}}" loading="lazy" class="img-fluid w-100" alt="Sample Certificate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($uniemis as $uniemi)
                        <div class="pb-2" id="emi">
                            <p class="h4 heading-title">Exam Pattern</p>
                            <p>{{$uniemi->para}}</p>
                            <div class="table-responsive py-2 tx-12">
                                {!!$uniemi->content!!}
                            </div>
                            {{-- <p class="fw-bold tx-18 text-success mb-0">*EMI options available</p> --}}
                        </div>
                        @endforeach

                        @foreach ($addprocess as $addproces)
                        <div class="pb-2" id="process">
                            <p class="h4 heading-title">Admission Process</p>
                            <p>{{$addproces->para}}</p>
                            <div class="step_list">
                                <ol>
                                    @php $process = explode('@@@', $addproces->content) @endphp
                                    @foreach ($process as $proces)
                                    <li>
                                        <p>{{$proces}}</p>
                                    </li>
                                    @endforeach
                                </ol>

                            </div>
                        </div>
                        @endforeach

                        {{-- <div class="pb-2" id="pattern">
                            <p class="h4 heading-title">Examination Pattern</p>
                            <p>LPU Online conducts online proctored exams that are remotely monitored live using several Artificial Intelligence tools. The students can give the exams comfortably from their homes but they should have good internet connection and the right digital assets like computer, mic, and camera or a laptop with a functional camera and mic.</p>
                            <button data-bs-toggle="modal" data-bs-target="#patternModal" class="btn btn-lg  btn-secondary me-2 mb-2"><i class="bi bi-arrow-right me-2"></i>View Exam Pattern</button>
                        </div> --}}
                        <div class="pb-2" id="partners">
                            <p class="h4 heading-title">Placement Partners</p>
                            <p>Our students got an opportunity through: </p>
                            <ul class="list-unstyled">
                                <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Incubator for starting one's own startup</li>
                                <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Career mentorship for placement drives</li>
                                <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Resume workshops and interview sessions</li>
                            </ul>
                            <p class="h4 heading-title pb-2">Our students work at</p>
                            <div class="py-2 bg-pattern-2 bg-image1 rounded">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-md-auto col-sm-12 mb-4 mb-xl-0">
                                        <div class="">
                                            <div class="ms-3">
                                                <p class="text-white mb-0 tx-28">50%</p>
                                                <p class="text-white tx-24 mb-0">Average Salary Hike</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-12 mb-4 mb-xl-0">
                                        <div class="">
                                            <div class="ms-3">
                                                <p class="text-white mb-0 tx-28">300+</p>
                                                <p class="text-white tx-24 mb-0">Hiring Partners</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-12 mb-4 mb-sm-0">
                                        <div class="">
                                            <div class="ms-3">
                                                <p class="text-white mb-0 tx-28">3X</p>
                                                <p class="text-white tx-24 mb-0">Increase in Interview Opportunities</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 swiper companySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle text-white tx-24">
                                                        <img height="22" width="100" loading="lazy" class="img-fluid" src="/web-assets/placement/cousresa.png" alt="cousresa">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle text-white tx-24">
                                                        <img height="22" width="100" loading="lazy" class="img-fluid" src="/web-assets/placement/upwork.png" alt="upwork">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle text-white tx-24">
                                                        <img height="22" width="100" loading="lazy" class="img-fluid" src="/web-assets/placement/slack.png" alt="slack">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle text-white tx-24">
                                                        <img height="22" width="100" loading="lazy" class="img-fluid" src="/web-assets/placement/myntra.png" alt="myntra">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle text-white tx-24">
                                                        <img height="22" width="100" loading="lazy" class="img-fluid" src="/web-assets/placement/unacademy.png" alt="unacademy">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-2" id="faq">
                            <p class="heading-title h4">Frequently asked questions?</p>
                            <div class="accordion accordion-style-1" id="acc-style-1">
                                @foreach ($Unifaqs ?? '' as $index => $Unifaq)
                                <div class="accordion-item">
                                    <p class="accordion-header h2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-{{$index+1}}" aria-expanded="false" aria-controls="acc-1">
                                            {{$index+1}}. {{$Unifaq->question}}
                                        </button>
                                    </p>
                                    <div id="acc-{{$index+1}}" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                        <div class="accordion-body">{{$Unifaq->answer}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pb-2" id="other">
                            <p class="h4 heading-title">Other Universities to Consider</p>
                            <div class="swiper collegeSwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($consideruniversits as $consideruniversit)
                                    <div class="swiper-slide">
                                        <div class="card mb-4 mh-330">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="/top-universities-colleges/{{$consideruniversit->slug}}" aria-label="{{$consideruniversit->name}}"> <img src="/{{$consideruniversit->logo}}" height="150" loading="lazy" alt="{{$consideruniversit->name}}" class="img-fliud w-100 rounded border"></a>
                                                </div>
                                                <div class="px-4 py-2">

                                                    <a href="/top-universities-colleges/{{$consideruniversit->slug}}">
                                                        <p class="tx-22 fw-bold tx-color-default mb-1">{{$consideruniversit->name}}</p>
                                                    </a>
                                                    <p class="tx-14 text-body mb-2">Location: <span>{{$consideruniversit->location}},{{$consideruniversit->state}}</span></p>
                                                    <p class="tx-14 text-body mb-0">Average Fee: <span>{{$consideruniversit->avgFee}}</span></p>
                                                </div>
                                                <a href="/top-universities-colleges/{{$consideruniversit->slug}}" class="btn btn-lg  btn-secondary w-100 position-absolute bottom-0"><i class="bi bi-arrow-right me-2"></i>Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="d-block side_nav">
                    <div class=" pt-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav active" onclick="scrollToSection('about',this)"><span>About </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('approval',this)"><span>Approvals </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('courses',this)"><span>Courses </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('certificate',this)"><span>Sample Certificate </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('emi',this)"><span>Examination Pattern
                                    </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('process',this)"><span>Admission Process </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            {{-- <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('pattern',this)"><span>Examination Pattern </span><span><i class="bi bi-arrow-right"></i></span></button></li> --}}
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('partners',this)"><span>Placement Partners </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('faq',this)"><span>FAQs </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('other',this)"><span>Other Universities </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                            <li class="list-group-item border-0 px-0"><button class="tx-18 btn w-100 d-flex justify-content-between sideNav" onclick="scrollToSection('summary',this)"><span>Summary </span><span><i class="bi bi-arrow-right"></i></span></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-pattern-1 bg-image3 uni-section" id="summary">
    <div class="container">
        <div class="heading-section">
            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Summary</span></div>
            <div class="heading-title">{{$universits->name}}</div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 v_card">
                    <div class="card-body p-1">
                        <i class="bi bi-patch-check-fill text-success tx-50"></i>
                        <p class="h5">Approvals</p>
                        <p class="tx-muted mb-2">Have approvals from: </p>
                        <div class="mb-2">
                            @foreach ($appimag as $apps)
                            @foreach ($apps as $app)
                            <span class="fs-13 border bg-primary text-white px-1 rounded">{{$app->alttag}}</span>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 h_card">
                    <div class="card-body p-1">
                        <i class="bi bi-briefcase-fill text-primary tx-50"></i>
                        <p class="h5">Placement</p>
                        <p class="tx-muted mb-2">Get placement with top brands & organizations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 text-center mb-4 d-none d-lg-block">
                <img src="/{{$universits->logo}}" class="w-35 img-fluid" loading="lazy" alt="img" width="200">
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 h_card">
                    <div class="card-body p-1">
                        <button data-bs-toggle="modal" data-bs-target="#galleryModal" class="border-0 bg-none" aria-label="certificate button">
                            <i class="bi bi-file-text-fill tx-secondary tx-50"></i>
                        </button>
                        <p class="h5">Sample Certificate</p>
                        <p class="tx-muted mb-2">A sample certificate to see how your degree will look</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 v_card">
                    <div class="card-body p-1">
                        <i class="bi bi-chat-right-text-fill text-success tx-50"></i>
                        <p class="h5">Reviews</p>
                        <p class="tx-muted mb-2">Get reviews and testimonials from alumni and present students</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@include('front.parts.support')
@endsection

@section('scripts')
<script>
    function scrollToSection(sectionId, button) {
        var target = document.getElementById(sectionId);
        target.scrollIntoView({
            behavior: 'smooth',
        });
        // Add active class to the clicked button
        var buttons = document.querySelectorAll('.sideNav');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('active');
        }
        button.classList.add('active');
    }
</script>
@endsection