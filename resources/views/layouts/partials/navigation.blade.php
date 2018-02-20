 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('images/admin/profile_small.jpg')}}" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ auth()->user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <!-- <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li> -->
                                <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Logout
                            </a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            GC+
                        </div>
                    </li>
                    <li class="{{ isActiveRoute('admin_dashboard') }}">
                        <a href="{{route('admin_dashboard')}}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>                
                    </li>
                    
                    <li class="{{ isActiveRoute('admin_customers') }}">
                        <a href="{{route('admin_customers')}}"><i class="fa fa-users"></i> <span class="nav-label">Customers</span></a>
                        
                    </li>
                    <li class="{{ isActiveRoute('admin_shoppers') }}">
                        <a href="{{route('admin_shoppers')}}">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">Shoppers</span>
                        </a>
                    </li>

                    <li class="{{ isActiveRoute('admin_stores') }}">
                        <a href="{{route('admin_stores')}}"><i class="fa fa-laptop"></i> <span class="nav-label">Stores</span></a>
                    </li>

                    <li class="{{ isActiveRoute('admin_products') }}">
                        <a href="{{route('admin_products')}}">
                            <i class="fa fa-qrcode"></i>
                            <span class="nav-label">Products</span>
                        </a>
                    </li>
                   
                    <li class="{{ isActiveRoute('admin_old_orders')  ? isActiveRoute('admin_old_orders') : isActiveRoute('admin_new_orders') }}">
                        <a href=""><i class="fa fa-shopping-cart"></i><span class="nav-label">Orders</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ isActiveRoute('admin_old_orders') }}">
                                <a href="{{route('admin_old_orders')}}">Old orders</a>
                            </li>
                            <li class="{{ isActiveRoute('admin_new_orders') }}">
                                <a href="{{route('admin_new_orders')}}">New orders</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ isActiveRoute('admin_statistics') }}">
                        <a href="{{route('admin_statistics')}}"><i class="fa fa-bar-chart"></i> <span class="nav-label">statistics</span></a>
                    </li>
                    <li class="{{ isActiveRoute('admin_settings') }}">
                        <a href="{{route('admin_settings')}}">
                            <i class="fa fa-gears"></i>
                            <span class="nav-label">settings</span>
                        </a>
                    </li>

                    
                </ul>

            </div>
        </nav>