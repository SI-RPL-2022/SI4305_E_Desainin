@extends('adminview.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 id="title">{{ $title }}</h2>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="/announcer" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form">
            <input type="hidden" name="id">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label><br>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value={{ old('title') }}>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label><br>
                <textarea class="form-control @error('description') is-invalid @enderror" id="desc" name="description"
                    value={{ old('description') }}></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="upload" class="form-label">Upload Announcement <span class="d-inline-block" tabindex="0"
                        data-bs-toggle="popover" data-bs-trigger="hover focus"
                        data-bs-content="Make sure the aspect ratio of the image that you want to upload is 2.39 (DCI Scope). You can go to https://www.unravel.com.au/aspect-ratio-cheat-sheet to check the resolution. Other resolutions are not recommended.">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                    </span></label><br>
                <input type="file" class="form-control @error('banner_image') is-invalid @enderror" id="upload"
                    name="banner_image">
                @error('banner_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn" id="btnpost">Announce</button>
        </div>
        <div style="clear: both;"></div>
    </form>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
@endsection
