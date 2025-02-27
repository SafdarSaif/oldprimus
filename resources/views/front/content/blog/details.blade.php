@extends('front.layouts.main')

@section('title', $blog->name)
@section('description', substr($blog->description, 0, 120))
@section('scripts-top')
<link href="/web-assets/css/styles-blog.css" rel="stylesheet" rel="preload" as="style">
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
            "name": "PrimusVidya Blog - {{$blog->name}}",
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
                <div class="col-md-12 text-center">
                    <div class="">
                        <h1 class="mb-3 content-1 h5 text-white">{{$blog->name}}</h1>
                        <p class="mb-0 tx-16">We Fight Passionately to Get Our Students Every Time They Deserve</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <img class="card-img-top" src="/{{$blog->image}}" alt="img">
                    <div class="card-body">
                        <div class="d-md-flex">
                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                <img class="avatar rounded-circle me-3" src="/web-assets/images/main/favicon.ico" alt="avatar-img">
                                <div class="pe-3">
                                    <h6 class="mb-0">By</h6>
                                    <p class="tx-muted tx-15 fw-500 mb-0">Primusvidya</p>
                                </div>
                            </div>
                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                <span class="avatar bg-gray-200 rounded-circle tx-muted border me-3"><i class="bi bi-calendar"></i></span>
                                <div class="pe-3">
                                    <h6 class="mb-0">Date</h6>
                                    <p class="tx-muted tx-15 fw-500 mb-0">{{ date('d/m/Y', strtotime($blog->created_at)) }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="card-body pt-0 pv-content">
                        <h2 class="h4">{{$blog->name}}</h2>
                        <p class="card-text">{{$blog->description}}</p>
                        <p> {!!$blog->content!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <p class="h5 mb-4">Recent Blogs</p>
                        <div>
                            @foreach ($blogs as $blog)
                            <div class="d-flex overflow-visible">
                                <img class="avatar rounded-circle avatar-lg me-3" src="/{{$blog->image}}" alt="avatar-img">
                                <div class="">
                                    <a href="/blog/{{$blog->slug}}" class="fw-600">{{$blog->name}}</a>
                                    <p class="tx-muted mb-0">{{ substr($blog->description,0,60).'...' }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card bg-primary overflow-hidden side_nav">
                    <div class="card-body">
                        <h5 class="fw-semibold text-white text-center">Have a Query?</h5>
                        <p class="text-white">Fill out the form below &amp; we will get back to you.</p>
                        <form class="form-horizontal" method="post" id="form_course" >
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

            </div>
        </div>
    </div>
</section>
<section class="section bg-pattern-1 bg-gray-100 overflow-hidden" id="about">
    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-8 sub-pattern-1 filter-invert sub-pattern-1 op-1">
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
                                    <a href="/top-universities-colleges/{{$consideruniversit->slug}}"> <img src="/{{$consideruniversit->logo}}" height="150" alt="{{$consideruniversit->name}}" class="img-fliud w-100 rounded"></a>
                                </div>
                                <div class="px-4 py-2">

                                    <a href="/top-universities-colleges/{{$consideruniversit->slug}}">
                                        <p class="tx-22 fw-bold tx-color-default mb-1">{{$consideruniversit->name}}</p>
                                    </a>
                                    <p class="tx-14 text-body mb-2">Location: <span>{{$consideruniversit->location}},{{$consideruniversit->state}}</span></p>
                                    <p class="tx-14 text-body mb-0">Average Fee: <span>{{$consideruniversit->avgFee}}</span></p>
                                </div>
                                <a href="/top-universities-colleges/{{$consideruniversit->slug}}" class="btn btn-lg  btn-primary w-100 position-absolute bottom-0 start-0"><i class="bi bi-arrow-right me-2"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="heading-section">
            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ'S</span></div>
            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span> </div>
            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
        </div>
        <div class="accordion accordion-style-1" id="acc-style-1">
            @foreach ($blogfaq as $Blogfaqs)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-{{ $Blogfaqs->id }}" aria-expanded="false" aria-controls="faq-{{ $Blogfaqs->id }}">
                            {{ $Blogfaqs->question }}
                        </button>
                    </h2>
                    <div id="faq-{{ $Blogfaqs->id }}" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                        <div class="accordion-body">{!! $Blogfaqs->answer !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



@endsection

@section('scripts')
@endsection