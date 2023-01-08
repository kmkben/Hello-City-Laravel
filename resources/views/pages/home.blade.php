@extends('layouts.app')

@section('content')

    <img src="{{ asset('images/flag-fr.jpg') }}" alt="France flag" class="mt-12 rounded shadow-md h-15"/>

    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello form Paris!</h1>

    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }} in Paris</p>

@endsection
