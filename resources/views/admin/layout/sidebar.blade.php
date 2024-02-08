<style>
    .sidebar li .submenu {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
</style>
<nav class="sidebar sidebar-offcanvas fixed-nav" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                {{-- <div class="profile-image">
                          <img src="images/faces/face5.jpg" alt="image" />
                      </div> --}}
                <div class="profile-name">
                    <p class="name">
                        Welcome Admin
                    </p>
                    {{-- <p class="designation">
                              Super Admin
                          </p> --}}
                </div>
            </div>
        </li>
        <li class="{{ request()->is('dashboard*') ? 'nav-item active' : 'nav-item' }}">
            <a class="{{ request()->is('dashboard*') ? 'nav-link active' : 'nav-link' }}"
                href="{{ route('/dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="{{request()->is('list-marquee-tab*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-marquee-tab') }}">Marquee</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-location-address') }}">Location Address</a>
                   
                    </li>
                </ul>
            </div>
        </li>
        <li class="{{request()->is('list-slide*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#home" aria-expanded="false" aria-controls="home">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Home</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-aboutus') }}">About Us</a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link"
                                href="{{ route('list-product') }}">Product</a></li>
                </ul>
            </div>
        </li>
     
        <li class="{{request()->is('list-application-form*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#adminssion" aria-expanded="false" aria-controls="master">
                <i class="fas fa-file-alt menu-icon"></i>
                <span class="menu-title">Admission</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="adminssion">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link active"
                            href="{{ route('list-application-form') }}">Admission Form</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-scolarship-form') }}">Scolarship</a></li>

                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-fesspayment-form') }}">Fees Payment</a>

                    </li>

                </ul>
            </div>
        </li>
      
        <li class="{{request()->is('list-media*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-media') }}">
                <i class="fas fa-newspaper menu-icon"></i>
                <span class="menu-title">Media</span>
            </a>
        </li>
        <li class="{{request()->is('list-contactus-form*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-contactus-form') }}">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">Contact Us</span>
            </a>
        </li>
        <li class="{{request()->is('log-out*') 
            ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('log-out') }}">
                <i class="fas fa-power-off menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    
                        
                        
    </ul>
</nav>
<!-- partial -->

<script></script>
