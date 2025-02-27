@extends('front.layouts.main')

@section('title', 'Weight Converter')
@section('description', 'Convert between different weight units with our Weight Converter tool')

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
                    <img class="card-img-top" src="/web-assets/images/tools/weight-converter.webp" alt="weight converter">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">Weight Converter</h1>
                        <div id="main_container">
                            <form id="weightConverterForm" class="py-2">
                                <div class="form-group">
                                    <label for="inputValue">Value:</label>
                                    <input type="text" class="form-control" id="inputValue" placeholder="Enter Value" required>
                                </div>
                                <div class="form-group">
                                    <label for="fromUnit">From:</label>
                                    <select class="form-control" id="fromUnit">
                                        <option value="mg">Milligrams</option>
                                        <option value="g">Grams</option>
                                        <option value="kg">Kilograms</option>
                                        <option value="oz">Ounces</option>
                                        <option value="lb">Pounds</option>
                                        <option value="t">Metric Tons</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="toUnit">To:</label>
                                    <select class="form-control" id="toUnit">
                                        <option value="mg">Milligrams</option>
                                        <option value="g">Grams</option>
                                        <option value="kg">Kilograms</option>
                                        <option value="oz">Ounces</option>
                                        <option value="lb">Pounds</option>
                                        <option value="t">Metric Tons</option>
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
                            <h2 class="h4">About Weight Converter</h2>
                            <p class="card-text">This weight converter allows you to convert between different weight units. Simply enter the weight in the desired unit and the converter will display the equivalent value in all other units.</p>
                            <p class="h4">Examples:</p>
                            <ul>
                                <li>To convert 100 kilograms to pounds, enter 100 in the "Kilograms" field and click the "Convert" button. The converter will display the equivalent value of 220.462262185 pounds</li>
                                <li>To convert 16 ounces to grams, enter 16 in the "Ounces" field and click the "Convert" button. The converter will display the equivalent value of 453.59237 grams.</li>
                            </ul>
                            <p class="h4">Features:</p>
                            <ul>
                                <li>The converter supports a wide range of weight units, including kilograms, pounds, ounces, grams, stones, and more.</li>
                                <li>The converter is easy to use and can be accessed from any web browser.</li>
                                <li>The converter is free to use.</li>
                            </ul>
                            <p class="h4">How to Use:</p>
                            <ol>
                                <li>Enter the weight in the desired unit.</li>
                                <li>Click the "Convert" button.</li>
                                <li>The converter will display the equivalent value in all other units.</li>
                            </ol>
                            <p class="card-text">The Weight Converter is a simple and easy-to-use tool that allows you to convert between different weight units. It is free to use and can be accessed from any web browser.</p>
                            <p class="h4">Additional Information:</p>
                            <p class="card-text">The converter uses the following conversion factors:</p>
                            <ul>
                                <li>1 kilogram = 2.20462262185 pounds</li>
                                <li>1 pound = 0.45359237 kilograms</li>
                                <li>1 ounce = 28.349523125 grams</li>
                                <li>1 gram = 0.0352739619 ounces</li>
                                <li>1 stone = 6.35029318 kilograms</li>
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
        // Weight conversion factors
        var conversionFactors = {
            mg: 1,
            g: 1000,
            kg: 1000000,
            oz: 28349.5,
            lb: 453592,
            t: 1000000000
        };

        // Perform weight conversion
        function convertWeight() {
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

        // Convert weight when the form is submitted
        $("#weightConverterForm").submit(function(event) {
            event.preventDefault();
            convertWeight();
        });
    });
</script>

@endsection