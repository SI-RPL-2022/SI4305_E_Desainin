@extends('layouts.main')
@section('content')
    @if ($posts->count())
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
                            <div style="max-height: 400px; overflow: hidden">
                                <img src="{{ asset('storage/' . $post->image) }}"
                                class="card-img-top" alt="...">
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
            <h2 id="title"><b>
                    <center>No portfolio posted by {{ auth()->user()->username }}.</center>
                </b></h2>
        </div>
    @endif
    <a class="material-icons floating-btn" href="/create">add</a>
@endsection
