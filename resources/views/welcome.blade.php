<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')

</head>
<style>

    /* Make image transitions faster and smoother */
.hidden-up {
    opacity: 0;
    transform: translateY(20px); /* Reduced from 100% to 20px for subtler movement */
    transition: all 0.5s ease-out; /* Reduced from 1s to 0.5s */
}

.show-up {
    opacity: 1;
    transform: translateY(0);
}

/* Other elements can keep their original timing */
.hidden {
    opacity: 0;
    transform: translateX(-100%);
    transition: all 1s;
}

.hidden-right {
    opacity: 0;
    transform: translateX(100%);
    transition: all 1s;
}

.show {
    opacity: 1;
    transform: translateX(0);
}

/* Remove blur effect for better performance */
.hidden, .hidden-right, .hidden-up {
    filter: none;
}


.hidden-up {
    opacity: 0;
    filter: blur(5px);
    transform: translateY(100%);
    transition: all 0.1s;
}


.show-up {
    opacity: 1;
    filter: blur(0);
    transform: translateY(0);
}

/* Add staggered delays for list items */
.stagger > *:nth-child(1) { transition-delay: 0ms; }
.stagger > *:nth-child(2) { transition-delay: 200ms; }
.stagger > *:nth-child(3) { transition-delay: 400ms; }
.stagger > *:nth-child(4) { transition-delay: 600ms; }

/* Optimize hover effect */
.hover-scale {
    transition: transform 0.3s ease-out;
}

.hover-scale:hover {
    transform: scale(1.03); /* Reduced from 1.05 for subtler effect */
}

@media (max-width: 768px) {
    .hidden-up {
        transform: translateY(10px); /* Even smaller movement on mobile */
    }
}

