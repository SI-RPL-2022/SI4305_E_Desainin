@extends('layouts.main')

@section('content')
    <div class="container pt-5 pb-5">
        <div class="form">
            <h2 class="pb-3" id="title"><b>Create New Portfolio</b></h2>
            <div class="mb-3">
                <label for="name" class="form-label">Portfolio Title</label><br>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label><br>
                <textarea class="form-control" id="desc"></textarea>
            </div>
            <div class="mb-3">
                <label for="upload" class="form-label">Upload Your Portfolio</label><br>
                <input type="file" class="form-control" id="upload">
            </div>
            <button type="submit" class="btn" id="btnpost">Submit</button>
        </div>
        <div style="clear: both;"></div>
    </div>
@endsection
