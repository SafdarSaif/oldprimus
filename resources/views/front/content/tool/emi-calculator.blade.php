@extends('front.layouts.main')

@section('title', 'Education Loan EMI Calculator - Interest Rates All Bank 2023')
@section('description','Use our education loan EMI calculator to estimate your monthly payments and total interest payable . Compare interest rates across all banks and make an informed decision.' )
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
                    <img class="card-img-top" src="/web-assets/images/tools/emi-calculator.webp" alt="emi calculator">
                    <div class="card-body pt-3">
                        <h1 class="h3 text-center">EMI Calculator</h1>
                        <div id="main_container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="loanAmount">Loan Amount:</label>
                                        <input type="text" class="form-control" id="loanAmount" placeholder="Loan Amount" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="interestRate">Interest Rate (%):</label>
                                        <input type="text" class="form-control" id="interestRate" placeholder="Interest Rate" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="tenure">Tenure (in months):</label>
                                    <div class="d-flex align-items-center">
                                        <input type="range" class="form-control-range w-100" id="tenure" min="1" max="120" value="0" required>
                                        <span id="tenureValue" class="ml-3">0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="emi">You will have to pay a monthly EMI of:</label>
                                    <input type="text" class="form-control" id="emi" readonly>
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="totalAmount">You will have to pay a total amount of:</label>
                                    <input type="text" class="form-control" id="totalAmount" readonly>
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="interestAmount">Of which, the interest amount is:</label>
                                    <input type="text" class="form-control" id="interestAmount" readonly>
                                </div>
                            </div>
                            <h2 class="h4">About EMI Calculator</h2>
                            <p class="card-text">An EMI calculator is a financial tool that can be used to calculate your monthly installment (EMI) for a loan. It is a simple and easy-to-use tool that can help you to determine how much you will need to pay each month for your loan.</p>
                            <p class="h4">How to Use the Calculator</p>
                            <p class="card-text">To use the EMI calculator, simply enter the following information:</p>
                            <ul>
                                <li>The loan amount</li>
                                <li>The interest rate</li>
                                <li>The loan tenure</li>
                            </ul>
                            <p class="card-text">The calculator will then calculate your EMI and display the results.</p>
                            <p class="h4">Examples</p>
                            <p class="card-text">Here are some examples of how the EMI calculator can be used:</p>
                            <p class="card-text">To calculate the EMI for a loan of ₹10 lakhs with an interest rate of 10% for a tenure of 10 years, enter the following information in the calculator:</p>
                            <ul>
                                <li>Loan amount: ₹10 lakhs</li>
                                <li>Interest rate: 10%</li>
                                <li>Loan tenure: 10 years</li>
                            </ul>
                            <p class="card-text">The calculator will then calculate your EMI and display the results. In this case, your EMI will be ₹10,000 per month.</p>
                            <p class="card-text">To calculate the EMI for a loan of ₹5 lakhs with an interest rate of 8% for a tenure of 5 years, enter the following information in the calculator:</p>
                            <ul>
                                <li>Loan amount: ₹5 lakhs</li>
                                <li>Interest rate: 8%</li>
                                <li>Loan tenure: 5 years</li>
                            </ul>
                            <p class="card-text">The calculator will then calculate your EMI and display the results. In this case, your EMI will be ₹10,400 per month.</p>
                            <p class="h4">Features</p>
                            <p class="card-text">The EMI calculator has a number of features that make it a valuable tool:</p>
                            <ul>
                                <li>It is easy to use. Simply enter the required information and the calculator will do the rest.</li>
                                <li>It is accurate. The calculator uses the latest interest rates and loan tenures to calculate your EMI.</li>
                                <li>It is versatile. The calculator can be used to calculate EMI for a variety of loans, including home loans, car loans, and personal loans.</li>
                            </ul>
                            <p class="card-text">The EMI calculator is a simple but powerful tool that can help you to determine how much you will need to pay each month for your loan. It is easy to use and accurate, making it a valuable resource for anyone who is considering taking out a loan.</p>
                            <ul>
                                <li>The calculator is based on the compund interest formula.</li>
                                <li>The calculator can be used to calculate EMI for a variety of currencies.</li>
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
        // Calculate EMI, Total Amount, and Interest Amount
        function calculateEMI() {
            var loanAmount = parseFloat($("#loanAmount").val());
            var interestRate = parseFloat($("#interestRate").val());
            var tenure = parseInt($("#tenure").val());

            // Check if the input values are valid numbers
            if (isNaN(loanAmount) || isNaN(interestRate) || isNaN(tenure)) {
                $("#emi").val("Please all parameters");
                $("#totalAmount").val("Please all parameters");
                $("#interestAmount").val("Please all parameters");
                return;
            }

            var monthlyInterestRate = interestRate / 12 / 100;
            var emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, tenure)) / (Math.pow(1 + monthlyInterestRate, tenure) - 1);
            var totalAmount = emi * tenure;
            var interestAmount = totalAmount - loanAmount;

            $("#emi").val(emi.toFixed(2));
            $("#totalAmount").val(totalAmount.toFixed(2));
            $("#interestAmount").val(interestAmount.toFixed(2));
        }

        // Calculate EMI when the Calculate button is clicked
        $("#calculateBtn").click(function(event) {
            event.preventDefault();
            calculateEMI();
        });

        // Calculate EMI when the tenure slider value changes
        $("#tenure").on("input", function() {
            var tenureValue = $(this).val();
            $("#tenureValue").text(tenureValue);
            calculateEMI();
        });
    });
</script>


@endsection