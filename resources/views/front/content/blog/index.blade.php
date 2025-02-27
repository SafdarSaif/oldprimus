@extends('front.layouts.main')

@section('title', 'blogs')
@section('description', 'Expand Your Knowledge with our Blogs!')
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
            "name": "PrimusVidya - Blogs",
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
                    <div>
                        <h1 class="mb-3 content-1 h5 text-white">Primusvidya <span class="tx-info-dark">Blogs</span></h1>
                        <h2 class="d-none">Blogs</h2>
                        <p class="mb-0 tx-16">Empowering you with UGC-DEB Approved online University Listed, <br>primusvidya is a distinguished Plateform for Online/Distance University/Colleges</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    @foreach ($Blogs as $Blog)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="position-relative">
                                <a href="/blog/{{$Blog->slug}}">
                                    <img class="card-img-top" src="/{{$Blog->image}}" alt="{{$Blog->name}}">
                                </a>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5><a href="/blog/{{$Blog->slug}}">{{$Blog->name}}</a></h5>
                                <div class="tx-muted">{{substr($Blog->description,0,150).'...' }}</div>
                                <div class="d-flex align-items-center pt-4 mt-auto">
                                    <div class="avatar me-3 cover-image rounded-circle">
                                        <img src="/web-assets/images/main/favicon.ico" class="rounded-circle" alt="{{$Blog->name}}" width="40">
                                    </div>
                                    <div>
                                        <a href="/blog/{{$Blog->slug}}" class="h6">Primusvidya</a>
                                        <small class="d-block tx-muted">{{ date('d/m/Y', strtotime($Blog->created_at)) }}</small>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="/blog/{{$Blog->slug}}" class="icon d-inline-block tx-muted"><i class="bi bi-arrow-right me-2 rounded-circle p-2 bg-gray-200 tx-muted"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- COL-END -->
                <div class="mb-9">
                    <div class="float-end">
                        <button class="btn btn-secondary min-w-fit-content">Load More</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>





@endsection

@section('scripts')
@endsection
