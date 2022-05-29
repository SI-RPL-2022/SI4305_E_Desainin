@extends('layouts.form.form')

@section('left')
    <div class="containter">
        <div class="row justify-content-center">
            <div class="container" id="imgleftside" align="center">
                <img src="img/REGISTER.png" alt="login" id="leftimg">
            </div>
            <div class="container pt-4">
                <h2 align="center" id="title"><b>Don’t Have an Account?</b></h2>
                <h5 align="center" style="margin-bottom: 50px" id="sub-title">Get Started by Creating Your New Account</h5>
            </div>
            <div class="container">
                <center><a class="btn" id="btnleftside" href="/register">Register</a></center>
            </div>
        </div>
    </div>
@endsection

@section('right')
    <div class="container">
        <div class="container pt-3">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show pt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show pt-3" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="container px-5 py-5">
            <h2 align="center" id="title"><b>Welcome Back!</b></h2>
            <h5 align="center" style="margin-bottom: 50px" id="sub-title">We Are Happy To Have You Back</h5>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="regloginfont"
                        placeholder="Email" name="email" value="{{ old('email') }}" autofocus>
                    @error('email')
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
                <center><button class="btn" id="register-login-btn">Login</button></center>
            </form>
            <div class="separator pt-4" id="separatorfont">OR</div>
            @include('layouts.api.api')
        </div>
    </div>
@endsection
