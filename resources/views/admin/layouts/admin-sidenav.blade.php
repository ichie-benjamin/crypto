
<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('/') }}" target="_blank"><span>[</span>{{ setting('site_name') }}<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ route('admin.dashboard') }}" class="br-menu-link {{ active('admin.dashboard') }}">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->


        <a href="#" class="br-menu-link  {{ active('admin.users.index', 'active show-sub') }}">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-user tx-18"></i>
                <span class="menu-item-label"> Manage Users</span>
                <i class="menu-item-arrow fa fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link {{ active('admin.users.index') }}">Users</a></li>
{{--            <li class="nav-item"><a href="" class="nav-link">Banned Accounts</a></li>--}}
        </ul>


        <a href="{{ route('admin.packages.index') }}" class="br-menu-link  {{ active('admin.packages.index') }}">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-shopping-bag tx-22"></i>
                <span class="menu-item-label"> Packages</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{ route('admin.currencies.index') }}" class="br-menu-link  {{ active('admin.currencies.index') }}">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-pager tx-22"></i>
                <span class="menu-item-label"> Currency Pair</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->


{{--        <a href="{{ route('admin.currencies.index') }}" class="br-menu-link  {{ active('admin.currencies.index') }}">--}}
{{--            <div class="br-menu-item">--}}
{{--                <i class="menu-item-fa fa fa-shopping-bag tx-22"></i>--}}
{{--                <span class="menu-item-label">Currencies</span>--}}
{{--            </div><!-- menu-item -->--}}
{{--        </a><!-- br-menu-link -->--}}



        <a href="#" class="br-menu-link {{ active('admin.deposits.index', 'active show-sub') }}">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-credit-card tx-18"></i>
                <span class="menu-item-label"> Manage Deposit</span>
                <i class="menu-item-arrow fa fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.deposits.index') }}" class="nav-link {{ active('admin.deposits.index') }}">All Deposits</a></li>
{{--            <li class="nav-item"><a href="" class="nav-link"></a></li>--}}
        </ul>

        <a href="{{ route('admin.withdrawals.index') }}" class="br-menu-link {{ active('admin.withdrawals.index', 'active show-sub') }}">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-calculator tx-18"></i>
                <span class="menu-item-label"> Withdrawals</span>
                <i class="menu-item-arrow fa fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.withdrawals.index') }}" class="nav-link {{ active('admin.withdrawals.index') }}">All Withdrawals</a></li>
{{--            <li class="nav-item"><a href="" class="nav-link">Approved Withdrawal</a></li>--}}
{{--            <li class="nav-item"><a href="" class="nav-link">Refunded Withdrawal</a></li>--}}
{{--            <li class="nav-item"><a href="" class="nav-link"></a></li>--}}

        </ul>


        <a href="#" class="br-menu-link {{ active(['admin.users.active.plans','admin.trades.*'], 'active show-sub') }}">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-trademark tx-18"></i>
                <span class="menu-item-label"> Trades</span>
                <i class="menu-item-arrow fa fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.users.active.plans') }}" class="nav-link {{ active('admin.users.active.plans') }}">Active plans</a></li>
            <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link {{ active('admin.users.index') }}">All Users</a></li>
{{--            <li class="nav-item"><a href="" class="nav-link">All Users</a></li>--}}
{{--            <li class="nav-item"><a href="" class="nav-link">Refunded Withdrawal</a></li>--}}
{{--            --}}{{--            <li class="nav-item"><a href="" class="nav-link"></a></li>--}}

        </ul>

        <a href="{{ route('admin.user.logins.logs') }}" class="br-menu-link {{ active('admin.user.logins.logs') }}">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-list-alt tx-22"></i>
                <span class="menu-item-label"> Login Logs</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{ route('admin.settings.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-cogs tx-22"></i>
                <span class="menu-item-label"> General Setting</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->


        <a href="{{ route('admin.users.ids') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-id-card tx-22"></i>
                <span class="menu-item-label">National IDs</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->



        <br>
        <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="br-menu-link">

            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-power tx-18"></i>
                <span class="menu-item-label">Logout</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    </div><!-- br-sideleft-menu -->





    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            @section('hide')
            <div class="dropdown">
                <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-email-outline tx-18"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                    <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                        <a href="#" class="tx-11">+ Add New Message</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="#" class="media-list-link">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                                        <span class="tx-11 tx-gray-500">2 minutes ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img4.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                                        <span class="tx-11 tx-gray-500">3 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img7.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                                        <span class="tx-11 tx-gray-500">5 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                                        <span class="tx-11 tx-gray-500">Yesterday</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="pd-y-10 tx-center bd-t">
                            <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
                <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-18"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                    <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                        <a href="#" class="tx-11">Mark All as Read</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                    <span class="tx-12">October 03, 2017 8:45am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                                    <span class="tx-12">October 02, 2017 12:44am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                                    <span class="tx-12">October 01, 2017 10:20pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                    <span class="tx-12">October 01, 2017 6:08pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="pd-y-10 tx-center bd-t">
                            <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            @endsection
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{ auth()->user()->username }}</span>
                    <img src="{{ asset(auth()->user()->avatar) }}) }}" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="#"><i class="icon ion-ios-person"></i> Change Password</a></li>
                        <li><a href="{{ route('admin.settings.index') }}"><i class="icon ion-ios-gear"></i> Settings</a></li>
{{--                        <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>--}}
{{--                        <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>--}}
{{--                        <li><a href="#"><i class="icon ion-ios-folder"></i> Collections</a></li>--}}
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Sign Out</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="br-sideright">


    <!-- Tab panes -->

</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->
