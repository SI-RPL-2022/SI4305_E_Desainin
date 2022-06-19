<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="navbar">
    <div class="container-fluid py-2">
        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand ps-5" href="/">
                <svg width="30" height="30" viewBox="0 0 97 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 6C111.159 6 111.159 106 30 106" stroke="#5A0C0C" stroke-width="12" />
                    <line x1="30" y1="6" y2="6" stroke="#5A0C0C" stroke-width="12" />
                    <line y1="106" x2="30" y2="106" stroke="#5A0C0C" stroke-width="12" />
                    <rect y="19" width="15" height="10" fill="#FFC107" />
                    <rect y="36" width="15" height="57" fill="#FFC107" />
                </svg>
            </a>
            <ul class="navbar-nav" id="navbar-font">
                <li class="nav-item ps-5">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="nav-link {{ Request::is('collections') ? 'active' : '' }}"
                        href="/collections">Collections</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end px-5" id="navbarNav">
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            id="navbar-font">{{ auth()->user()->username }}</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/profile" id="navbar-font">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/post" id="navbar-font">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-postcard" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z" />
                                    </svg>
                                    My Post
                                </a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit" id="navbar-font">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd"
                                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <a class="btn" id="register-login-btn" href="/login">Login</a>
            @endauth
        </div>
    </div>
</nav>
