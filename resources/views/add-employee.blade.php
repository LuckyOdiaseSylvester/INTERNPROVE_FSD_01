@extends('layouts.user')
@section('content')
    <!-- Employee Create Form -->
    <div class="container mt-5">
        <h2>Add New Employee</h2>
        <form action="{{route("add")}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name"   id="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position"  id="position" placeholder="Enter position" required>
            </div>
            <button type="submit" class="btn btn-dark">Add</button>
        </form>
    </div>
    @endsection
