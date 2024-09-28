@extends('layouts.user')
@section('content')
    <!-- Edit Employee Form -->
    <div class="container mt-5">
        <h2>Edit Employee</h2>
        <form action="{{route('update',$employee->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $employee->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ $employee->email }}" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" value="{{ $employee->position }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    @endsection

