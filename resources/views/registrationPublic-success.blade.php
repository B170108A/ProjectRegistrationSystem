@extends('layouts.public')

@section('title', 'Registration Successful')

@section('content')
<div class="form-container">
    <div class="form-header">
        <h1>Registration Successful!</h1>
    </div>
    <p>Your Lucky Draw Number is:</p>
    <h2 class="text-center text-success">{{ $luckyDrawNumber }}</h2>
    <a href="{{ route('registrationPublic.form') }}" class="btn btn-primary btn-block">Register Another</a>
</div>
@endsection
