    <header class="header">
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="phone">+45 345 3324 56789</div>
                        <div class="social">
                            <ul class="social_list">
                                <li class="social_list_item">
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="social_list_item">
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="user_box ml-auto">
                        @if (Auth::check())
                           <div class="user_box_login user_box_link">
                           <a href="#">{{ Auth::user()->username }}</a></div>
                           <div class="user_box_login user_box_link">
                           <a href="{{ url('/logout') }}">{{ trans('header.logout') }}</a></div>
                        @else
                           <div class="user_box_login user_box_link"><a href="{{ url('/login') }}">{{ trans('header.login') }}</a></div>
                            <div class="user_box_register user_box_link"><a href="{{ url('/register') }}">{{ trans('header.register') }}</a></div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>      
        </div>
            <!-- Main Navigation -->
        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="">{{ trans('header.yourlocation') }}
                                </a>
                            </div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item">
                                    <a href="#">{{ trans('header.home') }}</a>
                                </li>
                                <li class="main_nav_item">
                                    <a href="about.html">{{ trans('header.location') }}</a>
                                </li>
                                <li class="main_nav_item">
                                    <a href="offers.html">{{ trans('header.tours') }}</a>
                                </li>
                                <li class="main_nav_item">
                                    <a href="blog.html">{{ trans('header.contact') }}</a>
                                </li>
                            </ul>
                        </div>
                        {!! Form::open(['method' => 'GET', 'url' => 'search', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" name="search" placeholder="{{ trans('header.Search') }}">
                            </div>
                        {!! Form::close() !!}
                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>  
        </nav>
    </header>
