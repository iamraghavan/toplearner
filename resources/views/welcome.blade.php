@extends('layouts.app')

@section('content')
<div class="container mt-5">

    @auth
        <h1>Welcome, {{ Auth::user()->name }}</h1>

        <nav class="mt-4">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>

                @if(Auth::user()->role->name == 'student')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.dashboard', ['hash' => Crypt::encryptString(Auth::id())]) }}">Student Dashboard</a>
                    </li>
                @elseif(Auth::user()->role->name == 'institution-admin')
                    <li class="nav-item">
                        <a class="nav-link" href="#">Institution Dashboard</a>
                    </li>
                @endif

                <li class="nav-item ms-3">
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>

        <div class="mt-5">
            <p>You are logged in as <strong>{{ Auth::user()->role->name }}</strong></p>
        </div>

    @else
        <h1>Welcome to TopLearner!</h1>
        <p class="mt-3">Please login or register to access your dashboard and courses.</p>

        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
        </div>
    @endauth

</div>
@endsection
