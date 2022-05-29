@extends('layouts.main')
@section('content')
    <div class="container pt-5 pb-5">
        @foreach ($posts as $post)
            @if ($posts->count())
                <h2 id="title"><b>
                        <center>{{ $post->user->username }}'s Portfolio</center>
                    </b></h2>
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 pt-1">

                    @include('post.partial.loopcardpost')

                </div>
            @endif
        @endforeach
    </div>
@endsection
