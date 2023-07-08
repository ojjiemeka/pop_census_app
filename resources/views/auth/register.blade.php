@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="login-screen row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-container">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="login-box">
                                    <a href="#" class="login-logo">
                                        <img src="img/unify.png" alt="Unify Admin Dashboard" />
                                    </a>

                                    <div class="input-group mb-3">
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="input-group-addon" id="fullname"><i
                                                class="icon-account_circle"></i></span>
                                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
                                    </div>


                                    <div class="input-group mb-3">
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="input-group-addon" id="fullname"><i
                                                class="icon-account_circle"></i></span>
                                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="input-group-addon" id="email"><i
                                                class="icon-account_circle"></i></span>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="input-group-addon" id="password"><i
                                                class="icon-verified_user"></i></span>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon" id="password"><i
                                                class="icon-verified_user"></i></span>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder=" Confirm Password" required>
                                    </div>
                                    <div class="actions clearfix">
                                        <button type="submit" class="btn btn-primary">Signup</button>
                                    </div>
                                    <div class="or"></div>
                                    <div class="mt-4">
                                        <a href="login.html" class="additional-link">Already have an Account? <span>Login
                                                Now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                                <div class="signup-slider"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="main-footer no-bdr fixed-btm">
        <div class="container">
            Copyright Unify Admin 2017.
        </div>
    </footer>
@endsection
