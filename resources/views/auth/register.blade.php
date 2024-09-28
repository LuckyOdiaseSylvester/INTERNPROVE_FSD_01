@extends('layouts.user')
@section('content')
    <div class="container register-container">
        <div class="register-box">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Register</button>
                </div>
                <div class="text-center mt-3">
                    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
    @endsection

