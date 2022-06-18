@extends('layouts.main')
@section('content')
    <div class="container py-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2 class="pb-3" id="title"><b>
                <center>Profile <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                        data-bs-trigger="hover focus"
                        data-bs-content="If you want to change your username or phone number, make sure to fill your password/new password in the input field.">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                    </span></center>
            </b></h2>
        <form action="{{ route('update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
            <div class="py-3">
                <div class="row">
                    <div class="col-2">
                        <label for="fullname" class="form-label" id="formlabel">Fullname</label>
                    </div>
                    <div class="col-10">
                        <h5 id="profile-font">{{ auth()->user()->fullname }}</h5>
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row">
                    <div class="col-2">
                        <label for="username" class="form-label" id="formlabel">Username</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="username" id="profile-font"
                            value="{{ auth()->user()->username }}">
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row">
                    <div class="col-2">
                        <label for="email" class="form-label" id="formlabel">Email</label>
                    </div>
                    <div class="col-10">
                        <h5 id="profile-font">{{ auth()->user()->email }}</h5>
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row">
                    <div class="col-2">
                        <label for="phonenumber" class="form-label" id="formlabel">Phone Number</label>
                    </div>
                    <div class="col-10">
                        <input type="tel" class="form-control" name="phonenumber" id="profile-font"
                            value="{{ auth()->user()->phonenumber }}">
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row">
                    <div class="col-2">
                        <label for="password" class="form-label" id="formlabel">New Password</label>
                    </div>
                    <div class="col-10">
                        <input type="password" class="form-control" name="password" id="profile-font"
                            placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row">
                    <div class="col-2">
                        <label for="password" class="form-label" id="formlabel">Confirm New Password</label>
                    </div>
                    <div class="col-10">
                        <input type="password" class="form-control" name="password_confirmation" id="profile-font"
                            placeholder="New Password">
                    </div>
                </div>
            </div>

            <div class="pt-3 pb-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn" id="btnpost" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Edit Profile
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Save changes?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn" id="btnpost" name="save">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
@endsection
