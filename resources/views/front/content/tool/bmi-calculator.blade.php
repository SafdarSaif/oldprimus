@extends('front.layouts.main')

@section('title', 'Calculate Your Body Mass Index - BMI Calculator')
@section('description', 'BMI (Body Mass Index) calculator is available online for free, at Primus Vidya. This bmi calculator gives out the BMI value and categorizes BMI based on provided information from WHO and CDC for both adults and children.')
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
                <img class="card-img-top" src="/web-assets/images/tools/bmi-calculator.webp" alt="bmi calculator">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">BMI Calculator</h1>
                        <div id="main_container">
                            <form id="bmiConverterForm" class="py-2">
                                <div class="form-group">
                                    <label for="weight">Weight (kg):</label>
                                    <input type="number" class="form-control" id="weight" placeholder="Enter weight in kg">
                                </div>
                                <div class="form-group">
                                    <label for="height">Height (cm):</label>
                                    <input type="number" class="form-control" id="height" placeholder="Enter height in cm">
                                </div>
                                <div class="text-center">
                                    <button type="button" id="calculateButton" class="btn btn-primary btn-block">Calculate</button>
                                </div>
                            </form>
                            <div id="bmiResults" class="mt-4" style="display: none;">
                                <label class="result-label">Results:</label>
                                <div>
                                    <label for="bmi">BMI:</label>
                                    <input type="text" class="form-control result-value" id="bmi" readonly>
                                </div>
                                <div class="my-3">
                                    <label for="category">Category:</label>
                                    <input type="text" class="form-control result-value" id="category" readonly>
                                </div>
                            </div>
                            <h2 class="h4">Welcome to our BMI (Body Mass Index) Calculator!</h2>
                            <p class="card-text">Understanding your body mass index is crucial when it comes to maintaining a healthy lifestyle. Our BMI calculator is a powerful tool designed to help you assess your body composition quickly and accurately. Whether you're embarking on a fitness journey, monitoring your weight, or seeking guidance on maintaining a healthy weight, our BMI calculator is here to provide you with valuable insights.</p>
                            <p class="h4">What is BMI?</p>
                            <p class="card-text">BMI, or Body Mass Index, is a numerical value calculated using your height and weight. It is widely used as a screening tool to determine whether an individual is underweight, within a healthy weight range, overweight, or obese. BMI provides a general indication of body fatness and helps assess potential health risks associated with weight.</p>
                            <p class="h4">How does our BMI Calculator work?</p>
                            <p class="card-text">Using our BMI calculator is simple and straightforward. Follow these steps to calculate your BMI:</p>
                            <p class="card-text"><span class="fw-bold">Enter your information:</span> Begin by inputting your height and weight in the provided fields. Make sure to enter accurate measurements to obtain the most reliable results.</p>
                            <p class="card-text"><span class="fw-bold">Choose the unit of measurement:</span> Select the appropriate unit of measurement for your height and weight. You can choose between metric units (centimeters and kilograms) or imperial units (feet/inches and pounds).</p>
                            <p class="card-text"><span class="fw-bold">Calculate your BMI:</span> Once you've entered your information, click on the "Calculate" button. Our BMI calculator will instantly process the data and generate your BMI value.</p>
                            <p class="h4">BMI Categories:</p>
                            <p class="card-text">After calculating your BMI, the result will fall into one of the following categories:</p>
                            <p class="card-text"><span class="fw-bold">Underweight:</span> A BMI below 18.5 indicates that you may be underweight and should consult a healthcare professional for guidance.</p>
                            <p class="card-text"><span class="fw-bold">Normal weight:</span> A BMI between 18.5 and 24.9 suggests that your weight is within a healthy range for your height.</p>
                            <p class="card-text"><span class="fw-bold">Overweight:</span> A BMI between 25 and 29.9 suggests that you are overweight. It's advisable to consider adopting healthier lifestyle habits.</p>
                            <p class="card-text"><span class="fw-bold">Obesity:</span> A BMI of 30 or higher indicates obesity, which can increase the risk of various health conditions. Seeking guidance from a healthcare professional is recommended.</p>
                            <p class="card-text">Our BMI calculator provides you with valuable information about your weight status, helping you make informed decisions regarding your health and well-being. It serves as a starting point for understanding your body composition and can be used as a reference tool in collaboration with healthcare professionals or fitness experts.</p>
                            <p class="card-text">Remember, BMI is a screening tool and doesn't account for individual factors such as muscle mass, bone density, or distribution of fat. For a comprehensive assessment of your health, it's always recommended to consult with a healthcare professional who can provide personalized advice and guidance.</p>
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
        // Calculate BMI and display the results
        function calculateBMI() {
            var weight = parseFloat($("#weight").val());
            var height = parseFloat($("#height").val());

            if (!isNaN(weight) && !isNaN(height) && weight > 0 && height > 0) {
                var bmi = weight / ((height / 100) * (height / 100));
                $("#bmi").val(bmi.toFixed(2));

                var category = getBMICategory(bmi);
                $("#category").val(category);

                $("#bmiResults").show();
            } else {
                $("#bmi").val("");
                $("#category").val("");
                $("#bmiResults").hide();
            }
        }

        // Get the BMI category based on the BMI value
        function getBMICategory(bmi) {
            if (bmi < 18.5) {
                return "Underweight";
            } else if (bmi >= 18.5 && bmi < 25) {
                return "Normal weight";
            } else if (bmi >= 25 && bmi < 30) {
                return "Overweight";
            } else {
                return "Obese";
            }
        }

        // Calculate BMI when the "Calculate" button is clicked
        $("#calculateButton").click(function() {
            calculateBMI();
        });
    });
</script>
@endsection