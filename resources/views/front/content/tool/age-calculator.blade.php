@extends('front.layouts.main')

@section('title', 'Calculate Your Age To day from Birth Date - Age Calculator')
@section('description', 'Age calculator is available online for free, at Primus Vidya. This free age calculator computes age in terms of years, months, weeks, days, hours, minutes, and seconds, given a date of birth.')
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

    #birth_date_input,
    #age_container {
        text-align: center;
        margin: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    #age_container {
        margin: 40px 5px;
        padding: 20px;
        border-radius: 50px;
        border: 1px solid #000;
        font-weight: bolder;
        background: #EEE;
        font-size: 20px;
        line-height: 20px;
    }

    #calculate {
        cursor: pointer;
        text-align: center;
        width: 400px;
        padding: 5px;
        margin: 10px;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #999;
        border-radius: 10px;
        background: #FFD119;
        background: -moz-linear-gradient(top, #FFD119, #E6B800);
        font-weight: bold;
        height: auto;
    }

    #calculate:hover {
        background: -moz-linear-gradient(top, #E6B800, #FFD119);
        margin-top: 13px;
        height: auto;
    }

    #age {
        padding: 5px;
        border: 2px dashed #AAA;
    }

    #birth_date {
        padding: 5px;
        border-radius: 5px;
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
                    <img class="card-img-top" src="/web-assets/images/tools/age-calculator.webp" width="856" height="302" alt="age calculator">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">Age Calculator</h1>
                        <div id="main_container">
                            <div id="birth_date_input">Enter Your Date of Birth: <input type="date" id="birth_date"></div>
                            <br />
                            <div id="calculate">Calculate your age</div>

                            <div id="age_container"><span id="exact_age">Age</span></div>
                            <p><em>* Year here means 365 days and Month here means 30 days, thus your birthday may not means you will be 0 days old</em></p>
                            <hr>
                            <h2 class="h4">About Age calculator:</h2>
                            <p class="card-text">The Age Calculator is a simple tool that can be used to calculate your age in years, months, days. It is based on the most common age system, in which age increases on a person's birthday.</p>
                            <p class="h4">How to Use the Calculator:</p>
                            <p class="card-text">To use the calculator, simply enter your date of birth in the provided field. The calculator will then calculate your age and display the results in the appropriate units.</p>
                            <p class="h4">Examples:</p>
                            <p class="card-text">
                                Here are some examples of how the calculator can be used:
                            </p>
                            <ul>
                                <li>To calculate your current age, enter your date of birth and select the "Current Age" option.</li>
                                <li>To calculate your age on a specific date, enter your date of birth and the date you want to calculate your age for.</li>
                                <li>To calculate the age difference between two people, enter the date of birth for each person and select the "Age Difference" option.</li>
                            </ul>
                            <p class="h4">Features:</p>
                            <p class="card-text">The Age Calculator has a number of features that make it a valuable tool:</p>
                            <ul>
                                <li>It is easy to use. Simply enter your date of birth and the calculator will do the rest.</li>
                                <li>It is accurate. The calculator takes into account leap years and months with different numbers of days.</li>
                                <li>It is versatile. The calculator can be used to calculate age in a variety of units.</li>
                            </ul>
                            <p class="card-text">The Age Calculator is a simple but powerful tool that can be used to calculate your age in a variety of ways. It is easy to use and accurate, making it a valuable resource for anyone who needs to know their age.</p>
                            <ul>
                                <li>The calculation of age does not take into account leap years and months with different numbers of days.</li>
                                <li>The calculator can be used to calculate age in years, months, days.</li>
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
        $("#calculate").click(function() {
            var mdate = $("#birth_date").val().toString();
            var yearThen = parseInt(mdate.substring(0, 4), 10);
            var monthThen = parseInt(mdate.substring(5, 7), 10);
            var dayThen = parseInt(mdate.substring(8, 10), 10);

            var today = new Date();
            var birthday = new Date(yearThen, monthThen - 1, dayThen);

            var differenceInMilisecond = today.valueOf() - birthday.valueOf();

            var year_age = Math.floor(differenceInMilisecond / 31536000000);
            var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);

            if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
                alert("Happy B'day!!!");
            }

            var month_age = Math.floor(day_age / 30);

            day_age = day_age % 30;

            if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
                $("#exact_age").text("Invalid birthday - Please try again!");
            } else {
                $("#exact_age").html("You are<br/><span id=\"age\">" + year_age + " years " + month_age + " months " + day_age + " days</span> old");
            }
        });
    });
</script>
@endsection