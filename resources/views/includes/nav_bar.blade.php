<!-- Main Container -->
    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form class="search-form" action="post">
                            <label>What are you looking for?</label>
                            <input type="text" placeholder="Your search term here...">
                            <span>Press <b class="primary">enter</b> to confirm search term</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ route('home') }}"><img src="/images/logo.png" alt="BTCC Logo"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="#"><strong>EVENTS</strong></a>
                                    <ul class="dropdown">
                                        <div class="sub-nav-header"><p><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp;&nbsp;Business</p></div>
                                        <div class="move-left-bit">
                                            <li><a href="{{ route('london_tamil_market') }}"> &nbsp;London Tamil Market</a></li>
                                            <li><a href="{{ url('uk/tamil-heritage-month') }}"> &nbsp;Tamil Heritage Month</a></li>
                                        <!--<li><a href="{{ url('british-tamil-awards-night') }}"> &nbsp;British Tamil Awards Night</a></li>
                                            <li><a href="{{ route('tamil_business_offers') }}"> &nbsp;Tamil Business Offers</a></li>-->

                                        </div>
                                        <!--
                                        <div class="sub-nav-header"><p><i class="fa fa-tags" aria-hidden="true"></i> &nbsp;&nbsp;Other</p></div>
                                        <div class="move-left-bit">
                                            <li><a href="{{ route('job') }}"> &nbsp;Job</a></li>
                                        </div>-->
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('london-tamil-market-2023') }}"><strong>LTM{{ env('LTM_YEAR') }}</strong></a></li>
                                <li><a href="#"><strong>NEWS</strong></a>
                                    <ul class="dropdown">
                                        <div class="sub-nav-header"><p><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;&nbsp;Posts</p></div>
                                        <div class="move-left-bit">
                                            <li><a href="{{ url('posts/news') }}"> &nbsp;News</a></li>
                                            <li><a href="{{ url('posts/blog') }}"> &nbsp;Blogs</a></li>
                                        </div>
                                        <!--
                                        <div class="sub-nav-header"><p><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;&nbsp;Events</p></div>
                                        <div class="move-left-bit">
                                            <li><a href="/london-tamil-market"> &nbsp;LTM Event</a></li>
                                            <li><a href="/events"> &nbsp;Events</a></li>
                                        </div>-->
                                    </ul>
                                </li>
                                <li><a href="#"><strong>MEMBERSHIP</strong></a>
                                    <ul class="dropdown">
                                        <div class="sub-nav-header"><p><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;&nbsp;Members</p></div>
                                        <div class="move-left-bit">
                                            <li><a href="{{ route('members') }}"> &nbsp;Members Directory</a></li>
                                            <li><a href="{{ url('membership-type') }}"> &nbsp;Membership Types</a></li>
                                        </div>
                                        <!--
                                        <div class="sub-nav-header"><p><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;&nbsp;Events</p></div>
                                        <div class="move-left-bit">
                                            <li><a href="/london-tamil-market"> &nbsp;LTM Event</a></li>
                                            <li><a href="/events"> &nbsp;Events</a></li>
                                        </div>-->
                                    </ul>
                                </li>
                                <li class=""><a href="{{ route('about') }}"><strong>ABOUT</strong></a></li>
                                <li class=""><a href="{{ route('contact') }}"><strong>CONTACT</strong></a></li>
                            </ul>
                            <div class="get-a-quote ml-4 mr-3">
                            </div>
                            <!-- Login / Register                           -->

                            <div class="login-register-btn border-btn mx-5">
                                    <!-- Authentication Links -->
                                    @guest
                                        <a href="{{ route('login') }}">
                                            <span><i class="fa fa-sign-in" style="color: gray"></i> &nbsp;Sign-in</span>
                                        </a>
                                    <!--&nbsp;/&nbsp;
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">
                                                <i class="fa fa-handshake-o" style="color: gray"></i> &nbsp;Join-BTCC
                                            </a>
                                        @endif-->
                                    @else
                                    <div class="classynav">
                                        <ul style="text-align: left !important;">
                                            <li><a href="#"><strong>{{ Auth::user()->name }}</strong></a>
                                                <ul class="dropdown" style="width:150px;">
                                                    <div class="move-left-bit">
                                                        <li><a href="{{ url('member/home') }}"> &nbsp;Manage</a></li>
                                                    </div>
                                                    <div class="move-left-bit">
                                                        <li>
                                                            <a href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();"> &nbsp;{{ __('Logout') }}</a>
                                                        </li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    @endguest
                            </div>

                            <!-- Search Icon -->
                            <!--
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>-->
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
            <!--<div class="header-area-line-1"></div>
            <div class="header-area-line-2"></div>
            <div class="header-area-line-3"></div>-->
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

