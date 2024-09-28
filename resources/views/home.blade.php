@extends('layouts.user')
@section('content')
    <!-- Employee Table -->
    <div class="container mt-5">
        <h2>Employee Records</h2>
        <a href="{{ route('add-employee')}}" class="btn btn-dark mb-3">Add New Employee</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
              @foreach ($employees as $employees)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $employees->name }}</td>
                    <td>{{ $employees->email }}</td>
                    <td>{{ $employees->position }}</td>
                    <td>
                        <a href="{{route('edit-employee',$employees->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('delete',$employees->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        <a href="{{route('view',$employees->id)}}" class="btn btn-success btn-sm">View</a>

                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    @endsection














{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar {
      margin-bottom: 40px;
    }
    .dashboard-heading {
      text-align: center;
      margin-bottom: 40px;
    }
    .table-responsive {
      margin-top: 30px;
    }
    .btn-actions {
      display: flex;
      gap: 10px;
    }
    .footer {
      background-color: #343a40;
      color: white;
      padding: 30px 0;
      text-align: center;
      position: absolute;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Employee Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/add-employee.html">Add Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Dashboard Content -->
  <div class="container">
    <h1 class="dashboard-heading">Employee Management</h1>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>johndoe@example.com</td>
            <td>Manager</td>
            <td>$5,000</td>
            <td class="btn-actions">
              <a href="#" class="btn btn-warning">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <!-- Repeat rows for employees -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 Employee Management System. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
