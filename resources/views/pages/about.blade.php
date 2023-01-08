@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')

    <img src="/images/kmkit-logo.jpg" alt="Kmk Logo" />

    <h1>Built with &hearts; by Kmk</h1>

    <p><a href="{{ route('app_home') }}">Go back </a></p>

@endsection
