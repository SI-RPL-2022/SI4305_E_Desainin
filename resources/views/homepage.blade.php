@extends('layouts.main')

@section('content')
<div class="container pt-5 pb-5 mb-4">
    <div class="row justify-content-center pt-2">
        <div class="col-6" style="padding-top: 13%">
            <h2 id="big-title">Struggling to Get a Wonderful<h2 id="big-title-yellow">Design?</h2></h2>
            <p id="sub-title-homepage">Find yours here. Easy and simple.</p>
            @guest
            <a class="btn" id="register-login-btn" href="/register">Register</a>
            @endguest
        </div>   
        <div class="col-4 pt-2">
            <img src="img/homepage.png" alt="login" id="rightimg">
        </div>
    </div>
</div>
@endsection