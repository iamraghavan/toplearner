@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <h2>{{ $user->role->name }} Dashboard</h2>

    <p>Hello, {{ $user->name }}!</p>

    <p>Your license number: <strong>{{ $user->license_no ?? 'N/A' }}</strong></p>

    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Back to Home</a>
</div>
@endsection
