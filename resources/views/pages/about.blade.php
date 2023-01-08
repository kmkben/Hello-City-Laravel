@extends('layouts.app', ['title' => 'About Us'])

@section('content')

    <img src="{{ asset('images/kmkit-logo.jpg') }}" alt="Kmk Logo" class="my-12 rounded-full shadow-md "/>

    <h2 class="text-gray-700 mb-5">Built with <span class="text-pink-500">&hearts;</span> by Kmk</h2>

    <p class="">
        <a href="{{ route('app_home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Go back </a>
    </p>

@endsection
