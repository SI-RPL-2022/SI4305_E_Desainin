@extends('layouts.main')
@section('content')
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
@endsection
