@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                <h2 class="text-center mt-5">Create Account</h2>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="fullname">Fullname</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 w-100">Sign Up</button>
                </form>
                <p class="text-center mt-3">
                    Already have an account? <a href="{{ route('sign-in') }}">Sign In</a>
                </p>
            </div>
        </div>
    </div>

