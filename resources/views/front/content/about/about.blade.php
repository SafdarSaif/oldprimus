@extends('front.layouts.main')

@section('title', 'about')
@section('description', 'about us')
@section('scripts-top')
<link href="/web-assets/css/styles-about.css" rel="stylesheet" rel="preload" as="style">
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebPage",
        "name": "about",
        "url": "{{ URL::current() }}",
        
        "speakable":
        {
         "@type": "SpeakableSpecification",
         "cssSelector": ["headerBlock"]
         }
        
        }

</script>
@endsection
@section('content')

<section>
    <div class="section banner-4 banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mb-3 content-1 h5 text-white">Get To Know <span class="tx-info-dark position-relative">About Us<span class="br-bottom-before"></span></span></h1>
                        <p class="mb-4 content-2">Primusvidya is one of the best Regular/Online/Distance Education admission providers situated in Lajpat Nagar New Delhi/Noida Uttar Pradesh which is one of the top Education hubs of India. We helps the students for the admission process towards achieving their career goals. It is never easy to research and choose a good University or College on your own as it can be a very tedious process, especially when one wants to take admission in a correspondence course. Primusvidya helps you in clearing all your doubts regarding admission and provides a satisfactory solution for the doubts that may be bothering you. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-pattern-1 bg-gray-100 overflow-hidden" id="about">
    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-8 sub-pattern-1 filter-invert sub-pattern-1 op-1">
    <div class="container">
        <div class="heading-section">
            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">About</span></div>
            <h2 class="heading-title">Who We <span class="tx-primary">Are ?</span></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12 feature-client-bg">
                <div class="d-flex align-items-start mb-4">
                    <div class="flex-grow-1">
                        <p class="mb-0 tx-16">We are here for the students to get rid of this kind of doubt and find the relevant programme according to their interest area. Our industry-specialized counsellors believe in cent percent success for admission in the College and destination advised by them. The team handles all the queries of students gently and assures maximum satisfaction and delightful experience which leads to the maximum possibility of attraction towards student’s revisit to our services.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="flex-grow-1">
                        <p class="mb-0 tx-16">We do understand the need of skillful education and are committed to provide the Universities (Distance Education) approved by UGC DEB and all other reputed authorities in India and courses to reach or surpass the expectations of our Students as we do take care about the accreditation and recognition of the University which student’s are looking for. We make sure initially about information of the fees and other charges which need to be paid to Universities/College for securing admissions and wonderful services.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <p class="mb-0 tx-16">As we are into the education field for a decade and we are formaly known as <strong>Primus Institute of Distance Education Pvt. Ltd.</strong><span><img src="/web-assets/images/main/logo-dark.webp" alt="Primus Vidya" width="100"> </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.content.about.why')


@include('front.parts.process')

@include('front.parts.support')

@include('front.parts.faq')


@endsection

@section('scripts')
@endsection
