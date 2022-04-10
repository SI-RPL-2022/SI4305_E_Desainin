<!DOCTYPE html>
<html lang="en">
    @include('layouts.head.head')
    <body id="body-home">
        @include('layouts.navbar.navbar')
        @yield('content')
        <footer>
            <center>
                <div class="container mb-2">
                    <img src="img/desaininlogo.png" alt="" width="auto" height="25">
                </div>
                <div class="container">
                    <p id="copyrights">©️Desainin 2022. All rights reserved.</p>
                </div>
            </center>
        </footer>
    </body>
</html>