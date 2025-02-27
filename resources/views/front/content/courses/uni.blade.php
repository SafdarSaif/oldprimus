<section class="section bg-pattern-1 bg-image1 z-index-0">
    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-4 sub-pattern-2 filter-invert">
    <div class="container">
        <div class="heading-section mb-3">
            <div class="heading-title">Universities That Offered <span class="tx-primary">{{$coursesmba->course_name}}</span> </div>
        </div>
        <div class="row align-items-center">
            @foreach ($universities as $university)
            <div class="col-xl-3 col-md-6">
                <div class="card text-center feature-card-15 mb-xl-0">
                    <div class="card-body">
                        <img src="/{{$university->logo}}" class="img-responsive mb-2" loading="lazy" alt="{{$university->name}}" style="width:100px;">
                        {{-- <div class="ribbone"><span class="bg-danger">25% Offer</span></div> --}}
                        <h3 class="tx-primary tx-16">{{$university->name}}</h3>
                        <p>{{substr($university->banner_content,0,60).'...' }}</p>
                        {{-- <p class="tx-secondary mb-2">{{$university->keyfeature_two}}</p>
                        <p class=""><span class="tx-14 tx-muted op-7"> {{$university->keyfeature_two_ans}}</span></p> --}}
                        <a href="/top-universities-colleges/{{$university->slug}}" class="btn btn-primary bg-primary-gradient w-100 mt-2">Explore University</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
