<section class="bg-white col-12 position-fixed z-3 nav-lapscreen">
    <nav class="navbar navbar-expand-lg bg-white container-fluid p-0">
        <div style="width: 100%">
            <div style="background-color: #004165">
                <div
                    class="navmenu-location d-flex justify-content-end align-items-center">
                    <div
                        class="headr-location col-8 d-flex justify-content-around align-items-center">
                        <a href="tel:+971 4282 3411">
                            <i class="bi bi-telephone-fill" style="margin-left: 10px;"></i>
                            </i>+971 5575 98 501</a>

                        <a class="mailto" href="mailto:info@exim.ae">
                            <i class="bi bi-envelope-fill" style="margin-left: 10px;"></i>
                            enquiry@fastride.ae
                        </a>

                        <div class="socialmedia">
                            <a
                                href="https://www.facebook.com/share/1EnwG1qtYC/"
                                target="_blank" style="margin-left: 10px;">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a
                                href="https://www.instagram.com/fastrideshipping/"
                                target="_blank" style="margin-left: 10px;"><i class="bi bi-instagram"></i></a>
                            <a
                                href="https://ae.linkedin.com/company/fastride-shipping-llc"
                                target="_blank" style="margin-left: 10px;">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a
                                href="https://ae.linkedin.com/company/fastride-shipping-llc"
                                target="_blank" style="margin-left: 10px;">
                                <i class=" bi bi-youtube"></i>
                            </a>
                            <a
                                href="https://ae.linkedin.com/company/fastride-shipping-llc"
                                target="_blank" style="margin-left: 10px;">
                                <i class="bi bi-linkedin"></i>
                            </a>


                        </div>
                        <!-- <a
                        href="https://g.co/kgs/MQCwUYn"
                        target="_blank"
                      >

                      <img src="{{asset('assets/images/google.svg')}}" alt="Google Business" class="google-icon" />
                      </a> -->
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item m-auto">
                            <a
                                class="nav-link navbarfontColorSize {{ Request::is('/') ? 'active' : '' }}"
                                aria-current="page"
                                href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item m-auto">
                            <a class="nav-link navbarfontColorSize" href="">Discover us</a>
                        </li>
                        <li class="nav-item m-auto">
                            <a class="nav-link navbarfontColorSize {{ Request::is('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                        </li>
                        </li>
                        <li class="nav-item m-auto">
                            <a class="nav-link navbarfontColorSize {{ Request::is('dgcargo') ? 'active' : '' }}" href="#">DG Cargo</a>
                        </li>
                        <li class="nav-item m-auto">
                            <a class="nav-link navbarfontColorSize {{ Request::is('connectus') ? 'active' : '' }}" href="#">Let's connect</a>
                        </li>
                        <li class="nav-item whatsappColor">
                            <a class="navbar-brand text-white" href="#"></a>
                        </li>
                        <a href="">
                            <i
                                class="bi bi-whatsapp whatsappColorfontsize whatsappiconposition"></i>
                        </a>

                        <!-- <li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="#"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </li> -->
                    </ul>
                </div>
            </div>

            <div class="navdivition">
                <div class="navimageposition"></div>
            </div>
            <a class="navbar-brand navimageposition" href="#"><img
                    src="{{asset('assets/images/LOGO.png')}}"
                    class="navbarimg"
                    alt=""
                    srcset="" /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</section>

<!-- navmenu mobile -->
<section class="bg-white col-12 position-fixed z-3 nav-mobile">
    <nav class="navbar navbar-expand-lg bg-white container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src="{{asset('assets/images/LOGO.png')}}"
                    class="navbarimg"
                    alt=""
                    srcset="" /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-auto">
                        <a
                            class="nav-link navbarfontColorSize  {{ Request::is('/') ? 'active' : '' }}"
                            aria-current="page"
                            href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link navbarfontColorSize " href="#">Discover us</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link navbarfontColorSize  {{ Request::is('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link navbarfontColorSize" href="#">DG Cargo</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link navbarfontColorSize" href="#">Let's connect</a>
                    </li>
                    <li class="nav-item whatsappColor m-3">
                        <a class="navbar-brand text-white" href="#"><i class="bi bi-whatsapp whatsappColorfontsize"></i></a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Dropdown link
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                      </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</section>