</style>
<body>
    <div>
        <!-- Nav Menu section -->
        @include('navmenu')



        <section class="slider">
        <!-- Banner 1 -->
        <div class="slides">
          <div class="banner-section">
            <div class="pt-5 position-relative">
              <div>
                <img
                  src="{{asset('assets/images/HomeBanner 1920 x 800 _ 1.jpg')}}"
                  width="100%"
                  alt="Banner 1"
                  class="baner-image-slider-height"
                />
              </div>
              <div>
                <div class="gatway"></div>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="gatway-postion container">
                    <div class="gatwayHeading">
                      <h1>Your Gateway to</h1>
                      <h1>Global Freight</h1>
                      <h1>Solutions</h1>
                    </div>
                    <div>
                      <p class="gatway-pargraph">
                      Connecting the Middle East to global markets with precision and care. Fastride delivers excellence in every shipment.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Banner 2 -->
          <div class="banner-section">
            <div class="pt-5 position-relative">
              <div>
                <img
                  src="{{asset('assets/images/Banner 1920 x 800 _ all _ 2.jpg')}}"
                  width="100%"
                  alt="Banner 2"
                  class="baner-image-slider-height"
                />
              </div>
              <div class="">
                <div class="gatway"></div>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="gatway-postion container">
                    <div class="gatwayHeading">
                      <h1>Efficient</h1>
                      <h1>Shipping Services</h1>
                    </div>
                    <div>
                      <p class="gatway-pargraph">
                      Offering fast and dependable shipping solutions to meet your business needs, Fastride guarantees a smooth and efficient transport process for all types of cargo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Banner 3 -->
          <div class="banner-section">
            <div class="pt-5 position-relative">
              <div>
                <img
                  src="{{asset('assets/images/HomeBanner 1920 x 800 _ 2.jpg')}}"
                  width="100%"
                  alt="Banner 3"
                  class="baner-image-slider-height"
                />
              </div>
              <div class="">
                <div class="gatway"></div>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="gatway-postion container">
                    <div class="gatwayHeading">
                      <h1>Connecting</h1>
                      <h1>The World</h1>
                    </div>
                    <div>
                      <p class="gatway-pargraph">
                      Fastride links your business to international markets with reliable global shipping routes. Our expertise makes worldwide delivery seamless and secure.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


        <!-- why choose FASTRIDE -->
        <section class="why-choose">
            <div>
                <div class="row container-fluid">
                    <div class="col-md-6 col-12 cols">
                        <div  >
                            <img
                                src="{{asset('assets/images/IMG 910 x 1285.png')}}"
                                width="100%"
                                alt=""
 class="hidden-up hover-scale"
                                srcset="" />
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-12 cols d-flex justify-content-center align-items-center">
                        <div class="col-10">
                            <div class="why-choose-heading hidden">
                                <h1>Why Choose</h1>
                                <h1>Fastride Shipping LLC?</h1>
                            </div>
                            <div>
                                <ul class="stagger">
                                    <li class="hidden">
                                        <label>Strategic Location:</label> Located in the heart of
                                        the UAE’s logistics hub, Fastride Shipping LLC connects
                                        the Middle East with key international markets, offering a
                                        seamless transit experience
                                    </li>
                                    <li class="hidden">
                                        <label>Industry Expertise:</label> We bring deep industry
                                        knowledge to every project, ensuring your shipments are
                                        handled with the utmost care and precision
                                    </li>
                                    <li class="hidden">
                                        <label>Comprehensive Solutions:</label> From dangerous
                                        goods and project cargo to luxury vehicle movement, we
                                        provide specialized services that cover all aspects of
                                        freight forwarding
                                    </li>
                                    <li class="hidden">
                                        <label> Customer-Centric Approach:</label> We pride
                                        ourselves on understanding the needs of our clients,
                                        offering end-to-end support to ensure your goods reach
                                        their destination safely and on time.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Key Destinations -->


        <section class="position-relative Our-Key-Destinations">
            <div class="Our-Key-Destinations-bg-img">
                <img
                    src="{{asset('assets/images/IMG 1920 x 1280.jpg')}}"
                    width="100%"
                    alt=""
                    class="hidden-up"
                    srcset="" />
            </div>
            <div class="d-flex justify-content-center">
                <div class="container position-absolute top-0">
                    <div class="Our-Key-Destinations-heading pt-5">
                        <div>
                            <h1 class="text-md-center text-start hidden ">Our Key Destinations and Reach</h1>
                        </div>
                        <div class="d-flex justify-content-center align-items-center ">
                            <p class="Our-Key-Destinations-paragraph hidden ">
                                Fastride Shipping is strategically positioned to serve both
                                local and international markets. We specialize in inland
                                transportation across the UAE and road freight services
                                throughout the GCC, including Saudi Arabia, Qatar, and Oman.
                                Our extensive network allows us to offer competitive rates and
                                a reliable service footprint that you can count on.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container Our-values">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div
                            class="col-md-11 bg-white col-11 cols Our-values-border Our-values-postion">
                            <div class="row">
                                <div
                                    class="col-md-5 col-12 cols d-flex justify-content-center align-items-center">
                                    <div class="col-10">
                                        <div class="why-choose-heading hidden" >
                                            <h1>Our Values</h1>
                                        </div>
                                        <div>
                                            <ul class="ps-md-5 ps-0 stagger">
                                                <li class="hidden">
                                                    <label>Commitment to Excellence:</label>
                                                    Precision and care in every shipment
                                                </li>
                                                <li class="hidden">
                                                    <label> Customer-Centric Approach: </label>
                                                    Your satisfaction drives us forward
                                                </li>
                                                <li class="hidden">
                                                    <label> Global Connectivity: </label> Seamless
                                                    logistics with a worldwide network.
                                                </li>

                                                <p class="pt-4 hidden">
                                                    With Fastride Shipping, your logistics needs are
                                                    handled with the highest level of professionalism
                                                    and expertise. Trust us to deliver success - one
                                                    shipment at a time.
                                                </p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12 cols">
                                    <div class="video-label" style="background-color: black">
                                        <video
                                            id="promo-video"
                                            controls
                                            muted
                                            loop
                                            class="videosdiv">
                                            <source
                                                src="{{asset('assets/images/videoplayback.mp4')}}"
                                                type="video/mp4" />
                                            <source src="movie.webm" type="video/webm" />
                                            <source src="movie.ogv" type="video/ogg" />
                                            Your browser does not support the video tag.
                                        </video>
                                        <!-- <img
                        src="./assets/images/IMG 1000 x 825.jpg"
                        alt=""
                        srcset=""
                        width="100%"
                        height="100%"
                      /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="Fast-Ride-Shipping-l-l-c">
                    <div class="container">
                        <div
                            class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-5 col-12 cols">
                                <div>
                                    <div>
                                        <h1 class="text-md-start text-center">Fast Ride Shipping L.L.C</h1>
                                    </div>
                                    <div class="star">
                                        <div class="pt-md-5 pt-3 pb-4">
                                            <div class="text-md-start text-center">
                                                <i class="star-number"> 4.3 </i>
                                                <i
                                                    class="bi bi-star-fill Fast-Ride-Shipping-l-l-c-icons"></i>
                                                <i
                                                    class="bi bi-star-fill Fast-Ride-Shipping-l-l-c-icons"></i>
                                                <i
                                                    class="bi bi-star-fill Fast-Ride-Shipping-l-l-c-icons"></i>
                                                <i
                                                    class="bi bi-star-fill Fast-Ride-Shipping-l-l-c-icons"></i>
                                                <i
                                                    class="bi bi-star-half Fast-Ride-Shipping-l-l-c-icons"></i>
                                            </div>
                                            <p class="text-md-start text-center">Shipping service in Dubai, United Arab Emirates</p>

                                            <div class="address-phone text-md-start text-center">
                                                <label>Address : </label> Deira - Dubai - United Arab
                                                Emirates
                                            </div>
                                            <div class="address-phone text-md-start text-center">
                                                <label>Phone: </label> +971 55 217 8868
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="google-feed-back">
                                    <div class="mb-3 d-flex position-relative">
                                        <input
                                            type="text"
                                            class="form-control form-controlsss ps-5"
                                            id="exampleFormControlInput1"
                                            placeholder="Give Your Feedback" />
                                        <img
                                            src="{{asset('assets/images/google-icon-1.png')}}"
                                            alt=""
                                            class="google-icon"
                                            style="width: 20px; height: 20px" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 cols">
                                <div class="container">
                                    <div class="map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.4361197486464!2d55.34042429999999!3d25.2559106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ce1dc35fdf7%3A0x3599c323bca6c42d!2sFast%20Ride%20Shipping%20L.L.C!5e0!3m2!1sen!2sin!4v1735118810406!5m2!1sen!2sin"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                            class="map-border"></iframe>
                                    </div>
                                    <!-- <div class="botton-color">
                      <button onclick="maplocation()">
                        Show on Map
                        <i class="bi bi-chevron-right arrowbolder"></i>
                      </button>
                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Fast-Ride-Shipping">
                <div class="container">
                    <div class="row Fast-Ride-Shipping-l-l-c-flex">
                        <div class="col-md-5 col-11 cols my-2">
                            <div class="row border border-2 rounded-5">
                                <div class="col-6 p-0">
                                    <img
                                        src="{{asset('assets/images/IMG 447 x 447.jpg')}}"
                                        alt=""
                                        srcset=""
                                        width="100%"
                                        class="rounded-start-5" />
                                </div>
                                <div
                                    class="col-6 p-0 Fast-Ride-Shipping-img-paragraph d-flex justify-content-center align-items-center">
                                    <div class="col-10">
                                        <p>
                                            With our global reach and unparalleled speed, we ensure
                                            your shipments arrive on time, every time...
                                        </p>
                                        <a href="">Read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-11 cols">
                            <div class="row border border-2 rounded-5">
                                <div class="col-6 p-0">
                                    <img
                                        src="{{asset('assets/images/IMG 447 x 447 _ 2.jpg')}}"
                                        alt=""
                                        srcset=""
                                        width="100%"
                                        height="100%"
                                        class="rounded-start-5" />
                                </div>
                                <div
                                    class="col-6 p-0 Fast-Ride-Shipping-img-paragraph d-flex justify-content-center align-items-center">
                                    <div class="col-10">
                                        <p>
                                            With our global reach and unparalleled speed, we ensure
                                            your shipments arrive on time, every time...
                                        </p>
                                        <a href="">Read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- projects We’ve Complete -->
        <section>
            <div class="container mt-5 mb-5">
                <div >
                    <div class="col-12 pt-3 pb-3 project-heading">
                        <div>
                            <h1 class="text-md-center text-start">Connecting Continents, Creating Opportunities</h1>
                            <!-- <h1 class="text-center">Our story</h1> -->
                        </div>
                    </div>
                    <div class="row py-5 d-flex justify-content-between">
                        <div class="col-md-5 col-12 cols">
                            <div>
                                <div>
                                    <h1></h1>
                                </div>
                                <div>
                                    <p class="projects-paragraphalignment">
                                        Our global logistics solutions go beyond delivering products - they're about enabling progress. By combining expertise with technology, we provide tailored freight solutions that keep your world moving. Our dedicated approach to every shipment, from air and ground to specialized deliveries, ensures we meet your needs with care and precision. Together, we ensure your business keeps running smoothly. Here's a glimpse of the impact we've made:
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 cols">
                        <img
                                        src="{{asset('assets/images/722 x 454.jpg')}}"
                                        alt=""
                                        srcset=""
                                        width="100%"
                                        class="rounded-5" />
                        </div>
                    </div>

                    <!-- <div
                        class="col-12 border-2 border-top border-bottom pt-5 pb-5 icons-heading">
                        <div class="row">
                            <div
                                class="col-md-3 col-12 cols d-flex justify-content-center align-items-center border-2 border-start border-end">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="35700" class="counter">35,700</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-center align-items-center">
                                            <i
                                                class="bi bi-box-seam-fill projects-icons-size"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Deliveries Fulfilled</h4>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="col-md-3 col-12 cols d-flex justify-content-center align-items-center border-2 border-start border-end">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="590" class="counter">590</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-center align-items-center">
                                            <i
                                                class="bi bi-airplane-engines-fill projects-icons-size"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Airborne Missions Supported</h4>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 col-12 cols d-flex justify-content-center align-items-center border-2 border-start border-end">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="27500" class="counter">27,500</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-center align-items-center">
                                            <i
                                                class="bi bi-truck-flatbed projects-icons-size"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Dangerous Goods Clearances</h4>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="col-md-3 col-12 cols d-flex justify-content-center align-items-center">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="1000" class="counter">1,000</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-center align-items-center">
                                            <i class="bi bi-truck projects-icons-size"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Vehicle Deliveries Recorded</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div
                        class="col-12 border-2 border-top border-bottom pt-5 pb-5 icons-heading">
                        <div class="row">
                            <div class="col-md-3 col-12 cols projects-icon-alignment">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="35700" class="counter">35,700</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-end align-items-center">
                                            <!-- <i class="bi bi-box-seam-fill projects-icons-size"></i> -->
                                            <img src="{{ asset('assets/images/shipment completed.svg') }}" alt="shipment completed" class="projects-icons-size" />
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Shipments completed</h4>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 col-12 projects-icon-alignment cols border-2 border-start">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="27500" class="counter">27,500</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-end align-items-center">
                                            <!-- <i class="bi bi-truck-flatbed projects-icons-size"></i> -->
                                            <img src="{{ asset('assets/images/Dg.svg') }}" alt="Dangerous Goods Icon" class="projects-icons-size" />
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Dangerous Goods Clearances</h4>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 col-12 cols projects-icon-alignment border-2 border-start border-end">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="590" class="counter">590</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-end align-items-center">
                                            <!-- <i
                                                class="bi bi-airplane-engines-fill projects-icons-size"></i> -->
                                                <img src="{{ asset('assets/images/aircraft engine.svg') }}" alt="aircraft engine" class="projects-icons-size" />
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Aircraft Engines clearance</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 cols projects-icon-alignment">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 col-6 cols">
                                            <h1 class="d-flex">
                                                <label data-target="1000" class="counter">1,000</label>
                                                +
                                            </h1>
                                        </div>
                                        <div
                                            class="col-md-6 col-6 cols d-flex justify-content-end align-items-center">
                                            <!-- <i class="bi bi-truck projects-icons-size"></i> -->
                                            <img src="{{ asset('assets/images/vehicle shipment.svg') }}" alt="vehicle shipment" class="projects-icons-size" />
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Vehicle Shipments documented</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- trak your shipment -->
          <section class="trak-your-shipment d-flex align-items-center">
        <div class="container track-your-shippment-baground">
          <div class="row rowheight">
            <div
              class="col-md-6 col-12 cols d-flex justify-content-center align-items-start"
            >
              <div class="col-md-10 col-12">
                <div class="pt-4 d-md-block d-flex">
                  <h1>Track Your</h1>
                  <h1 class="ps-md-0 ps-2">Shipment</h1>
                </div>
                <div>
                  <p class="track-your-shippment-pargraph">
                  Monitor the status of your shipment in real time. Simply enter your tracking number, and stay updated on your cargo’s journey - no matter where it is.
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-12 cols d-flex justify-content-center align-items-center"
            >
              <div class="track-your-shippment-orders">
                <div
                  class="d-flex d-flex justify-content-center align-items-center"
                >
                  <div class="col-10 d-flex orderfontaws pb-3">
                    <div class="me-2">Order ID</div>
                    <div class="ms-5">AWD</div>
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <form action="" class="col-10">
                    <div>
                      <div class="mb-3">
                        <input
                          type="text"
                          id="disabledTextInput"
                          class="form-control forminputbuttonheight"
                          placeholder=" Enter You Order ID"
                        />
                      </div>
                      <div>
                        <button
                          type="submit"
                          class="formbuttoncolor col-12 forminputbuttonheight"
                        >
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- footer section -->
        @include('footer')

    </div>

    <!-- js script link bootstrap  -->
    @include('js')
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('hidden-up')) {
                    entry.target.classList.add('show-up');
                } else {
                    entry.target.classList.add('show');
                }
            }
            // Optional: remove classes when scrolling back up
            // else {
            //     if (entry.target.classList.contains('hidden-up')) {
            //         entry.target.classList.remove('show-up');
            //     } else {
            //         entry.target.classList.remove('show');
            //     }
            // }
        });
    }, {
        threshold: 0.1 // Trigger when 10% of the element is visible
    });

    // Observe all elements with animation classes
    document.querySelectorAll('.hidden, .hidden-right, .hidden-up').forEach((el) => {
        observer.observe(el);
    });
});
</script>
</body>

</html>
