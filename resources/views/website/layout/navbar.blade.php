  <!-- ------------------------------------------------------------------------------------>
    <!-- Header Section Starts Here -->
    <!-- ------------------------------------------------------------------------------------>

    <section class="headerSection">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
              <img src="{{ asset('website/assets/images/logo.png')}}" class="logo" alt="logo" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                    class="nav-link active text-white"
                    aria-current="page"
                    href="{{url('/')}}"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('product') }}"
                    >Product & Services</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('media') }}">Media</a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link headerBtn btn text-white px-2"
                    href="{{ route('contactus') }}"
                    >Contact</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </section>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Header Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>

       <!-- ------------------------------------------------------------------------------------>
    <!-- Banner Section Starts Here -->
    <!-- ------------------------------------------------------------------------------------>
    <section>
        <img src="{{ asset('website/assets/images/home/HomeBanner.png') }}" alt="Home_Banner" class="img-fluid" />
      </section>
      <section class="container bannerCardContainer">
        <div class="card bannerCard pt-3 pb-1">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h6>
                ISO 9000 CERTIFIED <br />
                COMPANY
              </h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h6>
                PROFESSIONAL AND <br />
                TIMELY SERVICE
              </h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h6>
                WE MAKE DURABLE <br />
                GRAPHITE PRODUCTS
              </h6>
            </div>
          </div>
        </div>
      </section>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Banner Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>