@extends('layouts.main')
@section('content')
    @if ($posts->count())
        <div class="container pt-5 pb-5">
            <h2 class="pb-3" id="title"><b>
                    <center>Portfolio Collections</center>
                </b></h2>
            <div class="card mb-4">
                <img src="https://source.unsplash.com/1200x400/?design-web" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><b>{{ $posts[0]->title }}</b></h5>
                    <h5 class="card-text text-muted">by <a
                            href="/{{ $posts[0]->user->username }}">{{ $posts[0]->user->fullname }}</a> |
                        {{ $posts[0]->created_at->diffForHumans() }}</h5>
                    <h5 class="card-text">{{ $posts[0]->body }}</h5>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 pt-1">
                @foreach ($posts->skip(1) as $post)
                @include('post.partial.loopcardpost')
                @endforeach
            </div>
        </div>
    @else
        <div class="container pt-5 pb-5">
            <h2 id="title"><b>
                    <center>No portfolio posted by user.</center>
                </b></h2>
        </div>        
    @endif
@endsection
