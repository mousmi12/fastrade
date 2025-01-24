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
                href="#"
                target="_blank" style="margin-left: 10px;">
                <i class="bi bi-twitter-x"></i>
              </a>
              <a
                href="#"
                target="_blank" style="margin-left: 10px;">
                <i class=" bi bi-youtube"></i>
              </a>
              <a
                href="https://ae.linkedin.com/company/fastride-shipping-llc"
                target="_blank" style="margin-left: 10px;">
                <i class="bi bi-linkedin"></i>
              </a>


            </div>

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
              <a class="nav-link navbarfontColorSize {{ Request::is('discoverus') ? 'active' : '' }}" href="{{ route('discoverus') }}">Discover us</a>
            </li>
            <li class="nav-item m-auto">
              <a class="nav-link navbarfontColorSize {{ Request::is('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
            </li>
            </li>
            <li class="nav-item m-auto">
              <a class="nav-link navbarfontColorSize {{ Request::is('dgcargo') ? 'active' : '' }}" href="{{ route('dgcargo') }}">DG Cargo</a>
            </li>
            <li class="nav-item m-auto">
              <a class="nav-link navbarfontColorSize {{ Request::is('connectus') ? 'active' : '' }}" href="{{ route('connectus') }}">Let's connect</a>
            </li>
            <li class="nav-item whatsappColor">
              <a class="navbar-brand text-white" href="#"></a>
            </li>
            <a href="https://wa.me/971552178868" target="_blank">
              <i class="bi bi-whatsapp whatsappColorfontsize whatsappiconposition"></i>
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




<!-- navmenu mobile change mobile design-->
<section class="col-12 position-fixed z-3">
  <nav
    class="navbar navbar-expand-lg container-fluid nav-mobile navmenumobilebgcolor">
    <div class="container-fluid">
      <button
        class="navbar-toggler ms-auto"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse">
        <ul
          class="collapse navbar-nav ms-auto mobile-nave-menu-ul"
          id="navbarNavDropdown">
          <li class="nav-item mobile-navbarfontColorSize">
            <a
              class="nav-link mobile-navbarfontColorSize-navmenu  {{ Request::is('/') ? 'active' : '' }}"
              aria-current="page"
              href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item mobile-navbarfontColorSize">
            <a
              class="nav-link mobile-navbarfontColorSize-navmenu  {{ Request::is('discoverus') ? 'active' : '' }}" href="{{ route('discoverus') }}">Discover us</a>
          </li>
          <li class="nav-item mobile-navbarfontColorSize">
            <a
              class="nav-link mobile-navbarfontColorSize-navmenu  {{ Request::is('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
          </li>
          <li class="nav-item mobile-navbarfontColorSize">
            <a
              class="nav-link mobile-navbarfontColorSize-navmenu  {{ Request::is('dgcargo') ? 'active' : '' }}" href="{{ route('dgcargo') }}">DG Cargo</a>
          </li>
          <li class="nav-item mobile-navbarfontColorSize">
            <a
              class="nav-link mobile-navbarfontColorSize-navmenu  {{ Request::is('connectus') ? 'active' : '' }}" href="{{ route('connectus') }}">Let's connect</a>
          </li>
          <li
            class="nav-item d-flex justify-content-around mobile-navbarfontColorSize-socialmedia-bg">
            <a
              class="nav-link mobile-navbarfontColorSize-socialmedia"
              href="https://www.facebook.com/share/1EnwG1qtYC/"><i class="bi bi-facebook"></i></a>
            <a
              class="nav-link mobile-navbarfontColorSize-socialmedia"
              href="https://www.instagram.com/fastrideshipping/"><i class="bi bi-instagram"></i></a>
            <a
              class="nav-link mobile-navbarfontColorSize-socialmedia"
              href="#"><i class="bi bi-twitter-x"></i></a>
            <a
              class="nav-link mobile-navbarfontColorSize-socialmedia"
              href="#"><i class="bi bi-youtube"></i></a>
            <a
              class="nav-link mobile-navbarfontColorSize-socialmedia"
              href="https://ae.linkedin.com/company/fastride-shipping-llc"><i class="bi bi-linkedin"></i></a>
          </li>
          <li class="nav-item m-3 m-auto py-2">
            <a class="navbar-brand text-white" href="https://wa.me/971552178868"><i class="bi bi-whatsapp mobile-whatsappColorfontsize"></i>
              Chat with us</a>
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
  <div class="bg-white mobilelogo-clip-path nav-mobile">
    <a class="navbar-brand" href="#"><img
        src="{{asset('assets/images/LOGO.png')}}"
        class="navbarimg"
        alt=""
        srcset="" /></a>
  </div>
</section>
