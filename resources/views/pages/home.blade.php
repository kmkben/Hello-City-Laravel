@extends('app')

@section('content')

    <img src="/images/flag-fr.jpg" alt="France flag"/>

    <h1>Hello form Paris!</h1>

    <p>It's currently {{ date('h:i A') }} in Paris</p>

@endsection
