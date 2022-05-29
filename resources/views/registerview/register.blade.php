@extends('layouts.form.form')

@section('left')
    <div class="containter">
        <div class="row justify-content-center">
            <div class="container" id="imgleftside" align="center">
                <img src="img/LOGIN.png" alt="login" id="leftimg">
            </div>
            <div class="container pt-4">
                <h2 align="center" id="title"><b>Already Having an Account?</b></h2>
                <h5 align="center" style="margin-bottom: 50px" id="sub-title">We Are Happy to Have You Back</h5>
            </div>
            <div class="container">
                <center><a class="btn" id="btnleftside" href="/login">Login</a></center>
            </div>
        </div>
    </div>
@endsection

@section('right')
    <div class="container px-5 py-5">
        <h2 align="center" id="title"><b>Create Account</b></h2>
        <h5 align="center" style="margin-bottom: 50px" id=" sub-title">Get started by creating your new account</h5>
        <form style="padding-bottom: 30px" action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="regloginfont"
                    placeholder="Full Name" name="fullname" value="{{ old('fullname') }}">
                @error('fullname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="regloginfont"
                    placeholder="Username" name="username" value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="regloginfont"
                    placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control @error('phonenumber') is-invalid @enderror" id="regloginfont"
                    placeholder="Phone Number" name="phonenumber" value="{{ old('phonenumber') }}">
                @error('phonenumber')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="regloginfont"
                    placeholder="Password" name="password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-check pb-3">
                <input type="checkbox" class="form-check-input @error('agreement') is-invalid @enderror" name="agreement">
                <label id="regloginfont" class="form-check-label"><b>By clicking, you agree to the DesainIn`s Terms and
                        Condition</b></label>
                @error('agreement')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <center><button class="btn" id="register-login-btn">Register</button></center>
        </form>
        <div class="separator" id="separatorfont">OR</div>
        @include('layouts.api.api')
    </div>
@endsection
