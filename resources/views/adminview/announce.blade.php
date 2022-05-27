@extends('adminview.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 id="title">{{ $title }}</h2>
    </div>

    <div class="form">
        <div class="mb-3">
            <label for="name" class="form-label">Title</label><br>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label><br>
            <textarea class="form-control" id="desc"></textarea>
        </div>
        <div class="mb-3">
            <label for="upload" class="form-label">Upload Announcement (720p width)</label><br>
            <input type="file" class="form-control" id="upload">
        </div>
        <button type="submit" class="btn" id="btnpost">Announce</button>
    </div>
    <div style="clear: both;"></div>
@endsection
