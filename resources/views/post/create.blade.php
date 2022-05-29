@extends('layouts.main')
@section('content')
    <div class="container pt-5 pb-5">
        <form method="post" action="/post">
            @csrf
            <h2 class="pb-3" id="title"><b>Create New Portfolio</b></h2>
            <div class="mb-3">
                <label for="title" class="form-label" id="formlabel">Portfolio Title</label><br>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Write your title here..." name="title" value={{ old('title') }}>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label" id="formlabel">Description</label><br>
                <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Write your description here..." id="body" name="body" value={{ old('body') }}></textarea>
                @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="upload" class="form-label" id="formlabel">Upload Your Portfolio</label><br>
                <input type="file" class="form-control" id="upload">
            </div>
            <button type="submit" class="btn" id="btnpost">Submit</button>
        </form>
        <div style="clear: both;"></div>
    </div>
@endsection
