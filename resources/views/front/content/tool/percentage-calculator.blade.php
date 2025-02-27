@extends('front.layouts.main')

@section('title', 'Percentage Calculator (Online) - Percentage Formula')
@section('description', 'Percentage calculator is available online for free, at Primus Vidya. This percentage calculator computes a number of values involving percentages.')

@section('styles')
<link href="/web-assets/css/styles-tool.css" rel="stylesheet" rel="preload" as="style">
<meta name="description" content=""/>
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
                    <img class="card-img-top" src="/web-assets/images/tools/percentage-calculator.webp" alt="percentage calculator">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">Percentage Converter</h1>
                        <div id="main_container">
                            <form id="percentageCalculatorForm" class="py-2">
                                <div id="marksContainer">
                                    <div class="form-group">
                                        <label for="obtainedMarks1">Obtained Marks 1:</label>
                                        <input type="text" class="form-control obtained-marks" placeholder="Enter Obtained Marks" required>
                                        <label for="maxMarks1">Max Marks 1:</label>
                                        <input type="text" class="form-control max-marks" value="100">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button id="addMarksButton" type="button" class="btn btn-primary mx-2">Add More</button>
                                    <button type="submit" class="btn btn-primary btn-block mx-2">Calculate</button>
                                </div>
                                <div id="percentageResults" class="mt-4" style="display: none;">
                                    <label class="result-label">Percentage:</label>
                                    <input type="text" class="form-control result-value" id="percentageValue" readonly>
                                </div>
                            </form>
                            <h2 class="h4">About Percentage Calculator</h2>
                            <p class="card-text">Are you a student or a teacher looking to calculate the percentage of marks? Our Marks Percentage Calculator is designed specifically for you. With this handy tool, you can effortlessly determine the percentage of marks obtained in exams, quizzes, or any other academic assessments. Whether you're a high school student, a college student, or an educator, our calculator makes grading and analyzing results a breeze.</p>
                            <p class="h4">Here's how our Marks Percentage Calculator works:</p>
                            <ol>
                                <li><span class="fw-bold">Enter the values:</span> Begin by entering the total marks available for the assessment and the marks obtained by the student. For example, if the total marks for a test are 100 and the student scored 85, enter 100 as the total marks and 85 as the marks obtained.</li>
                                <li><span class="fw-bold">Calculate the percentage:</span> Once you've entered the values, click on the "Calculate" button, and our calculator will instantly determine the percentage of marks obtained by the student. The result will be displayed on the screen, making it easy to understand and use.</li>
                                <li>Our Marks Percentage Calculator is an indispensable tool for both students and educators. It simplifies the process of grading and provides a quick overview of a student's performance. It's particularly useful for tracking progress, setting goals, and identifying areas for improvement.</li>
                                <li>Whether you're a student aiming for academic success or an educator striving to assess student performance accurately, our Marks Percentage Calculator is here to assist you. Say goodbye to manual calculations and embrace efficiency and accuracy with our user-friendly calculator.</li>
                            </ol>
                            <p class="card-text">Start using our Marks Percentage Calculator today and streamline your grading process with ease!</p>
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
        // Add marks input fields
        $("#addMarksButton").click(function() {
            var count = $(".obtained-marks").length + 1;
            var inputField = '<div class="form-group">' +
                '<label for="obtainedMarks' + count + '">Obtained Marks ' + count + ':</label>' +
                '<input type="text" class="form-control obtained-marks" placeholder="Enter Obtained Marks">' +
                '<label for="maxMarks' + count + '">Max Marks ' + count + ':</label>' +
                '<input type="text" class="form-control max-marks" value="100"' +
                '</div>';
            $("#marksContainer").append(inputField);
        });

        // Calculate percentage
        $("#percentageCalculatorForm").submit(function(event) {
            event.preventDefault();
            var obtainedMarks = [];
            var maxMarks = [];

            $(".obtained-marks").each(function() {
                var marks = parseFloat($(this).val());
                if (!isNaN(marks)) {
                    obtainedMarks.push(marks);
                }
            });

            $(".max-marks").each(function() {
                var marks = parseFloat($(this).val());
                if (!isNaN(marks)) {
                    maxMarks.push(marks);
                }
            });

            if (obtainedMarks.length === 0 || maxMarks.length === 0) {
                $("#percentageValue").val("");
                $("#percentageResults").hide();
                return;
            }

            var totalObtainedMarks = obtainedMarks.reduce(function(acc, curr) {
                return acc + curr;
            }, 0);

            var totalMaxMarks = maxMarks.reduce(function(acc, curr) {
                return acc + curr;
            }, 0);

            if (totalMaxMarks === 0) {
                $("#percentageValue").val("");
                $("#percentageResults").hide();
                return;
            }

            var percentage = (totalObtainedMarks / totalMaxMarks) * 100;
            $("#percentageValue").val(percentage.toFixed(2) + "%");
            $("#percentageResults").show();
        });
    });
</script>

@endsection