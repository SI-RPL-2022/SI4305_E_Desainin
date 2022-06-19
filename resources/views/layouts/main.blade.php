<!DOCTYPE html>
<html lang="en">
@include('layouts.head.head')

<body class="pt-5 mt-1" id="body-home">
    @include('layouts.navbar.navbar')
    @yield('content')
    <script src="js/dashboard.js"></script>
    <footer>
        <center>
            <div class="container mb-2">
                {{-- <img src="img/desaininlogo.png" alt="" width="auto" height="25"> --}}
                <svg width="30" height="30" viewBox="0 0 97 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 6C111.159 6 111.159 106 30 106" stroke="#5A0C0C" stroke-width="12" />
                    <line x1="30" y1="6" y2="6" stroke="#5A0C0C" stroke-width="12" />
                    <line y1="106" x2="30" y2="106" stroke="#5A0C0C" stroke-width="12" />
                    <rect y="19" width="15" height="10" fill="#FFC107" />
                    <rect y="36" width="15" height="57" fill="#FFC107" />
                </svg>
            </div>
            <div class="container">
                <p id="copyrights">©️Desainin 2022. All rights reserved.</p>
            </div>
        </center>
    </footer>
</body>

</html>
