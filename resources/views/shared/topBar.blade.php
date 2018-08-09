<header class="header">
         <!-- Top Bar -->
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
                            <a href="#">{{ Auth::user()->username }}</a>
                        </div>
                        <div class="user_box_login user_box_link">
                            <a href="{{ url('/logout') }}">{{ trans('header.logout') }}</a>
                        </div>
                    @if(Auth::user()->role == 1)
                        <div class="user_box_login user_box_link">
                           <a href="{{ url('/admincp') }}">{{ trans('header.admin') }}</a>
                           </div>
                    @endif
                    @else
                        <div class="user_box_login user_box_link">
                            <a href="{{ url('/login') }}">{{ trans('header.login') }}</a>
                        </div>
                        <div class="user_box_register user_box_link"><a href="{{ url('/register') }}">{{ trans('header.register') }}</a></div>
                    @endif
                    </div>
                </div>
            </div>
        </div>      
    </div>
</header>