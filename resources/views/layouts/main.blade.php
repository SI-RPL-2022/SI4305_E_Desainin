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
                <img src="img/desaininlogo.png" alt="" width="auto" height="25">
            </div>
            <div class="container">
                <p id="copyrights">©️Desainin 2022. All rights reserved.</p>
            </div>
        </center>
    </footer>
</body>

</html>
