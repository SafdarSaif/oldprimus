@extends('front.layouts.main')

@section('title', '')
@section('description', '')
@section('scripts')
@section('styles')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "University",
            "item": "https://www.primusvidya.com/top-universities-colleges"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Science Fiction",
            "item": "{{ URL::current() }}"
        }]
    }
</script>
@endsection


@section('content')

<section>
    <div class="banner-4 banner-section section">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-7">
                    <div class="mb-4">
                        <img src="new-assets/img/1676102844Chaudhary_Ranbir_Singh_University_logo.png" class="mb-3" alt="img" style="width: 100px;">
                        <p class="mb-3 content-1 h5 text-white">Chaudhary Ranbir Singh University Jind</p>
                        <p class="mb-4 content-2 tx-16">A prestigious university, Chaudhary Ranbir Singh University Jind was founded in 2014 and offers young aspirants a top-notch education.</p>
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#mypop" class="btn btn-lg btn-secondary"><i class="bi bi-arrow-right me-2"></i> Free Inquiry</a>
                </div>
                <div class="col-lg-5">
                    <div class="banner-bg mt-5 mt-lg-0">
                        <img src="/web-assets/images/main/university-page.webp" class="reseller-img" alt="LPU">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section uni-section">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="pb-2" id="about">
                            <h4 class="heading-title text-center">About <span class="tx-primary">Chaudhary Ranbir Singh University Jind </span></h4>
                            <p class="card-text">Lovely Professional University (LPU) is a top-ranking university in India in various academic disciplines, ranked by NIRF. LPU Online is no different as it is one of the top online education providers in India.</p>
                            <p>The university has various affiliations including recognition from University Grants Commission (UGC), All India Council for Technical Education (AICTE), and World Education Services (WES). The university has been ranked by NIRF, WURI, and The World University Rankings 2022. </p>
                            <p>The university offers online UG and PG courses in the domains of Management, Computer Applications, Commerce, Arts, and Science. The curriculum for every course is industry oriented as it has been designed by expert practitioners and experienced faculty. Apart from academic learning, the university conducts skilling classes conducted by a dedicated team of in-house professors. </p>
                            <p>The university has its own Learning Management System (LMS) that can be accessed as a mobile app which is quite user-friendly and has customized features to ensure students have a seamless learning experience. </p>
                            <p>There are live online classes with real-time interaction between the faculty and students to offer a structured opportunity to communicate. This is to make sure that online learners have an innovative classroom experience. However, the live lectures are recorded and made available for all to access to provide maximum flexibility to the students. </p>
                            <p>The university regards extra-curricular activities and encourages its online learners to join community service groups. This not just deviates students from mundane academics but also allows them to build strong networks and share their innovative thoughts with the community.</p>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="card bg-primary-transparent feature-card-14 overflow-hidden mh-195">
                                        <div class="card-body">
                                            <h5 class="fw-semibold text-white">Placement Assistance <i class="bi bi-arrow-right"></i> </h5>
                                            <p class="text-white">There are several career assistance services including CV workshops and mock interviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="card bg-primary-transparent feature-card-14 overflow-hidden mh-195">
                                        <div class="card-body">
                                            <h5 class="fw-semibold text-white">Latest Curriculum <i class="bi bi-arrow-right"></i></h5>
                                            <p class="text-white">The curriculum is industry-aligned and according to the latest trends</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="card bg-primary-transparent feature-card-14 overflow-hidden mh-195">
                                        <div class="card-body">
                                            <h5 class="fw-semibold text-white">Incubation Centres <i class="bi bi-arrow-right"></i> </h5>
                                            <p class="text-white">To help entrepreneurial avenues, there are incubation centres for seed capital and technology support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-2">
                                <h4 class="heading-title">Course Wise Updated Fee 2023</h4>
                                <div class="table-responsive">
                                    <table class="table borderless table-primary text-dark">
                                        <tbody>
                                            <tr>
                                                <td class="py-2 px-4 fw-bold">Course</td>
                                                <td class="py-2 px-4 fw-bold">Full Fees</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">BCA</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>125,250</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">MCA</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>97,000</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">B.Com</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>114,000</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">M.Com</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>70,000</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">BA</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>84,750</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">MA</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>56,500</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">M.Sc</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>56,500</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">MBA</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>124,000</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4">MBA (Dual)</td>
                                                <td class="py-2 px-4"><span style="font-family: monospace;">₹</span>142,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="heading-title">University Facts</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>LPU Online is approved by UGC-DEB to offer UG and PG degrees in the online mode.</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>The university has its own LMS which can be accessed as a mobile app as well.</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>The examinations are conducted in the online mode with remote proctoring using various Artificial Intelligence (AI) tools.</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>The students can access exclusive resources like case studies, scholarly articles, and journals.</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>Students can take up various additional online certification courses conducted by the university to enhance their resumes.</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>The students have the opportunity to undertake research endeavors as the university has world-class research facilities and infrastructure for the same.</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i>The university regularly conducts seminars, workshops, and mock interviews for professional enhancement and webinars by eminent speakers from relevant industries.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pb-2" id="approval">
                            <h4 class="heading-title">Approvals</h4>
                            <div class="pt-4 swiper companySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle bg-primary text-white tx-24">
                                                        <img height="100" width="100" class="img-fluid" src="web-assets/images/approvals/ugc-logo.jpg" alt="UGC">
                                                    </span>
                                                </div>
                                                <p class=" rounded">UGC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle bg-primary text-white tx-24">
                                                        <img height="100" width="100" class="img-fluid" src="web-assets/images/approvals/ugc-logo.jpg" alt="UGC">
                                                    </span>
                                                </div>
                                                <p class=" rounded">UGC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle bg-primary text-white tx-24">
                                                        <img height="100" width="100" class="img-fluid" src="web-assets/images/approvals/ugc-logo.jpg" alt="UGC">
                                                    </span>
                                                </div>
                                                <p class=" rounded">UGC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-2" id="courses">
                            <h4 class="heading-title">Courses <span class="tx-primary">(9 courses)</span></h4>
                            <div class="swiper courseswiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card mb-4 mx-2">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <a href="/"> <img src="/web-assets/temp/ncourse4.webp" alt="img" class="img-fliud w-100 rounded border"></a>
                                                </div>
                                                <div class="p-4">
                                                    <a href="/">
                                                        <p class="tx-16 mb-0 tx-primary">LPU Online</p>
                                                    </a>
                                                    <a href="/">
                                                        <p class="tx-22 fw-bold tx-color-default mb-1">MBA</p>
                                                    </a>
                                                    <a href="/">
                                                        <p>Right choice for right education</p>
                                                    </a>
                                                    <a href="/">
                                                        <p class="tx-primary">Read More <i class="bi bi-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card mb-4">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <a href="/"> <img src="/web-assets/temp/ncourse4.webp" alt="img" class="img-fliud w-100 rounded border"></a>
                                                </div>
                                                <div class="p-4">
                                                    <a href="/">
                                                        <p class="tx-16 mb-0 tx-primary">LPU Online</p>
                                                    </a>
                                                    <a href="/">
                                                        <p class="tx-22 fw-bold tx-color-default mb-1">MBA</p>
                                                    </a>
                                                    <a href="/">
                                                        <p>Right choice for right education</p>
                                                    </a>
                                                    <a href="/">
                                                        <p class="tx-primary">Read More <i class="bi bi-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-2" id="certificate">
                            <h4 class="heading-title">Sample Certificate from LPU Online</h4>
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <p>Earn a UGC-entitled degree after successful completion of the course: </p>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> UGC and AICTE recognized degree</li>
                                        <li class="mb-3"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Member of the Association of Indian Universities</li>
                                        <li class="mb-3"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Ranked 62nd By NIRF</li>
                                        <li class="mb-3"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Same as regular degree</li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="img_div">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <img src="web-assets/temp/lovely-professional-university_online-sample-certificate.jpg" class="img-fluid w-100 certi_img" alt="Sample Certificate">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-2" id="emi">
                            <h4 class="heading-title">EMI Details</h4>
                            <p>Nowadays, education loan and other financing options are available out there to easily pursue what the student wants to pursue with no financial stress. LPU online also offers students with these available options to easily finance their education.</p>
                            <div class="table-responsive py-2 tx-12">
                                <table style="border:none; border-collapse:collapse" width="100%">
                                    <tbody>
                                        <tr class="fw-bold">
                                            <td>
                                                <p>MBA</p>
                                            </td>
                                            <td>
                                                <p>Loan amount test</p>
                                            </td>
                                            <td>
                                                <p>6 months - 4.60%</p>
                                            </td>
                                            <td>
                                                <p>Total Interest Amount</p>
                                            </td>
                                            <td>
                                                <p>8 months - 5.95%</p>
                                            </td>
                                            <td>
                                                <p>Total Interest Amount</p>
                                            </td>
                                            <td>
                                                <p>10 months - 7.50%</p>
                                            </td>
                                            <td>
                                                <p>Total Interest Amount</p>
                                            </td>
                                            <td>
                                                <p>12 months - 8.95%</p>
                                            </td>
                                            <td>
                                                <p>Total Interest Amount</p>
                                            </td>
                                            <td>
                                                <p>24 months - 18%</p>
                                            </td>
                                            <td>
                                                <p>Total Interest Amount</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Full Fees</p>
                                            </td>
                                            <td>
                                                <p>₹129,400</p>
                                            </td>
                                            <td>
                                                <p>₹22,558.73</p>
                                            </td>
                                            <td>
                                                <p>₹5,952.40</p>
                                            </td>
                                            <td>
                                                <p>₹17,137.41</p>
                                            </td>
                                            <td>
                                                <p>₹7,699.30</p>
                                            </td>
                                            <td>
                                                <p>₹13,910.50</p>
                                            </td>
                                            <td>
                                                <p>₹9,705.00</p>
                                            </td>
                                            <td>
                                                <p>₹11,748.44</p>
                                            </td>
                                            <td>
                                                <p>₹11,581.30</p>
                                            </td>
                                            <td>
                                                <p>₹6,362.17</p>
                                            </td>
                                            <td>
                                                <p>₹23,292</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Semester fees</p>
                                            </td>
                                            <td>
                                                <p>₹35,550</p>
                                            </td>
                                            <td>
                                                <p>₹6,197.55</p>
                                            </td>
                                            <td>
                                                <p>₹1,635.30</p>
                                            </td>
                                            <td>
                                                <p>₹4,708.15</p>
                                            </td>
                                            <td>
                                                <p>₹2,115.23</p>
                                            </td>
                                            <td>
                                                <p>₹3,821.63</p>
                                            </td>
                                            <td>
                                                <p>₹2,666.25</p>
                                            </td>
                                            <td>
                                                <p>₹3,227.64</p>
                                            </td>
                                            <td>
                                                <p>₹3,181.73</p>
                                            </td>
                                            <td>
                                                <p>₹1,747.88</p>
                                            </td>
                                            <td>
                                                <p>₹6,399</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="fw-bold tx-18 text-dark mb-0">*EMI options available</p>
                        </div>
                        <div class="pb-2" id="process">
                            <h4 class="heading-title">Admission Process</h4>
                            <p>The admission procedure at LPU Online takes place in online mode. The fresh admission batches starts in every 6 months. The admissison session generally starts in the month of January and July of every year. Direct admission is done on the basis of one’s educational qualification, no other entrance exams are conducted for taking admission. The admission procedure 2023 for the online courses at LPU Online is as follows:</p>
                            <div class="step_list">
                                <ol>
                                    <li>
                                        <p>Register on the university admission portal.</p>
                                    </li>
                                    <li>
                                        <p>Purchase the application form by paying Rs. 1200/-.</p>
                                    </li>
                                    <li>
                                        <p>Carefully fill in the application form by providing all the necessary details.</p>
                                    </li>
                                    <li>
                                        <p>Upload the required documents in the prescribed size and format. Pay the application fee using a debit card, credit card, net banking, or any other accepted payment mode.</p>
                                    </li>
                                    <li>
                                        <p>Submit the completed application form.Wait for the university to confirm your admission.</p>
                                    </li>
                                </ol>

                            </div>
                        </div>
                        <div class="pb-2" id="pattern">
                            <h4 class="heading-title">Examination Pattern</h4>
                            <p>LPU Online conducts online proctored exams that are remotely monitored live using several Artificial Intelligence tools. The students can give the exams comfortably from their homes but they should have good internet connection and the right digital assets like computer, mic, and camera or a laptop with a functional camera and mic.</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#patternModal" class="btn btn-lg  btn-secondary me-2 mb-2"><i class="bi bi-arrow-right me-2"></i>View Exam Pattern</a>
                        </div>
                        <div class="pb-2" id="partners">
                            <h4 class="heading-title">Placement Partners</h4>
                            <p>Our students got an opportunity through: </p>
                            <ul class="list-unstyled">
                                <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Incubator for starting one's own startup</li>
                                <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Career mentorship for placement drives</li>
                                <li class="mb-2"> <i class="bi bi-check-circle-fill tx-secondary me-2"></i> Resume workshops and interview sessions</li>
                            </ul>
                            <h4 class="heading-title pb-2">Our students work at</h4>
                            <div class="py-2 bg-pattern-2 bg-image1 rounded">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-md-auto col-sm-12 mb-4 mb-xl-0">
                                        <div class="">
                                            <div class="ms-3">
                                                <p class="text-white mb-0 tx-28">50%</p>
                                                <p class="text-white tx-24 mb-0">Average Salary Hike</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-12 mb-4 mb-xl-0">
                                        <div class="">
                                            <div class="ms-3">
                                                <p class="text-white mb-0 tx-28">300+</p>
                                                <p class="text-white tx-24 mb-0">Hiring Partners</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-12 mb-4 mb-sm-0">
                                        <div class="">
                                            <div class="ms-3">
                                                <p class="text-white mb-0 tx-28">3X</p>
                                                <p class="text-white tx-24 mb-0">Increase in Interview Opportunities</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 swiper companySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle bg-primary text-white tx-24">
                                                        <img height="100" width="100" class="img-fluid" src="web-assets/images/approvals/ugc-logo.jpg" alt="UGC">
                                                    </span>
                                                </div>
                                                <p class=" rounded">UGC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle bg-primary text-white tx-24">
                                                        <img height="100" width="100" class="img-fluid" src="web-assets/images/approvals/ugc-logo.jpg" alt="UGC">
                                                    </span>
                                                </div>
                                                <p class=" rounded">UGC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bordeprimary feature-card-7 feature-card-7-primary mb-4 text-center">
                                            <div class="card-body approval-card">
                                                <div class="mb-3">
                                                    <span class="rounded-circle bg-primary text-white tx-24">
                                                        <img height="100" width="100" class="img-fluid" src="web-assets/images/approvals/ugc-logo.jpg" alt="UGC">
                                                    </span>
                                                </div>
                                                <p class=" rounded">UGC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-2" id="faq">
                            <h4 class="heading-title">Frequently asked questions?</h4>
                            <div class="accordion accordion-style-1" id="acc-style-1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                            1. Do payments made by students go directly into the university account?
                                        </button>
                                    </h2>
                                    <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                        <div class="accordion-body">Yes, the payments are done directly to the university. Being an informational portal we are just responsible for helping you through your journey of selecting the right university. The fees and any payment related to your course is supposed to be paid to the university on their official website.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                            2. How is We different from others ?
                                        </button>
                                    </h2>
                                    <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                        <div class="accordion-body">
                                            We at primus vidya are a one-stop solution for all who wish to pursue their higher education via online universities. We believe selecting the right university is the first step to achieving your career goals. This is why we :</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                            3. Is Primus Vidya's education counselling affordable?
                                        </button>
                                    </h2>
                                    <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                        <div class="accordion-body">
                                            Primus Vidya education counselling is cost-effective because
                                            we offer a budget service in which you do not need to pay anything upfront in
                                            order to schedule an appointment with us.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                            4. What education counsellors are available in Primus Vidya for their students?
                                        </button>
                                    </h2>
                                    <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                        <div class="accordion-body">
                                            Primus Vidya's education counsellors are always available to their students when they need them.
                                            You can contact the counsellors via phone, chat, or meet with them in person.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-2" id="other">
                            <h4 class="heading-title">Other Universities to Consider</h4>
                            <div class="swiper collegeSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card mb-4">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <a href="/"> <img src="/web-assets/temp/ncourse4.webp" height="200px" alt="img" class="img-fliud w-100 rounded border"></a>
                                                </div>
                                                <div class="px-4 py-2">
                                                    <a href="/">
                                                        <p class="tx-16 mb-0 tx-primary">LPU Online</p>
                                                    </a>
                                                    <a href="/">
                                                        <p class="tx-22 fw-bold tx-color-default mb-1">MBA</p>
                                                    </a>
                                                    <p class="tx-14 mb-0">Student Rating:</p>
                                                    <span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
                                                </div>
                                                <a href="#" class="btn btn-lg  btn-secondary w-100"><i class="bi bi-arrow-right me-2"></i>View Exam Pattern</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="d-block side_nav">
                    <div class=" pt-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav active" onclick="scrollToSection('about',this)"><span>About </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('approval',this)"><span>Approvals </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('courses',this)"><span>Courses </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('certificate',this)"><span>Sample Certificate </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('emi',this)"><span>EMI Options </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('process',this)"><span>Admission Process </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('pattern',this)"><span>Examination Pattern </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('partners',this)"><span>Admission Partners </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('faq',this)"><span>FAQs </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('other',this)"><span>Other Universities </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                            <li class="list-group-item border-0 px-0"><a href="#" class="tx-18 d-flex justify-content-between sideNav" onclick="scrollToSection('summary',this)"><span>Summary </span><span><i class="bi bi-arrow-right"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-pattern-1 bg-image3 uni-section" id="summary">
    <div class="container">
        <div class="heading-section">
            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Summary</span></div>
            <div class="heading-title">Lovely Professional University</div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 v_card">
                    <div class="card-body p-1">
                        <i class="bi bi-patch-check-fill text-success tx-50"></i>
                        <h5 class="">Approvals</h5>
                        <p class="tx-muted mb-2">Have approvals from: </p>
                        <div class="mb-2">
                            <span class="fs-13 border bg-primary text-white px-1 rounded">UGC</span>
                            <span class="fs-13 border bg-primary text-white px-1 rounded">AICTE</span>
                            <span class="fs-13 border bg-primary text-white px-1 rounded">AIU</span>
                            <span class="fs-13 border bg-primary text-white px-1 rounded">NIRF</span>
                            <span class="fs-13 border bg-primary text-white px-1 rounded">WES</span>
                            <span class="fs-13 border bg-primary text-white px-1 rounded">SACSCOC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 h_card">
                    <div class="card-body p-1">
                        <i class="bi bi-briefcase-fill text-primary tx-50"></i>
                        <h5 class="">Placement</h5>
                        <p class="tx-muted mb-2">Get placement with top brands & organizations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 text-center mb-4 d-none d-lg-block">
                <img src="new-assets/img/1676102844Chaudhary_Ranbir_Singh_University_logo.png" class="w-35 img-fluid" alt="img" width="200">
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 h_card">
                    <div class="card-body p-1">
                        <i class="bi bi-file-text-fill tx-secondary tx-50"></i>
                        <h5 class="">Sample Certificate</h5>
                        <p class="tx-muted mb-2">A sample certificate to see how your degree will look</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center feature-card-12 v_card">
                    <div class="card-body p-1">
                        <i class="bi bi-chat-right-text-fill text-success tx-50"></i>
                        <h5 class="">Reviews</h5>
                        <p class="tx-muted mb-2">Get reviews and testimonials from alumni and present students</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="web-assets/temp/lovely-professional-university_online-sample-certificate.jpg" class="img-fluid w-100" alt="Sample Certificate">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="patternModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Exam Pattern of <span class="tx-primary">LPU</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-circle-fill tx-primary"></i></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table borderless table-primary text-dark">
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 fw-bold">University</strong></td>
                                <td class="py-2 px-4">LPU</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">Exam Pattern</strong></td>
                                <td class="py-2 px-4">Online</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">MCQ Questions</strong></td>
                                <td class="py-2 px-4">40</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">Marks / Question</strong></td>
                                <td class="py-2 px-4">1</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">Subjective Questions</strong></td>
                                <td class="py-2 px-4">4, To be attempted 3</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">Project (Last Sem)</strong></td>
                                <td class="py-2 px-4">100</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">Marks / Question</strong></td>
                                <td class="py-2 px-4">10</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">Assignment Marks</strong></td>
                                <td class="py-2 px-4">30</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 fw-bold">Passing Marks</strong></td>
                                <td class="py-2 px-4">40%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>






@include('front.parts.support')
@endsection

@section('scripts')
<script>
    function scrollToSection(sectionId, button) {
        var target = document.getElementById(sectionId);
        target.scrollIntoView({
            behavior: 'smooth',
        });
        // Add active class to the clicked button
        var buttons = document.querySelectorAll('.sideNav');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('active');
        }
        button.classList.add('active');
    }
</script>
@endsection