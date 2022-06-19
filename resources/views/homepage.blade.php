@extends('layouts.main')

@section('content')
    @auth
        <div class="container py-5" align="center">
            <div class="karosel">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($announcements as $key => $announcement)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $loop->index }}" class="{{ $key == 0 ? 'active' : '' }}"
                                aria-current="{{ $key == 0 ? 'true' : '' }}"
                                aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>
                    @if ($announcements->isNotEmpty())
                        <div class="carousel-inner">
                            @foreach ($announcements as $key => $announcement)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="7500">
                                    <img src="{{ asset('storage/' . $announcement->banner_image) }}" class="d-block w-100"
                                        alt="..." style="max-height: 640px">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="carousel inner">
                            <div class="carousel-item active">
                                <img src="img/mockup-announcement-1.png" class="d-block w-100" alt=""
                                    style="max-height: 640px">
                                {{-- <img src="https://source.unsplash.com/1280x720/?illustrations" alt=""> --}}
                            </div>
                        </div>
                    @endif

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    @else
        <div class="container pt-5 pb-5 mb-4">
            <div class="row justify-content-center pt-2">
                <div class="col-6" style="padding-top: 13%">
                    <h2 id="big-title">Struggling to Get a Wonderful<h2 id="big-title-yellow">Design?</h2>
                    </h2>
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
    @endauth
@endsection
