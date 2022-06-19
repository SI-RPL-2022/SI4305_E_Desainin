@extends('adminview.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 id="title">{{ $title }}</h2>
    </div>
    @if (session()->has('deleted'))
        <div class="container pt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('deleted') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <a href="/"></a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user['fullname'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['phonenumber'] }}</td>
                        {{-- <td>
                            <form action="/dashboard/{{ $user }}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <button class="btn-danger" id="remove-btn"
                                    onclick="return confirm('Are you sure want to delete this user?')">Remove</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
