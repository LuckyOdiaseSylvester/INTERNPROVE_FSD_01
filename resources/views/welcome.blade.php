@extends('layouts.user')
@section('content')
  <section class="hero-section">
    <div class="container">
      <h1>Employee Management System</h1>
      <p class="lead mt-4">Manage your employee records securely and easily.</p>
      <a href="{{ route('home') }}" class="btn btn-primary btn-lg mt-3">Go to Dashboard</a>
    </div>
  </section>
  @endsection

