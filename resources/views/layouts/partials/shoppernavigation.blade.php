<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="{{asset('images/admin/profile_small.jpg')}}" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold">John Doe</strong>
                                    </span>
                                    <span class="text-muted text-xs block">Admin
                                        <b class="caret"></b>
                                    </span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li>
                                    <a href="profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="mailbox.html">Mailbox</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="login.html">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            GC+
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{route('shopper_dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a>
                            <i class="fa fa-shopping-cart"></i>
                            <span class="nav-label">orders</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{route('shopper_delivered')}}">delivered</a>
                            </li>
                            <li>
                                <a href="{{route('shopper_available')}}">available</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('shopper_statistics')}}">
                            <i class="fa fa-bar-chart"></i>
                            <span class="nav-label">statistics</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('shopper_settings')}}">
                            <i class="fa fa-gears"></i>
                            <span class="nav-label">settings</span>
                        </a>
                    </li>


                </ul>

            </div>
        </nav>
