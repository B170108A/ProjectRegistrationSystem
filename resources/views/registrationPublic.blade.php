@extends('layouts.public')

@section('title', 'Public Registration')

@section('content')
<div class="form-container">
    <div class="form-header">
        <h1>Public Registration</h1>
    </div>
    <form method="POST" action="{{ route('registrationPublic.store') }}">
        @csrf
        <div class="form-control">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-control">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-control">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="form-control">
            <label for="employee_number">Employee Number:</label>
            <input type="text" id="employee_number" name="employee_number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>
@endsection
