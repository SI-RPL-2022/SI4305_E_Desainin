@extends('layouts.mainadmin')

@section('content')

    <body id="body-home">

        @include('adminview.layouts.header')

        <div class="container-fluid">
            <div class="row">
                @include('adminview.layouts.sidebar')

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('container')
                </main>
            </div>
        </div>
    </body>
@endsection
