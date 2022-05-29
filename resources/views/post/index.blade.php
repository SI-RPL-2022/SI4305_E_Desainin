@extends('layouts.main')
@section('content')
    <div class="container pt-5 pb-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show pt-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2 id="title"><b>{{ auth()->user()->fullname }}'s Portfolio</b></h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 pt-1">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT05pdKKwdtV4ShFi3lftV3u4z-i1bFTjs7UA&usqp=CAU"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><b>{{ $post->title }}</b></h3>
                            <h5 class="card-title">Portfolio by {{ $post->user_id }}</h5>
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <a class="material-icons floating-btn" href="/create">add</a>
@endsection