<section class="section bg-pattern-1 bg-gray-100 overflow-hidden" id="about">
    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-8 sub-pattern-1 filter-invert sub-pattern-1 op-1">
    <div class="container text-center">
        <div class="pb-2" id="other">
            <h4 class="heading-title pb-2">You might be looking for these universities</h4>
            <div class="swiper miscCollege">
                <div class="swiper-wrapper">
                    @php
                    $consideruniversits = DB::table('universities')->select('name', 'logo', 'slug', 'id', 'location', 'state', 'avgFee')->get();;
                    @endphp
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