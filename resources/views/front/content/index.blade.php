@extends('front.layouts.home')
@section('title', 'Most Trusted Education Consultancy in Regular/Online higher education')
@section('description', 'Primusvidya is known as one of the best learning platform of india')
@section('scripts-top')
@section('content')
@include('front.parts.banner')
@include('front.parts.course')
@include('front.parts.graphic')
{{-- @include('front.parts.notice') --}}
@include('front.parts.why')
@include('front.parts.authorization')
@include('front.parts.diff')
{{-- @include('front.parts.data') --}}
{{-- @include('front.parts.counter') --}}
@include('front.parts.steps')
@include('front.parts.process')
@include('front.parts.testimonials')
@include('front.parts.support')  
{{-- @include('front.parts.highlight') --}}
<section class="section">
    <div class="container">
        <div class="heading-section">
            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ'S</span></div>
            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span> </div>
            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
        </div>
        <div class="accordion accordion-style-1" id="acc-style-1">
            <div class="accordion-item">
                <p class="accordion-header h2">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                        1. Do payments made by students go directly into the university account?
                    </button>
                </p>
                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                    <div class="accordion-body">Yes, the payments are done directly to the university. Being an informational portal we are just responsible for helping you through your journey of selecting the right university. The fees and any payment related to your course is supposed to be paid to the university on their official website.</div>
                </div>
            </div>

            <div class="accordion-item">
                <p class="accordion-header h2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                        2. How is We different from others ?
                    </button>
                </p>
                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                    <div class="accordion-body">
                        We at primus vidya are a one-stop solution for all who wish to pursue their higher education via online universities. We believe selecting the right university is the first step to achieving your career goals. This is why we :</div>
                </div>
            </div>

            <div class="accordion-item">
                <p class="accordion-header h2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                        3. Is Primus Vidya's education counselling affordable?
                    </button>
                </p>
                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                    <div class="accordion-body">
                        Primus Vidya education counselling is cost-effective because 
                        we offer a budget service in which you do not need to pay anything upfront in 
                        order to schedule an appointment with us.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <p class="accordion-header h2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                        4. What education counsellors are available in Primus Vidya for their students?
                    </button>
                </p>
                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                    <div class="accordion-body">
                        Primus Vidya's education counsellors are always available to their students when they need them.
                        You can contact the counsellors via phone, chat, or meet with them in person.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>       
@endsection

@section('scripts')
@endsection
      