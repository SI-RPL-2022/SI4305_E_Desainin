<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="navbar">
    <div class="container-fluid py-2">
        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand ps-5" href="/">
                <img src="img/desaininlogo.png" alt="" width="30" height="30">
            </a>
            <ul class="navbar-nav" id="navbar-font">
                <li class="nav-item ps-5">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="nav-link" href="/collections">Collections</a>
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
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="navbar-font">{{ auth()->user()->fullname }}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" id="navbar-font">Profile</a></li>
                        <li><a class="dropdown-item" href="/post" id="navbar-font">My Post</a></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit" id="navbar-font">Logout</button>
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