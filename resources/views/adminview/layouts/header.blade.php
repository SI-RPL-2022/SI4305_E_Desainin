<header class="navbar navbar-light sticky-top p-0" style="box-shadow: 0px 1px 4px grey;" id="navbar">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/admin"><svg width="30" height="30"
            viewBox="0 0 97 112" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 6C111.159 6 111.159 106 30 106" stroke="#5A0C0C" stroke-width="12" />
            <line x1="30" y1="6" y2="6" stroke="#5A0C0C" stroke-width="12" />
            <line y1="106" x2="30" y2="106" stroke="#5A0C0C" stroke-width="12" />
            <rect y="19" width="15" height="10" fill="#FFC107" />
            <rect y="36" width="15" height="57" fill="#FFC107" />
        </svg></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item px-3">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn px-3" type="submit" id="register-login-btn">Logout</button>
            </form>
        </div>
    </div>
</header>
