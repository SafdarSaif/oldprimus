<section class="application-area light-bg pb-60 pt-60 position-relative zindex-1 overflow-hidden">
    <img src="/web-assets/img/shapes/box-shape.png" alt="box-shape" class="position-absolute left-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h2 class="mb-3">Approved Online & Distance Education Universities</h2>
                    <p class="mb-0">Build your website around your favorite app. Our 1-click installer makes it easy to integrate advanced web applications and software seamlessly.</p>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($secwebuniversities as $webuniversitie)
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 width_50">
                <a href="/top-universities-colleges/{{$webuniversitie->slug}}">
                <div class="hm2-app-item text-center bg-white deep-shadow rounded-2">
                    <div class="feagure-img">
                        <img src="/{{$webuniversitie->uni_logo}}" alt="{{$webuniversitie->uni_logo_tag}}" title="{{$webuniversitie->uni_logo_title}}" class="img-fluid w_100">
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
