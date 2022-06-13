@extends('layouts.main')
@section('content')
    <div class="container py-5">
        <form action="" method="">
            <div class="mb-3 text-center">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/3b54f7e2-9747-4e47-99cb-3bc0afc2f08f/d78urpk-eafb653e-8ed7-4683-9237-12069194f168.png/v1/fill/w_512,h_512,strp/one_piece_circle_icon_by_knives_by_knives1024_d78urpk-fullview.png"
                    height="200" width="200">
            </div>

            <div class="mb-3">
                <label for="fullname" class="form-label" id="formlabel">Fullname</label>
                <input type="text" class="form-control" id="regloginfont" name="fullname" value="{{ auth()->user()->fullname }}">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label" id="formlabel">Username</label>
                <input type="text" class="form-control" id="regloginfont" name="username" value="{{ auth()->user()->username }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" id="formlabel">Email</label>
                <input type="text" class="form-control" id="regloginfont" name="email" value="{{ auth()->user()->email }}">
            </div>
            <div class="mb-3">
                <label for="phonenumber" class="form-label" id="formlabel">Phone Number</label>
                <input type="tel" class="form-control" id="regloginfont" name="phonenumber" id="regloginfont"
                    value="{{ auth()->user()->phonenumber }}">
            </div>
            <div class="mb-3">
                <label for="pw" class="form-label" id="formlabel">New Password</label>
                <input type="password" class="form-control" name="password" id="regloginfont" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="pw" class="form-label" id="formlabel">Confirm New Password</label>
                <input type="password" class="form-control" name="password-confirmation" id="regloginfont" placeholder="New Password">
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
