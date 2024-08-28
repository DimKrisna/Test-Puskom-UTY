@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Welcome Back</h2>
                    <p class="text-center">Sign in with your email and password</p>

                    <form method="POST" action="#">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="sr-only">Password</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                        <div class="form-group text-center">
                            <span>or</span>
                        </div>

                        <div class="form-group text-center">
                           <a>Don't have an account? </a> <a href="{{ route('register') }}"><strong>Sign Up</strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
