@extends('front.layouts.main')

@section('title', 'What Makes Us Stand Out')
@section('description', 'why Primusvidya')
@section('scripts-top')
<link href="/web-assets/css/styles-why.css" rel="stylesheet" rel="preload" as="style">
<script type="application/ld+json">
		{
    	"@context": "https://schema.org/",
        "@type": "WebPage",
        "name": "why Primusvidya",
        "url": "{{ URL::current() }}",
        
        "speakable":
        {
         "@type": "SpeakableSpecification",
         "cssSelector": ["headerBlock"]
         }
        }
</script>
@endsection
@section('content')
<section>
    <div class="section banner-4 banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mb-3 content-1 h5 text-white">What Makes Us <span class="tx-info-dark position-relative">Stand Out?<span class="br-bottom-before"></span></span></h1>
                        <p class="mb-4 content-2">Empowering you with UGC-DEB Approved online University Listed, primusvidya is a distinguished Plateform for Online/Distance University/Colleges
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section bg-pattern-1 bg-gray-100">
    <div class="container">
       <div class="heading-section">
          <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Services</span></div>
          <h2 class="heading-title">Services We <span class="tx-primary">Offer</span> </h2>
          <div class="heading-description">Checkout Our Services</div>
       </div>
       <div class="row">
          <div class="col-lg-3 col-md-6">
             <div class="card reveal feature-card-15 feature-card-17 primary">
                <div class="card-body">
                   <div class="d-flex align-items-center">
                      <div class="flex-grow-1 text-center mt-3">
                         <h5 class="mb-2">Secured Data</h5>
                         <p class="mb-0 op-8">We respect your privacy i.e we do not share or sell your personal information.</p> 
                      </div>
                      <div class="icon bg-gray-100">
                         <span class="avatar bg-primary-gradient rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" viewBox="0 0 128 128">
                               <path fill-rule="evenodd" d="M113.823 104.595c-1.795-1.478-3.629-2.921-5.308-4.525-1.87-1.785-3.045-3.944-2.789-6.678.147-1.573-.216-2.926-2.113-3.452.446-1.154.864-1.928 1.033-2.753.188-.92.178-1.887.204-2.834.264-9.96-3.334-18.691-8.663-26.835-2.454-3.748-5.017-7.429-7.633-11.066-4.092-5.688-5.559-12.078-5.633-18.981-.036-3.166-.41-6.38-1.081-9.475-1.313-6.04-4.549-10.763-10.418-13.296-4.497-1.942-9.152-2.327-13.901-1.084-6.901 1.805-11.074 6.934-10.996 14.088.074 6.885.417 13.779.922 20.648.288 3.893-.312 7.252-2.895 10.34-2.484 2.969-4.706 6.172-6.858 9.397-1.229 1.844-2.317 3.853-3.077 5.931-2.07 5.663-3.973 11.373-7.276 16.5-1.224 1.9-1.363 4.026-.494 6.199.225.563.363 1.429.089 1.882-2.354 3.907-5.011 7.345-10.066 8.095-3.976.591-4.172 1.314-4.051 5.413.1 3.337.061 6.705-.28 10.021-.363 3.555.008 4.521 3.442 5.373 7.924 1.968 15.913 3.647 23.492 6.854 3.227 1.365 6.465.891 9.064-1.763 2.713-2.771 6.141-3.855 9.844-3.859 6.285-.005 12.572.298 18.86.369 1.702.02 2.679.653 3.364 2.199.84 1.893 2.26 3.284 4.445 3.526 4.193.462 8.013-.16 11.19-3.359 3.918-3.948 8.436-7.066 13.615-9.227 1.482-.619 2.878-1.592 4.103-2.648 2.231-1.922 2.113-3.146-.135-5zm-51.397-80.475c.758-2.601 2.537-4.289 5.243-4.801 2.276-.43 4.203.688 5.639 3.246 1.546 2.758 2.054 5.64.734 8.658-1.083 2.474-1.591 2.707-4.123 1.868-.474-.157-.937-.343-1.777-.652.708-.594 1.154-1.035 1.664-1.382 1.134-.772 1.452-1.858 1.346-3.148-.139-1.694-1.471-3.194-2.837-3.175-1.225.017-2.262 1.167-2.4 2.915-.086 1.089.095 2.199.173 3.589-3.446-1.023-4.711-3.525-3.662-7.118zm-12.75-2.251c1.274-1.928 3.197-2.314 5.101-1.024 2.029 1.376 3.547 5.256 2.763 7.576-.285.844-1.127 1.5-1.716 2.241l-.604-.374c-.23-1.253-.276-2.585-.757-3.733-.304-.728-1.257-1.184-1.919-1.762-.622.739-1.693 1.443-1.757 2.228-.088 1.084.477 2.28.969 3.331.311.661 1.001 1.145 1.713 1.916l-1.922 1.51c-3.018-2.7-3.915-8.82-1.871-11.909zm37.664 64.206c-.203 2.604-.5 2.713-3.118 3.098-1.859.272-2.359.756-2.453 2.964-.108 2.581-.101 5.171-.012 7.753.061 1.77-.537 3.158-1.755 4.393-6.764 6.856-14.845 10.105-24.512 8.926-4.17-.509-6.896-3.047-9.097-6.639.98-.363 1.705-.607 2.412-.894 3.122-1.27 3.706-3.955 1.213-6.277-1.884-1.757-3.986-3.283-6.007-4.892-1.954-1.555-3.934-3.078-5.891-4.629-1.668-1.323-2.305-3.028-2.345-5.188-.094-5.182.972-10.03 3.138-14.747 1.932-4.209 3.429-8.617 5.239-12.885.935-2.202 1.906-4.455 3.278-6.388 1.319-1.854 2.134-3.669 1.988-5.94-.084-1.276-.016-2.562-.016-3.843l.707-.352c1.141.985 2.302 1.949 3.423 2.959 4.045 3.646 7.892 3.813 12.319.67 1.888-1.341 3.93-2.47 5.927-3.652.497-.294 1.092-.423 1.934-.738 2.151 5.066 4.262 10.033 6.375 15 1.072 2.524 1.932 5.167 3.264 7.547 2.671 4.775 4.092 9.813 4.07 15.272-.012 2.83.137 5.67-.081 8.482z" clip-rule="evenodd"></path>
                            </svg>
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="card reveal feature-card-15 feature-card-17 secondary">
                <div class="card-body">
                   <div class="d-flex align-items-center">
                      <div class="flex-grow-1 text-center mt-3">
                         <h5 class="mb-2">Pay directly to the university
                        </h5>
                         <p class="mb-0 op-8">We guide you, but your destination is the right university, so pay directly to the university.
                         </p> 
                      </div>
                      <div class="icon bg-gray-100">
                         <span class="avatar rounded-circle bg-secondary-gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                               <path d="M22,2L11.2,3.6v8L22,11.5V2z M10.2,12.5L2,12.4l0,6.8l8.1,1.1L10.2,12.5L10.2,12.5z M2,4.8l0,6.8l8.1,0l0-7.9L2,4.8z M11.1,12.5l0,7.9L22,22l0-9.4L11.1,12.5z"> </path>
                            </svg>
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="card reveal feature-card-15 feature-card-17 success">
                <div class="card-body">
                   <div class="d-flex align-items-center">
                      <div class="flex-grow-1 text-center mt-3">
                         <h5 class="mb-2">Easy to Use </h5>
                         <p class="mb-0 op-8">Hassle free and user friendly interface with AI-powered features.</p>
                      </div>
                      <div class="icon bg-gray-100">
                         <span class="avatar rounded-circle bg-success-gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" viewBox="0 0 100 100">
                               <path d="M5 50c0 24.855 20.145 45 45 45 24.85 0 45-20.145 45-45C95 25.151 74.85 5 50 5 25.146 5 5 25.151 5 50m3.467 0a41.445 41.445 0 0 1 3.598-16.903l19.811 54.278C18.024 80.65 8.467 66.438 8.467 50M50 91.531c-4.077 0-8.015-.594-11.733-1.687L50.73 53.639 63.496 88.61c.083.207.186.39.293.565A41.316 41.316 0 0 1 50 91.531m33.564-42.31c2.369-5.925 3.162-10.662 3.162-14.874 0-1.529-.103-2.948-.287-4.273a41.34 41.34 0 0 1 5.086 19.927c0 15.324-8.301 28.698-20.645 35.894l12.684-36.674zm-8.955-12.772c1.576 2.765 3.427 6.32 3.427 11.455 0 3.557-1.058 8.027-3.161 13.428L70.73 75.168 55.721 30.53c2.506-.136 4.752-.396 4.752-.396 2.238-.266 1.971-3.549-.261-3.426 0 0-6.729.531-11.071.531-4.082 0-10.936-.531-10.936-.531-2.24-.123-2.499 3.296-.266 3.426 0 0 2.123.26 4.361.396l6.465 17.729-9.086 27.251L24.55 30.53c2.506-.136 4.758-.396 4.758-.396 2.239-.266 1.966-3.549-.266-3.426 0 0-6.725.531-11.072.531-.778 0-1.694-.02-2.67-.048C22.729 15.916 35.495 8.469 50 8.469c10.812 0 20.657 4.136 28.043 10.908-.178-.014-.355-.035-.533-.035-4.088 0-6.977 3.551-6.977 7.367.001 3.426 1.974 6.321 4.076 9.74"> </path>
                            </svg>
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="card reveal feature-card-15 feature-card-17 danger">
                <div class="card-body">
                   <div class="d-flex align-items-center">
                      <div class="flex-grow-1 text-center mt-3">
                         <h5 class="mb-2">Seal of Trust</h5>
                         <p class="mb-0 op-8">Information provided by us is authentic and verified by the listed universities.</p>
                      </div>
                      <div class="icon bg-gray-100">
                         <span class="avatar rounded-circle bg-danger-gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" viewBox="0 0 24 24">
                               <g data-name="Server Upload">
                                  <path d="M2 9h18a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2zm16-4.5a1 1 0 1 1-1 1 1 1 0 0 1 1-1zm-3 0a1 1 0 1 1-1 1 1 1 0 0 1 1-1zm-8 0a.5.5 0 0 1 1 0v2a.5.5 0 0 1-1 0zm-2 0a.5.5 0 0 1 1 0v2a.5.5 0 0 1-1 0zm-2 0a.5.5 0 0 1 1 0v2a.5.5 0 0 1-1 0zm12.17 6.43a.5.5 0 0 0-.26-.93H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h9.5a.5.5 0 0 0 .5-.5 6.45 6.45 0 0 1 3.17-5.57zM4 14.5a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zm2 0a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zm2 0a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0z"></path>
                                  <path d="M18.5 11a5.5 5.5 0 1 0 5.5 5.5 5.51 5.51 0 0 0-5.5-5.5Zm2.35 4.85a.5.5 0 0 1-.71 0L19 14.71v4.79a.5.5 0 0 1-1 0v-4.79l-1.15 1.15a.5.5 0 0 1-.71-.71l2-2a.5.5 0 0 1 .71 0l2 2a.5.5 0 0 1 0 .7Z"></path>
                               </g>
                            </svg>
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

 @include('front.parts.info')

 <section class="section bg-pattern-1 overflow-hidden">
    <img src="/web-assets/images/patterns/9.webp" alt="img" class="patterns-3 sub-pattern-1 filter-invert op-1 z-index-0"> 
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
             <div class="text-center text-lg-start"> <img src="/web-assets/images/png/12.webp" alt="img" width="400" class="img-fluid"> </div>
          </div>
          <div class="col-lg-7">
             <div class="heading-section">
                <div class="heading-title text-start">Benefits Of  <span class="tx-primary">Online & Distance Education</span> </div>
             </div>
             <div class="row fw-500 tx-muted">
                <div class="col-md-6">
                   <div class="card border-top border-3 border-primary">
                      <div class="card-body">
                         <div class="d-flex align-items-center">
                            <div class="me-3"> <span class="avatar text-bg-primary rounded-circle tx-20"><i class="bi bi-code"></i></span> </div>
                            <h6 class="flex-grow-1 mb-0">Helps you keep up with the world by giving you a flexible learning.</h6>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="card border-top border-3 border-secondary">
                      <div class="card-body">
                         <div class="d-flex align-items-center">
                            <div class="me-3"> <span class="avatar text-bg-secondary rounded-circle tx-20"><i class="bi bi-code"></i></span> </div>
                            <h6 class="flex-grow-1 mb-0">Gives access to recorded lectures and LMS.
                            </h6>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="card border-top border-3 border-warning">
                      <div class="card-body">
                         <div class="d-flex align-items-center">
                            <div class="me-3"> <span class="avatar text-bg-warning rounded-circle tx-20"><i class="bi bi-code"></i></span> </div>
                            <h6 class="flex-grow-1 mb-0">Guest lectures with industry experts.
                            </h6>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="card border-top border-3 border-success">
                      <div class="card-body">
                         <div class="d-flex align-items-center">
                            <div class="me-3"> <span class="avatar text-bg-success rounded-circle tx-20"><i class="bi bi-code"></i></span> </div>
                            <h6 class="flex-grow-1 mb-0">Opportunity and time flexibility to upskill and reskill.
                            </h6>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="row fw-500 feature-client-bg feature-bg-1">
                <div class="col-md-12">
                   <ul class="list-unstyled mb-0">
                      <li class="list-item mb-1">
                         <p class="mb-0 d-flex align-items-start"> 
                            <span class="tx-primary me-2"><i class="bi bi-check-circle"></i></span> 
                            <span class="flex-grow-1 fw-500">Enjoy peace of mind knowing your College/Univeristy is UGC-DEB , Government Approved.
                            </span> </p>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>


@endsection

@section('scripts')
@endsection
