<div class="header">
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="{{ asset('') }}assets/img/logo.png" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="{{ asset('') }}assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="{{ asset('') }}assets/img/profiles/avatar-01.jpg"
                        width="31" alt="Soeng Souy">
                    <div class="user-text">
                        <h6>{{ Auth::user()->nama_pengguna }}</h6>
                        <p class="text-muted mb-0">{{ Str::ucfirst(Auth::user()->user_type) }}</p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{ asset('') }}assets/img/profiles/avatar-01.jpg" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                </div>
                <a class="dropdown-item" href="{{ url(Auth::user()->user_type . '/profil') }}">My Profile</a>

                {{-- <a class="dropdown-item" href="inbox.html">Inbox</a> --}}
                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
            </div>
        </li>
    </ul>
</div>