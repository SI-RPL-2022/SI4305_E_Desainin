@extends('layouts.main')

@section('content')
    @auth
        <div class="container pt-5 pb-5 mb-5" align="center">
            <div class="karosel">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="7500">
                            <img src="img/mockup-announcement-1.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item" data-bs-interval="7500">
                            <img src="img/mockup-announcement-2.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item" data-bs-interval="7500">
                            <img src="img/mockup-announcement-3.png" class="d-block w-100" alt="">
                        </div>
                    </div>
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

        <div class="container pb-5">
            <h2>Portfolio Collections</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 pt-1">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT05pdKKwdtV4ShFi3lftV3u4z-i1bFTjs7UA&usqp=CAU"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Portofolio 1</h5>
                            <p class="card-text">Ut ultrices semper elit, sit amet lacinia enim varius eget. Proin ultrices
                                consequat ipsum, eu mattis neque accumsan at.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT05pdKKwdtV4ShFi3lftV3u4z-i1bFTjs7UA&usqp=CAU"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Portofolio 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed
                                placerat
                                quam. Proin eleifend magna vel est sollicitudin gravida. Phasellus eu nunc in quam placerat
                                sollicitudin id nec nisl. </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT05pdKKwdtV4ShFi3lftV3u4z-i1bFTjs7UA&usqp=CAU"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Portofolio 3</h5>
                            <p class="card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia curae; Pellentesque habitant morbi tristique senectus et netus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="material-icons floating-btn" href="/post">add</a>
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
