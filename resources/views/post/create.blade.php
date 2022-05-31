@extends('layouts.main')
@section('content')
    <div class="container pt-5 pb-5">
        <form method="post" action="/post" enctype="multipart/form-data">
            @csrf
            <h2 class="pb-3" id="title"><b>Create New Portfolio</b></h2>
            <div class="mb-3">
                <label for="title" class="form-label" id="formlabel">Portfolio Title</label><br>
                <input type="text" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Write your title here..." name="title" autofocus value={{ old('title') }}>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label" id="formlabel">Description</label><br>
                <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Write your description here..." id="body"
                    name="body" value={{ old('body') }}></textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="upload" class="form-label" id="formlabel">Upload Image</label><br>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="upload" name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn" id="btnpost" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Post
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure want to publish it?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn" id="btnpost">Post</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <div style="clear: both;"></div>
    </div>
@endsection
