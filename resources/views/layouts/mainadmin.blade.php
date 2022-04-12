<!DOCTYPE html>
<html lang="en">
@include('layouts.head.head')
<head>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="js/dashboard.js"></script>
</body>

</html>