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
                                <h5 class="card-text">{{ $post->body }}</h5>
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
