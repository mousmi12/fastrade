@include('header')
@include('navmenu')

    <style>
        .contact-section {
            padding: 30px;
        }

        .message-box {
            background-color: #a3d4ff;
            padding: 20px;
            border-radius: 8px;
        }

        .map-container {
            margin-top: 20px;
        }

        .social-icons a {
            margin-right: 10px;
            font-size: 20px;
            color: #0d6efd;
        }

        .btn-submit {
            background-color: #0d6efd;
            color: white;
            border: none;
        }

        .btn-submit:hover {
            background-color: #084298;
        }


    </style>
<body>
    <section class="letsconnect">
        <div>
            <div class="banner-container">
                <img src="{{asset('assets/images/Banner 1920 x 800 lets connect.jpg')}}" width="100%" alt="Banner" />
                <div class="content-overlay">
                    <div class="container">
                        <h1>Get to Know Us</h1>
                        <p style="font-size: var(--subparagraph);">At Fastride, every shipment is personal. Our team believes in building strong, long-term relationships with clients, based on mutual trust and respect. Whether we're moving a fleet of vehicles or a single parcel, we treat every delivery as our top priority.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="find-us">
    <div class="container contact-section">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-6">
                <h2>Find Us</h2>
                <p>Ready to experience logistics done right? Reach out to us today to discuss how we can support your business and shipping needs.</p>
                <p><i class="bi bi-telephone"></i> +971552178868</p>
                <p><i class="bi bi-envelope"></i> enquiry@fastride.ae</p>
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
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.832716977404!2d144.96317911531992!3d-37.81421797975198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f2f5e55f%3A0xff97a6ae3253120!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1593840925025!5m2!1sen!2sau"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Message Box -->
            <div class="col-md-6">
                <div class="message-box">
                    <h3>Send a Message</h3>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <button ttype="submit"
                        class="formbuttoncolor col-12 forminputbuttonheight">Submit</button>
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
