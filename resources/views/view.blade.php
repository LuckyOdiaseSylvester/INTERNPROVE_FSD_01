@extends('layouts.user')
@section('content')
    <!-- Employee Details -->
    <div class="container mt-5">
        <h2>Employee Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $employee->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
                <p class="card-text"><strong>Position:</strong> {{ $employee->position }}</p>
            
            </div>
        </div>
    </div>
    @endsection

