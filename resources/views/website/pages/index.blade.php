@extends('website.layout.master')

@section('content')

  
      <!-- ------------------------------------------------------------------------------------>
      <!-- About Us Section starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="HomeAboutSection pb-4">
        <div class="container">
          <div class="row">
            <h4 class="text-center HomeAbout heading">About Us</h4>
            <div class="col-lg-5 mx-auto">
              <div class="aboutVideoMain">
                <div class="aboutVideo">
                  <video height="250" width="350" controls>
                    <source src="{{ asset('website/assets/images/home/aboutVideo.mp4') }}" type="video/mp4" />
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <p class="pText">
                SVI Carbon Private Limited (SVICPL) is an ISO 9001:2015 certified
                company, engaged in designing (both process and mechanical) and
                manufacturing Impervious Graphite Heat and Mass Transfer
                Equipments. SVICPL product portfolio comprises Graphite Heat
                Exchangers (Condensers, Re-boilers, Coolers, Heaters,
                Evaporators), Graphite Columns, Graphite Scrubbers, Graphite
                Bursting/Rupture Discs, Graphite Thermowells and Customized
                Graphite Products and Spares as per the client’s requirement.
                These are manufactured using superior quality of Graphite, Resin
                and Steel, due to which, these products are acknowledged for their
                long trouble-free operation, excellent heat transfer capacity and
                durability. These are widely used by various sectors such as API,
                Bulk Drugs, Fine Chemicals, Specialty Chemicals, Agro-chemical,
                Pharmaceutical, Chloral-Caustic, Cold rolling mills and steel
                manufacturers. Company has a sound foundation of well-maintained
                and technically advanced infrastructure. Our manufacturing
                facilities are controlled by technocrats who have extensive
                experience in the graphite equipment industry.
              </p>
            </div>
            <div class="text-end">
              <button class="btn HomeAboutBtn">
                <a href="{{ asset('website/assets/images/home/about.html')}}" class="text-decoration-none text-white">View More </a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- About Us Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Graphite Heat & Mass Transfer Equipment Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <section class="bg-white py-3">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-end">
              <div class="productImg">
                <img
                  src="{{ asset('website/assets/images/product/ghmte.png') }}"
                  class=""
                  alt="Graphite Heat & Mass Transfer Equipment"
                />
              </div>
            </div>
            <div class="col-lg-7 d-flex align-items-center">
              <div class="productCard">
                <h4
                  class="heading text-start"
                  style="color: #1e4f9c; font-weight: bold"
                >
                  Product
                </h4>
                <div class="card p-3 w-100 cardContent shadow-lg">
                  <h5 class="cardContent_text">
                    Graphite Heat & Mass Transfer Equipment
                  </h5>
                  <p>
                    Isothermal falling film absorbers designed and manufactured by
                    SVI Carbon make have very good mass transfer efficiency.
                    Hydrochloric acid obtained at the end of the falling film
                    absorbers have concentration about 33%. Falling film absorbers
                    can be designed to obtain higher product concentrations. SVI
                    carbon make falling film absorbers are designed for duty
                    conditions prevailing in plant. Therefore Falling film
                    absorbers of SVICPL make can have turned down ratio as high as
                    5.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Graphite Heat & Mass Transfer Equipment Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Square Banner Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="">
        <div class="container-fluid p-0">
          <img src="{{ asset('website/assets/images/aboutus/HomePageBanner.png') }}" alt="" class="img-fluid" />
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Square Banner Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Home Cards Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="my-5">
        <div class="container">
          <h4 class="heading">SVICPL’s Core Competencies</h4>
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home1.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Minimal Delivery Schedules</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home2.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">
                    Manufacturing Excellence In High Volumes (Three Units)
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home3.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Competitive Prices</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home4.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Highly Reliable Equipment</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home5.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Prompt After-sales Services</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home6.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Process Design & Development</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Home Cards Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Round Banner Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="my-5">
        <div class="container">
          <img src="{{ asset('website/assets/images/home/HomeBanner3.png') }}" alt="" class="img-fluid" />
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Round Banner Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>

@endsection
