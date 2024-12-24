@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Role</h1>
    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="form-group">
            <label for="role">Role Name</label>
            <input type="text" id="role" name="role" class="form-control" required>
            @error('role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Role</button>
    </form>
</div>
@endsection
