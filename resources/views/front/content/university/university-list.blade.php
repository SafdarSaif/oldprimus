@extends('front.layouts.main')

@section('title', 'Univerisities')
@section('description', 'List of univerisities on Primus Vidya')
@section('scripts-top')
<link href="web-assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" rel="preload" as="style">
<link href="/web-assets/css/styles.css" rel="stylesheet" rel="preload" as="style">
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebPage",
        "name": "Univeristies",
        "url": "{{ URL::current() }}",

        "speakable": {
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
                        <div class="text-center">
                            <h1 class="mb-3 content-1 h5 text-white">List of <span class="tx-info-dark position-relative">Universities<span class="br-bottom-before"></span></span></h1>
                            <p class="mb-4 content-2">Find your ideal university from our list covering various Top Indian universites and different specializations. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-pattern-1 bg-gray-100 overflow-hidden" id="about">
    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-8 sub-pattern-1 filter-invert sub-pattern-1 op-1">
    <div class="container">
        <div class="row justify-content-center align-items-start g-2">
            <div class="col-xl-3 col-md-6">
                <div class="card pricing-card border-top border-light border-5">
                    <div class="card-body">
                        <h4 class="mb-3 text-center">Filters</h4>
                        <form>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <p class="accordion-header h2" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Mode of Study
                                        </button>
                                    </p>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            @foreach($cats as $cat)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{$cat->id}}" id="cat" onchange="func_my()" name="{{$cat->id}}">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{$cat->category_name}} </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <p class="accordion-header h2" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Course
                                        </button>
                                    </p>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body ">
                                            <div class="courseBox">
                                                @foreach($courseFilter as $course)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{$course->id}}" onchange="func_my()" id="course">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{$course->course_name}} </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Fee Range
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2">5,000</span>
                                                <input type="range" class="form-control-range" id="fee_slider" min="5000" max="120000" step="5000" onchange="func_my()">
                                                <span id="feeValue" class="ms-2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-12">
                                    <a href="/universities" class="btn btn-primary w-100">Reset</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div id="loader-container">
                    <img src="/web-assets/images/main/loader.webp" class="img-fluid" alt="Loading" />
                </div>
                <div id="university-filtred">
                    @foreach($uniList as $uni)
                    <div class="col-12">
                        <div class="card feature-card-12 border uni_list_content">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <a href="/top-universities-colleges/{{$uni->slug}}" class="btn btn-primary uni_km d-none d-md-block"><span>Know More<i class="bi bi-arrow-right"></i></span></a>
                                    <div class="col-md-3">
                                        <a href="/top-universities-colleges/{{$uni->slug}}">
                                            <img src="/{{$uni->logo}}" class="mb-3 uni_logo_bg" width="210" alt="{{$uni->name}}" />
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="bg-success position-absolute right-0 top-0">
                                            @if($uni->university_type == 1)
                                            <p class="badge m-0 text-white">Regular</p>
                                            @elseif($uni->university_type == 2)
                                            <p class="badge m-0 text-white">Distance / Online</p>
                                            @elseif($uni->university_type == 4)
                                            <p class="badge m-0 text-white">WILP</p>
                                            @else
                                            <p class="badge m-0 text-white">Other</p>
                                            @endif
                                        </div>
                                        <a href="/top-universities-colleges/{{$uni->slug}}">
                                            <h4 class="subtitle mb-1">{{$uni->name}}</h4>
                                        </a>
                                        <p class="card-text mb-1"><span class="fw-bold">Location: </span><span>{{$uni->location}},</span> {{$uni->state}}</p>
                                        <p class="card-text mb-1"><span class="fw-bold">Approved By: </span>
                                            @foreach($appList as $app)
                                            @if ($loop->parent->iteration === $loop->iteration)
                                            @foreach($app as $a)
                                            <span class="mx-1">{{$a}}</span>
                                            @endforeach
                                            @endif
                                            @endforeach
                                        </p>
                                        <p class="card-text"><span class="fw-bold">Average Course Fee:</span> ₹<span>{{$uni->avgFee}}</span>/-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center">
                        <button class="btn btn-primary" id="loadMore">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('front.parts.support')

@include('front.parts.faq')


@endsection

@section('scripts')
<script>
    var feeRange = document.getElementById('feeValue')
    document.getElementById('fee_slider').addEventListener('input', function() {
        feeRange.innerText = document.getElementById('fee_slider').value;
    });
</script>
<script>
    $(document).ready(function() {
        $(".uni_list_content").slice(0, 4).show(),
            $("#loadMore").on("click", function(e) {
                e.preventDefault(),
                    $(".uni_list_content:hidden").slice(0, 4).slideDown(),
                    0 == $(".uni_list_content:hidden").length &&
                    $("#loadMore").text("No data").addClass("noContent");
            });
    });
</script>
<script>
    function showLoader() {
        $('#loader-container').show();
    }

    function hideLoader() {
        $('#loader-container').hide();
    }

    function func_my() {
        $("#university-filtred").hide();
        var modOfStudy = $('#cat:checked').val();
        var Course = $('#course:checked').val();
        var price_range = $('#fee_slider').val();
        if (modOfStudy || Course || price_range) {
            $.ajax({
                url: '/filter',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    modOfStudy: modOfStudy,
                    course: Course,
                    price_range: price_range,
                },
                beforeSend: function() {
                    showLoader();
                },
                success: function(data) {
                    $("#university-filtred").html(data);
                    $("#university-filtred").show();

                },
                complete: function() {
                    hideLoader();
                }
            })
        }
    }
</script>
@endsection