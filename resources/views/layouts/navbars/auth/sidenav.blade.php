<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ps bg-default"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
            <img src="{{ asset('img/PUPRP.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">DPUPRP KAB.BINTAN</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    {{-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main"> --}}
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'frontend' ? 'active' : '' }}" href="{{ route('frontend') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">FrontEnd</span>
            </a>
        </li> --}}
        <li class="nav-item mt-3 d-flex align-items-center">
            <div class="ps-4">
                <i class="fas fa-list" style="color: #f4645f;"></i>
            </div>
            <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Data Master</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'bidang') ? 'active' : '' }}"
                href="{{ route('bidang', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-building text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Bidang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'pejabat') ? 'active' : '' }}"
                href="{{ route('pejabat', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-badge text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Profil Pejabat</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'sejarah') ? 'active' : '' }}"
                href="{{ route('sejarah', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-collection text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Sejarah</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'visimisi') ? 'active' : '' }}"
                href="{{ route('visimisi', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-bulb-61 text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Visi & Misi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'struktur') ? 'active' : '' }}"
                href="{{ route('struktur', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-bullet-list-67 text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Struktur Organisasi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'map') ? 'active' : '' }}"
                href="{{ route('map', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-map-big text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Geografis</span>
            </a>
        </li>
        <li class="nav-item mt-3 d-flex align-items-center">
            <div class="ps-4">
                <i class="ni ni-album-2" style="color: #f4645f;"></i>
            </div>
            <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Media</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'berita') ? 'active' : '' }}"
                href="{{ route('berita', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Berita</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'galeri') ? 'active' : '' }}"
                href="{{ route('galeri', ['page' => 'index']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-album-2 text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Foto</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link {{ str_contains(request()->url(), 'tables') ? 'active' : '' }}"
                href="{{ route('page', ['page' => 'tables']) }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-button-play text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Video</span>
            </a>
        </li> --}}
        {{-- <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'billing') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'billing']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }}"
                    href="{{ route('virtual-reality') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}"
                    href="{{ route('rtl') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li> --}}
        {{-- <li class="nav-item mt-3 d-flex align-items-center">
            <div class="ps-4">
                <i class="fa fa-cogs" style="color: #f4645f;"></i>
            </div>
            <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Pengaturan</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'profile-static' ? 'active' : '' }}"
                href="{{ route('profile-static') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('sign-in-static') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-badge text-light text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Pengguna</span>
            </a>
        </li> --}}
        {{-- <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-up-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li> --}}
    </ul>
    {{-- </div> --}}
    {{-- <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-50 mx-auto" src="{{ asset('img/illustrations/icon-documentation-warning.svg') }}"
                alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                </div>
            </div>
        </div>
        <a href="/docs/bootstrap/overview/argon-dashboard/index.html" target="_blank"
            class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
        <a class="btn btn-primary btn-sm mb-0 w-100"
            href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank"
            type="button">Upgrade to PRO</a>
    </div> --}}
</aside>
