<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt=" App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a>
                        </li>

                        <!-- Links visible only for authenticated users -->
                        @auth
                            <li class="nav-item dropdown hover-dropdown">
                                <a href="#" class="nav-link dropdown-toggle">
                                    {{ Auth::user()->name }} <!-- Display user name -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- Logout link -->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out-alt"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth

                        <!-- Links visible only for guests (not logged in) -->
                        @guest
                            <li>
                                <div class="">
                                    <a href="{{ route('login') }}" id="modal_trigger" class="signin-button"><i class="fa fa-sign-in-alt"></i> Sign In Now</a>
                                </div>
                            </li>
                            <li>
                                <div class="gradient-button">
                                    <a href="{{ route('register') }}" id="modal_trigger"><i class="fa fa-user-plus"></i> Register</a>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    <!-- Mobile Menu Trigger -->
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
