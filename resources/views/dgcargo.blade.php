@include('header')
@include('navmenu')

<body>

  <!-- DANGEROUS GOODS CARGO -->
  <section class="dgcargo-goods-cargo position-relative">
      <div>
        <img
          src="{{asset('assets/images/DG cargo/Banner 1920 x 800.jpg')}}"
          width="100%"
          alt=""
          srcset=""
        />
      </div>
      <div class="dgcargo-goods-cargo-bg-image-position">
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
    </section>
    <!-- Safe, Compliant -->
    <section class="safe-Compliant">
      <div class="container">
        <div class="safe-Compliant-heading">
          <h1 class="text-center">Safe, Compliant, and Reliable</h1>
          <h1 class="text-center">Dangerous Goods Shipping</h1>
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

    <!-- Our Expertise -->
    <section class="Our-Expertise">
      <div>
        <div class="row container-fluid">
          <div
            class="col-md-6 col-12 cols d-flex justify-content-center align-items-center"
          >
            <div class="col-10">
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
          <div class="col-md-6 col-12 cols">
            <div class="d-flex justify-content-center align-items-center">
              <img
                src="{{asset('assets/images/DG cargo/740 x 790.jpg')}}"
                width="70%"
                alt=""
                srcset=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

@include('footer')
    @include('js')
</body>
