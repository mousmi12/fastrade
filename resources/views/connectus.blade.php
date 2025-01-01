@include('header')
@include('navmenu')


<body>
    <section class="letsconnect">
        <div>
            <div class="banner-container">
                <img src="{{asset('assets/images/Banner 1920 x 800 lets connect.jpg')}}" width="100%" alt="Banner" />
                <div class="content-overlay connectus">
                    <div class="container">
                        <h1>Get to Know Us</h1>
                        <p >At Fastride, every shipment is personal. Our team believes in building strong, long-term relationships with clients, based on mutual trust and respect. Whether we're moving a fleet of vehicles or a single parcel, we treat every delivery as our top priority.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="find-us">
        <div class="container connect-contact-section">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-6 connect-us connect-us">
                    <h1>Find Us</h1>
                    <p>Ready to experience logistics done right? Reach out to us today to discuss how we can support your business and shipping needs.</p>

                    <!-- <a href="tel:+971 4282 3411">
                            <i class="bi bi-telephone-fill" style="margin-left: 10px;"></i>
                            </i>+971 5575 98 501</a>

                        <a class="mailto" href="mailto:info@exim.ae">
                            <i class="bi bi-envelope-fill" style="margin-left: 10px;"></i>
                            enquiry@fastride.ae
                        </a> -->
                    <div>
                        <a href="tel:+971552178868">
                            &nbsp; <i class="bi bi-telephone-fill"></i> +971552178868
                        </a>
                        <br>
                        <a class="mailto" href="mailto:enquiry@fastride.ae">
                            &nbsp;&nbsp;<i class="bi bi-envelope-fill"></i> &nbsp;&nbsp;enquiry@fastride.ae</a>
                    </div>
                    <br>
                    <div class="connect-socialmedia connect-social-icons ">
                        <a
                            href="https://www.facebook.com/share/1EnwG1qtYC/"
                            target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a
                            href="https://www.instagram.com/fastrideshipping/"
                            target="_blank"><i class="bi bi-instagram"></i></a>
                        <a
                            href="https://ae.linkedin.com/company/fastride-shipping-llc"
                            target="_blank">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a
                            href="https://ae.linkedin.com/company/fastride-shipping-llc"
                            target="_blank">
                            <i class=" bi bi-youtube"></i>
                        </a>
                        <a
                            href="https://ae.linkedin.com/company/fastride-shipping-llc"
                            target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>


                    </div>
                    <div class="connect-map-container">
                    <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.4361197486464!2d55.34042429999999!3d25.2559106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ce1dc35fdf7%3A0x3599c323bca6c42d!2sFast%20Ride%20Shipping%20L.L.C!5e0!3m2!1sen!2sin!4v1735118810406!5m2!1sen!2sin"
                                            width="100%" height="200" style="border:0;"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                            class="map-border"></iframe>

                    </div>
                </div>

                <!-- Message Box -->
                <div class="col-md-6">
                    <div class="connect-message-box connect-us-submit">
                        <h3>Send a Message</h3>
                        <form class="connect-us-form">
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="Name" >
                            </div>
                            <div class="mb-3 ">
                                <input type="email" class="form-control rounded-4" placeholder="Email" >
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control rounded-4" rows="4" placeholder="Message" ></textarea>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-4"> <button type="submit"
                                        class="formbuttoncolor  forminputbuttonheight">Submit</button></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    @include('footer')
    @include('js')
</body>
