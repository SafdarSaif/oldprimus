@extends('front.layouts.main')

@section('title', 'How to Convert Percentage to CGPA? - CGPA Calculator')
@section('description','Learn how to convert CGPA (Cumulative Grade Point Average) to Percentage with our easy-to-use CGPA Calculator. A step-by-step guide to help you convert your CGPA to Percentage in just a few simple steps.')

@section('styles')
<link href="/web-assets/css/styles-tool.css" rel="stylesheet" rel="preload" as="style">
<style>
    #main_container {
        width: 100%;
        margin: 20px;
        margin-left: auto;
        margin-right: auto;
        padding: 30px;
        font-family: sans-serif;
        border-radius: 20px;
        border: 3px solid #999;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    .result-label {
        font-weight: bold;
        margin-top: 10px;
    }

    .result-value {
        padding: 8px 12px;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #555;
    }
</style>
@endsection

@section('content')


<section>
    <div class="section banner-4 banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div>
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
            <div class="col-xl-8">
                <div class="card">
                    <img class="card-img-top" src="/web-assets/images/tools/percentage-to-cgpa-converter.webp" alt="percentage to cgpa converter">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">Percentage to CGPA Converter</h1>
                        <div id="main_container">
                            <form id="converterForm" class="py-2">
                                <div class="row align-items-center justify-content-between">
                                    <div class="form-group col-5">
                                        <label for="cgpa">CGPA:</label>
                                        <input type="text" class="form-control" id="cgpa" placeholder="Enter CGPA">
                                    </div>
                                    <div class="col-2">
                                        <button type="button" id="convertButton" class="btn btn-primary btn-block mt-3">Convert</button>
                                    </div>
                                    <div class="form-group col-5">
                                        <label for="percentage">Percentage:</label>
                                        <input type="text" class="form-control" id="percentage" placeholder="Enter Percentage">
                                    </div>
                                </div>
                            </form>
                            <h2 class="h4">Welcome to our Percentage to CGPA Converter</h2>
                            <p class="card-text">The concept of Cumulative Grade Point Average (CGPA). CBSE uses CGPA as a standardized grading system to assess student performance across different subjects. Our Percentage to CGPA Converter is specifically designed to help you convert your percentage marks into the corresponding CGPA as per the CBSE guidelines.</p>
                            <p class="h4">Here's how our Percentage to CGPA Converter works:</p>
                            <p class="card-text"><pan class="fw-bold">Enter the percentage:</pan> Start by entering your overall percentage marks. For example, if your overall percentage is 85%, enter 85 as the input.</p>
                            <p class="card-text"><span class="fw-bold">Calculate the CGPA:</span> Once you've entered the percentage, click on the "Calculate" button, and our converter will instantly determine the corresponding CGPA based on the CBSE grading system. The result will be displayed on the screen, providing you with the equivalent CGPA.</p>
                            <p class="card-text">The CBSE CGPA grading system consists of a range of grades and corresponding grade points. Here is a breakdown of the grading system:</p>
                            <p class="h4">Grade: A1</p>
                            <p class="fw-bold">Grade Point: 10</p>
                            <p class="fw-bold">Percentage Range: 91-100</p>
                            <p class="h4">Grade: A2</p>
                            <p class="fw-bold">Grade Point: 9</p>
                            <p class="fw-bold">Percentage Range: 81-90</p>
                            <p class="h4">Grade: B1</p>
                            <p class="fw-bold">Grade Point: 8</p>
                            <p class="fw-bold">Percentage Range: 71-80</p>
                            <p class="h4">Grade: B2</p>
                            <p class="fw-bold">Grade Point: 7</p>
                            <p class="fw-bold">Percentage Range: 61-70</p>
                            <p class="h4">Grade: C1</p>
                            <p class="fw-bold">Grade Point: 6</p>
                            <p class="fw-bold">Percentage Range: 51-60</p>
                            <p class="card-text">Like this CGPA is converted</p>
                            <p class="card-text">Our Percentage to CGPA Converter accurately converts your percentage marks into the corresponding CGPA based on the CBSE grading system. It provides a standardized representation of your academic performance, making it easier for you to compare and assess your achievements.</p>
                            <p class="card-text">So, whether you're a CBSE student looking to understand your CGPA or a parent wanting to monitor your child's progress, our Percentage to CGPA Converter - CBSE Edition is an invaluable tool. Say goodbye to complex calculations and embrace the simplicity and accuracy of our converter.</p>
                            <p class="card-text">Start using our Percentage to CGPA Converter today and effortlessly convert your percentage marks to CGPA as per the CBSE guidelines. Simplify the process of understanding your academic performance with just a few clicks!</p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                @include('front.parts.tool-side-panel')
            </div>
        </div>
    </div>
</section>
@include('front.parts.universityCarousel')

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $("#convertButton").click(function() {
            var cgpa = parseFloat($("#cgpa").val());
            var percentage = parseFloat($("#percentage").val());

            if (!isNaN(cgpa)) {
                cgpa = Math.min(cgpa, 10);
                var convertedPercentage = cgpa * 9.5;
                $("#percentage").val(convertedPercentage.toFixed(2));
            } else if (!isNaN(percentage)) {
                percentage = Math.min(percentage, 100);
                var convertedCGPA = percentage / 9.5;
                $("#cgpa").val(convertedCGPA.toFixed(2));
            } else {
                $("#cgpa").val("");
                $("#percentage").val("");
            }
        });

        $("#cgpa, #percentage").click(function() {
            $("#cgpa").val("");
            $("#percentage").val("");
        });
    });
</script>


@endsection