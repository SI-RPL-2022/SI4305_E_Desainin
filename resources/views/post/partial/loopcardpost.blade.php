<div class="col">
    <div class="card h-100">
        <img src="{{ asset('storage/' . $post->image) }}"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>{{ $post->title }}</b></h5>
            <h5 class="card-text text-muted">by <a
                    href="/{{ $post->user->username }}">{{ $post->user->fullname }}</a> |
                {{ $post->created_at->diffForHumans() }}</h5>
            <h5 class="card-text">{{ $post->body }}</h5>
        </div>
    </div>
</div>