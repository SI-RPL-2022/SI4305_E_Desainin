<header class="navbar navbar-light sticky-top p-0" style="box-shadow: 0px 1px 4px grey;" id="navbar">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/admin"><img src="img/desaininlogo.png" alt="Desainin"
            width="30" height="30"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
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