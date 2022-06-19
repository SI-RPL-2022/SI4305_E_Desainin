@include('layouts.head.head')

<body>
    <!-- register and login page -->
    <div id="container">
        <div class="leftside">
            @yield('left')
        </div>
        <div class="rightside">
            @yield('right')
            <footer>
                <center>
                    <div class="container mt-4 mb-2">
                        {{-- <img src="img/desaininlogo.png" alt="" width="auto" height="25"> --}}
                        <svg width="30" height="30" viewBox="0 0 97 112" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
        </div>
    </div>
</body>
