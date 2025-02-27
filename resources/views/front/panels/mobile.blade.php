<div class="mobile-menu position-fixed bg-white deep-shadow">
    <button class="close-menu position-absolute"><i class="fa-solid fa-xmark"></i></button>
    <a href="/" class="logo-wrapper"><img src="/web-assets/image/logo.png" alt="primusvidya" class="logo logo-black"></a>
    <a href="/" class="logo-wrapper"><img src="/web-assets/image/logo.png" alt="primusvidya" class="logo logo-white"></a>
    <nav class="mobile-menu-wrapper mt-40">
        <ul>
            @php
            $cu = DB::select('select category_name,slug,id from categories');
            @endphp
            @foreach ($cu as $c)
            <li class="has-submenu"><a href="#">{{$c->category_name}}</a>
                <ul>
                    @php
                    $courseh = DB::select("select course_name,duration,url,slug,id from courses where category_id = '$c->id'");
                    @endphp
                    @foreach ($courseh as $course)
                    <li><a href="/course/{{$c->slug}}/{{$course->slug}}">
                            <div class="menu-list-wrapper d-flex align-items-center">
                                <img src="/web-assets/img/server.svg" alt="server" class="list-logo">
                                <div class="menu-list-content-right ms-3">
                                    <h6>{{$course->url}}</h6>
                                    <span>{{$course->duration}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                        @endforeach
                </ul>
            </li>
            @endforeach

            <li class="has-submenu"><a href="#">Study Abrod <span class="number">New</span></a>
                <ul>
                    <li><a href="country/study-in-usa">
                            <div class="menu-list-wrapper d-flex align-items-center">
                                <img src="/web-assets/img/server.svg" alt="server" class="list-logo">
                                <div class="menu-list-content-right ms-3">
                                    <h6>study-in-usa</h6>
                                    <span>vbdfjbjvbfsjvb</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li><a href="/career-counselling">Career Counselling</a></li>

            <li class="has-submenu"><a href="#">More</a>
                <ul>
                    <li><a href="/why-primusvidya">Why primusvidya</a></li>
                    <li><a href="/contact-us">contact</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/blog">Blogs</a></li>
                </ul>
            </li>

        </ul>
    </nav>

    <div class="contact-info mt-60">
        <h4 class="mb-20">Contact Info</h4>
        <p>Backside Basement, 54, National <br>Park Rd, Lajpat Nagar IV, <br>Lajpat Nagar 4, <br>New Delhi, Delhi 110024</p>
        <p>+91 98 1050 8409</p>
        <p>info@primusvidya.com</p>
        <div class="contact-social">
            <a href="https://www.facebook.com/profile.php?id=100089333449835" rel="noopener noreferrer" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/primusvidya" rel="noopener noreferrer" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/primusvidya/" rel="noopener noreferrer" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/authwall?trk=qf&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fprimusvidya%2F"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>
