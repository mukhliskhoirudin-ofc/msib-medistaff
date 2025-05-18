<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link d-flex align-items-center text-decoration-none">
            <span class="app-brand-logo demo d-flex align-items-center justify-content-center rounded-circle shadow-sm"
                style="width: 44px; height: 44px; background: linear-gradient(135deg, #5a63f6, #8e97ff);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 40 40" fill="none">
                    <line x1="20" y1="8" x2="20" y2="32" stroke="white" stroke-width="4"
                        stroke-linecap="round" />
                    <line x1="8" y1="20" x2="32" y2="20" stroke="white" stroke-width="4"
                        stroke-linecap="round" />
                    <!-- subtle shadow glow -->
                    <filter id="shadow" x="-10" y="-10" width="60" height="60" filterUnits="userSpaceOnUse">
                        <feDropShadow dx="0" dy="0" stdDeviation="1.5"
                            flood-color="rgba(255,255,255,0.7)" />
                    </filter>
                    <line x1="20" y1="8" x2="20" y2="32" stroke="white" stroke-width="4"
                        stroke-linecap="round" filter="url(#shadow)" />
                    <line x1="8" y1="20" x2="32" y2="20" stroke="white" stroke-width="4"
                        stroke-linecap="round" filter="url(#shadow)" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2 fs-4 text-dark">{{ config('app.name') }}</span>
        </a>



        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- menu sidbar --}}
        <li class="menu-item {{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-alt"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data Master</span>
        </li>

        <li class="menu-item">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Data Doctor</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-printer"></i>
                <div data-i18n="Layouts">Cetak Laporan</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        <div data-i18n="Without menu">Bulanan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link">
                        <div data-i18n="Without navbar">Tahunan</div>
                    </a>
                </li>
            </ul>
        </li>
</aside>
