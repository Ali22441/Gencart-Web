 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('images/admin/profile_small.jpg')}}" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">John Doe</strong>
                             </span> <span class="text-muted text-xs block">Manager<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            GC+
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{route('storeAdmin_dashboard')}}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>                
                    </li>
                    
                    <li>
                        <a href="{{route('storeAdmin_departments')}}">
                            <i class="fa fa-th"></i>
                            <span class="nav-label">departments</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('storeAdmin_products')}}">
                            <i class="fa fa-qrcode"></i>
                            <span class="nav-label">products</span>
                        </a>
                    </li>
                   
                    <li>
                        <a><i class="fa fa-shopping-cart"></i><span class="nav-label">orders</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{route('storeAdmin_old_orders')}}">old orders</a>
                            </li>
                            <li>
                                <a href="{{route('storeAdmin_new_orders')}}">new orders</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('storeAdmin_statistics')}}"><i class="fa fa-bar-chart"></i> <span class="nav-label">statistics</span></a>
                    </li>
                    <li>
                        <a href="{{route('storeAdmin_settings')}}">
                            <i class="fa fa-gears"></i>
                            <span class="nav-label">settings</span>
                        </a>
                    </li>

                    
                </ul>

            </div>
        </nav>
