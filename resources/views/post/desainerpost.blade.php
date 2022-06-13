@extends('layouts.main')
@section('content')
    @if ($posts->count())
        <div class="container pt-5 pb-5">
            <?php
            foreach ($posts as $post) {
                $desainer = $post->user->fullname;
            }
            ?>
            <h2 id="title"><b>{{ $desainer }}'s Portfolio</b></h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 pt-1">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card h-100">
                            <div style="max-height: 400px; overflow: hidden">
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><b>{{ $post->title }}</b></h3>
                                <h5 class="card-text text-muted">{{ $post->created_at->diffForHumans() }}</h5>
                                <a href="/post-{{ $post->id }}" class="card-text text-decoration-none">
                                    View More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="container pt-5 pb-5">
            @foreach ($posts as $post)
                <h2 id="title"><b>
                        <center>No portfolio posted by {{ $post->user->fullname }}.</center>
                    </b></h2>
            @endforeach
        </div>
    @endif
@endsection
