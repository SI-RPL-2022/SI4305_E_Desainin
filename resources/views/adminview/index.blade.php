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
        <h2 id="title">Welcome back, Admin!</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user['fullname'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['phonenumber'] }}</td>
                        <td>text</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
