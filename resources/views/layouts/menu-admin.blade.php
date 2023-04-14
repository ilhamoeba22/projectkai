<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <a href="{{ route('dashboard') }}" class="app-brand-">
        <img src="{{ asset('public') }}/assets/img/lostnfound.png" class="w-100 p-5" alt="">
    </a>
    <div class="app-brand ">


        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active ': '' }}  ">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard </div>
            </a>
        </li>

        <li
            class="menu-item {{ request()->routeIs('lostitems','items','detaillostitems','edit-item','tambahitems') ? 'active open ': 'open' }} ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Master Data</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('items','tambahitems','edit-item') ? 'active ': '' }}">
                    <a href="{{ route('items') }}" class="menu-link">
                        <div data-i18n="items">Data Items</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('lostitems','detaillostitems') ? 'active ': '' }}">
                    <a href="{{ route('lostitems') }}" class="menu-link">
                        <div data-i18n="items">Data Lost Items</div>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->