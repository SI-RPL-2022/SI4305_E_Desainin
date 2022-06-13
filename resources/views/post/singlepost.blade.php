@extends('layouts.main')
@section('content')
    <div class="container pt-5 pb-5">
        <div class="card mb-4">
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><b>{{ $post->title }}</b></h5>
                <h5 class="card-text text-muted">by <a
                        href="/{{ $post->user->username }}">{{ $post->user->fullname }}</a> |
                    {{ $post->created_at->diffForHumans() }}</h5>
                <h5 class="card-text pt-3">{{ $post->body }}</h5>
            </div>
        </div>

        <div class="card">
            <h4 class="card-title ps-4 pt-4"><b>Comment Section</b></h4>
            <div class="container px-3 pt-2">
                <div class="separator card-title" id="separatorfont"></div>
                <div class="pt-3 pb-5">
                    <form action="">
                        <div class="mb-3">
                            <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Write a comment here..." id="body"
                                name="comment"></textarea>
                        </div>
                        {{-- @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror --}}
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
                <div class="container py-3">
                    <h5 class="comment-username"><b>Username</b></h5>
                    <h5 class="comment">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ullam
                        reiciendis quod aliquid ab perspiciatis maxime vero fugiat laudantium vitae provident, obcaecati
                        commodi accusamus recusandae soluta. Distinctio, veritatis temporibus! Perspiciatis assumenda quod
                        tenetur, iste corporis recusandae eveniet cupiditate voluptatibus impedit odit quas, sint sunt
                        necessitatibus voluptatem esse rerum aliquam iure nulla atque quos quisquam exercitationem? Et in
                        doloremque aut aliquid officia id excepturi temporibus, voluptatem accusantium eum, enim nostrum,
                        tempora eaque perspiciatis? Adipisci similique dolor maxime consequatur rem tempore impedit quidem
                        officia laboriosam, consectetur culpa amet sit sunt est harum nulla? Quaerat unde et ducimus!
                        Nesciunt quaerat sequi excepturi sint.</h5>
                </div>
                <div class="container py-3">
                    <h5 class="comment-username"><b>Username</b></h5>
                    <h5 class="comment">Komentar panjang ini adalah sebuah penilaian yang ditujukan untuk portfolio
                        seorang desainer.</h5>
                </div>
                <div class="container py-3">
                    <h5 class="comment-username"><b>Username</b></h5>
                    <h5 class="comment">Komentar panjang ini adalah sebuah penilaian yang ditujukan untuk portfolio
                        seorang desainer.</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
