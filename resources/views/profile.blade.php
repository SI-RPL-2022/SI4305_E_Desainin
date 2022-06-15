@extends('layouts.main')
@section('content')
    <div class="container py-5">
        <form action="/profile" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
            {{-- <div class="mb-3 text-center">
                @if (auth()->user()->avatar->isEmpty())
                <img src="img/blank-avatar.png"
                    height="200" width="200">
                @else

                @endif
            </div> --}}

            <div class="mb-4 text-center">
                <img src="{{ asset('storage/' . $avatar) }}" height="200" width="200">
            </div>
            <div class="py-4">
                <div class="row">
                    <div class="col-2">
                        <label for="upload" class="form-label" id="formlabel">Upload Avatar</label>
                    </div>
                    <div class="col-10">
                        <input type="file" class="form-control" id="profile-font" name="avatar">
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="row">
                    <div class="col-2">
                        <label for="fullname" class="form-label" id="formlabel">Fullname</label>
                    </div>
                    <div class="col-10">
                        <h5 id="profile-font">{{ auth()->user()->fullname }}</h5>
                    </div>
                </div>
            </div>
            <div class="py-4">
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
            <div class="py-4">
                <div class="row">
                    <div class="col-2">
                        <label for="email" class="form-label" id="formlabel">Email</label>
                    </div>
                    <div class="col-10">
                        <h5 id="profile-font">{{ auth()->user()->email }}</h5>
                    </div>
                </div>
            </div>
            <div class="py-4">
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
            <div class="py-4">
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
            <div class="py-4">
                <div class="row">
                    <div class="col-2">
                        <label for="pw" class="form-label" id="formlabel">Confirm New Password</label>
                    </div>
                    <div class="col-10">
                        <input type="password" class="form-control" name="password-confirmation" id="profile-font"
                            placeholder="New Password">
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn" id="btnpost" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit
            </button>

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
                            <button type="submit" class="btn" id="btnpost">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
