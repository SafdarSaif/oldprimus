@extends('front.layouts.main')

@section('title', 'Length Converter')
@section('description','Convert lengths effortlessly with our handy length converter')

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
                    <img class="card-img-top" src="/web-assets/images/tools/length-converter.webp" alt="length converter">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">Length Converter</h1>
                        <div id="main_container">
                            <form id="lengthConverterForm" class="py-2">
                                <div class="form-group">
                                    <label for="inputValue">Value:</label>
                                    <input type="text" class="form-control" id="inputValue" placeholder="Enter Value" required>
                                </div>
                                <div class="form-group">
                                    <label for="fromUnit">From:</label>
                                    <select class="form-control" id="fromUnit">
                                        <option value="mm">Millimeters</option>
                                        <option value="cm">Centimeters</option>
                                        <option value="m">Meters</option>
                                        <option value="km">Kilometers</option>
                                        <option value="in">Inches</option>
                                        <option value="ft">Feet</option>
                                        <option value="yd">Yards</option>
                                        <option value="mi">Miles</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="toUnit">To:</label>
                                    <select class="form-control" id="toUnit">
                                        <option value="mm">Millimeters</option>
                                        <option value="cm">Centimeters</option>
                                        <option value="m">Meters</option>
                                        <option value="km">Kilometers</option>
                                        <option value="in">Inches</option>
                                        <option value="ft">Feet</option>
                                        <option value="yd">Yards</option>
                                        <option value="mi">Miles</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Convert</button>
                                </div>
                                <div class="form-group mt-4">
                                    <label class="result-label" for="outputValue">Result:</label>
                                    <input type="text" class="form-control result-value" id="outputValue" readonly>
                                </div>
                            </form>
                            <h2 class="h4">About Length Converter</h2>
                            <p class="card-text">The Length Converter is a simple tool that can be used to convert lengths between different units. It is a valuable tool for anyone who needs to convert lengths for work, school, or personal use.</p>
                            <p class="h4">How to Use the Calculator</p>
                            <p class="card-text">To use the calculator, simply enter the following information:</p>
                            <ul>
                                <li>The length in the original unit</li>
                                <li>The original unit</li>
                                <li>The desired unit</li>
                            </ul>
                            <p class="card-text">The calculator will then convert the length and display the results.</p>
                            <p class="h4">Examples</p>
                            <p class="card-text">Here are some examples of how the calculator can be used:</p>
                            <p class="card-text">To convert 10 meters to feet, enter the following information in the calculator:</p>
                            <ul>
                                <li>Length: 10 meters</li>
                                <li>Original unit: meters</li>
                                <li>Desired unit: feet</li>
                            </ul>
                            <p class="card-text">The calculator will then convert the length and display the results. In this case, the result will be 32.808 feet.</p>
                            <p class="card-text">To convert 1000 kilometers to miles, enter the following information in the calculator:</p>
                            <ul>
                                <li>Length: 1000 kilometers</li>
                                <li>Original unit: kilometers</li>
                                <li>Desired unit: miles</li>
                            </ul>
                            <p class="card-text">The calculator will then convert the length and display the results. In this case, the result will be 621.371 miles.</p>
                            <p class="h4">Features</p>
                            <p class="card-text">The Length Converter has a number of features that make it a valuable tool:</p>
                            <ul>
                                <li>It is easy to use. Simply enter the required information and the calculator will do the rest.</li>
                                <li>It is accurate. The calculator uses the latest conversion rates to convert lengths.</li>
                                <li>It is versatile. The calculator can be used to convert lengths between a variety of units.</li>
                            </ul>
                            <p class="card-text">The Length Converter is a simple but powerful tool that can help you to convert lengths between different units. It is easy to use and accurate, making it a valuable resource for anyone who needs to convert lengths.</p>
                            <ul>
                                <li>The calculator supports a wide range of units, including meters, feet, inches, centimeters, kilometers, miles, and yards.</li>
                                <li>The calculator uses the latest conversion rates to ensure accuracy.</li>
                                <li>The calculator is free to use and does not require any registration.</li>
                            </ul>
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
        // Length conversion factors
        var conversionFactors = {
            mm: 1,
            cm: 10,
            m: 1000,
            km: 1000000,
            in: 25.4,
            ft: 304.8,
            yd: 914.4,
            mi: 1609344
        };

        // Perform length conversion
        function convertLength() {
            var inputValue = parseFloat($("#inputValue").val());
            var fromUnit = $("#fromUnit").val();
            var toUnit = $("#toUnit").val();

            if (isNaN(inputValue)) {
                $("#outputValue").val("");
                return;
            }

            var result = inputValue * conversionFactors[fromUnit] / conversionFactors[toUnit];
            $("#outputValue").val(result.toFixed(2));
        }

        // Convert length when the form is submitted
        $("#lengthConverterForm").submit(function(event) {
            event.preventDefault();
            convertLength();
        });
    });
</script>

@endsection