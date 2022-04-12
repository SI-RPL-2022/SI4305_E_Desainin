@extends('adminview.layouts.main')

@section('container')
    @if (session()->has('admin'))
        <div class="container pt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('admin') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 id="title">{{ $title }}</h2>
    </div>
@endsection
