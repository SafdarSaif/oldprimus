@extends('front.layouts.main')
@section('title', 'Practical bed first-year')
@section('title', 'Practicals for B.Ed. first-year')
@section('styles')
<link href="/web-assets/css/styles-course.css" rel="stylesheet" rel="preload" as="style">
@endsection
@section('content')
<section class="section overflow-hidden">
    <img src="/web-assets/images/patterns/16.webp" alt="img" class="patterns-7 op-1 z-index-0">
    <img src="/web-assets/images/patterns/23.webp" alt="img" class="patterns-1 op-1 z-index-0">
    <div class="container">
        <div class="heading-section">
            <h1 class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Practicals</span></h1>
            <h2 class="heading-title">B.ed <span class="tx-primary">first-year</span></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="card border-top border-primary">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                         <div>
                            <h5 class="mb-2">Drama and art in Education </h5>
                            <a href="/web-assets/pdf/drama-and-art-in-education_compressed.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="card border-top border-primary">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                       <div>
                            <h5 class="mb-2">Understanding the Self</h5>
                            <a href="/web-assets/pdf/understanding-the-self.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card border-top border-primary mb-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                        <div>
                            <h5 class="mb-2">Art & Craft</h5>
                            <a href="/web-assets/pdf/art-and-craft.pdf" target="_blank">
                                <p class="mb-0">Click Here </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center my-5">
                <img src="/web-assets/images/png/58.webp" alt="img" width="300">
            </div>
            <div class="col-lg-4">
                <div class="card border-top border-primary">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                        <div>
                            <h5 class="mb-2">Reading and Reflecting Texts</h5>
                            <a href="/web-assets/pdf/reading-and-reflecting-texts.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card border-top border-primary mb-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                        <div>
                            <h5 class="mb-2">Critical Understanding of ICT</h5>
                            <a href="/web-assets/pdf/critical-understanding-of-ICT.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<section class="section overflow-hidden">
    <img src="/web-assets/images/patterns/16.webp" alt="img" class="patterns-7 op-1 z-index-0">
    <img src="/web-assets/images/patterns/23.webp" alt="img" class="patterns-1 op-1 z-index-0">
    <div class="container">
        <div class="heading-section">
            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Practicals</span></div>
            <div class="heading-title">B.ed <span class="tx-primary">first-year</span></div>
            <div class="heading-description">Optionally, you can choose a Control Panel for easy Server Management. Here the available add-ons</div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="card border-top border-primary">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                        <div>
                            <h5 class="mb-2">Drama and art in Education </h5>
                            <a href="/web-assets/pdf/drama-and-art-in-education_compressed.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="card border-top border-primary mb-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                        <div>
                            <h5 class="mb-2">Understanding the Self</h5>
                            <a href="/web-assets/pdf/understanding-the-self.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center my-5">
                <img src="/web-assets/images/png/2nd-year.webp" alt="img" width="300">
            </div>
            <div class="col-lg-4">
                <div class="card border-top border-primary">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                        <div>
                            <h5 class="mb-2">Reading and Reflecting Texts</h5>
                            <a href="/web-assets/pdf/reading-and-reflecting-texts.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card border-top border-primary mb-0">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                            <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                <i class="bi bi-book"></i>
                            </span>
                        </div>
                        <div>
                            <h5 class="mb-2">Critical Understanding of ICT</h5>
                            <a href="/web-assets/pdf/critical-understanding-of-ICT.pdf" target="_blank">
                                <p class="mb-0">Click Here</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   -->

@endsection

@section('scripts')
@endsection