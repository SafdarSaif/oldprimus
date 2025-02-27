<section class="section">
    <div class="container">
        <div class="heading-section">
            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ'S</span></div>
            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span> </div>
            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
        </div>
        <div class="accordion accordion-style-1" id="acc-style-1">
            @foreach ($coursefaq as $Coursefaqs)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-{{ $Coursefaqs->id }}" aria-expanded="false" aria-controls="faq-{{ $Coursefaqs->id }}">
                            {{ $Coursefaqs->question }}
                        </button>
                    </h2>
                    <div id="faq-{{ $Coursefaqs->id }}" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                        <div class="accordion-body">{!! $Coursefaqs->answer !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


        {{-- <section>
            <div class="container">
                <div class="text-center">
                    <h2>FAQ'S</h2>
                    <p>We Are Here To Help You<br>Browse Through The Most Frequently Asked Questions</p>
                </div>

                <div class="accordion " id="accordionExample">
                    @foreach ($coursefaq as $Coursefaqs)
                        <div class="accordion-item mt-2 mb-2 ">
                            <p class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-white collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $Coursefaqs->id }}"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    {{ $Coursefaqs->question }}
                                </button>
                            </p>
                            <div id="collapse{{ $Coursefaqs->id }}" class="accordion-collapse collapse"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>{!! $Coursefaqs->answer !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section> --}}
