@include('header')
@include('navmenu')

<body>

    <!-- DANGEROUS GOODS CARGO -->
    <section class="dgcargo-goods-cargo position-relative">
      <div>
        <img
          src="{{asset('assets/images/DG-cargo/Banner 1920 x 800.jpg')}}"
          width="100%"
          alt=""
          srcset=""
        />
      </div>
      <div class="dgcargo-goods-cargo-bg-image-position d-md-block d-none">
        <div class="dg-heading d-flex justify-content-start align-items-center">
          <h1 class="dgcargo-goods-bg">DANGEROUS GOODS CARGO</h1>
          <img
            src="{{asset('assets/images/services/DG.png')}}"
            class="dgcargo-goods-bg-img"
            width="15%"
            alt=""
            srcset=""
          />
        </div>
      </div>
      <!-- change mobile design add new div @start-->
      <div class="dgcargo-goods-cargo-bg-image-position d-md-none d-block">
        <div class="dg-heading d-flex justify-content-start align-items-center">
          <h1 class="dgcargo-goods-bg-mobile">
            DANGEROUS <br />
            GOODS CARGO
          </h1>
        </div>

        <img
          src="{{asset('assets/images/services/DG.png')}}"
          class="dgcargo-goods-bg-img-mobile"
          width="22%"
          alt=""
          srcset=""
        />
      </div>
      <!-- change mobile design add new div @end-->
    </section>

    <!-- Safe, Compliant -->
    <section class="safe-Compliant">
      <div class="container">
        <div class="safe-Compliant-heading pb-4">
          <h1 class="text-md-center text-start">Safe, Compliant, and Reliable</h1>
          <h1 class="text-md-center text-start">Dangerous Goods Shipping</h1>
        </div>
        <div class="safe-Compliant-heading-paragraph">
          <p>
            We specialize in the safe and compliant shipping of dangerous goods,
            including chemicals, hazardous materials, and aircraft engines. Our
            team is equipped to manage every aspect- from secure packaging and
            labeling to regulatory documentation and customs clearance -
            ensuring that your hazardous cargo reaches its destination safely
            and on time. With Fastride, you can trust us to deliver even the
            most sensitive shipments with precision and care, without
            compromising safety.
          </p>
        </div>
      </div>
    </section>

    <!-- What We Handle -->
    <section class="What-We-Handle">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-md-center text-start What-We-Handle-heading">What We Handle</h1>
          </div>
          <div class="col-md-3 col-12">
            <div class="d-flex justify-content-center align-items-center">
              <img
                src="{{asset('assets/images/DG-cargo/hazard.svg')}}"
                width="50%"
                alt=""
                srcset=""
              />
            </div>
            <div class="What-We-Handle-img-p">
              <p>
                Hazardous chemicals and materials (flammable, corrosive, or
                reactive substances)
              </p>
            </div>
          </div>
          <div class="col-md-3 col-12 border-white border-end border-start border-sm-bottom">
            <div class="d-flex justify-content-center align-items-center">
              <img
                src="{{asset('assets/images/DG-cargo/industrial machinery.svg')}}"
                width="50%"
                alt=""
                srcset=""
              />
            </div>
            <div class="What-We-Handle-img-p">
              <p>
                Industrial machinery and equipment requiring special permits.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-12 border-white border-end border-sm-top">
            <div class="d-flex justify-content-center align-items-center">
              <img
                src="{{asset('assets/images/DG-cargo/engine.svg')}}"
                width="50%"
                alt=""
                srcset=""
              />
            </div>
            <div class="What-We-Handle-img-p">
              <p>Aircraft parts and engine</p>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="d-flex justify-content-center align-items-center">
              <img
                src="{{asset('assets/images/DG-cargo/gases.svg')}}"
                width="50%"
                alt=""
                srcset=""
              />
            </div>
            <div class="What-We-Handle-img-p">
              <p>Batteries, gases, and other regulated materials</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0 position-relative">
        <div class="container Perfumes">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-md-center text-start What-We-Handle-heading">
                Perfumes and Fragrances
              </h1>
            </div>
            <!-- change mobile design add new div copy row flex-md-row flex-column-reverse @ start div -->
            <div class="row flex-md-row flex-column-reverse">
              <div class="col-md-6 col-12">
                <div class="d-flex justify-content-center align-items-center">
                  <img
                    src="{{asset('assets/images/DG-cargo/722 x 454.jpg')}}"
                    alt=""
                    srcset=""
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <p>
                  Fastride specializes in the seamless, safe, and compliant
                  movement of perfumes and fragrances worldwide. Our services
                  cover both the procurement and export of perfumes. For some
                  clients, we coordinate directly with perfume manufacturers,
                  handling the complete process of purchasing and shipping the
                  goods internationally. For other clients, who source their
                  perfumes independently, Fastride focuses solely on the safe
                  export of their products. Regardless of the process, we ensure
                  every shipment adheres to the highest safety, compliance, and
                  regulatory standards, handling perfumes with precision and
                  care.
                </p>
              </div>
            </div>
            <!-- change mobile design @ copy end div ^-->
            <!-- <div class="col-md-6 col-12">
              <div class="d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/DG-cargo/722 x 454.jpg')}}" alt="" srcset="" />
              </div>
            </div> -->
            <!-- <div class="col-md-6 col-12">
              <p>
                Fastride specializes in the seamless, safe, and compliant
                movement of perfumes and fragrances worldwide. Our services
                cover both the procurement and export of perfumes. For some
                clients, we coordinate directly with perfume manufacturers,
                handling the complete process of purchasing and shipping the
                goods internationally. For other clients, who source their
                perfumes independently, Fastride focuses solely on the safe
                export of their products. Regardless of the process, we ensure
                every shipment adheres to the highest safety, compliance, and
                regulatory standards, handling perfumes with precision and care.
              </p>
            </div> -->
          </div>
        </div>
        <div class="img-Perfumes-shaps img-Perfumes-postion"></div>
      </div>
    </section>

    <!-- Our Expertise -->
    <section class="Our-Expertise position-relative pb-md-0 pb-5">
      <div>
        <div class="row container-fluid">
          <div
            class="col-md-6 col-12 cols d-flex justify-content-center align-items-center"
          >
            <div class="col-10 pt-5 pb-5">
              <div class="Our-Expertise-heading">
                <h1>Our Expertise</h1>
                <h1>Includes</h1>
              </div>
              <div>
                <ul>
                  <li>
                    <label> Packaging and Labeling: </label> Ensuring all
                    shipments meet international safety and compliance
                    standards, including IATA, IMDG, and ADR guidelines.
                  </li>
                  <li>
                    <label>Documentation:</label> Preparing and verifying all
                    regulatory paperwork, including Dangerous Goods Declarations
                    (DGDs).
                  </li>
                  <li>
                    <label> Specialized Transport: </label>Using dedicated
                    carriers and vehicles equipped for hazardous materials.
                  </li>
                  <li>
                    <label> Customs Clearance:</label> Seamless coordination
                    with customs authorities to avoid delays and ensure
                    compliance.
                  </li>
                  <li>
                    <label> Risk Mitigation: </label> Advanced planning and
                    execution strategies to minimize risks during transit.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- <div
            class="col-md-6 col-12 cols d-flex justify-content-center align-items-center"
          >
            <div class="d-flex justify-content-center align-items-center">
              <img
                src="{{asset('assets/images/DG-cargo/740 x 790.jpg')}}"
                width="70%"
                alt=""
                srcset=""
                class="Our-Expertise-img"
              />
            </div>
          </div>
          <div class="d-flex justify-content-end p-0 position-absolute">
            <div class="Our-Expertise-shaps"></div>
          </div>
        </div>
      </div>
    </section> -->
    <div
            class="col-md-6 col-12 cols d-flex justify-content-center align-items-center"
          >
            <div class="d-flex justify-content-center align-items-center">
              <img
                src="{{asset('assets/images/DG-cargo/740 x 790.jpg')}}"
                alt=""
                srcset=""
                class="Our-Expertise-img"
              />
            </div>
          </div>
          <div
            class="d-flex justify-content-end p-0 position-absolute bottom-0"
          >
            <div class="Our-Expertise-shaps"></div>
          </div>
        </div>
      </div>
    </section>


    <!-- Why Trust Fastride -->
    <section
      class="Why-Trust-Fastride d-flex justify-content-center align-items-center"
    >
      <div class="Why-Trust-Fastride-container container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-md-center text-start">Why Trust Fastride for Dangerous Goods?</h1>
          </div>
          <div
            class="col-md-3 col-12 Why-Trust-Fastride-height d-flex justify-content-center align-items-center"
          >
            <div class="Experienced-Team-container">
              <div>
                <h3>Experienced Team</h3>
              </div>
              <div>
                <p>
                  Trained professionals with deep knowledge of hazardous
                  materials handling.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="Experienced-Team-container">
              <div>
                <h3>Global Network</h3>
              </div>
              <div>
                <p>
                  Access to specialized carriers and routes for safe and
                  efficient delivery.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="Experienced-Team-container">
              <div>
                <h3>Tailored Solutions</h3>
              </div>
              <div>
                <p>
                  Customizable services to meet your industry-specific
                  requirements.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="Experienced-Team-container">
              <div>
                <h3>24/7 Support</h3>
              </div>
              <div>
                <p>
                  Dedicated customer service to address your queries and provide
                  real-time updates.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





    @include('footer')
    @include('js')
</body>
