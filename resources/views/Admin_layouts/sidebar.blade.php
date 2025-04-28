<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="index.html" class="logo-dark">
            <img src="{{ asset('admin_assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('admin_assets/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
        </a>
        <a href="index.html" class="logo-light">
            <img src="{{ asset('admin_assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('admin_assets/images/logo-light.png') }}" class="logo-lg" alt="logo light">
        </a>
    </div>

    <!-- Menu Toggle Button -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">

            <!-- Dashboard -->
            <li class="menu-title">General</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>

            <!-- User Management -->
            <li class="menu-title">User Section</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarUsers" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:users-group-rounded-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> User Management </span>
                </a>
                <div class="collapse" id="sidebarUsers">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('UserManagement.index') }}">List
                                Users</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('UserManagement.create') }}">Add
                                New User</a></li>
                    </ul>
                </div>
            </li>

            <!-- Costumescategory -->
            <li class="menu-title">Costume Category</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCostumesCategory" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:hanger-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Costume Category </span>
                </a>
                <div class="collapse" id="sidebarCostumesCategory">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('costumecategories.index') }}">List Category</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('costumecategories.create') }}">Create Category</a></li>
                    </ul>
                </div>
            </li>


            <!-- Costumes -->
            <li class="menu-title">Costume Section</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCostumes" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:hanger-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Costumes </span>
                </a>
                <div class="collapse" id="sidebarCostumes">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('CostumeManagement.index') }}">List Costumes</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('CostumeManagement.create') }}">Create Costume</a></li>
                    </ul>
                </div>
            </li>




            <!-- Rentals -->
            <li class="menu-title">Rental Section</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarRentals" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:bag-check-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Rentals </span>
                </a>
                <div class="collapse" id="sidebarRentals">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('rentals.index') }}">List Rentals</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('rentals.create') }}">Create Rental</a></li>
                    </ul>
                </div>
            </li>

            <!-- Dance Classes -->
            <li class="menu-title">Dance Category Section</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarClassescategory" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="mdi:dance-ballroom"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dance Category </span>
                </a>
                <div class="collapse" id="sidebarClassescategory">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('dancecategories.index') }}">List Category</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('dancecategories.create') }}">Create Category</a></li>
                    </ul>
                </div>
            </li>

            <!-- Dance Classes -->
            <li class="menu-title">Dance Classes Section</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarClasses" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="mdi:dance-ballroom"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dance Classes </span>
                </a>
                <div class="collapse" id="sidebarClasses">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('danceclasses.index') }}">List Classes</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link" href="{{ route('danceclasses.create') }}">Create Class</a></li>
                    </ul>
                </div>
            </li>

            <!-- Instrument Rental Category -->
            <li class="menu-title">Instrument Rental </li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarInstrumentCategories" data-bs-toggle="collapse"
                    role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="mdi:guitar-electric"></iconify-icon>
                    </span>
                    <span class="nav-text"> Instrument Categories </span>
                </a>
                <div class="collapse" id="sidebarInstrumentCategories">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('instrumentrentalcategories.index') }}">List
                                Categories</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('instrumentrentalcategories.create') }}">Create
                                Category</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Instrument Rental Items -->
            <li class="menu-title">Instrument Rental</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarInstrumentItems" data-bs-toggle="collapse"
                    role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="mdi:music-circle-outline"></iconify-icon>
                    </span>
                    <span class="nav-text"> Rental Instruments </span>
                </a>
                <div class="collapse" id="sidebarInstrumentItems">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('instrumentrentals.index') }}">List
                                Instruments</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('instrumentrentals.create') }}">Create
                                Instrument</a>
                        </li>
                    </ul>
                </div>
            </li>



            <!-- Appointments -->
            <li class="menu-title">Appointment Section</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarAppointments" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Appointments </span>
                </a>
                <div class="collapse" id="sidebarAppointments">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('AppointmentManagement.index') }}">List Appointments</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('AppointmentManagement.create') }}">Create Appointment</a></li>
                    </ul>
                </div>
            </li>

            <!-- Bookings -->
            <li class="menu-title">Booking Section</li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarBookings" data-bs-toggle="collapse" role="button">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:clipboard-list-check-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Bookings </span>
                </a>
                <div class="collapse" id="sidebarBookings">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('BookingManagement.index') }}">List Bookings</a></li>
                        <li class="sub-nav-item"><a class="sub-nav-link"
                                href="{{ route('BookingManagement.create') }}">Create Booking</a></li>
                    </ul>
                </div>
            </li>

            <!-- Logout -->
            <li class="menu-title">Account</li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link p-0 text-start w-100">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:logout-2-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Sign Out </span>
                    </button>
                </form>
            </li>
            

        </ul>
    </div>
</div>
