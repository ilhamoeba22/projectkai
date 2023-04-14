<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <a href="/" class="app-brand-">
        <img src="{{ asset('public') }}/assets/img/lostnfound.png" class="w-100 p-5" alt="">
    </a>
    <div class="app-brand ">


        <a href="" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard.user') ? 'active ': '' }}  ">
            <a href="{{ route('dashboard.user') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard </div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('aduan','bikinaduan','claimaduan') ? 'active open ': 'open' }} ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Aduan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('aduan','detailaduan','claimaduan') ? 'active ': '' }}">
                    <a href="{{ route('aduan') }}" class="menu-link">
                        <div data-i18n="Account">Aduan Saya</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('bikinaduan') ? 'active ': '' }}">
                    <a href="{{ route('bikinaduan') }}" class="menu-link">
                        <div data-i18n="Notifications">Bikin Aduan</div>
                    </a>
                </li>
                {{-- <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li class="menu-item p-5">
            <a href="/" class="btn btn-primary w-100">Back To Site</a>
        </li>
    </ul>


</aside>
<!-- / Menu -->