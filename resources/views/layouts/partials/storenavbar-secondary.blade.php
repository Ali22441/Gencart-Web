<div id="nav-tabs-outer" class="nav-tabs-outer">
    <div class="nav-tabs-inner-wrapper">

        <ul class="nav navbar-secondary">
            <li class="navbar-secondary-item">
                <a class="navbar-secondary-link {{ isActiveRoute('show_store','current') }}" href="{{ route('show_store', ['store' => $store->slug]) }}">Home</a>
            </li>
            <li class="navbar-secondary-item">
                <a class="navbar-secondary-link {{ isActiveRoute('show_store_departments','current') }}" href="{{ route('show_store_departments', ['store' => $store->slug]) }}">Department</a>
            </li>
        </ul>

    </div>
</div><!-- nav-tabs ends here -->