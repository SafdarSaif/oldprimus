@extends('front.layouts.main')
@section('title', $coursesmba->course_name)
@section('description', substr($coursesmba->short_content, 0, 120))
@section('scripts-top')
    <link href="/web-assets/css/styles-course.css" rel="stylesheet" rel="preload" as="style">
    <script type="application/ld+json">
   {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
         "@type": "ListItem",
         "position": 1,
         "name": "Primus Vidya - Most Trusted Education Consultancy in Regular/Online higher education",
         "item": "https://www.primusvidya.com"
      }, {
         "@type": "ListItem",
         "position": 2,
         "name": "{{$coursesmba->course_name}}",
         "item": "{{ URL::current() }}"
      }]
   }
</script>
@endsection
@section('content')

    <section>
        <div class="section banner-4 banner-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="">
                            <h1 class="mb-3 content-1 h5 text-white">Get To Know <span
                                    class="tx-info-dark position-relative">{{ $coursesmba->course_name }}<span
                                        class="br-bottom-before"></span></span></h1>
                            <p class="mb-4 content-2">{{ substr($coursesmba->short_content, 0, 150) . '...' }}</p>
                            <button data-bs-toggle="modal" data-bs-target="#mypop" class="btn btn-lg btn-secondary"><i
                                    class="bi bi-arrow-right me-2"></i>Download Brochure</button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-bg about-image mt-5 mt-lg-0">
                            <img src="/web-assets/images/main/course.webp" width="400" height="300"
                                class="reseller-img img-fluid" alt="{{ $coursesmba->course_name }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form_top">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-9 col-lg-9 mt-3">
                    <div class="card border_3">
                        <div class="card-body p-sm-6 text-center">
                            <p class="mb-1 h3 form_h3">Select from Wide Range of College/University </p>
                            <p class="mb-3 tx-black">for your <span class="tx-primary">{{ $coursesmba->course_name }}</span>
                                Course</p>
                            @include('front.parts.course_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray-custom" id="plans">
        <div class="container">
            <div class="heading-section">
                <h2 class="heading-title">About <span class="tx-primary">{{ $coursesmba->course_name }}</span></h2>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <div class="feature-card-5 feature-card-5-primary position-relative">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-xl-4">
                                        <img src="/{{ $coursesmba->image }}" loading="lazy" width="400" height="299"
                                            class="mt-2 mb-5 img-fluid" alt="img">
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 h4">Overview</p>
                                        <p class="mb-3">{{ $coursesmba->short_content }}</p>
                                        <ul class="list-unstyled mb-4 fw-500">
                                            <li class="list-item mb-2"><i
                                                    class="bi bi-check-circle tx-primary rounded-circle p-1 me-2"></i><strong>Course
                                                    Duration -</strong> {{ $coursesmba->duration }}</li>
                                            <li class="list-item mb-2"><i
                                                    class="bi bi-check-circle tx-primary rounded-circle p-1 me-2"></i><strong>Eligibility
                                                    -</strong> {{ $coursesmba->average_fee }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('front.content.courses.uni')

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card feature-card-15 feature-card-16">
                                <div class="card-body pv-content">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <!-- <p class="mb-2 text-black">{{ $coursesmba->description }}</p> -->
                                            <p class="mb-0 text-black">{!! $coursesmba->content !!}</p>
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
    <section class="section bg-pattern-1 bg-gray-100 overflow-hidden" id="about">
        <img src="/web-assets/images/patterns/9.webp" alt="img"
            class="patterns-8 sub-pattern-1 filter-invert sub-pattern-1 op-1">
        <div class="container text-center">
            <div class="pb-2" id="other">
                <h4 class="heading-title pb-2">You might be looking for these universities</h4>
                <div class="swiper miscCollege">
                    <div class="swiper-wrapper">
                        @foreach ($consideruniversits as $consideruniversit)
                            <div class="swiper-slide">
                                <div class="card mb-4 mh-330 border">
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="/top-universities-colleges/{{ $consideruniversit->slug }}"
                                                aria-label="{{ $consideruniversit->name }}"> <img
                                                    src="/{{ $consideruniversit->logo }}" loading="lazy" height="150"
                                                    alt="{{ $consideruniversit->name }}"
                                                    class="img-fliud w-100 rounded"></a>
                                        </div>
                                        <div class="px-4 py-2">

                                            <a href="/top-universities-colleges/{{ $consideruniversit->slug }}"
                                                aria-label="{{ $consideruniversit->name }}">
                                                <p class="tx-22 fw-bold tx-color-default mb-1">
                                                    {{ $consideruniversit->name }}</p>
                                            </a>
                                            <p class="tx-14 text-body mb-2">Location:
                                                <span>{{ $consideruniversit->location }},{{ $consideruniversit->state }}</span>
                                            </p>
                                            <p class="tx-14 text-body mb-0">Average Fee:
                                                <span>{{ $consideruniversit->avgFee }}</span></p>
                                        </div>
                                        <a href="/top-universities-colleges/{{ $consideruniversit->slug }}"
                                            class="btn btn-lg  btn-primary w-100 position-absolute bottom-0 start-0"><i
                                                class="bi bi-arrow-right me-2"></i>Explore University</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
   


    @include('front.parts.support')
    @include('front.parts.faq')



@endsection

@section('scripts')

@endsection
