@extends('layouts.main')
@section('content')
    <div class="container pt-5 pb-5">
        <div class="card mb-4">
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>{{ $post->title }}</b></h5>
                <h5 class="card-text text-muted">by <a href="/{{ $post->user->username }}">{{ $post->user->fullname }}</a>
                    |
                    {{ $post->created_at->diffForHumans() }}</h5>
                <h5 class="card-text pt-3" style="line-height: 1.6">{{ $post->body }}</h5>
            </div>
        </div>

        <div class="card">
            <h4 class="card-title ps-4 pt-4"><b>Comment Section</b></h4>
            <div class="container px-3 pt-2">
                <div class="separator card-title" id="separatorfont"></div>
                <div class="pt-3 pb-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ url('save-comment/post-') . $post->id }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Write a comment here..." id="body"
                                name="body"></textarea>
                        </div>
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <!-- Button trigger modal -->
                        <button type="button" class="btn" id="btnpost" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Comment
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure want to publish it?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn" id="btnpost">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div style="clear: both;"></div>

                </div>
                @foreach($comments as $comment)
                    <div class="container py-3">
                        <h5 class="comment-username"><b>{{ $comment->user->username }}</b></h5>
                        <h5 class="comment">{{ $comment->body }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
