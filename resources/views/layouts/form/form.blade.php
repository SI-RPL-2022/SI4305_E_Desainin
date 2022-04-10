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
                        <img src="img/desaininlogo.png" alt="" width="auto" height="25">
                    </div>
                    <div class="container">
                        <p id="copyrights">©️Desainin 2022. All rights reserved.</p>
                    </div>
                </center>
            </footer>
        </div>
    </div>
</body>