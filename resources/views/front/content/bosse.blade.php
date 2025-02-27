@extends('front.layouts.main')

@section('title', 'BOSSE')
@section('description', 'Board of Open Schooling and Skill Education')
@section('scripts-top')
@section('styles')
<link href="/web-assets/css/styles-bosse.css" rel="stylesheet" rel="preload" as="style">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "University",
            "item": "https://www.primusvidya.com/"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "BOSSE",
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
                        <img src="/web-assets/logoBOSSE.webp" class="mb-3" alt="Bosse Logo" style="width: 100px;">
                        <h1 class="mb-3 content-1 h5 text-white">Board of Open Schooling and Skill Education (BOSSE)</h1>
                        <p class="mb-4 content-2 tx-16">A prestigious university, Chaudhary Ranbir Singh University Jind was founded in 2014 and offers young aspirants a top-notch education.</p>
                    </div>
                    <button data-bs-toggle="modal" data-bs-target="#mypop" class="btn btn-lg btn-secondary text-black"><i class="bi bi-arrow-right me-2"></i> Free Inquiry</button>
                </div>
                <div class="col-lg-5">
                    <div class="banner-bg mt-5 mt-lg-0">
                        <img src="/web-assets/images/main/university-page.webp" class="reseller-img" alt="University">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-pattern-1 bg-gray-100 overflow-hidden">
    <div class="container card">
        <div class="card-body">
            <div class="pb-2" id="about">
                <h2 class="heading-title h4 text-center">About <span class="tx-primary">Board of Open Schooling and Skill Education (BOSSE)</span></h2>
                <p class="card-text">
                    The Board of Open Schooling and Skill Education (BOSSE), Sikkim, is an open school board designed to meet the diverse academic needs of different groups of students up to pre-degree level, including secondary/senior secondary, as well as skill training and vocational education. BOSSE is an open school education authority Sikkim established under the Sikkim Legislative Assembly Act No. 14 of 2020, passed on 21.09.2020, to promote and disseminate open school education at the state and national levels.
                </p>
                <p class="card-text">
                    BOSSE has been granted Equivalence by AIU (Association of Indian Universities) for the purposes of higher education and employment. This means that BOSSE graduates can be admitted to all universities, colleges and
                    institutions of higher learning throughout the country and abroad.
                </p>
                <p class="card-text">
                    BOSSE is also recognised by NIOS (National Institute of Open Schooling), the Ministry of Education, Government of India, as an open schooling institution. Thus, BOSSE&#39;s certificates are as recognised as those of other school boards - both at the national and state levels.
                </p>
                <p class="card-text">
                    The Board of Open Schooling and Skill Education (BOSSE) aims to promote and strengthen open schooling and create pathways to higher educational attainment nationwide. With a flexible education system that combines academic and vocational programmes, BOSSE aims to universalize education and create equity and justice in society.
                </p>
                <p class="card-text">
                    The Board of Open Schooling and Skill Education (BOSSE) offers interested learners the opportunity to complete the following courses/programmes through open and distance learning.
                </p>

                <p class="h4">BOSSE's <span class="tx-primary"> Secondary Programme (Class 10<sup>th</sup>)</span></p>
                <p class="h5 my-3">List of Subjects for Group A (Language Subjects)</p>
                <div class="d-flex justify-content-center mb-2">
                    <div class="col-md-8 col-12">
                        <div class="table-responsive border br-7">
                            <table class="table table-bordered pricing-table mb-0 border-hidden">
                                <thead>
                                    <tr class="bg-primary">
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white text-center">Serial Number</p>

                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject Code</p>
                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">1</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">101</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Hindi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">2</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">102</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">English</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">3</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">103</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Urdu</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">4</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">104</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Sanskrit</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">5</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">105</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Bengali</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">6</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">106</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Punjabi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">7</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">107</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Assamese</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">8</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">108</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Nepali</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">9</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">109</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Odia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">10</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">110</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Kannada</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">11</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">111</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Malayalam</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">12</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">112</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Tamil</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">13</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">113</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Telugu</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="h5 my-3">List of Subjects for Group B (Non Language Subjects)</p>
                <div class="d-flex justify-content-center mb-2">
                    <div class="col-md-8 col-12">
                        <div class="table-responsive border br-7">
                            <table class="table table-bordered pricing-table mb-0 border-hidden">
                                <thead>
                                    <tr class="bg-primary">
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white text-center">Serial Number</p>

                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject Code</p>
                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">1</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">201</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Mathematics*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">2</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">202</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Science &amp; Technology*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">3</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">203</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Social Science</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">4</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">204</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Economics</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">5</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">205</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Business Studies</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">6</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">206</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Home Science*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">7</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">207</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Psychology*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">8</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">208</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Indian Culture &amp; Heritage*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">9</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">209</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Accountancy*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">10</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">210</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Painting*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">11</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">211</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Data Entry Operations*</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="card-text text-center">Students need to pick five subjects, one or two subjects from Group A (Languages) and rest from group B (Non Language Subjects)</p>
                <p class="card-text text-center">Subjects with asterisk* are practical subjects.</p>
                <p class="h4">BOSSE's <span class="tx-primary"> Secondary Programme (Class 12<sup>th</sup>)</span></p>
                <p class="h5 my-3">List of Subjects for Group A (Language Subjects)</p>
                <div class="d-flex justify-content-center mb-2">
                    <div class="col-md-8 col-12">
                        <div class="table-responsive border br-7">
                            <table class="table table-bordered pricing-table mb-0 border-hidden">
                                <thead>
                                    <tr class="bg-primary">
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white text-center">Serial Number</p>

                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject Code</p>
                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">1</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">301</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Hindi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">2</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">302</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">English</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">3</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">303</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Urdu</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">4</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">304</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Sanskrit</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">5</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">305</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Bengali</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">6</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">306</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Odia</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">7</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">307</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Punjabi</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">8</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">308</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Kannada</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">9</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">309</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Malayalam</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">10</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">310</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Tamil</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">11</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">311</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Telugu</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="h5 my-3">List of Subjects for Group B (Non Language Subjects)</p>
                <div class="d-flex justify-content-center mb-2">
                    <div class="col-md-8 col-12">
                        <div class="table-responsive border br-7">
                            <table class="table table-bordered pricing-table mb-0 border-hidden">
                                <thead>
                                    <tr class="bg-primary">
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white text-center">Serial Number</p>

                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject Code</p>
                                        </th>
                                        <th class="border-white-2">

                                            <p class="mb-1 text-white">Subject</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">1</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">401</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Mathematics*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">2</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">402</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Home Science*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">3</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">403</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Psychology*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">4</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">404</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Geography*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">5</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">405</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Economics</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">6</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">406</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Business Studies</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">7</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">407</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Painting*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">8</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">408</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Data Entry Operations*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">9</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">409</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Early Childhood care and Education*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">10</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">410</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Physics*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">11</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">412</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">History</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">12</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">413</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Environmental Science*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">13</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">414</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Library &amp; Information Science*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">14</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">415</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Chemistry*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">15</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">416</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Political Science</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">16</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">417</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Mass Communication*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">17</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">418</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Biology*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">18</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">419</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Accountancy</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">19</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">420</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Introduction to Law</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">20</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">421</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Computer Science*</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">21</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">422</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Sociology</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">22</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">423</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Tourism</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pricing-feature">
                                            <p class="mb-0">23</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">424</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">Physical Education &amp; Yoga*</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="h5 my-3">Mix of Vocational Subjects with Academic Subjects</p>
                <p class="card-text">BOSSE gives a mix of professional and scholastic subjects to make the course educational programs more successful and vocation situated. Students can pick their Vocational Subjects from the Table given beneath:</p>
                <p class="card-text">List of Vocational Education Courses offered by BOSSE in combination with Academic Courses</p>
            </div>
        </div>
    </div>
</section>







@include('front.parts.support')
@endsection

@section('scripts')
@endsection