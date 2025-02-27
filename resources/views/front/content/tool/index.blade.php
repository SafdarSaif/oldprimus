@extends('front.layouts.main')

@section('title', 'tools')
@section('description','Explore our wide variety of tools to make your life simpler!!')

@section('styles')
<link href="/web-assets/css/styles-tool.css" rel="stylesheet" rel="preload" as="style">
@endsection
@section('content')


<section>
    <div class="section banner-4 banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="">
                        <p class="mb-3 content-1 h5 text-white">Primusvidya <span class="tx-info-dark">Tools</span></p>
                        <p class="mb-0 tx-16">Explore our wide variety of tools to make your life simpler!!</p>
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
                    <div class="col-md-3">
                        <a href="/tool/age-calculator" aria-label="age calculator">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/age-calculator.webp" alt="age calculator">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>Age Calculator</h5>
                                    <p class="card-text text-justify text-black">The Age Calculator is a simple tool that can be used to calculate your ...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/tool/emi-calculator" aria-label="emi calculator">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/emi-calculator.webp" alt="emi calculator">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>EMI Calculator</h5>
                                    <p class="card-text text-justify text-black">An EMI calculator is a financial tool that can be used to calculate your ...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/tool/length-converter" aria-label="length converter">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/length-converter.webp" alt="length converter">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>Length Conveter</h5>
                                    <p class="card-text text-justify text-black">The Length Converter is a simple tool that can be used to convert lengths...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/tool/weight-converter" aria-label="weight converter">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/weight-converter.webp" alt="weight converter">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>Weight Conveter</h5>
                                    <p class="card-text text-justify text-black">This weight converter allows you to convert between different...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/tool/percentage-calculator" aria-label="weight calculator">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/percentage-calculator.webp" alt="percentage calculator">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>Percentage Calculator</h5>
                                    <p class="card-text text-justify text-black">Are you a student or a teacher looking to calculate the percentage...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/tool/percentage-cgpa-converter" aria-label="percentage to cgpa converter">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/percentage-to-cgpa-converter.webp" alt="percentage to cgpa converter">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>Percentage-CGPA converter</h5>
                                    <p class="card-text text-justify text-black">Our Percentage to CGPA Converter is specifically designed to help...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/tool/bmi-calculator" aria-label="bmi calculator">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/bmi-calculator.webp" alt="bmi calculator">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>BMI Calculator</h5>
                                    <p class="card-text text-justify text-black">Understanding your body mass index is crucial when it comes to...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/tool/image-resizer" aria-label="image resizerr">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="/web-assets/images/tools/image-resizer.webp" alt="image resizer">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5>Image Resizer</h5>
                                    <p class="card-text text-justify text-black">Are you tired of struggling with large image files that take up too much...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection